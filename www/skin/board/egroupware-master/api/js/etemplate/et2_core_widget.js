"use strict";
/**
 * EGroupware eTemplate2 - JS Widget base class
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package etemplate
 * @subpackage api
 * @link https://www.egroupware.org
 * @author Andreas Stöckel
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
    jsapi.egw;
    et2_core_xml;
    et2_core_common;
    et2_core_inheritance;
    et2_core_arrayMgr;
*/
var et2_core_inheritance_1 = require("./et2_core_inheritance");
var et2_core_arrayMgr_1 = require("./et2_core_arrayMgr");
/**
 * The registry contains all XML tag names and the corresponding widget
 * constructor.
 */
var et2_registry = {};
var et2_attribute_registry = {};
/**
 * Registers the widget class defined by the given constructor, registers all its class attributes, and associates it
 * with the types in the _types array.
 *
 * @param {function} _constructor constructor
 * @param {array} _types widget types _constructor wants to register for
 */
function et2_register_widget(_constructor, _types) {
    "use strict";
    et2_attribute_registry[_constructor.name] = et2_core_inheritance_1.ClassWithAttributes.buildAttributes(_constructor);
    // Iterate over all given types and register those
    for (var i = 0; i < _types.length; i++) {
        var type = _types[i].toLowerCase();
        // Check whether a widget has already been registered for one of the
        // types.
        if (et2_registry[type]) {
            egw.debug("warn", "Widget class registered for " + type +
                " will be overwritten.");
        }
        et2_registry[type] = _constructor;
    }
}
exports.et2_register_widget = et2_register_widget;
/**
 * Creates a widget registered for the given tag-name. If "readonly" is listed
 * inside the attributes, et2_createWidget will try to use the "_ro" type of the
 * widget.
 *
 * @param _name is the name of the widget with which it is registered. If the
 * 	widget is not found, an et2_placeholder will be created.
 * @param _attrs is an associative array with attributes. If not passed, it will
 * 	default to an empty object.
 * @param _parent is the parent to which the element will be attached. If _parent
 * 	is not passed, it will default to null. Then you have to attach the element
 * 	to a parent using the addChild or insertChild method.
 */
function et2_createWidget(_name, _attrs, _parent) {
    "use strict";
    if (typeof _attrs == "undefined") {
        _attrs = {};
    }
    if (typeof _attrs != "object") {
        _attrs = {};
    }
    if (typeof _parent == "undefined") {
        _parent = null;
    }
    // Parse the "readonly" and "type" flag for this element here, as they
    // determine which constructor is used
    var nodeName = _attrs["type"] = _name;
    var readonly = _attrs["readonly"] =
        typeof _attrs["readonly"] == "undefined" ? false : _attrs["readonly"];
    // Get the constructor - if the widget is readonly, use the special "_ro"
    // constructor if it is available
    var constructor = typeof et2_registry[nodeName] == "undefined" ?
        et2_placeholder : et2_registry[nodeName];
    if (readonly && typeof et2_registry[nodeName + "_ro"] != "undefined") {
        constructor = et2_registry[nodeName + "_ro"];
    }
    // Do an sanity check for the attributes
    et2_core_inheritance_1.ClassWithAttributes.generateAttributeSet(et2_attribute_registry[constructor.name], _attrs);
    // Create the new widget and return it
    return new constructor(_parent, _attrs);
}
exports.et2_createWidget = et2_createWidget;
/**
 * The et2 widget base class.
 *
 * @augments ClassWithAttributes
 */
var et2_widget = /** @class */ (function (_super) {
    __extends(et2_widget, _super);
    /**
     * Widget constructor
     *
     * To implement the attributes inheritance and overriding each extending class/widget needs to call:
     *
     * 	super(_parent, _attrs, ClassWithAttributes.extendAttributes(et2_DOMWidget._attributes, _child || {}));
     *
     * @param _parent is the parent object from the XML tree which contains this
     * 	object. The default constructor always adds the new instance to the
     * 	children list of the given parent object. _parent may be NULL.
     * @param _attrs is an associative array of attributes.
     * @param _child attributes object from the child
     */
    function et2_widget(_parent, _attrs, _child) {
        var _this = _super.call(this) || this;
        _this._children = [];
        _this._mgrs = {};
        /**
         * This is used and therefore it we can not (yet) make it private
         *
         * @deprecated use this.getInstanceMgr()
         */
        _this._inst = null;
        _this.attributes = et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_widget._attributes, _child || {});
        // Check whether all attributes are available
        if (typeof _parent == "undefined") {
            _parent = null;
        }
        if (typeof _attrs == "undefined") {
            _attrs = {};
        }
        if (_attrs.attributes) {
            jQuery.extend(_attrs, _attrs.attributes);
        }
        // Initialize all important parameters
        _this._mgrs = {};
        _this._inst = null;
        _this._children = [];
        _this._type = _attrs["type"];
        _this.id = _attrs["id"];
        // Add this widget to the given parent widget
        if (_parent != null) {
            _parent.addChild(_this);
        }
        // The supported widget classes array defines a whitelist for all widget
        // classes or interfaces child widgets have to support.
        _this.supportedWidgetClasses = [et2_widget];
        if (_attrs["id"]) {
            // Create a namespace for this object
            if (_this._createNamespace()) {
                _this.checkCreateNamespace(_attrs);
            }
        }
        if (_this.id) {
            //this.id = this.id.replace(/\[/g,'&#x5B;').replace(/]/g,'&#x5D;');
        }
        // Add all attributes hidden in the content arrays to the attributes
        // parameter
        _this.transformAttributes(_attrs);
        // Create a local copy of the options object
        _this.options = et2_cloneObject(_attrs);
        return _this;
    }
    /**
     * The destroy function destroys all children of the widget, removes itself
     * from the parents children list.
     * In all classes derrived from et2_widget ALWAYS override the destroy
     * function and remove ALL references to other objects. Also remember to
     * unbind ANY event this widget created and to remove all DOM-Nodes it
     * created.
     */
    et2_widget.prototype.destroy = function () {
        // Call the destructor of all children
        for (var i = this._children.length - 1; i >= 0; i--) {
            this._children[i].destroy();
        }
        // Remove this element from the parent, if it exists
        if (typeof this._parent != "undefined" && this._parent !== null) {
            this._parent.removeChild(this);
        }
        // Free the array managers if they belong to this widget
        for (var key in this._mgrs) {
            if (this._mgrs[key] && this._mgrs[key].owner == this) {
                this._mgrs[key].destroy();
            }
        }
    };
    et2_widget.prototype.getType = function () {
        return this._type;
    };
    et2_widget.prototype.setType = function (_type) {
        this._type = _type;
    };
    /**
     * Creates a copy of this widget. The parameters given are passed to the
     * constructor of the copied object. If the parameters are omitted, _parent
     * is defaulted to null
     *
     * @param {et2_widget} _parent parent to set for clone, default null
     */
    et2_widget.prototype.clone = function (_parent) {
        // Default _parent to null
        if (typeof _parent == "undefined") {
            _parent = null;
        }
        // Create the copy
        var copy = new this.constructor(_parent, this.options);
        // Assign this element to the copy
        copy.assign(this);
        return copy;
    };
    et2_widget.prototype.assign = function (_obj) {
        if (typeof _obj._children == "undefined") {
            this.egw().debug("log", "Foo!");
        }
        // Create a clone of all child elements of the given object
        for (var i = 0; i < _obj._children.length; i++) {
            _obj._children[i].clone(this);
        }
        // Copy a reference to the content array manager
        this.setArrayMgrs(_obj.mgrs);
    };
    /**
     * Returns the parent widget of this widget
     */
    et2_widget.prototype.getParent = function () {
        return this._parent;
    };
    /**
     * Returns the list of children of this widget.
     */
    et2_widget.prototype.getChildren = function () {
        return this._children;
    };
    /**
     * Returns the base widget
     */
    et2_widget.prototype.getRoot = function () {
        if (this._parent != null) {
            return this._parent.getRoot();
        }
        else {
            return this;
        }
    };
    /**
     * Inserts an child at the end of the list.
     *
     * @param _node is the node which should be added. It has to be an instance
     * 	of et2_widget
     */
    et2_widget.prototype.addChild = function (_node) {
        this.insertChild(_node, this._children.length);
    };
    /**
     * Inserts a child at the given index.
     *
     * @param _node is the node which should be added. It has to be an instance
     * 	of et2_widget
     * @param _idx is the position at which the element should be added.
     */
    et2_widget.prototype.insertChild = function (_node, _idx) {
        // Check whether the node is one of the supported widget classes.
        if (this.isOfSupportedWidgetClass(_node)) {
            // Remove the node from its original parent
            if (_node._parent) {
                _node._parent.removeChild(_node);
            }
            _node._parent = this;
            this._children.splice(_idx, 0, _node);
        }
        else {
            this.egw().debug("error", "Widget " + _node._type + " is not supported by this widget class", this);
            //			throw("Widget is not supported by this widget class!");
        }
    };
    /**
     * Removes the child but does not destroy it.
     *
     * @param {et2_widget} _node child to remove
     */
    et2_widget.prototype.removeChild = function (_node) {
        // Retrieve the child from the child list
        var idx = this._children.indexOf(_node);
        if (idx >= 0) {
            // This element is no longer parent of the child
            _node._parent = null;
            this._children.splice(idx, 1);
        }
    };
    /**
     * Searches an element by id in the tree, descending into the child levels.
     *
     * @param _id is the id you're searching for
     */
    et2_widget.prototype.getWidgetById = function (_id) {
        if (this.id == _id) {
            return this;
        }
        if (!this._children)
            return null;
        for (var i = 0; i < this._children.length; i++) {
            var elem = this._children[i].getWidgetById(_id);
            if (elem != null) {
                return elem;
            }
        }
        if (this.id && _id.indexOf('[') > -1 && this._children.length) {
            var ids = (new et2_core_arrayMgr_1.et2_arrayMgr()).explodeKey(_id);
            var widget = this;
            for (var i = 0; i < ids.length && widget !== null; i++) {
                widget = widget.getWidgetById(ids[i]);
            }
            return widget;
        }
        return null;
    };
    /**
     * Function which allows iterating over the complete widget tree.
     *
     * @param _callback is the function which should be called for each widget
     * @param _context is the context in which the function should be executed
     * @param _type is an optional parameter which specifies a class/interface
     * 	the elements have to be instanceOf.
     */
    et2_widget.prototype.iterateOver = function (_callback, _context, _type) {
        if (typeof _type == "undefined") {
            _type = et2_widget;
        }
        if (this.isInTree() && this.instanceOf(_type)) {
            _callback.call(_context, this);
        }
        for (var i = 0; i < this._children.length; i++) {
            this._children[i].iterateOver(_callback, _context, _type);
        }
    };
    /**
     * Returns true if the widget currently resides in the visible part of the
     * widget tree. E.g. Templates which have been cloned are not in the visible
     * part of the widget tree.
     *
     * @param _sender
     * @param {boolean} _vis can be used by widgets overwriting this function - simply
     * 	write
     * 		return this._super(inTree);
     *	when calling this function the _vis parameter does not have to be supplied.
     */
    et2_widget.prototype.isInTree = function (_sender, _vis) {
        if (typeof _vis == "undefined") {
            _vis = true;
        }
        if (this._parent) {
            return _vis && this._parent.isInTree(this);
        }
        return _vis;
    };
    et2_widget.prototype.isOfSupportedWidgetClass = function (_obj) {
        for (var i = 0; i < this.supportedWidgetClasses.length; i++) {
            if (_obj instanceof this.supportedWidgetClasses[i]) {
                return true;
            }
        }
        return false;
    };
    /**
     * The parseXMLAttrs function takes an XML DOM attributes object
     * and adds the given attributes to the _target associative array. This
     * function also parses the legacyOptions.
     *
     * @param _attrsObj is the XML DOM attributes object
     * @param {object} _target is the object to which the attributes should be written.
     * @param {et2_widget} _proto prototype with attributes and legacyOptions attribute
     */
    et2_widget.prototype.parseXMLAttrs = function (_attrsObj, _target, _proto) {
        // Check whether the attributes object is really existing, if not abort
        if (typeof _attrsObj == "undefined") {
            return;
        }
        // Iterate over the given attributes and parse them
        var mgr = this.getArrayMgr("content");
        for (var i = 0; i < _attrsObj.length; i++) {
            var attrName = _attrsObj[i].name;
            var attrValue = _attrsObj[i].value;
            // Special handling for the legacy options
            if (attrName == "options" && _proto.constructor.legacyOptions && _proto.constructor.legacyOptions.length > 0) {
                var legacy = _proto.constructor.legacyOptions || [];
                var attrs = et2_attribute_registry[Object.getPrototypeOf(_proto).constructor.name] || {};
                // Check for modifications on legacy options here.  Normal modifications
                // are handled in widget constructor, but it's too late for legacy options then
                if (_target.id && this.getArrayMgr("modifications").getEntry(_target.id)) {
                    var mod = this.getArrayMgr("modifications").getEntry(_target.id);
                    if (typeof mod.options != "undefined")
                        attrValue = _attrsObj[i].value = mod.options;
                }
                // expand legacyOptions with content
                if (attrValue.charAt(0) == '@' || attrValue.indexOf('$') != -1) {
                    attrValue = mgr.expandName(attrValue);
                }
                // Parse the legacy options (as a string, other types not allowed)
                var splitted = et2_csvSplit(attrValue + "");
                for (var j = 0; j < splitted.length && j < legacy.length; j++) {
                    // Blank = not set, unless there's more legacy options provided after
                    if (splitted[j].trim().length === 0 && legacy.length >= splitted.length)
                        continue;
                    // Check to make sure we don't overwrite a current option with a legacy option
                    if (typeof _target[legacy[j]] === "undefined") {
                        attrValue = splitted[j];
                        /**
                        If more legacy options than expected, stuff them all in the last legacy option
                        Some legacy options take a comma separated list.
                         */
                        if (j == legacy.length - 1 && splitted.length > legacy.length) {
                            attrValue = splitted.slice(j);
                        }
                        var attr = et2_attribute_registry[_proto.constructor.name][legacy[j]] || {};
                        // If the attribute is marked as boolean, parse the
                        // expression as bool expression.
                        if (attr.type == "boolean") {
                            attrValue = mgr.parseBoolExpression(attrValue);
                        }
                        else if (typeof attrValue != "object") {
                            attrValue = mgr.expandName(attrValue);
                        }
                        _target[legacy[j]] = attrValue;
                    }
                }
            }
            else if (attrName == "readonly" && typeof _target[attrName] != "undefined") {
                // do NOT overwrite already evaluated readonly attribute
            }
            else {
                var attrs = et2_attribute_registry[_proto.constructor.name] || {};
                if (mgr != null && typeof attrs[attrName] != "undefined") {
                    var attr = attrs[attrName];
                    // If the attribute is marked as boolean, parse the
                    // expression as bool expression.
                    if (attr.type == "boolean") {
                        attrValue = mgr.parseBoolExpression(attrValue);
                    }
                    else {
                        attrValue = mgr.expandName(attrValue);
                    }
                }
                // Set the attribute
                _target[attrName] = attrValue;
            }
        }
    };
    /**
     * Apply the "modifications" to the element and translate attributes marked
     * with "translate: true"
     *
     * @param {object} _attrs
     */
    et2_widget.prototype.transformAttributes = function (_attrs) {
        // Apply the content of the modifications array
        if (this.id) {
            if (typeof this.id != "string") {
                console.log(this.id);
            }
            if (this.getArrayMgr("modifications")) {
                var data = this.getArrayMgr("modifications").getEntry(this.id);
                // Check for already inside namespace
                if (this._createNamespace() && this.getArrayMgr("modifications").perspectiveData.owner == this) {
                    data = this.getArrayMgr("modifications").data;
                }
                if (typeof data === 'object') {
                    for (var key in data) {
                        _attrs[key] = data[key];
                    }
                }
            }
        }
        // Translate the attributes
        for (var key in _attrs) {
            if (_attrs[key] && typeof this.attributes[key] != "undefined") {
                if (this.attributes[key].translate === true ||
                    (this.attributes[key].translate === "!no_lang" && !_attrs["no_lang"])) {
                    _attrs[key] = this.egw().lang(_attrs[key]);
                }
            }
        }
    };
    /**
     * Create a et2_widget from an XML node.
     *
     * First the type and attributes are read from the node.  Then the readonly & modifications
     * arrays are checked for changes specific to the loaded data.  Then the appropriate
     * constructor is called.  After the constructor returns, the widget has a chance to
     * further initialize itself from the XML node when the widget's loadFromXML() method
     * is called with the node.
     *
     * @param _node XML node to read
     * @param _name XML node name
     *
     * @return et2_widget
     */
    et2_widget.prototype.createElementFromNode = function (_node, _name) {
        var attributes = {};
        // Parse the "readonly" and "type" flag for this element here, as they
        // determine which constructor is used
        var _nodeName = attributes["type"] = _node.getAttribute("type") ?
            _node.getAttribute("type") : _node.nodeName.toLowerCase();
        var readonly = attributes["readonly"] = this.getArrayMgr("readonlys") ?
            this.getArrayMgr("readonlys").isReadOnly(_node.getAttribute("id"), _node.getAttribute("readonly"), typeof this.readonly !== 'undefined' ? this.readonly : this.options.readonly) : false;
        // Check to see if modifications change type
        var modifications = this.getArrayMgr("modifications");
        if (modifications && _node.getAttribute("id")) {
            var entry = modifications.getEntry(_node.getAttribute("id"));
            if (entry == null) {
                // Try again, but skip the fancy stuff
                // TODO: Figure out why the getEntry() call doesn't always work
                var entry = modifications.data[_node.getAttribute("id")];
                if (entry) {
                    this.egw().debug("warn", "getEntry(" + _node.getAttribute("id") + ") failed, but the data is there.", modifications, entry);
                }
                else {
                    // Try the root, in case a namespace got missed
                    entry = modifications.getRoot().getEntry(_node.getAttribute("id"));
                }
            }
            if (entry && entry.type && typeof entry.type === 'string') {
                _nodeName = attributes["type"] = entry.type;
            }
            entry = null;
        }
        // if _nodeName / type-attribute contains something to expand (eg. type="@${row}[type]"),
        // we need to expand it now as it defines the constructor and by that attributes parsed via parseXMLAttrs!
        if (_nodeName.charAt(0) == '@' || _nodeName.indexOf('$') >= 0) {
            _nodeName = attributes["type"] = this.getArrayMgr('content').expandName(_nodeName);
        }
        // Get the constructor - if the widget is readonly, use the special "_ro"
        // constructor if it is available
        var constructor = typeof et2_registry[_nodeName] == "undefined" ?
            et2_placeholder : et2_registry[_nodeName];
        if (readonly === true && typeof et2_registry[_nodeName + "_ro"] != "undefined") {
            constructor = et2_registry[_nodeName + "_ro"];
        }
        // Parse the attributes from the given XML attributes object
        this.parseXMLAttrs(_node.attributes, attributes, constructor.prototype);
        // Do an sanity check for the attributes
        et2_core_inheritance_1.ClassWithAttributes.generateAttributeSet(et2_attribute_registry[constructor.name], attributes);
        // Creates the new widget, passes this widget as an instance and
        // passes the widgetType. Then it goes on loading the XML for it.
        var widget = new constructor(this, attributes);
        // Load the widget itself from XML
        widget.loadFromXML(_node);
        return widget;
    };
    /**
     * Loads the widget tree from an XML node
     *
     * @param _node xml node
     */
    et2_widget.prototype.loadFromXML = function (_node) {
        // Load the child nodes.
        for (var i = 0; i < _node.childNodes.length; i++) {
            var node = _node.childNodes[i];
            var widgetType = node.nodeName.toLowerCase();
            if (widgetType == "#comment") {
                continue;
            }
            if (widgetType == "#text") {
                if (node.data.replace(/^\s+|\s+$/g, '')) {
                    this.loadContent(node.data);
                }
                continue;
            }
            // Create the new element
            this.createElementFromNode(node);
        }
    };
    /**
     * Called whenever textNodes are loaded from the XML tree
     *
     * @param _content
     */
    et2_widget.prototype.loadContent = function (_content) {
    };
    /**
     * Called when loading the widget (sub-tree) is finished. First when this
     * function is called, the DOM-Tree is created. loadingFinished is
     * recursively called for all child elements. Do not directly override this
     * function but the doLoadingFinished function which is executed before
     * descending deeper into the DOM-Tree.
     *
     * Some widgets (template) do not load immediately because they request
     * additional resources via AJAX.  They will return a Deferred Promise object.
     * If you call loadingFinished(promises) after creating such a widget
     * programmatically, you might need to wait for it to fully complete its
     * loading before proceeding.  In that case use:
     * <code>
     * var promises = [];
     * widget.loadingFinished(promises);
     * jQuery.when.apply(null, promises).done( doneCallback );
     * </code>
     * @see {@link http://api.jquery.com/category/deferred-object/|jQuery Deferred}
     *
     * @param {Promise[]} promises List of promises from widgets that are not done.  Pass an empty array, it will be filled if needed.
     */
    et2_widget.prototype.loadingFinished = function (promises) {
        // Call all availble setters
        this.initAttributes(this.options);
        // Make sure promises is defined to avoid errors.
        // We'll warn (below) if programmer should have passed it.
        if (typeof promises == "undefined") {
            promises = [];
            var warn_if_deferred = true;
        }
        var loadChildren = function () {
            // Descend recursively into the tree
            for (var i = 0; i < this._children.length; i++) {
                try {
                    this._children[i].loadingFinished(promises);
                }
                catch (e) {
                    egw.debug("error", "There was an error with a widget:\nError:%o\nProblem widget:%o", e.valueOf(), this._children[i], e.stack);
                }
            }
        };
        var result = this.doLoadingFinished();
        if (typeof result == "boolean" && result) {
            // Simple widget finishes nicely
            loadChildren.apply(this, arguments);
        }
        else if (typeof result == "object" && result.done) {
            // Warn if list was not provided
            if (warn_if_deferred) {
                // Might not be a problem, but if you need the widget to be really loaded, it could be
                egw.debug("warn", "Loading was deferred for widget %o, but creator is not checking.  Pass a list to loadingFinished().", this);
            }
            // Widget is waiting.  Add to the list
            promises.push(result);
            // Fihish loading when it's finished
            result.done(jQuery.proxy(loadChildren, this));
        }
    };
    /**
     * The initAttributes function sets the attributes to their default
     * values. The attributes are not overwritten, which means, that the
     * default is only set, if either a setter exists or this[propName] does
     * not exist yet.
     *
     * Overwritten here to compile legacy JS code in attributes of type "js"
     *
     * @param {object} _attrs
     */
    et2_widget.prototype.initAttributes = function (_attrs) {
        for (var key in _attrs) {
            if (typeof this.attributes[key] != "undefined" && !this.attributes[key].ignore && !(_attrs[key] == undefined)) {
                var val = _attrs[key];
                // compile string values of attribute type "js" to functions
                if (this.attributes[key].type == 'js' && typeof _attrs[key] == 'string') {
                    val = et2_compileLegacyJS(val, this, this.instanceOf(et2_inputWidget) ? this.getInputNode() :
                        (this.implements(et2_IDOMNode) ? this.getDOMNode() : null));
                }
                this.setAttribute(key, val, false);
            }
        }
    };
    /**
     * Does specific post-processing after the widget is loaded.  Most widgets should not
     * need to do anything here, it should all be done before.
     *
     * @return {boolean|Promise} True if the widget is fully loaded, false to avoid procesing children,
     * or a Promise if loading is not actually finished (eg. waiting for AJAX)
     *
     * @see {@link http://api.jquery.com/deferred.promise/|jQuery Promise}
     */
    et2_widget.prototype.doLoadingFinished = function () {
        return true;
    };
    /**
     * The egw function returns the instance of the client side api belonging
     * to this widget tree. The api instance can be set in the "container"
     * widget using the setApiInstance function.
     */
    et2_widget.prototype.egw = function () {
        // The _egw property is not set
        if (typeof this._egw === 'undefined') {
            if (this._parent != null) {
                return this._parent.egw();
            }
            // Get the window this object belongs to
            var wnd = null;
            if (this.implements(et2_IDOMNode)) {
                var node = this.getDOMNode();
                if (node && node.ownerDocument) {
                    wnd = node.ownerDocument.parentNode || node.ownerDocument.defaultView;
                }
            }
            // If we're the root object, return the phpgwapi API instance
            return egw('phpgwapi', wnd);
        }
        return this._egw;
    };
    /**
     * Sets the client side api instance. It can be retrieved by the widget tree
     * by using the "egw()" function.
     *
     * @param {IegwAppLocal} _egw egw object to set
     */
    et2_widget.prototype.setApiInstance = function (_egw) {
        this._egw = _egw;
    };
    /**
     * Sets all array manager objects - this function can be used to set the
     * root array managers of the container object.
     *
     * @param {object} _mgrs
     */
    et2_widget.prototype.setArrayMgrs = function (_mgrs) {
        this._mgrs = et2_cloneObject(_mgrs);
    };
    /**
     * Returns an associative array containing the top-most array managers.
     *
     * @param _mgrs is used internally and should not be supplied.
     */
    et2_widget.prototype.getArrayMgrs = function (_mgrs) {
        if (typeof _mgrs == "undefined") {
            _mgrs = {};
        }
        // Add all managers of this object to the result, if they have not already
        // been set in the result
        for (var key in this._mgrs) {
            if (typeof _mgrs[key] == "undefined") {
                _mgrs[key] = this._mgrs[key];
            }
        }
        // Recursively applies this function to the parent widget
        if (this._parent) {
            this._parent.getArrayMgrs(_mgrs);
        }
        return _mgrs;
    };
    /**
     * Sets the array manager for the given part
     *
     * @param {string} _part which array mgr to set
     * @param {object} _mgr
     */
    et2_widget.prototype.setArrayMgr = function (_part, _mgr) {
        this._mgrs[_part] = _mgr;
    };
    /**
     * Returns the array manager object for the given part
     *
     * @param {string} managed_array_type name of array mgr to return
     */
    et2_widget.prototype.getArrayMgr = function (managed_array_type) {
        if (this._mgrs && typeof this._mgrs[managed_array_type] != "undefined") {
            return this._mgrs[managed_array_type];
        }
        else if (this._parent) {
            return this._parent.getArrayMgr(managed_array_type);
        }
        return null;
    };
    /**
     * Checks whether a namespace exists for this element in the content array.
     * If yes, an own perspective of the content array is created. If not, the
     * parent content manager is used.
     *
     * Constructor attributes are passed in case a child needs to make decisions
     */
    et2_widget.prototype.checkCreateNamespace = function (_attrs) {
        // Get the content manager
        var mgrs = this.getArrayMgrs();
        for (var key in mgrs) {
            var mgr = mgrs[key];
            // Get the original content manager if we have already created a
            // perspective for this node
            if (typeof this._mgrs[key] != "undefined" && mgr.perspectiveData.owner == this) {
                mgr = mgr.parentMgr;
            }
            // Check whether the manager has a namespace for the id of this object
            var entry = mgr.getEntry(this.id);
            if (typeof entry === 'object' && entry !== null || this.id) {
                // The content manager has an own node for this object, so
                // create an own perspective.
                this._mgrs[key] = mgr.openPerspective(this, this.id);
            }
            else {
                // The current content manager does not have an own namespace for
                // this element, so use the content manager of the parent.
                delete (this._mgrs[key]);
            }
        }
    };
    /**
     * Widgets that do support a namespace should override and return true.
     *
     * Since a private attribute doesn't get instanciated properly before it's needed,
     * we use a method so we can get what we need while still in the constructor.
     *
     * @private
     */
    et2_widget.prototype._createNamespace = function () {
        return false;
    };
    /**
     * Sets the instance manager object (of type etemplate2, see etemplate2.js)
     *
     * @param {etemplate2} _inst
     */
    et2_widget.prototype.setInstanceManager = function (_inst) {
        this._inst = _inst;
    };
    /**
     * Returns the instance manager
     *
     * @return {etemplate2}
     */
    et2_widget.prototype.getInstanceManager = function () {
        if (this._inst != null) {
            return this._inst;
        }
        else if (this._parent) {
            return this._parent.getInstanceManager();
        }
        return null;
    };
    /**
     * Returns the path into the data array.  By default, array manager takes care of
     * this, but some extensions need to override this
     */
    et2_widget.prototype.getPath = function () {
        var path = this.getArrayMgr("content").getPath();
        // Prevent namespaced widgets with value from going an extra layer deep
        if (this.id && this._createNamespace() && path[path.length - 1] == this.id)
            path.pop();
        return path;
    };
    et2_widget._attributes = {
        "id": {
            "name": "ID",
            "type": "string",
            "description": "Unique identifier of the widget"
        },
        "no_lang": {
            "name": "No translation",
            "type": "boolean",
            "default": false,
            "description": "If true, no translations are made for this widget"
        },
        /**
         * Ignore the "span" property by default - it is read by the grid and
         * other widgets.
         */
        "span": {
            "ignore": true
        },
        /**
         * Ignore the "type" tag - it is read by the "createElementFromNode"
         * function and passed as second parameter of the widget constructor
         */
        "type": {
            "name": "Widget type",
            "type": "string",
            "ignore": true,
            "description": "What kind of widget this is"
        },
        /**
         * Ignore the readonly tag by default - its also read by the
         * "createElementFromNode" function.
         */
        "readonly": {
            "ignore": true
        },
        /**
         * Widget's attributes
         */
        attributes: {
            "name": "Widget attributes",
            "type": "any",
            "ignore": true,
            "description": "Object of widget attributes"
        }
    };
    // Set the legacyOptions array to the names of the properties the "options"
    // attribute defines.
    et2_widget.legacyOptions = [];
    return et2_widget;
}(et2_core_inheritance_1.ClassWithAttributes));
exports.et2_widget = et2_widget;
//# sourceMappingURL=et2_core_widget.js.map