<?php
/**
 * EGgroupware admin - site configuration
 *
 * @link http://www.egroupware.org
 * @author Miles Lott <milos@groupwhere.org>
 * @package admin
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id$
 */

use EGroupware\Api;
use EGroupware\Api\Framework;
use EGroupware\Api\Egw;

/**
 * Site configuration for all apps using an $app/templates/default/config.tpl
 */
class uiconfig
{
	var $public_functions = array('index' => True);

	function index($params=null)
	{
		// if we have a xet file, run new et2 config
		if (file_exists(EGW_SERVER_ROOT.'/'.$_GET['appname'].'/templates/default/config.xet'))
		{
			$new_config = new admin_config();
			return $new_config->index();
		}
		// allowing inline js
		Api\Header\ContentSecurityPolicy::add('script-src', 'unsafe-inline');

		// for POST requests validate CSRF token (or terminate request)
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			Api\Csrf::validate($_POST['csrf_token'], __CLASS__);
		}

		if (empty($_GET['appname']) && isset($params['appname']))
		{
			$_appname = $params['appname'];
		}
		else
		{
			//_debug_array($params);
			$_appname = $_GET['appname'];
		}
		if ($GLOBALS['egw']->acl->check('site_config_acce',1,'admin'))
		{
			Egw::redirect_link('/index.php');
		}

		// load the translations of the app we show too, so they dont need to be in admin!
		if ($_appname != 'admin')
		{
			Api\Translation::add_app($_appname);
		}

		if(get_magic_quotes_gpc() && is_array($_POST['newsettings']))
		{
			$_POST['newsettings'] = array_stripslashes($_POST['newsettings']);
		}

		switch($_appname)
		{
			case 'admin':
			case 'addressbook':
			case 'calendar':
			case 'preferences':
				/*
				Other special apps can go here for now, e.g.:
				case 'bogusappname':
				*/
				$appname = $_appname;
				$config_appname = 'phpgwapi';
				break;
			case 'phpgwapi':
			case '':
				/* This keeps the admin from getting into what is a setup-only Api\Config */
				Egw::redirect_link('/admin/index.php');
				break;
			default:
				$appname = $_appname;
				$config_appname = $appname;
				break;
		}
		if (ob_get_contents()) ob_end_flush(); // if there is output in buffer, flush it now.
		$t = new Framework\Template(Framework\Template::get_dir($appname));
		$t->set_unknowns('keep');
		$t->set_file(array('config' => 'config.tpl'));
		$t->set_block('config','header','header');

		// fix header templates missing essential parts like display of validation errors
		$header = $t->get_var('header');
		if (strpos($header, '{hidden_vars}') === false)
		{
			if (strpos($header, '<table'))
			{
				list($header, $table) = explode('<table', $header);
				$header .= "{hidden_vars}\n<table".$table;
			}
			else
			{
				$header .= "{hidden_vars}\n";
			}
		}
		$t->set_var('header', $header);

		$t->set_block('config','body','body');
		$t->set_block('config','footer','footer');

		// fix footer submit buttons to just {submit} {cancel}
		$t->set_var('footer', preg_replace('/<input[^>]+value="{lang_(submit|cancel)}"[^>]*>/', '{$1}', $t->get_var('footer')));

		$c = new Api\Config($config_appname);
		$c->read_repository();
		if ($_POST['cancel'] || ($_POST['submit'] || $_POST['save'] || $_POST['apply']) && $GLOBALS['egw']->acl->check('site_config_acce',2,'admin'))
		{
			Egw::redirect_link('/admin/index.php?ajax=true');
		}

		if ($_POST['submit'] || $_POST['save'] || $_POST['apply'])
		{
			/* Load hook file with functions to validate each Api\Config (one/none/all) */
			Api\Hooks::single('config_validate',$appname);

			foreach($_POST['newsettings'] as $key => $config)
			{
				if ($config)
				{
					$c->config_data[$key] = $config;
					if (in_array($key, (array)$GLOBALS['egw_info']['server']['found_validation_hook'], true) && function_exists($key))
					{
						call_user_func($key, $config, $c);
						if($GLOBALS['config_error'])
						{
							$errors .= lang($GLOBALS['config_error']) . "\n";
							$GLOBALS['config_error'] = False;
						}
					}
				}
				/* don't erase passwords, since we also don't print them */
				elseif(strpos($key,'passwd') === false && strpos($key,'password') === false && strpos($key,'root_pw') === false)
				{
					unset($c->config_data[$key]);
				}
			}
			if(in_array('final_validation', (array)$GLOBALS['egw_info']['server']['found_validation_hook']) &&
				function_exists('final_validation'))
			{
				final_validation($_POST['newsettings']);
				if($GLOBALS['config_error'])
				{
					$errors .= lang($GLOBALS['config_error']) . "\n";
					$GLOBALS['config_error'] = False;
				}
				unset($GLOBALS['egw_info']['server']['found_validation_hook']);
			}

			$c->save_repository();

			if(!$errors && !$_POST['apply'])
			{
				Framework::message(lang('Configuration saved.'), 'success');
				Egw::redirect_link('/index.php', array(
					'menuaction' => 'admin.admin_ui.index',
					'ajax' => 'true'
				), 'admin');
			}
		}

		$t->set_var('error','');
		if($errors)
		{
			Framework::message(lang('Error') . ': ' . $errors, 'error');
			unset($errors);
			unset($GLOBALS['config_error']);
		}
		elseif ($_POST['apply'])
		{
			Framework::message(lang('Configuration saved.'), 'success');
		}
		$t->set_var('title',lang('Site Configuration'));
		$t->set_var('action_url',$GLOBALS['egw']->link('/index.php','menuaction=admin.uiconfig.index&appname=' . $appname));
		$t->set_var('th_bg',     $GLOBALS['egw_info']['theme']['th_bg']);
		$t->set_var('th_text',   $GLOBALS['egw_info']['theme']['th_text']);
		$t->set_var('row_on',    $GLOBALS['egw_info']['theme']['row_on']);
		$t->set_var('row_off',   $GLOBALS['egw_info']['theme']['row_off']);
		$t->set_var('hidden_vars', Api\Html::input_hidden('csrf_token', Api\Csrf::token(__CLASS__)));

		$vars = $t->get_undefined('body');

		if (Api\Hooks::single('config',$appname))	// reload the config-values, they might have changed
		{
			$c->read_repository();
		}
		foreach($vars as $value)
		{
			$valarray = explode('_',$value);
			$type = array_shift($valarray);
			$newval = implode(' ',$valarray);

			switch ($type)
			{
				case 'lang':
					$t->set_var($value,lang($newval));
					break;
				case 'value':
					$newval = str_replace(' ','_',$newval);
					/* Don't show passwords in the form */
					if(strpos($value,'passwd') !== false || strpos($value,'password') !== false || strpos($value,'root_pw') !== false)
					{
						$t->set_var($value,'');
					}
					else
					{
						$t->set_var($value,$c->config_data[$newval]);
					}
					break;
				/*
				case 'checked':
					$newval = str_replace(' ','_',$newval);
					if ($c->config_data[$newval])
					{
						$t->set_var($value,' checked');
					}
					else
					{
						$t->set_var($value,'');
					}
					break;
				*/
				case 'selected':
					$configs = array();
					$newvals = explode(' ',$newval);
					$setting = end($newvals);
					for ($i=0;$i<(count($newvals) - 1); $i++)
					{
						$configs[] = $newvals[$i];
					}
					$config = implode('_',$configs);
					/* echo $config . '=' . $c->config_data[$config]; */
					if ($c->config_data[$config] == $setting)
					{
						$t->set_var($value,' selected');
					}
					else
					{
						$t->set_var($value,'');
					}
					break;
				case 'hook':
					$newval = str_replace(' ','_',$newval);
					if(function_exists($newval))
					{
						$t->set_var($value,$newval($c->config_data));
					}
					else
					{
						$t->set_var($value,'');
					}
					break;
				case 'call':	// eg. call_class::method or call_app.class.method
					$newval = str_replace(' ','_',$newval);
					$t->set_var($value,ExecMethod($newval,$c->config_data));
					break;
				default:
					$t->set_var($value,'');
					break;
			}
		}
		$t->set_var('submit', '<div class="dialogFooterToolbar" style="text-align: left">'.
			($GLOBALS['egw']->acl->check('site_config_acce',2,'admin') ? '' :
				Api\Html::submit_button('save', 'Save')."\n".
				Api\Html::submit_button('apply', 'Apply')));
		$t->set_var('cancel', Api\Html::submit_button('cancel', 'Cancel').'</div>');

		$GLOBALS['egw_info']['flags']['app_header'] = lang('Site configuration').
			($appname != 'admin' ? ': '.lang($appname) : '');

		// render the page
		$GLOBALS['egw']->framework->render(
			'<div id="admin-config-'.$appname.'" class="admin-config">'.
			$t->parse('out','header').
			$t->fp('out','body').
			$t->fp('out','footer').'</div>',
			null,true
		);
	}
}
