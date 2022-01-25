<?php
/**
 * EGroupware - Wizard for User CSV export
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package admin
 * @subpackage importexport
 * @link http://www.egroupware.org
 * @author Nathan Gray
 * @version $Id$
 */

use EGroupware\Api;

class admin_wizard_export_users_csv extends importexport_wizard_basic_export_csv
{
	public function __construct() {
		parent::__construct();

		// Field mapping
                $this->export_fields = array(
			'account_id'		=> lang('Account ID'),
                        'account_lid'		=> lang('LoginID'),
                        'account_firstname'	=> lang('First Name'),
                        'account_lastname'	=> lang('Last Name'),
                        'account_email'		=> lang('email'),
                        'account_pwd'		=> lang('Password'),
                        'account_status'	=> lang('Status'),
                        'account_primary_group'	=> lang('Primary Group'),
                        'account_groups'	=> lang('Groups'),
                        'account_expires'	=> lang('Expires'),
                        'account_lastlogin'	=> lang('Last login'),
                        'account_lastpwd_change'=> lang('Last password change'),
                );

		// Custom fields - not really used in admin...
		unset($this->export_fields['customfields']);
		$custom = Api\Storage\Customfields::get('admin', true);
		foreach($custom as $name => $data) {
			$this->export_fields['#'.$name] = $data['label'];
		}
	}
}
