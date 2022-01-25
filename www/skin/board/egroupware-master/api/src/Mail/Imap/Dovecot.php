<?php
/**
 * EGroupware Api: Support for Dovecot IMAP
 *
 * @link http://www.stylite.de
 * @package api
 * @subpackage mail
 * @author Ralf Becker <rb@stylite.de>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id$
 */

namespace EGroupware\Api\Mail\Imap;

use EGroupware\Api;
use EGroupware\Api\Mail;

/**
 * Manages connection to Dovecot IMAP server
 *
 * Basic differences to cyrusimap:
 * - no real admin user, but master user, whos password can be used to connect instead of real user
 * - mailboxes have to be deleted in filesystem (no IMAP command for that)
 *   --> require by webserver writable user_home to be configured, otherwise deleting get ignored like with defaultimap
 * - quota can be read, but not set
 */
class Dovecot extends Mail\Imap
{
	/**
	 * Label shown in EMailAdmin
	 */
	const DESCRIPTION = 'Dovecot';
	/**
	 * Capabilities of this class (pipe-separated): default, sieve, admin, logintypeemail
	 */
	const CAPABILITIES = 'default|sieve|timedsieve|admin|logintypeemail';

	/**
	 * prefix for groupnames, when using groups in ACL Management
	 */
	const ACL_GROUP_PREFIX = '$';

	// mailbox delimiter
	var $mailboxDelimiter = '.';

	// mailbox prefix
	var $mailboxPrefix = '';

	/**
	 * To enable deleting of a mailbox user_home has to be set and be writable by webserver
	 *
	 * Supported placeholders are:
	 * - %d domain
	 * - %u username part of email
	 * - %s email address
	 *
	 * @var string
	 */
	var $user_home;	// = '/var/dovecot/imap/%d/%u';

	/**
	 * Ensure we use an admin connection
	 *
	 * Prefixes adminUsername with real username (separated by an asterisk)
	 *
	 * @param string $_username =true create an admin connection for given user or $this->acc_imap_username
	 */
	function adminConnection($_username=true)
	{
		// generate admin user name of $username
		if (($pos = strpos($this->acc_imap_admin_username, '*')) !== false)	// remove evtl. set username
		{
			$this->params['acc_imap_admin_username'] = substr($this->acc_imap_admin_username, $pos+1);
		}
		$this->params['acc_imap_admin_username'] = (is_string($_username) ? $_username : $this->acc_imap_username).
			'*'.$this->acc_imap_admin_username;

		parent::adminConnection($_username);
	}

	/**
	 * Create mailbox string from given mailbox-name and user-name
	 *
	 * Admin connection in Dovecot is always for a given user, we can simply use INBOX here.
	 *
	 * @param string $_username
	 * @param string $_folderName =''
	 * @return string utf-7 encoded (done in getMailboxName)
	 */
	function getUserMailboxString($_username, $_folderName='')
	{
		unset($_username);	// not used, but required by function signature

		$mailboxString = 'INBOX';

		if (!empty($_folderName))
		{
			$nameSpaces = $this->getNameSpaceArray();
			$mailboxString .= $nameSpaces['others'][0]['delimiter'] . $_folderName;
		}
		return $mailboxString;
	}

	/**
	 * Updates an account
	 *
	 * @param array $_hookValues only value for key 'account_lid' and 'new_passwd' is used
	 */
	function addAccount($_hookValues)
	{
		return $this->updateAccount($_hookValues);
	}

	/**
	 * Delete an account
	 *
	 * @param array $_hookValues only value for key 'account_lid' is used
	 */
	function deleteAccount($_hookValues)
	{
		// some precausion to really delete just _one_ account
		if (strpos($_hookValues['account_lid'],'%') !== false ||
			strpos($_hookValues['account_lid'],'*') !== false)
		{
			return false;
		}
		return !!$this->deleteUsers($_hookValues['account_lid']);
	}

	/**
	 * Delete multiple (user-)mailboxes via a wildcard, eg. '%' for whole domain
	 *
	 * Domain is the configured domain and it uses the Cyrus admin user
	 *
	 * @return string $username='%' username containing wildcards, default '%' for all users of a domain
	 * @return int|boolean number of deleted mailboxes on success or false on error
	 */
	function deleteUsers($username='%')
	{
		if(!$this->acc_imap_administration || empty($username))
		{
			return false;
		}

		// dovecot can not delete mailbox, they need to be physically deleted in filesystem (webserver needs write-rights to do so!)
		if (empty($this->user_home))
		{
			return false;
		}
		$replace = array('%d' => $this->domainName, '%u' => $username, '%s' => $username.'@'.$this->domainName);

		if ($username == '%')
		{
			if (($pos = strpos($this->user_home, '%d')) === false)
			{
				throw new Api\Exception\AssertionFailed("user_home='$this->user_home' contains no domain-part '%d'!");
			}
			$home = strtr(substr($this->user_home, 0, $pos+2), $replace);

			$ret = count(scandir($home))-2;
		}
		else
		{
			$home = strtr($this->user_home, $replace);

			$ret = 1;
		}
		if (!is_writable(dirname($home)) || !self::_rm_recursive($home))
		{
			error_log(__METHOD__."('$username') Failed to delete $home!");
			return false;
		}
		return $ret;
	}

	/**
	 * Recursively delete a directory (or file)
	 *
	 * @param string $path
	 * @return boolean true on success, false on failure
	 */
	private function _rm_recursive($path)
	{
		if (is_dir($path))
		{
			foreach(scandir($path) as $file)
			{
				if ($file == '.' || $file == '..') continue;

				if (is_dir($path))
				{
					self::_rm_recursive($path.'/'.$file);
				}
				elseif (!unlink($path.'/'.$file))
				{
					return false;
				}
			}
			if (!rmdir($path))
			{
				return false;
			}
		}
		elseif(!unlink($path))
		{
			return false;
		}
		return true;
	}

	/**
	 * returns information about a user
	 * currently only supported information is the current quota
	 *
	 * @param string $_username
	 * @return array userdata
	 */
	function getUserData($_username)
	{
		if (isset($this->username)) $bufferUsername = $this->username;
		if (isset($this->loginName)) $bufferLoginName = $this->loginName;
		$this->username = $this->loginName = $_username;

		// now disconnect to be able to reestablish the connection with the targetUser while we go on
		try
		{
			$this->adminConnection();
		}
		catch (\Exception $e)
		{
			// error_log(__METHOD__.__LINE__." Could not establish admin Connection!".$e->getMessage());
			unset($e);
			return array();
		}

		$userData = array();
		// we are authenticated with master but for current user
		if(($quota = $this->getStorageQuotaRoot('INBOX')))
		{
			$userData['quotaLimit'] = (int) ($quota['QMAX'] / 1024);
			$userData['quotaUsed'] = (int) ($quota['USED'] / 1024);
		}
		$this->username = $bufferUsername;
		$this->loginName = $bufferLoginName;
		$this->disconnect();

		//error_log(__METHOD__."('$_username') getStorageQuotaRoot('INBOX')=".array2string($quota).' returning '.array2string($userData));
		return $userData;
	}

	/**
	 * Set information about a user
	 * currently only supported information is the current quota
	 *
	 * Dovecot get's quota from it's user-db, but cant set it --> ignored
	 *
	 * @param string $_username
	 * @param int $_quota
	 * @return boolean
	 */
	function setUserData($_username, $_quota)
	{
		unset($_username); unset($_quota);	// not used, but required by function signature

		return true;
	}

	/**
	 * Updates an account
	 *
	 * @param array $_hookValues only value for key 'account_lid' and 'new_passwd' is used
	 */
	function updateAccount($_hookValues)
	{
		unset($_hookValues);	// not used, but required by function signature

		if(!$this->acc_imap_administration)
		{
			return false;
		}
		// mailbox get's automatic created with full rights for user
		return true;
	}

}
