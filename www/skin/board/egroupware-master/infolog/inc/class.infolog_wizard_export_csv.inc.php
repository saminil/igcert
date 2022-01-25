<?php
/**
 * EGroupware - Wizard for Infolog CSV export
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package infolog
 * @subpackage importexport
 * @link http://www.egroupware.org
 * @author Nathan Gray
 * @version $Id$
 */

use EGroupware\Api;

class infolog_wizard_export_csv extends importexport_wizard_basic_export_csv
{
	public function __construct() {
		parent::__construct();

		// Field mapping
		$bo = new infolog_tracking(new infolog_bo());
		$this->export_fields = array('info_id' => 'Infolog ID', 'pm_id' => 'Project ID', 'project' => 'Project Name') + $bo->field2label;
		// Add in created date, in the appropriate place
		$first = array_splice($this->export_fields, 0, array_search('info_datemodified',array_keys($this->export_fields)));
		$this->export_fields = array_merge($first, array('info_created'=>'creation'), $this->export_fields);

		// Custom fields
		unset($this->export_fields['custom']); // Heading, not a real field
		$custom = Api\Storage\Customfields::get('infolog', true);
		foreach($custom as $name => $data) {
			$this->export_fields['#'.$name] = $data['label'];
		}
	}
}
