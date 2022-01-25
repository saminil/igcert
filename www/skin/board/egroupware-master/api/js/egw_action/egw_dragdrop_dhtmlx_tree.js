/**
 * eGroupWare egw_dragdrop_dhtmlxmenu - egw action framework
 *
 * @link http://www.egroupware.org
 * @author Andreas Stöckel <as@stylite.de>
 * @copyright 2011 by Andreas Stöckel
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package egw_action
 * @version $Id$
 */

/*egw:uses
	egw_action;
*/

/**
* This file contains an egw_actionObjectInterface which allows a dhtmlx tree
* row to be a drag target and contains a function which transforms a complete
* dhtmlx tree into egw_actionObjects
*/

function dhtmlxTree_getNode(_tree, _itemId) {
	var node = _tree._globalIdStorageFind(_itemId);
	if (node != null)
	{
		// Get the outer html table node of the tree node - return the first
		// "tr" child of the element
		return jQuery("tr:first", node.htmlNode);
	}
}

// An action object interface for an dhtmlxTree entry - it only contains the
// code needed for drag/drop handling
function dhtmlxtreeItemAOI(_tree, _itemId)
{
	var aoi = new egwActionObjectInterface();

	// Retrieve the actual node from the tree
	aoi.node = dhtmlxTree_getNode(_tree, _itemId);
	aoi.id = _itemId;
	aoi.doGetDOMNode = function() {
		return aoi.node;
	}

	aoi.doTriggerEvent = function(_event) {
		if (_event == EGW_AI_DRAG_OVER)
		{
			jQuery(this.node).addClass("draggedOver");
		}
		if (_event == EGW_AI_DRAG_OUT)
		{
			jQuery(this.node).removeClass("draggedOver");
		}
	}

	aoi.doSetState = function(_state) {
		if(!_tree || !_tree.focusItem) return;

		// Update the "focused" flag
		if(egwBitIsSet(_state, EGW_AO_STATE_FOCUSED))
		{
			_tree.focusItem(this.id);
		}
		if(egwBitIsSet(_state, EGW_AO_STATE_SELECTED))
		{
			_tree.selectItem(this.id, false);	// false = do not trigger onSelect
		}
	}

	return aoi;
}

