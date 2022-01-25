"use strict";
/**
 * EGroupware eTemplate2 - Class which contains a factory method for rows
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package etemplate
 * @subpackage api
 * @link http://www.egroupware.org
 * @author Andreas Stöckel
 * @copyright Stylite 2012
 * @version $Id$
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
/*egw:uses
    /vendor/bower-asset/jquery/dist/jquery.js;
    et2_core_inheritance;
    et2_core_interfaces;
    et2_core_arrayMgr;
    et2_core_widget;
    et2_dataview_view_rowProvider;
*/
var et2_core_widget_1 = require("./et2_core_widget");
var et2_core_arrayMgr_1 = require("./et2_core_arrayMgr");
/**
 * The row provider contains prototypes (full clonable dom-trees)
 * for all registered row types.
 *
 */
var et2_nextmatch_rowProvider = /** @class */ (function () {
    /**
     * Creates the nextmatch row provider.
     *
     * @param {et2_nextmatch_rowProvider} _rowProvider
     * @param {function} _subgridCallback
     * @param {object} _context
     * @memberOf et2_nextmatch_rowProvider
     */
    function et2_nextmatch_rowProvider(_rowProvider, _subgridCallback, _context) {
        /**
         * Match category-ids from class attribute eg. "cat_15" or "123,456,789 "
         *
         * Make sure to not match numbers inside other class-names.
         *
         * We can NOT use something like /(^| |,|cat_)([0-9]+)( |,|$)/g as it wont find all cats in "123,456,789 "!
         */
        this.cat_regexp = /(^| |,|cat_)([0-9]+)/g;
        /**
         * Regular expression used to filter out non-nummerical chars from above matches
         */
        this.cat_cleanup = /[^0-9]/g;
        // Copy the arguments
        this._rowProvider = _rowProvider;
        this._subgridCallback = _subgridCallback;
        this._context = _context;
        this._createEmptyPrototype();
    }
    et2_nextmatch_rowProvider.prototype.destroy = function () {
        this._rowProvider.destroy();
        this._subgridCallback = null;
        this._context = null;
        this._dataRow = null;
    };
    /**
     * Creates the data row prototype.
     *
     * @param _widgets is an array containing the root widget for each column.
     * @param _rowData contains the properties of the root "tr" (like its class)
     * @param _rootWidget is the parent widget of the data rows (i.e.
     * the nextmatch)
     */
    et2_nextmatch_rowProvider.prototype.setDataRowTemplate = function (_widgets, _rowData, _rootWidget) {
        // Copy the root widget
        this._rootWidget = _rootWidget;
        // Create the base row
        var row = this._rowProvider.getPrototype("default");
        // Copy the row template
        var rowTemplate = {
            "row": row[0],
            "rowData": _rowData,
            "widgets": _widgets,
            "root": _rootWidget,
            "seperated": null,
            "mgrs": _rootWidget.getArrayMgrs()
        };
        // Create the row widget and insert the given widgets into the row
        var rowWidget = new et2_nextmatch_rowWidget(rowTemplate.mgrs, row[0]);
        rowWidget._parent = _rootWidget;
        rowWidget.createWidgets(_widgets);
        // Get the set containing all variable attributes
        var variableAttributes = this._getVariableAttributeSet(rowWidget);
        // Filter out all widgets which do not implement the et2_IDetachedDOM
        // interface or do not support all attributes listed in the et2_IDetachedDOM
        // interface. A warning is issued for all those widgets as they heavily
        // degrade the performance of the dataview
        var seperated = rowTemplate.seperated =
            this._seperateWidgets(variableAttributes);
        // Remove all DOM-Nodes of all widgets inside the "remaining" slot from
        // the row-template, then build the access functions for the detachable
        // widgets
        this._stripTemplateRow(rowTemplate);
        this._buildNodeAccessFuncs(rowTemplate);
        // Create the DOM row template
        var tmpl = document.createDocumentFragment();
        row.children().each(function () { tmpl.appendChild(this); });
        this._dataRow = tmpl;
        this._template = rowTemplate;
    };
    et2_nextmatch_rowProvider.prototype.getDataRow = function (_data, _row, _idx, _controller) {
        // Clone the row template
        var row = this._dataRow.cloneNode(true);
        // Create array managers with the given data merged in
        var mgrs = et2_core_arrayMgr_1.et2_arrayMgrs_expand(rowWidget, this._template.mgrs, _data, _idx);
        // Insert the widgets into the row which do not provide the functions
        // to set the _data directly
        var rowWidget = null;
        if (this._template.seperated.remaining.length > 0) {
            // Transform the variable attributes
            for (var i = 0; i < this._template.seperated.remaining.length; i++) {
                var entry = this._template.seperated.remaining[i];
                for (var j = 0; j < entry.data.length; j++) {
                    var set = entry.data[j];
                    entry.widget.options[set.attribute] = mgrs["content"].expandName(set.expression);
                }
            }
            // Create the row widget
            var rowWidget = new et2_nextmatch_rowTemplateWidget(this._rootWidget, row);
            // Let the row widget create the widgets
            rowWidget.createWidgets(mgrs, this._template.placeholders);
        }
        // Update the content of all other widgets
        for (var i = 0; i < this._template.seperated.detachable.length; i++) {
            var entry = this._template.seperated.detachable[i];
            // Parse the attribute expressions
            var data = {};
            for (var j = 0; j < entry.data.length; j++) {
                var set = entry.data[j];
                data[set.attribute] = mgrs["content"].expandName(set.expression);
            }
            // Retrieve all DOM-Nodes
            var nodes = new Array(entry.nodeFuncs.length);
            for (var j = 0; j < nodes.length; j++) {
                // Use the previously compiled node function to get the node
                // from the entry
                try {
                    nodes[j] = entry.nodeFuncs[j](row);
                }
                catch (e) {
                    debugger;
                    continue;
                }
            }
            // Set the array managers first
            entry.widget._mgrs = mgrs;
            if (typeof data.id != "undefined") {
                entry.widget.id = data.id;
            }
            // Adjust data for that row
            entry.widget.transformAttributes.call(entry.widget, data);
            // Call the setDetachedAttributes function
            entry.widget.setDetachedAttributes(nodes, data, _data);
        }
        // Insert the row into the tr
        var tr = _row.getDOMNode();
        tr.appendChild(row);
        // Make the row expandable
        if (typeof _data.content["is_parent"] !== "undefined"
            && _data.content["is_parent"]) {
            _row.makeExpandable(true, function () {
                return this._subgridCallback.call(this._context, _row, _data, _controller);
            }, this);
            // Check for kept expansion, and set the row up to be re-expanded
            // Only the top controller tracks expanded, including sub-grids
            var top_controller = _controller;
            while (top_controller._parentController != null) {
                top_controller = top_controller._parentController;
            }
            var expansion_index = top_controller.kept_expansion.indexOf(top_controller.dataStorePrefix + '::' + _data.content[this._context.settings.row_id]);
            if (top_controller.kept_expansion && expansion_index >= 0) {
                top_controller.kept_expansion.splice(expansion_index, 1);
                // Use a timeout since the DOM nodes might not be finished yet
                window.setTimeout(function () {
                    _row.expansionButton.trigger('click');
                }, et2_dataview_grid.ET2_GRID_INVALIDATE_TIMEOUT);
            }
        }
        // Set the row data
        this._setRowData(this._template.rowData, tr, mgrs);
        return rowWidget;
    };
    /**
     * Placeholder for empty row
     *
     * The empty row placeholder is used when there are no results to display.
     * This allows the user to still have a drop target, or use actions that
     * do not require a row ID, such as 'Add new'.
     */
    et2_nextmatch_rowProvider.prototype._createEmptyPrototype = function () {
        var label = this._context && this._context.options && this._context.options.settings.placeholder;
        var placeholder = jQuery(document.createElement("td"))
            .attr("colspan", this._rowProvider.getColumnCount())
            .css("height", "19px")
            .text(typeof label != "undefined" && label ? label : egw().lang("No matches found"));
        this._rowProvider._prototypes["empty"] = jQuery(document.createElement("tr"))
            .addClass("egwGridView_empty")
            .append(placeholder);
    };
    /** -- PRIVATE FUNCTIONS -- **/
    /**
     * Returns an array containing objects which have variable attributes
     *
     * @param {et2_widget} _widget
     */
    et2_nextmatch_rowProvider.prototype._getVariableAttributeSet = function (_widget) {
        var variableAttributes = [];
        var process = function (_widget) {
            // Create the attribtues
            var hasAttr = false;
            var widgetData = {
                "widget": _widget,
                "data": []
            };
            // Get all attribute values
            for (var key in _widget.attributes) {
                if (!_widget.attributes[key].ignore &&
                    typeof _widget.options[key] != "undefined") {
                    var val = _widget.options[key];
                    // TODO: Improve detection
                    if (typeof val == "string" && val.indexOf("$") >= 0) {
                        hasAttr = true;
                        widgetData.data.push({
                            "attribute": key,
                            "expression": val
                        });
                    }
                }
            }
            // Add the entry if there is any data in it
            if (hasAttr) {
                variableAttributes.push(widgetData);
            }
        };
        // Check each column
        var columns = _widget._widgets;
        for (var i = 0; i < columns.length; i++) {
            // If column is hidden, don't process it
            if (typeof columns[i] === 'undefined' || this._context && this._context.columns && this._context.columns[i] && !this._context.columns[i].visible) {
                continue;
            }
            columns[i].iterateOver(process, this);
        }
        return variableAttributes;
    };
    et2_nextmatch_rowProvider.prototype._seperateWidgets = function (_varAttrs) {
        // The detachable array contains all widgets which implement the
        // et2_IDetachedDOM interface for all needed attributes
        var detachable = [];
        // The remaining array creates all widgets which have to be completely
        // cloned when the widget tree is created
        var remaining = [];
        // Iterate over the widgets
        for (var i = 0; i < _varAttrs.length; i++) {
            var widget = _varAttrs[i].widget;
            // Check whether the widget parents are not allready in the "remaining"
            // slot -  if this is the case do not include the widget at all.
            var insertWidget = true;
            var checkWidget = function (_widget) {
                if (_widget.parent != null) {
                    for (var i = 0; i < remaining.length; i++) {
                        if (remaining[i].widget == _widget.parent) {
                            insertWidget = false;
                            return;
                        }
                    }
                    checkWidget(_widget.parent);
                }
            };
            checkWidget(widget);
            // Handle the next widget if this one should not be included.
            if (!insertWidget) {
                continue;
            }
            // Check whether the widget implements the et2_IDetachedDOM interface
            var isDetachable = false;
            if (widget.implements(et2_IDetachedDOM)) {
                // Get all attributes the widgets supports to be set in the
                // "detached" mode
                var supportedAttrs = [];
                widget.getDetachedAttributes(supportedAttrs);
                supportedAttrs.push("id");
                isDetachable = true;
                for (var j = 0; j < _varAttrs[i].data.length /* && isDetachable*/; j++) {
                    var data = _varAttrs[i].data[j];
                    var supportsAttr = supportedAttrs.indexOf(data.attribute) != -1;
                    if (!supportsAttr) {
                        egw.debug("warn", "et2_IDetachedDOM widget " +
                            widget._type + " does not support " + data.attribute);
                    }
                    isDetachable = isDetachable && supportsAttr;
                }
            }
            // Insert the widget into the correct slot
            if (isDetachable) {
                detachable.push(_varAttrs[i]);
            }
            else {
                remaining.push(_varAttrs[i]);
            }
        }
        return {
            "detachable": detachable,
            "remaining": remaining
        };
    };
    /**
     * Removes to DOM code for all widgets in the "remaining" slot
     *
     * @param {object} _rowTemplate
     */
    et2_nextmatch_rowProvider.prototype._stripTemplateRow = function (_rowTemplate) {
        _rowTemplate.placeholders = [];
        for (var i = 0; i < _rowTemplate.seperated.remaining.length; i++) {
            var entry = _rowTemplate.seperated.remaining[i];
            // Issue a warning - widgets which do not implement et2_IDOMNode
            // are very slow
            egw.debug("warn", "Non-clonable widget '" + entry.widget._type + "' in dataview row - this " +
                "might be slow", entry);
            // Set the placeholder for the entry to null
            entry.placeholder = null;
            // Get the outer DOM-Node of the widget
            if (entry.widget.implements(et2_IDOMNode)) {
                var node = entry.widget.getDOMNode(entry.widget);
                if (node && node.parentNode) {
                    // Get the parent node and replace the node with a placeholder
                    entry.placeholder = document.createElement("span");
                    node.parentNode.replaceChild(entry.placeholder, node);
                    _rowTemplate.placeholders.push({
                        "widget": entry.widget,
                        "func": this._compileDOMAccessFunc(_rowTemplate.row, entry.placeholder)
                    });
                }
            }
        }
    };
    et2_nextmatch_rowProvider.prototype._nodeIndex = function (_node) {
        if (_node.parentNode == null) {
            return 0;
        }
        for (var i = 0; i < _node.parentNode.childNodes.length; i++) {
            if (_node.parentNode.childNodes[i] == _node) {
                return i;
            }
        }
        return -1;
    };
    /**
     * Returns a function which does a relative access on the given DOM-Node
     *
     * @param {DOMElement} _root
     * @param {DOMElement} _target
     */
    et2_nextmatch_rowProvider.prototype._compileDOMAccessFunc = function (_root, _target) {
        function recordPath(_root, _target, _path) {
            if (typeof _path == "undefined") {
                _path = [];
            }
            if (_root != _target && _target) {
                // Get the index of _target in its parent node
                var idx = this._nodeIndex(_target);
                if (idx >= 0) {
                    // Add the access selector
                    _path.unshift("childNodes[" + idx + "]");
                    // Record the remaining path
                    return recordPath.call(this, _root, _target.parentNode, _path);
                }
                throw ("Internal error while compiling DOM access function.");
            }
            else {
                _path.unshift("_node");
                return "return " + _path.join(".") + ";";
            }
        }
        return new Function("_node", recordPath.call(this, _root, _target));
    };
    /**
     * Builds relative paths to the DOM-Nodes and compiles fast-access functions
     *
     * @param {object} _rowTemplate
     */
    et2_nextmatch_rowProvider.prototype._buildNodeAccessFuncs = function (_rowTemplate) {
        for (var i = 0; i < _rowTemplate.seperated.detachable.length; i++) {
            var entry = _rowTemplate.seperated.detachable[i];
            // Get all needed nodes from the widget
            var nodes = entry.widget.getDetachedNodes();
            var nodeFuncs = entry.nodeFuncs = new Array(nodes.length);
            // Record the path to each DOM-Node
            for (var j = 0; j < nodes.length; j++) {
                nodeFuncs[j] = this._compileDOMAccessFunc(_rowTemplate.row, nodes[j]);
            }
        }
    };
    /**
     * Applies additional row data (like the class) to the tr
     *
     * @param {object} _data
     * @param {DOMElement} _tr
     * @param {object} _mgrs
     */
    et2_nextmatch_rowProvider.prototype._setRowData = function (_data, _tr, _mgrs) {
        // TODO: Implement other fields than "class"
        if (_data["class"]) {
            var classes = _mgrs["content"].expandName(_data["class"]);
            // Get fancy with categories
            var cats = [];
            // Assume any numeric class is a category
            if (_data["class"].indexOf("cat") !== -1 || classes.match(/[0-9]+/)) {
                // Accept either cat, cat_id or category as ID, and look there for category settings
                var category_location = _data["class"].match(/(cat(_id|egory)?)/);
                if (category_location)
                    category_location = category_location[0];
                cats = classes.match(this.cat_regexp) || [];
                classes = classes.replace(this.cat_regexp, '');
                // Set category class
                for (var i = 0; i < cats.length; i++) {
                    // Need cat_, classes can't start with a number
                    var cat_id = cats[i].replace(this.cat_cleanup, '');
                    var cat_class = 'cat_' + cat_id;
                    classes += ' ' + cat_class;
                }
                classes += " row_category";
            }
            classes += " row";
            _tr.setAttribute("class", classes);
        }
        if (_data['valign']) {
            var align = _mgrs["content"].expandName(_data["valign"]);
            _tr.setAttribute("valign", align);
        }
    };
    return et2_nextmatch_rowProvider;
}());
exports.et2_nextmatch_rowProvider = et2_nextmatch_rowProvider;
/**
 * @augments et2_widget
 */
var et2_nextmatch_rowWidget = /** @class */ (function (_super) {
    __extends(et2_nextmatch_rowWidget, _super);
    /**
     * Constructor
     *
     * @param _mgrs
     * @param _row
     * @memberOf et2_nextmatch_rowWidget
     */
    function et2_nextmatch_rowWidget(_mgrs, _row) {
        var _this = 
        // Call the parent constructor with some dummy attributes
        _super.call(this, null, { "id": "", "type": "rowWidget" }) || this;
        // Initialize some variables
        _this._widgets = [];
        // Copy the given DOM node and the content arrays
        _this._mgrs = _mgrs;
        _this._row = _row;
        return _this;
    }
    /**
     * Copies the given array manager and clones the given widgets and inserts
     * them into the row which has been passed in the constructor.
     *
     * @param {array} _widgets
     */
    et2_nextmatch_rowWidget.prototype.createWidgets = function (_widgets) {
        // Clone the given the widgets with this element as parent
        this._widgets = [];
        var row_id = 0;
        for (var i = 0; i < _widgets.length; i++) {
            // Disabled columns might be missing widget - skip it
            if (!_widgets[i])
                continue;
            this._widgets[i] = _widgets[i].clone(this);
            this._widgets[i].loadingFinished();
            // Set column alignment from widget
            if (this._widgets[i].align && this._row.childNodes[row_id]) {
                this._row.childNodes[row_id].align = this._widgets[i].align;
            }
            row_id++;
        }
    };
    /**
     * Returns the column node for the given sender
     *
     * @param {et2_widget} _sender
     * @return {DOMElement}
     */
    et2_nextmatch_rowWidget.prototype.getDOMNode = function (_sender) {
        var row_id = 0;
        for (var i = 0; i < this._widgets.length; i++) {
            // Disabled columns might be missing widget - skip it
            if (!this._widgets[i])
                continue;
            if (this._widgets[i] == _sender && this._row.childNodes[row_id]) {
                return this._row.childNodes[row_id].childNodes[0]; // Return the i-th td tag
            }
            row_id++;
        }
        return null;
    };
    return et2_nextmatch_rowWidget;
}(et2_core_widget_1.et2_widget));
/**
 * @augments et2_widget
 */
var et2_nextmatch_rowTemplateWidget = /** @class */ (function (_super) {
    __extends(et2_nextmatch_rowTemplateWidget, _super);
    /**
     * Constructor
     *
     * @param _root
     * @param _row
     * @memberOf et2_nextmatch_rowTemplateWidget
     */
    function et2_nextmatch_rowTemplateWidget(_root, _row) {
        var _this = 
        // Call the parent constructor with some dummy attributes
        _super.call(this, null, { "id": "", "type": "rowTemplateWidget" }) || this;
        _this._root = _root;
        _this._mgrs = {};
        _this._row = _row;
        // Set parent to root widget, so sub-widget calls still work
        _this._parent = _root;
        // Clone the widgets inside the placeholders array
        _this._widgets = [];
        return _this;
    }
    et2_nextmatch_rowTemplateWidget.prototype.createWidgets = function (_mgrs, _widgets) {
        // Set the array managers - don't use setArrayMgrs here as this creates
        // an unnecessary copy of the object
        this._mgrs = _mgrs;
        this._widgets = new Array(_widgets.length);
        for (var i = 0; i < _widgets.length; i++) {
            this._row.childNodes[0].childNodes[0];
            this._widgets[i] = {
                "widget": _widgets[i].widget.clone(this),
                "node": _widgets[i].func(this._row)
            };
            this._widgets[i].widget.loadingFinished();
        }
    };
    /**
     * Returns the column node for the given sender
     *
     * @param {et2_widget} _sender
     * @return {DOMElement}
     */
    et2_nextmatch_rowTemplateWidget.prototype.getDOMNode = function (_sender) {
        for (var i = 0; i < this._widgets.length; i++) {
            if (this._widgets[i].widget == _sender) {
                return this._widgets[i].node;
            }
        }
        return null;
    };
    return et2_nextmatch_rowTemplateWidget;
}(et2_core_widget_1.et2_widget));
//# sourceMappingURL=et2_extension_nextmatch_rowProvider.js.map