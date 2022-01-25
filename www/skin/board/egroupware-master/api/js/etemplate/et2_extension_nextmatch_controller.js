"use strict";
/**
 * EGroupware eTemplate2 - Class which contains a the data model for nextmatch widgets
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package etemplate
 * @subpackage api
 * @link http://www.egroupware.org
 * @author Andreas Stöckel
 * @copyright Stylite 2012
 * @version $Id$
 *

/*egw:uses
    et2_core_common;
    et2_core_inheritance;

    et2_dataview_view_row;
    et2_dataview_controller;
    et2_dataview_interfaces;
    et2_dataview_view_tile;

    et2_extension_nextmatch_actions; // Contains nm_action

    egw_data;
*/
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
var et2_dataview_view_row_1 = require("./et2_dataview_view_row");
var et2_dataview_view_tile_1 = require("./et2_dataview_view_tile");
var et2_dataview_controller_1 = require("./et2_dataview_controller");
var et2_dataview_model_columns_1 = require("./et2_dataview_model_columns");
/**
 * @augments et2_dataview_controller
 */
var et2_nextmatch_controller = /** @class */ (function (_super) {
    __extends(et2_nextmatch_controller, _super);
    /**
     * Initializes the nextmatch controller.
     *
     * @param _parentController is the parent nextmatch controller instance
     * @param _egw is the api instance
     * @param _execId is the execId of the etemplate
     * @param _widget is the nextmatch-widget we are fetching data for.
     * @param _grid is the grid the grid controller will be controlling
     * @param _rowProvider is the nextmatch row provider instance.
     * @param _objectManager is the parent object manager (if null, the object
     * manager) will be created using
     * @param _actionLinks contains the action links
     * @param _actions contains the actions, may be null if an object manager
     * is given.
     * @memberOf et2_nextmatch_controller
     */
    function et2_nextmatch_controller(_parentController, _egw, _execId, _widget, _parentId, _grid, _rowProvider, _actionLinks, _objectManager, _actions) {
        var _this = 
        // Call the parent et2_dataview_controller constructor
        _super.call(this, _parentController, _grid) || this;
        _this.setDataProvider(_this);
        _this.setRowCallback(_this._rowCallback);
        _this.setLinkCallback(_this._linkCallback);
        _this.setContext(_this);
        // Copy the egw reference
        _this.egw = _egw;
        // Keep a reference to the widget
        _this._widget = _widget;
        // Copy the given parameters
        _this._actionLinks = _actionLinks;
        _this._execId = _execId;
        // Get full widget ID, including path
        var id = _widget.getArrayMgr('content').getPath();
        if (typeof id == 'string') {
            _this._widgetId = id;
        }
        else if (id.length === 1) {
            _this._widgetId = id[0];
        }
        else {
            _this._widgetId = id.shift() + '[' + id.join('][') + ']';
        }
        _this._parentId = _parentId;
        _this._rowProvider = _rowProvider;
        // Initialize the action and the object manager
        // _initActions calls _init_link_dnd, which uses this._actionLinks,
        // so this must happen after the above parameter copying
        if (!_objectManager) {
            _this._initActions(_actions);
        }
        else {
            _this._actionManager = null;
            _this._objectManager = _objectManager;
        }
        _this.setActionObjectManager(_this._objectManager);
        // Add our selection callback to selection manager
        var self = _this;
        _this._objectManager.setSelectedCallback = function () { self._selectCallback.apply(self, [this, arguments]); };
        // We start with no filters
        _this._filters = {};
        // Keep selection across filter changes
        _this.kept_selection = null;
        _this.kept_focus = null;
        _this.kept_expansion = [];
        // Directly use the API-Implementation of dataRegisterUID and
        // dataUnregisterUID
        _this.dataUnregisterUID = _egw.dataUnregisterUID;
        // Default to rows
        _this._view = et2_nextmatch_controller.VIEW_ROW;
        return _this;
    }
    et2_nextmatch_controller.prototype.destroy = function () {
        // If the actionManager variable is set, the object- and actionManager
        // were created by this instance -- clear them
        if (this._actionManager) {
            this._objectManager.remove();
            this._actionManager.remove();
        }
        this._widget = null;
        _super.prototype.destroy.call(this);
    };
    /**
     * Updates the filter instance.
     */
    et2_nextmatch_controller.prototype.setFilters = function (_filters) {
        // Update the filters
        this._filters = _filters;
    };
    /**
     * Keep the selection, if possible, across a data fetch and restore it
     * after
     */
    et2_nextmatch_controller.prototype.keepSelection = function () {
        this.kept_selection = this._selectionMgr ? this._selectionMgr.getSelected() : null;
        this.kept_focus = this._selectionMgr && this._selectionMgr._focusedEntry ?
            this._selectionMgr._focusedEntry.uid || null : null;
        // Find expanded rows
        var nm = this._widget;
        var controller = this;
        jQuery('.arrow.opened', this._widget.getDOMNode(this._widget)).each(function () {
            var entry = controller.getRowByNode(this);
            if (entry && entry.uid) {
                controller.kept_expansion.push(entry.uid);
            }
        });
    };
    et2_nextmatch_controller.prototype.getObjectManager = function () {
        return this._objectManager;
    };
    /**
     * Deletes a row from the grid
     *
     * @param {string} uid
     */
    et2_nextmatch_controller.prototype.deleteRow = function (uid) {
        var entry = Object.values(this._indexMap).find(function (entry) { return entry.uid == uid; });
        // Unselect
        this._selectionMgr.setSelected(uid, false);
        if (entry && entry.idx !== null) {
            this._selectionMgr.unregisterRow(uid, entry.tr);
            // This will remove the row, but add an empty to the end.
            // That's OK, because it will be removed when we update the row count
            this._grid.deleteRow(entry.idx);
            // Remove from internal map
            delete this._indexMap[entry.idx];
            // Update the indices of all elements after the current one
            for (var mapIndex = entry.idx + 1; typeof this._indexMap[mapIndex] !== 'undefined'; mapIndex++) {
                var entry = this._indexMap[mapIndex];
                entry.idx = mapIndex - 1;
                this._indexMap[mapIndex - 1] = entry;
                // Update selection mgr too
                if (entry.uid && typeof this._selectionMgr._registeredRows[entry.uid] !== 'undefined') {
                    var reg = this._selectionMgr._getRegisteredRowsEntry(entry.uid);
                    reg.idx = entry.idx;
                    if (reg.ao && reg.ao._index)
                        reg.ao._index = entry.idx;
                    this._selectionMgr._registeredRows[entry.uid].idx = reg.idx;
                }
            }
            // Remove last one, it was moved to mapIndex-1 before increment
            delete this._indexMap[mapIndex - 1];
            // Not needed, they share by reference
            // this._selectionMgr.setIndexMap(this._indexMap);
        }
        for (var _i = 0, _a = this._children; _i < _a.length; _i++) {
            var child = _a[_i];
            child.deleteRow(uid);
        }
    };
    /** -- PRIVATE FUNCTIONS -- **/
    /**
     * Create a new row, either normal or tiled
     *
     * @param {type} ctx
     * @returns {et2_dataview_container}
     */
    et2_nextmatch_controller.prototype._createRow = function (ctx) {
        switch (this._view) {
            case et2_nextmatch_controller.VIEW_TILE:
                var row = new et2_dataview_view_tile_1.et2_dataview_tile(this._grid);
                // Try to overcome chrome rendering issue where float is not
                // applied properly, leading to incomplete rows
                window.setTimeout(function () {
                    if (!row.tr)
                        return;
                    row.tr.css('float', 'none');
                    window.setTimeout(function () {
                        if (!row.tr)
                            return;
                        row.tr.css('float', 'left');
                    }, 50);
                }, 100);
                return row;
            case et2_nextmatch_controller.VIEW_ROW:
            default:
                return new et2_dataview_view_row_1.et2_dataview_row(this._grid);
        }
    };
    /**
     * Initializes the action and the object manager.
     */
    et2_nextmatch_controller.prototype._initActions = function (_actions) {
        // Generate a uid for the action and object manager
        var uid = this._widget.id || this.egw.uid();
        if (_actions == null)
            _actions = [];
        // Initialize the action manager and add some actions to it
        // Only look 1 level deep
        var gam = egw_getActionManager(this.egw.appName, true, 1);
        if (this._actionManager == null) {
            this._actionManager = gam.addAction("actionManager", uid);
        }
        var data = this._actionManager.data;
        if (data == 'undefined' || !data) {
            data = {};
        }
        data.nextmatch = this._widget;
        data.context = this._widget.getInstanceManager().app_obj;
        this._actionManager.set_data(data);
        this._actionManager.updateActions(_actions, this.egw.appName);
        // Set the default execute handler
        var self = this;
        this._actionManager.setDefaultExecute(function (_action, _senders, _target) {
            // Get the selected ids descriptor object
            var ids = self._selectionMgr.getSelected();
            // Pass a reference to the actual widget
            if (typeof _action.data == 'undefined' || !_action.data)
                _action.data = {};
            _action.data.nextmatch = self._widget;
            // Call the nm_action function with the ids
            nm_action(_action, _senders, _target, ids);
        });
        // Set the 'Select All' handler
        var select_all = this._actionManager.getActionById('select_all');
        if (select_all) {
            select_all.set_onExecute(jQuery.proxy(function (action, selected) {
                this._selectionMgr.selectAll();
            }, this));
        }
        // Initialize the object manager - look for application
        // object manager 1 level deep
        var gom = egw_getObjectManager(this.egw.appName, true, 1);
        if (this._objectManager == null) {
            this._objectManager = gom.addObject(new egwActionObjectManager(uid, this._actionManager));
            this._objectManager.handleKeyPress = function (_keyCode, _shift, _ctrl, _alt) {
                for (var i = 0; i < self._actionManager.children.length; i++) {
                    if (typeof self._actionManager.children[i].shortcut === 'object' &&
                        self._actionManager.children[i].shortcut &&
                        _keyCode == self._actionManager.children[i].shortcut.keyCode) {
                        return this.executeActionImplementation({
                            "keyEvent": {
                                "keyCode": _keyCode,
                                "shift": _shift,
                                "ctrl": _ctrl,
                                "alt": _alt
                            }
                        }, "popup", EGW_AO_EXEC_SELECTED);
                    }
                }
                return egwActionObject.prototype.handleKeyPress.call(this, _keyCode, _shift, _ctrl, _alt);
            };
        }
        this._objectManager.flags = this._objectManager.flags
            | EGW_AO_FLAG_DEFAULT_FOCUS | EGW_AO_FLAG_IS_CONTAINER;
        this._init_links_dnd();
        if (this._selectionMgr) {
            // Need to update the action links for every registered row too
            for (var uid in this._selectionMgr._registeredRows) {
                // Get the corresponding entry from the registered rows array
                var entry = this._selectionMgr._getRegisteredRowsEntry(uid);
                if (entry.ao) {
                    entry.ao.updateActionLinks(this._actionLinks);
                }
            }
        }
    };
    /**
     * Automatically add dnd support for linking
     */
    et2_nextmatch_controller.prototype._init_links_dnd = function () {
        var mgr = this._actionManager;
        var self = this;
        var drop_action = mgr.getActionById('egw_link_drop');
        var drag_action = mgr.getActionById('egw_link_drag');
        var drop_cancel = mgr.getActionById('egw_cancel_drop');
        if (!this._actionLinks) {
            this._actionLinks = [];
        }
        if (!drop_cancel) {
            // Create a generic cancel action in order to cancel drop action
            // applied for all apps plus file and link action.
            drop_cancel = mgr.addAction('drop', 'egw_cancel_drop', this.egw.lang('Cancel'), egw.image('cancel'), function () { }, true);
            drop_cancel.set_group('99');
            drop_cancel.acceptedTypes = drop_cancel.acceptedTypes.concat(Object.keys(egw.user('apps')).concat(['link', 'file']));
            this._actionLinks.push(drop_cancel.id);
        }
        // Check if this app supports linking
        if (!egw.link_get_registry(this.dataStorePrefix || this.egw.appName, 'query') ||
            egw.link_get_registry(this.dataStorePrefix || this.egw.appName, 'title')) {
            if (drop_action) {
                drop_action.remove();
                if (this._actionLinks.indexOf(drop_action.id) >= 0) {
                    this._actionLinks.splice(this._actionLinks.indexOf(drop_action.id), 1);
                }
            }
            if (drag_action) {
                drag_action.remove();
                if (this._actionLinks.indexOf(drag_action.id) >= 0) {
                    this._actionLinks.splice(this._actionLinks.indexOf(drag_action.id), 1);
                }
            }
            return;
        }
        // Don't re-add
        if (drop_action == null) {
            // Create the drop action that links entries
            drop_action = mgr.addAction('drop', 'egw_link_drop', this.egw.lang('Create link'), egw.image('link'), function (action, source, dropped) {
                // Extract link IDs
                var links = [];
                var id = '';
                for (var i = 0; i < source.length; i++) {
                    if (!source[i].id)
                        continue;
                    id = source[i].id.split('::');
                    links.push({ app: id[0] == 'filemanager' ? 'link' : id[0], id: id[1] });
                }
                if (!links.length) {
                    return;
                }
                // Link the entries
                self.egw.json("EGroupware\\Api\\Etemplate\\Widget\\Link::ajax_link", dropped.id.split('::').concat([links]), function (result) {
                    if (result) {
                        for (var i = 0; i < this._objectManager.selectedChildren.length; i++) {
                            this._widget.refresh(this._objectManager.selectedChildren[i].id, 'update');
                        }
                        this._widget.egw().message('Linked');
                        // Update the target to show the liks
                        this._widget.refresh(dropped.id, 'update');
                    }
                }, self, true, self).sendRequest();
            }, true);
        }
        if (this._actionLinks.indexOf(drop_action.id) < 0) {
            this._actionLinks.push(drop_action.id);
        }
        // Accept other links, and files dragged from the filemanager
        // This does not handle files dragged from the desktop.  They are
        // handled by et2_nextmatch, since it needs DOM stuff
        if (drop_action.acceptedTypes.indexOf('link') == -1) {
            drop_action.acceptedTypes.push('link');
        }
        // Don't re-add
        if (drag_action == null) {
            // Create drag action that allows linking
            drag_action = mgr.addAction('drag', 'egw_link_drag', this.egw.lang('link'), 'link', function (action, selected) {
                // Drag helper - list titles.  Arbitrarily limited to 10.
                var helper = jQuery(document.createElement("div"));
                for (var i = 0; i < selected.length && i < 10; i++) {
                    var id = selected[i].id.split('::');
                    var span = jQuery(document.createElement('span')).appendTo(helper);
                    self.egw.link_title(id[0], id[1], function (title) {
                        this.append(title);
                        this.append('<br />');
                    }, span);
                }
                // As we wanted to have a general defaul helper interface, we return null here and not using customize helper for links
                // TODO: Need to decide if we need to create a customized helper interface for links anyway
                //return helper;
                return null;
            }, true);
        }
        if (this._actionLinks.indexOf(drag_action.id) < 0) {
            this._actionLinks.push(drag_action.id);
        }
        drag_action.set_dragType('link');
    };
    /**
     * Set the data cache prefix
     * Overridden from the parent to re-check automatically the added link dnd
     * since the prefix is used in support detection.
     */
    et2_nextmatch_controller.prototype.setPrefix = function (prefix) {
        _super.prototype.setPrefix.call(this, prefix);
        this._init_links_dnd();
    };
    /**
     * Overwrites the inherited _destroyCallback function in order to be able
     * to free the "rowWidget".
     */
    et2_nextmatch_controller.prototype._destroyCallback = function (_row) {
        // Destroy any widget associated to the row
        if (this.entry.widget) {
            this.entry.widget.destroy();
            this.entry.widget = null;
        }
        // Call the inherited function
        _super.prototype._destroyCallback.call(this, _row);
    };
    /**
     * Creates the actual data row.
     *
     * @param _data is an array containing the row data
     * @param _tr is the tr into which the data will be inserted
     * @param _idx is the index of the row
     * @param _entry is the internal row datastructure of the controller, in
     * this special case used to store the rowWidget reference, so that it can
     * be properly freed.
     */
    et2_nextmatch_controller.prototype._rowCallback = function (_data, _tr, _idx, _entry) {
        // Let the row provider fill in the data row -- store the returned
        // rowWidget inside the _entry
        _entry.widget = this._rowProvider.getDataRow({ "content": _data }, _tr, _idx, this);
    };
    /**
     * Returns the names of action links for a given data row -- currently these are
     * always the same links, as we controll enabled/disabled over the row
     * classes, unless the row UID is "", then it's an 'empty' row.
     *
     * The empty row placeholder can still have actions, but nothing that requires
     * an actual UID.
     *
     * @TODO: Currently empty row is just add, need to actually filter somehow.  Here
     * 	might not be the right place.
     *
     * @param _data Object The data for the row
     * @param _idx int The row index
     * @param _uid String The row's ID
     *
     * @return Array List of action names that valid for the row
     */
    et2_nextmatch_controller.prototype._linkCallback = function (_data, _idx, _uid) {
        if (_uid.trim() != "") {
            return this._actionLinks;
        }
        // No UID, so return a filtered list of actions that doesn't need a UID
        var links = [];
        try {
            links = typeof this._widget.options.settings.placeholder_actions != 'undefined' ?
                this._widget.options.settings.placeholder_actions : (this._widget.options.add ? ["add"] : []);
            // Make sure that placeholder actions are defined and existed in client-side,
            // otherwise do not set them as placeholder. for instance actions with
            // attribute hideOnMobile do not get sent to client-side.
            var action_search = function (current) {
                if (typeof this._widget.options.actions[current] !== 'undefined')
                    return true;
                // Check children
                for (var action in this._widget.options.actions) {
                    action = this._widget.options.actions[action];
                    if (action.children && action.children[current])
                        return true;
                }
                return false;
            };
            links = links.filter(action_search, this);
        }
        catch (e) {
        }
        return links;
    };
    /**
     * Overridden from the parent to also process any additional data that
     * the data source adds, such as readonlys and additonal content.
     * For example, non-numeric IDs in rows are added to the content manager
     */
    et2_nextmatch_controller.prototype._fetchCallback = function (_response) {
        var nm = this.self._widget;
        if (!nm) {
            // Nextmatch either not connected, or it tried to destroy this
            // but the server returned something
            return;
        }
        // Readonlys
        // Other stuff
        for (var i in _response.rows) {
            if (jQuery.isNumeric(i))
                continue;
            if (i == 'sel_options') {
                var mgr = nm.getArrayMgr(i);
                for (var id in _response.rows.sel_options) {
                    mgr.data[id] = _response.rows.sel_options[id];
                    var select = nm.getWidgetById(id);
                    if (select && select.set_select_options) {
                        select.set_select_options(_response.rows.sel_options[id]);
                    }
                    // Clear rowProvider internal cache so it uses new values
                    if (id == 'cat_id') {
                        this.self._rowProvider.categories = null;
                    }
                    // update array mgr so select widgets in row also get refreshed options
                    nm.getParent().getArrayMgr('sel_options').data[id] = _response.rows.sel_options[id];
                }
            }
            else if (i === "order" && _response.rows[i] !== nm.activeFilters.order) {
                nm.sortBy(_response.rows[i], undefined, false);
            }
            else {
                var mgr = nm.getArrayMgr('content');
                mgr.data[i] = _response.rows[i];
                // It's not enough to just update the data, the widgets need to
                // be updated too, if there are matching widgets.
                var widget = nm.getWidgetById(i);
                if (widget && widget.set_value) {
                    widget.set_value(mgr.getEntry(i));
                }
            }
        }
        // Might be trying to disable a column
        var col_refresh = false;
        for (var column_index = 0; column_index < nm.columns.length; column_index++) {
            if (typeof nm.columns[column_index].disabled === 'string' &&
                nm.columns[column_index].disabled[0] === '@') {
                col_refresh = true;
                nm.dataview.columnMgr.getColumnById('col_' + column_index)
                    .set_visibility(nm.getArrayMgr('content').parseBoolExpression(nm.columns[column_index].disabled) ?
                    et2_dataview_model_columns_1.et2_dataview_column.ET2_COL_VISIBILITY_DISABLED :
                    nm.columns[column_index].visible);
            }
        }
        if (col_refresh) {
            nm.dataview.columnMgr.updated();
            nm.dataview._updateColumns();
        }
        // If we're doing an autorefresh and the count decreases, preserve the
        // selection or it will be lost when the grid rows are shuffled.  Increases
        // are fine though.
        if (this.self && this.self.kept_selection == null &&
            !this.refresh && this.self._grid.getTotalCount() > _response.total) {
            this.self.keepSelection();
        }
        // Call the inherited function
        _super.prototype._fetchCallback.apply(this, arguments);
        // Restore selection, if passed
        if (this.self && this.self.kept_selection && this.self._selectionMgr) {
            if (this.self.kept_selection.all) {
                this.self._selectionMgr.selectAll();
            }
            for (var i = (this.self.kept_selection.ids.length || 1) - 1; i >= 0; i--) {
                // Only keep the selected if they came back in the fetch
                if (_response.order.indexOf(this.self.kept_selection.ids[i]) >= 0) {
                    this.self._selectionMgr.setSelected(this.self.kept_selection.ids[i], true);
                    this.self.kept_selection.ids.splice(i, 1);
                }
                else {
                    this.self.kept_selection.ids.splice(i, 1);
                }
            }
            if (this.self.kept_focus && _response.order.indexOf(this.self.kept_focus) >= 0) {
                this.self._selectionMgr.setFocused(this.self.kept_focus, true);
            }
            // Re-expanding rows handled in et2_extension_nextmatch_rowProvider
            // Expansions might still be valid, so we don't clear them
            if (this.self.kept_selection != null && typeof this.self.kept_selection.ids != 'undefined' && this.self.kept_selection.ids.length == 0) {
                this.self.kept_selection = null;
            }
            this.self.kept_focus = null;
        }
    };
    /**
     * Execute the select callback when the row selection changes
     */
    et2_nextmatch_controller.prototype._selectCallback = function (action, senders) {
        if (typeof senders == "undefined") {
            senders = [];
        }
        if (!this._widget)
            return;
        // inform mobile framework about nm selections, need to update status of header objects on selection
        if (egwIsMobile())
            framework.nm_onselect_ctrl(this._widget, action, senders);
        this._widget.onselect.call(this._widget, action, senders);
    };
    /** -- Implementation of et2_IDataProvider -- **/
    et2_nextmatch_controller.prototype.dataFetch = function (_queriedRange, _callback, _context) {
        // Merge the parent id into the _queriedRange if it is set
        if (this._parentId !== null) {
            _queriedRange["parent_id"] = this._parentId;
        }
        // sub-levels dont have there own _filters object, need to use the one from parent (or it's parents parent)
        var obj = this;
        while ((typeof obj._filters == 'undefined' || jQuery.isEmptyObject(obj._filters)) && obj._parentController) {
            obj = obj._parentController;
        }
        // Pass the fetch call to the API, multiplex the data about the
        // nextmatch instance into the call.
        this.egw.dataFetch(this._widget.getInstanceManager().etemplate_exec_id || this._execId, _queriedRange, obj._filters, this._widgetId, _callback, _context);
    };
    et2_nextmatch_controller.prototype.dataRegisterUID = function (_uid, _callback, _context) {
        // Make sure we use correct prefix when data comes back
        if (this._widget && this._widget._get_appname() != this.egw.getAppName()) {
            _context.prefix = _uid.split('::')[0];
        }
        this.egw.dataRegisterUID(_uid, _callback, _context, this._widget.getInstanceManager().etemplate_exec_id || this._execId, this._widgetId);
    };
    et2_nextmatch_controller.prototype.dataUnregisterUID = function () {
        // Overwritten in the constructor
    };
    // Display constants
    et2_nextmatch_controller.VIEW_ROW = 'row';
    et2_nextmatch_controller.VIEW_TILE = 'tile';
    return et2_nextmatch_controller;
}(et2_dataview_controller_1.et2_dataview_controller));
exports.et2_nextmatch_controller = et2_nextmatch_controller;
//# sourceMappingURL=et2_extension_nextmatch_controller.js.map