<?php
 /**
  * Test stuff from within an eGW framework
  */

$GLOBALS['egw_info'] = array(
	'flags' => array(
		'currentapp'    => 'etemplate',
		'noheader'              => True,
		'nonavbar'              => True,
		'app_header'	=> 'eT2 Test',
		'js_link_registry'	=> True,
	)
);
include('../../../header.inc.php');

use EGroupware\Api;

Api\Framework::includeJS('.','etemplate2','etemplate');
Api\Framework::includeJS('jquery','jquery.tools.min','phpgwapi'); // Not needed once JS require works for files like this
Api\Framework::includeJS('jquery','jquery.html5_upload','phpgwapi'); // Not needed once JS require works for files like this
Api\Framework::includeCSS('/api/js/etemplate/test/test.css');

/*
* Test using any actual template
*/
	$template = 'etemplate.et2_test_file_upload';
	if($template) {
		$etemplate = new Api\Etemplate('etemplate.et2_test_file_upload');
		$etemplate->exec('',array());
		return;
	}
	echo $GLOBALS['egw']->framework->header();
?>
		<script src="et2_test_timesheet_edit.json"></script>
		<script src="et2_test_input_validator.json"></script>
		<script src="et2_test_text.json"></script>
Testing from inside framework, so JS includes work
<div class="header">Choose one of the following tests:</div>
                <div id="linklist">
                        <a href="#" onclick="open_xet('et2_test_timesheet_edit.xet', timesheet_data);">Timesheet edit dialog</a>
                        <a href="#" onclick="open_xet('et2_test_template.xet');">Template proxy test</a>
                        <a href="#" onclick="open_xet('et2_test_grid.xet');">Grid test</a>
                        <a href="#" onclick="open_xet('et2_test_tabbox.xet');">Tabs test</a>
                        <a href="#" onclick="open_xet('et2_test_text.xet',text_data);">Text/URL test</a>
                        <a href="#" onclick="open_xet('et2_test_basic_widgets.xet');">Basic widgits</a>
			<a href="#" onclick="open_xet('et2_test_date.xet');">Date/time widgits</a>
                        <a href="#" onclick="open_xet('et2_test_input_validator.xet', validation_data);">Validation</a>
                        <a href="#" onclick="open_xet('et2_test_file_upload.xet');">Upload</a>
                </div>
                <div class="header">ETemplate2 container:</div>
                <div id="time"></div>
                <div id="container"></div>
                <script>
                        var et2 = new etemplate2(document.getElementById("container"), "etemplate.etemplate_new.ajax_process_content");

                        function open_xet(file, content) {
                                et2.load(file, content);
                        }
                </script>
<?php
echo $GLOBALS['egw']->framework->footer();
