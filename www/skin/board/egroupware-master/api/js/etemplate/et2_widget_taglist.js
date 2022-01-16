"use strict";
/**
 * EGroupware eTemplate2 - JS Tag list object
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package etemplate
 * @subpackage api
 * @link: https://www.egroupware.org
 * @author Nathan Gray
 * @copyright Nathan Gray 2013
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
    et2_core_inputWidget;
    /vendor/egroupware/magicsuggest/magicsuggest.js;
*/
var et2_widget_selectbox_1 = require("./et2_widget_selectbox");
var et2_core_widget_1 = require("./et2_core_widget");
var et2_core_inheritance_1 = require("./et2_core_inheritance");
/**
 * Tag list widget
 *
 * A cross between auto complete, selectbox and chosen multiselect
 *
 * Uses MagicSuggest library
 * @see http://nicolasbize.github.io/magicsuggest/
 * @augments et2_selectbox
 */
var et2_taglist = /** @class */ (function (_super) {
    __extends(et2_taglist, _super);
    /**
     * Construtor
     */
    function et2_taglist(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist._attributes, _child || {})) || this;
        // Allows sub-widgets to override options to the library
        _this.lib_options = {};
        _this.div = null;
        _this.multiple_toggle = null;
        _this._multiple = false;
        _this.taglist = null;
        _this.$taglist = null;
        // Parent sets multiple based on rows, we just re-set it
        _this.options.multiple = _attrs.multiple;
        // jQuery wrapped DOM node
        _this.div = jQuery("<div></div>").addClass('et2_taglist');
        _this.multiple_toggle = jQuery("<div></div>")
            .addClass('toggle')
            .on('click', jQuery.proxy(function () {
            this._set_multiple(!this._multiple);
        }, _this))
            .appendTo(_this.div);
        _this._multiple = false;
        // magicSuggest object
        _this.taglist = null;
        _this.setDOMNode(_this.div[0]);
        return _this;
    }
    et2_taglist.prototype.destroy = function () {
        if (this.div != null) {
            // Undo the plugin
        }
        if (this._hide_timeout) {
            window.clearTimeout(this._hide_timeout);
        }
        _super.prototype.destroy.apply(this, arguments);
    };
    et2_taglist.prototype.transformAttributes = function (_attrs) {
        _super.prototype.transformAttributes.apply(this, arguments);
        // Handle url parameters - they should be an object
        if (typeof _attrs.autocomplete_params == 'string') {
            try {
                _attrs.autocomplete_params = JSON.parse(_attrs.autocomplete_params);
            }
            catch (e) {
                this.egw().debug('warn', 'Invalid autocomplete_params: ' + _attrs.autocomplete_params);
            }
        }
        if (_attrs.multiple !== 'toggle') {
            _attrs.multiple = et2_evalBool(_attrs.multiple);
        }
    };
    et2_taglist.prototype.doLoadingFinished = function () {
        _super.prototype.doLoadingFinished.call(this);
        var widget = this;
        // Initialize magicSuggest here
        if (this.taglist != null)
            return;
        // If no options or ajax url, try the array mgr
        if (this.options.select_options === null && !this.options.autocomplete_url) {
            this.set_select_options(this.getArrayMgr("sel_options").getEntry(this.id));
        }
        // MagicSuggest would replaces our div, so add a wrapper instead
        this.taglist = jQuery('<div/>').appendTo(this.div);
        this.taglist_options = jQuery.extend({
            // magisuggest can NOT work setting an empty autocomplete url, it will then call page url!
            // --> setting an empty options list instead
            data: this.options.autocomplete_url ? this.options.autocomplete_url :
                this.options.select_options || {},
            dataUrlParams: this.options.autocomplete_params,
            method: 'GET',
            displayField: "label",
            invalidCls: 'invalid ui-state-error',
            placeholder: this.options.empty_label,
            hideTrigger: this.options.multiple === true,
            noSuggestionText: this.egw().lang("No suggestions"),
            required: this.options.required,
            allowFreeEntries: this.options.allowFreeEntries,
            useTabKey: true,
            useCommaKey: this.options.useCommaKey,
            disabled: this.options.disabled || this.options.readonly,
            editable: !(this.options.disabled || this.options.readonly),
            // If there are select options, enable toggle on click so user can see them
            toggleOnClick: !jQuery.isEmptyObject(this.options.select_options),
            selectionRenderer: jQuery.proxy(this.options.tagRenderer || this.selectionRenderer, this),
            renderer: jQuery.proxy(this.options.listRenderer || this.selectionRenderer, this),
            maxSelection: this.options.multiple ? this.options.maxSelection : 1,
            maxSelectionRenderer: jQuery.proxy(function (v) { this.egw().lang('You can not choose more then %1 item(s)!', v); }, this),
            minCharsRenderer: jQuery.proxy(function (v) {
                this.egw().lang(v == 1 ? 'Please type 1 more character' : 'Please type %1 more characters', v);
            }, this),
            width: this.options.width,
            highlight: false,
            selectFirst: true,
            groupBy: this.options.groupBy && typeof this.options.groupBy == 'string' ? this.options.groupBy : null,
            minChars: parseInt(this.options.minChars) ? parseInt(this.options.minChars) : 0,
            editModeEnabled: this.options.editModeEnabled
        }, this.lib_options);
        if (this.options.height) {
            this.div.css('height', '');
            this.taglist_options.maxDropHeight = parseInt(this.options.height);
        }
        // If only one, do not require minimum chars or the box won't drop down
        if (this.options.multiple !== true) {
            this.taglist_options.minChars = 0;
        }
        this.taglist = this.taglist.magicSuggest(this.taglist_options);
        this.$taglist = jQuery(this.taglist);
        if (this.options.value) {
            this.taglist.addToSelection(this.options.value, true);
        }
        this._set_multiple(this.options.multiple);
        // AJAX _and_ select options - use custom function
        if (this.options.autocomplete_url && !jQuery.isEmptyObject(this.options.select_options)) {
            this.taglist.setData(function (query, cfg) {
                return widget._data.call(widget, query, cfg);
            });
        }
        this.$taglist
            // Display / hide a loading icon while fetching
            .on("beforeload", function () { this.container.prepend('<div class="ui-icon loading"/>'); })
            .on("load", function () { jQuery('.loading', this.container).remove(); })
            // Keep focus when selecting from the list
            .on("selectionchange", function () {
            if (document.activeElement === document.body ||
                widget.div.has(document.activeElement).length > 0) {
                jQuery('input', this.container).focus();
            }
            widget.resize();
        })
            // Bind keyup so we can start ajax search when we like
            .on('keyup.start_search', jQuery.proxy(this._keyup, this))
            .on('blur', jQuery.proxy(function () {
            if (this.div) {
                this.div.removeClass('ui-state-active');
                this.resize();
            }
        }, this))
            // Hide tooltip when you're editing, it can get annoying otherwise
            .on('focus', function () {
            jQuery('.egw_tooltip').hide();
            widget.div.addClass('ui-state-active');
        })
            // If not using autoSelect, avoid some errors with selection starting
            // with the group
            .on('load expand', function () {
            if (widget.taglist && widget.taglist_options.groupBy) {
                window.setTimeout(function () {
                    if (widget && widget.taglist.combobox) {
                        widget.taglist.combobox.find('.ms-res-group.ms-res-item-active')
                            .removeClass('ms-res-item-active');
                    }
                }, 1);
            }
        })
            // Position absolute to break out of containers
            .on('expand', jQuery.proxy(function () {
            var taglist = this.taglist;
            this.div.addClass('expanded');
            var background = this.taglist.combobox.css('background');
            var wrapper = jQuery(document.createElement('div'))
                // Keep any additional classes
                .addClass(this.div.attr('class'))
                .css({
                'position': 'absolute',
                'width': 'auto'
            })
                .appendTo('body')
                .position({ my: 'left top', at: 'left bottom', of: this.taglist.container });
            this.taglist.combobox
                .width(this.taglist.container.innerWidth())
                .appendTo(wrapper)
                .css('background', background);
            // Make sure it doesn't go out of the window
            var bottom = (wrapper.offset().top + this.taglist.combobox.outerHeight(true));
            if (bottom > jQuery(window).height()) {
                this.taglist.combobox.height(this.taglist.combobox.height() - (bottom - jQuery(window).height()) - 5);
            }
            // Close dropdown if click elsewhere or scroll the sidebox,
            // but wait until after or it will close immediately
            window.setTimeout(function () {
                jQuery('.egw_fw_ui_scrollarea').one('scroll mousewheel', function () {
                    taglist.collapse();
                });
                jQuery('body').one('click', function () {
                    taglist.collapse();
                    if (document.activeElement === document.body ||
                        widget.div.has(document.activeElement).length > 0) {
                        if (widget.options.allowFreeEntries)
                            taglist.container.blur();
                        taglist.input.focus();
                    }
                    else if (widget.options.allowFreeEntries) {
                        taglist.container.blur();
                    }
                });
            }, 100);
            this.$taglist.one('collapse', function () {
                wrapper.remove();
            });
        }, this))
            .on('collapse', function () {
            widget.div.removeClass('expanded');
        });
        jQuery('.ms-trigger', this.div).on('click', function (e) {
            e.stopPropagation();
        });
        // Unbind change handler of widget's ancestor to stop it from bubbling
        // taglist has its own onchange
        jQuery(this.getDOMNode()).unbind('change.et2_inputWidget');
        // This handles clicking on a suggestion from the list in an et2 friendly way
        // onChange
        if (this.options.onchange && typeof this.onchange === 'function') {
            this.$taglist.on("selectionchange", jQuery.proxy(this.change, this));
        }
        // onClick - pass more than baseWidget, so unbind it to avoid double callback
        if (typeof this.onclick == 'function') {
            this.div.unbind("click.et2_baseWidget")
                .on("click.et2_baseWidget", '.ms-sel-item', jQuery.proxy(function (event) {
                // Pass the target as expected, but also the data for that tag
                this.click(/*event.target,*/ jQuery(event.target).parent().data("json"));
            }, this));
        }
        // onFocus
        if (typeof this.onfocus == 'function') {
            this.$taglist.focus(function (e) {
                widget.onfocus.call(widget.taglist, e, widget);
            });
        }
        // Do size limit checks
        this.resize();
        // Make sure magicsuggest loses focus class to prevent issues with
        // multiple on the page
        this.div.on('blur', 'input', function () {
            jQuery('.ms-ctn-focus', widget.div).removeClass('ms-ctn-focus');
        });
        this.resetDirty();
        return true;
    };
    /**
     * convert _options to taglist data [{id:...,label:...},...] format
     *
     * @param {(object|array)} _options id: label or id: {label: ..., title: ...} pairs, or array if id's are 0, 1, ...
     */
    et2_taglist.prototype._options2data = function (_options) {
        var options = jQuery.isArray(_options) ? jQuery.extend({}, _options) : _options;
        var data = [];
        for (var id in options) {
            var option = { id: id };
            if (typeof options[id] == 'object') {
                jQuery.extend(option, options[id]);
                if (option["value"])
                    option["id"] = option["value"];
                option["label"] = this.options.no_lang ? option["label"] : this.egw().lang(option["label"]);
            }
            else {
                option["label"] = this.options.no_lang ? options[id] : this.egw().lang(options[id]);
            }
            data.push(option);
        }
        return data;
    };
    /**
     * Custom data function to return local options if there is nothing
     * typed, or query via AJAX if user typed something
     *
     * @param {string} query
     * @param {Object} cfg Magicsuggest's internal configuration
     * @returns {Array}
     */
    et2_taglist.prototype._data = function (query, cfg) {
        var return_value = this.options.select_options || {};
        if (!jQuery.isEmptyObject(this.options.select_options) && !this._query_server
            || query.trim().length < this.taglist_options.minChars
            || !this.options.autocomplete_url) {
            // Check options, if there's a match there (that is not already
            // selected), do not ask server
            var filtered_1 = [];
            var selected_1 = this.taglist.getSelection();
            jQuery.each(this.options.select_options, function (index, obj) {
                var name = obj.label;
                if (selected_1.indexOf(obj) < 0 && name.toLowerCase().indexOf(query.toLowerCase()) > -1) {
                    filtered_1.push(obj);
                }
            });
            return_value = filtered_1.length > 0 ? filtered_1 : this.options.autocomplete_url;
        }
        else if (query.trim().length >= this.taglist_options.minChars || this._query_server) {
            // No options - ask server
            return_value = this.options.autocomplete_url;
        }
        this._query_server = false;
        // Make sure we don't give an empty string, that fails when we try to query
        if (return_value == this.options.autocomplete_url && !return_value) {
            return_value = [];
        }
        // Turn on local filtering, or trust server to do it
        cfg.mode = typeof return_value === 'string' ? 'remote' : 'local';
        return return_value;
    };
    /**
    * Handler for keyup, used to start ajax search when we like
    *
    * @param {DOMEvent} e
    * @param {Object} taglist
    * @param {jQueryEvent} event
    * @returns {Boolean}
    */
    et2_taglist.prototype._keyup = function (e, taglist, event) {
        if (event.which === jQuery.ui.keyCode.ENTER
            && taglist.combobox.find('.ms-res-item.ms-res-item-active').length == 0
            && this.getType() !== 'taglist-email') {
            // Change keycode to abort the validation process
            // This means enter does not add a tag
            event.keyCode = jQuery.ui.keyCode.DOWN;
            this._query_server = true;
            this.taglist.collapse();
            this.taglist.expand();
            this._query_server = false;
            this.div.find('.ms-res-item-active')
                .removeClass('ms-res-item-active');
            event.preventDefault();
            return false;
        }
    };
    /**
     * Set all options from current static select_options list
     */
    et2_taglist.prototype.select_all = function () {
        var all = [];
        for (var id in this.options.select_options)
            all.push(id);
        this.set_value(all);
    };
    /**
     * Render a single item, taking care of correctly escaping html special chars
     *
     * @param item
     * @returns {String}
     */
    et2_taglist.prototype.selectionRenderer = function (item) {
        var label = jQuery('<span>').text(item.label);
        if (typeof item.title != 'undefined')
            label.attr('title', item.title);
        if (typeof item.icon != 'undefined') {
            var wrapper = jQuery('<div>').addClass('et2_taglist_tags_icon_wrapper');
            jQuery('<span/>')
                .addClass('et2_taglist_tags_icon')
                .css({ "background-image": "url(" + (item.icon && item.icon.match(/^(http|https|\/)/) ? item.icon : egw.image(item.icon ? item.icon : 'no-image-shown', item.app)) + ")" })
                .appendTo(wrapper);
            label.appendTo(wrapper);
            return wrapper;
        }
        return label;
    };
    et2_taglist.prototype.set_autocomplete_url = function (source) {
        if (source && source[0] != '/' && source.indexOf('http') != 0) {
            source = this.egw().ajaxUrl(source);
        }
        if (this.options.autocomplete_url != source) {
            this.options.autocomplete_url = source;
            // do NOT set an empty autocomplete_url, magicsuggest would use page url instead!
            if (this.taglist == null || !source)
                return;
            var widget_1 = this;
            this.taglist.setData(function (query, cfg) {
                return widget_1._data.call(widget_1, query, cfg);
            });
        }
    };
    /**
     * Set autocomplete parameters
     *
     * @param {object} _params
     */
    et2_taglist.prototype.set_autocomplete_params = function (_params) {
        if (this.options.autocomplete_params != _params) {
            this.options.autocomplete_params = _params;
            if (this.taglist)
                this.taglist.setDataUrlParams(_params);
        }
    };
    /**
     * Set the list of suggested options to a static list.
     *
     * @param {array} _options usual format see _options2data
     */
    et2_taglist.prototype.set_select_options = function (_options) {
        this.options.select_options = this._options2data(_options);
        if (this.taglist == null)
            return;
        var widget = this;
        this.taglist.setData(function (query, cfg) {
            return widget._data.call(widget, query, cfg);
        });
    };
    et2_taglist.prototype.set_disabled = function (disabled) {
        this.options.disabled = disabled;
        if (this.taglist == null)
            return;
        disabled ? this.taglist.disable() : this.taglist.enable();
    };
    et2_taglist.prototype.set_width = function (_width) {
        this.div.width(_width);
        this.options.width = _width;
    };
    /**
     * Normally the widget will display 1 row (multiple off) or expand as needed
     * based on selected entries.  Setting row will limit the max height.
     * @param {number} _rows
     */
    et2_taglist.prototype.set_rows = function (_rows) {
        _rows = parseInt(_rows);
        var css = {
            'max-height': '',
            'height': 'auto'
        };
        if (_rows) {
            var border = this.taglist !== null ?
                this.div.outerHeight(true) - this.taglist.container.innerHeight() :
                0;
            var max = (25 * _rows) + _rows + border;
            css['max-height'] = max + 'px';
            if (this._multiple) {
                css.height = max + 'px';
            }
            this.div.addClass('et2_taglist_small');
        }
        this.div.css(css);
        if (this.options.rows != _rows) {
            if (this.taglist !== null) {
                this.resize();
            }
            this.options.rows = _rows;
        }
    };
    /**
     * Set whether the widget accepts only 1 value, many, or allows the user
     * to toggle between the two.
     *
     * @param {boolean|string} multiple true, false, or 'toggle'
     */
    et2_taglist.prototype.set_multiple = function (multiple) {
        if (multiple != this.options.multiple) {
            this.options.multiple = multiple;
            this._multiple = multiple === true;
            if (this.taglist !== null) {
                this._set_multiple(multiple);
            }
        }
    };
    et2_taglist.prototype._set_multiple = function (multiple) {
        this._multiple = multiple === true;
        this.div.toggleClass('et2_taglist_single', !this._multiple)
            .toggleClass('et2_taglist_toggle', this.options.multiple === 'toggle')
            .removeClass('ui-state-hover')
            .off('click.single');
        if (this._multiple == false) {
            this.div.on('click.single', jQuery.proxy(function () {
                this.taglist.expand();
            }, this));
        }
        this.taglist.setMaxSelection(this._multiple ? this.options.maxSelection : 1);
        if (!this._multiple && this.taglist.getValue().length > 1) {
            this.set_value(multiple ? this.taglist.getValue() : this.taglist.getValue()[0]);
        }
        // This changes sizes, so
        this.set_rows(this.options.rows);
        this.resize();
    };
    /**
     * Set up this widget as size-restricted, so it cannot be as large as needed.
     * Therefore, we hide some things if the user is not interacting.
     */
    et2_taglist.prototype._setup_small = function () {
        this.div.addClass('et2_taglist_small');
        var value_count = this.taglist.getValue().length;
        if (value_count) {
            this.div.attr('data-content', value_count > 1 ? egw.lang('%1 selected', value_count) : '...');
        }
        else {
            this.div.attr('data-content', '');
        }
        this.div
            // Listen to hover on size restricted taglists
            .on('mouseenter.small_size', jQuery.proxy(function () {
            this.div.addClass('ui-state-hover');
            if (this._hide_timeout) {
                window.clearTimeout(this._hide_timeout);
            }
            jQuery('.egw_tooltip').hide();
        }, this))
            .on('mouseleave.small_size', jQuery.proxy(function (event) {
            // Ignore tooltip
            if (event.toElement && jQuery(event.toElement).hasClass('egw_tooltip'))
                return;
            if (this._hide_timeout) {
                window.clearTimeout(this._hide_timeout);
            }
            this._hide_timeout = window.setTimeout(jQuery.proxy(function () {
                this.div.removeClass('ui-state-hover');
                this.taglist.container[0].scrollIntoView();
                // Re-enable tooltip
                this.set_statustext(this.options.statustext);
                this._hide_timeout = null;
            }, this), 500);
        }, this));
        this.$taglist
            .on('blur.small_size', jQuery.proxy(function () {
            this.div.trigger('mouseleave');
            this.taglist.container[0].scrollIntoView();
        }, this))
            .on('focus.small_size', jQuery.proxy(function () {
            this.div.addClass('ui-state-active');
            if (this._hide_timeout) {
                window.clearTimeout(this._hide_timeout);
            }
        }, this));
        this.taglist.container[0].scrollIntoView();
    };
    /**
     * Set value(s) of taglist, add them automatic to select-options, if allowFreeEntries
     *
     * @param value (array of) ids
     */
    et2_taglist.prototype.set_value = function (value) {
        if (value === '' || value === null) {
            value = [];
        }
        else if (typeof value === 'string' && this.options.multiple) {
            value = value.split(',');
        }
        var values = jQuery.isArray(value) ? jQuery.extend([], value) : [value];
        if (!value && this.taglist) {
            this.taglist.clear(true);
            return;
        }
        var result = [];
        var _loop_1 = function (i) {
            var v = values[i];
            if (v && typeof v == 'object' && typeof v.id != 'undefined' && typeof v.label != 'undefined') {
                // already in correct format
            }
            else if (this_1.options.select_options &&
                // Check options
                (result = jQuery.grep(this_1.options.select_options, function (e) {
                    return e.id == v;
                })) && result.length) {
                // Options should have been provided, but they weren't
                // This can happen for ajax source with an existing value
                if (this_1.options.select_options == null) {
                    this_1.options.select_options = [];
                }
                values[i] = result[0] ? result[0] : {
                    id: v,
                    label: v
                };
            }
            else if (this_1.taglist &&
                // Check current selection to avoid going back to server
                (result = jQuery.grep(this_1.taglist.getSelection(), function (e) {
                    return e.id == v;
                })) && result.length) {
                values[i] = result[0] ? result[0] : {
                    id: v,
                    label: v
                };
            }
            else {
                if (typeof values[i].id == 'undefined') {
                    values[i] = {
                        id: v,
                        label: v
                    };
                }
            }
        };
        var this_1 = this;
        for (var i = 0; i < values.length; ++i) {
            _loop_1(i);
        }
        this.options.value = values;
        if (this.taglist == null)
            return;
        // Switch multiple according to attribute and more than 1 value
        if (this.options.multiple !== true) {
            var multiple = this.options.multiple ? values.length > 1 : false;
            if (multiple !== this._multiple) {
                this._set_multiple(multiple);
            }
        }
        this.taglist.clear(true);
        this.taglist.addToSelection(values, true);
    };
    et2_taglist.prototype.getValue = function () {
        if (this.taglist == null)
            return null;
        // trigger blur on taglist to not loose just typed value
        jQuery(this.taglist.container).trigger('blur');
        return this.taglist.getValue();
    };
    /**
     * Resize lets us toggle the 'small' handling
     */
    et2_taglist.prototype.resize = function () {
        this.div.off('.small_size');
        this.div.removeClass('et2_taglist_small');
        // How much space is needed for first one?
        var min_width = jQuery('.ms-sel-item', this.div).first().outerWidth() || this.div.children().first().width();
        // Not ready yet
        if (min_width === null || !this.taglist)
            return;
        min_width += (this.options.multiple === 'toggle' ? jQuery('.toggle', this.div).outerWidth() : 0);
        min_width += this.taglist.trigger ? this.taglist.trigger.outerWidth(true) : 0;
        // Not enough for one
        if (this.options.multiple && (min_width > this.div.width() ||
            this.taglist.container.width() > this.div.width() || this.taglist.container.height() > this.div.height())) {
            this._setup_small();
        }
    };
    et2_taglist._attributes = {
        "empty_label": {
            "name": "Empty label",
            "type": "string",
            "default": "",
            "description": "Textual label for when nothing is selected",
            translate: true
        },
        "select_options": {
            "type": "any",
            "name": "Select options",
            "default": {},
            "description": "Internaly used to hold the select options."
        },
        // Value can be CSV String or Array
        "value": {
            "type": "any"
        },
        // These default parameters set it to read the addressbook via the link system
        "autocomplete_url": {
            "name": "Autocomplete source",
            "type": "string",
            "default": "EGroupware\\Api\\Etemplate\\Widget\\Taglist::ajax_search",
            "description": "Menuaction (app.class.function) for autocomplete data source.  Must return actual JSON, and nothing more."
        },
        "autocomplete_params": {
            "name": "Autocomplete parameters",
            "type": "any",
            "default": { app: "addressbook" },
            "description": "Extra parameters passed to autocomplete URL.  It should be a stringified JSON object."
        },
        allowFreeEntries: {
            "name": "Allow free entries",
            "type": "boolean",
            "default": true,
            "description": "Restricts or allows the user to type in arbitrary entries"
        },
        "onchange": {
            "description": "Callback when tags are changed.  Argument is the new selection.",
            "type": "js"
        },
        "onclick": {
            "description": "Callback when a tag is clicked.  The clicked tag is passed.",
            "type": "js"
        },
        "tagRenderer": {
            "name": "Tag renderer",
            "type": "js",
            "default": et2_no_init,
            "description": "Callback to provide a custom renderer for what's _inside_ each tag.  Function parameter is the select_option data for that ID."
        },
        "listRenderer": {
            "name": "List renderer",
            "type": "js",
            "default": et2_no_init,
            "description": "Callback to provide a custom renderer for each suggested item.  Function parameter is the select_option data for that ID."
        },
        "width": {
            "default": "100%"
        },
        "height": {
            "description": "Maximum allowed height of the result list in pixels"
        },
        "maxSelection": {
            "name": "max Selection",
            "type": "integer",
            "default": null,
            "description": "The maximum number of items the user can select if multiple selection is allowed."
        },
        // Selectbox attributes that are not applicable
        "multiple": {
            type: 'any',
            default: true,
            description: "True, false or 'toggle'"
        },
        "rows": {
            "name": "Rows",
            "type": "integer",
            "default": et2_no_init,
            "description": "Number of rows to display"
        },
        "tags": { ignore: true },
        useCommaKey: {
            name: "comma will start validation",
            type: "boolean",
            "default": true,
            description: "Set to false to allow comma in entered content"
        },
        groupBy: {
            name: "group results",
            type: "string",
            default: null,
            description: "group results by given JSON attribute"
        },
        minChars: {
            name: "chars to start query",
            type: "integer",
            default: 3,
            description: "minimum number of characters before expanding the combo"
        },
        editModeEnabled: {
            name: "Enable edit mode for tags",
            type: "boolean",
            "default": true,
            description: "Allow to modify a tag by clicking on edit icon. It only can be enabled if only allowFreeEntries is true."
        }
    };
    return et2_taglist;
}(et2_widget_selectbox_1.et2_selectbox));
exports.et2_taglist = et2_taglist;
et2_core_widget_1.et2_register_widget(et2_taglist, ["taglist"]);
/**
 * Taglist customized specificlly for egw acccounts, fetches accounts and groups list,
 * free entries are allowed
 *
 */
var et2_taglist_account = /** @class */ (function (_super) {
    __extends(et2_taglist_account, _super);
    function et2_taglist_account(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist_account._attributes, _child || {})) || this;
        _this.lib_options = {
            minChars: 2
        };
        _this.int_reg_exp = /^-?[0-9]+$/;
        _this.deferred_loading = 0;
        // Counter to prevent infinite looping while fetching account names
        _this.deferred_loading = 0;
        _this.options.autocomplete_params.type = "account";
        return _this;
    }
    /**
     * Set if accounts, groups or both are supported
     *
     * Option get's passed on to autocomplete_params.
     *
     * @param {string} value "accounts" (default), "groups", "both", "owngroups"
     */
    et2_taglist_account.prototype.set_account_type = function (value) {
        if (value != this.options.account_type) {
            this.options.select_options = [];
        }
        this.options.autocomplete_params.account_type = this.options.account_type = value;
        this.set_select_options(this._get_accounts());
    };
    /**
     * Get account info for select options from common client-side account cache
     *
     * @return {Array} select options
     */
    et2_taglist_account.prototype._get_accounts = function () {
        var existing = [];
        if (!jQuery.isArray(this.options.select_options)) {
            var options = jQuery.extend({}, this.options.select_options);
            this.options.select_options = [];
            for (var key in options) {
                if (typeof options[key] == 'object') {
                    if (typeof (options[key].key) == 'undefined') {
                        options[key].value = key;
                    }
                    this.options.select_options.push(options[key]);
                }
                else {
                    this.options.select_options.push({ value: key, label: options[key] });
                }
                existing.push(key);
            }
        }
        else {
            for (var i = 0; i < this.options.select_options.length; i++) {
                existing.push(this.options.select_options[i].value);
            }
        }
        var type = this.egw().preference('account_selection', 'common');
        var accounts = [];
        // for primary_group we only display owngroups == own memberships, not other groups
        if (type == 'primary_group' && this.options.account_type != 'accounts') {
            if (this.options.account_type == 'both') {
                accounts = this.egw().accounts('accounts');
            }
            accounts = accounts.concat(this.egw().accounts('owngroups'));
        }
        else {
            accounts = this.egw().accounts(this.options.account_type);
        }
        for (var i = 0; i < accounts.length; i++) {
            if (existing.indexOf(accounts[i].value) === -1) {
                this.options.select_options.push(accounts[i]);
            }
        }
        return this.options.select_options;
    };
    /**
     * Set value(s) of taglist, reimplemented to automatic resolve numerical account_id's
     *
     * @param value (array of) ids
     */
    et2_taglist_account.prototype.set_value = function (value) {
        if (!value)
            return _super.prototype.set_value.call(this, value || []);
        var values = jQuery.isArray(value) ? jQuery.extend([], value) : [value];
        var _loop_2 = function (i) {
            var v = values[i];
            var result = [];
            if (typeof v == 'object' && v.id === v.label)
                v = v.id;
            if (this_2.options.select_options && (
            // Check options
            ((result = jQuery.grep(this_2.options.select_options, function (e) {
                return e.id == v;
            })) && result.length) ||
                // Check current selection to avoid going back to server
                (this_2.taglist && (result = jQuery.grep(this_2.taglist.getSelection(), function (e) {
                    return e.id == v;
                })) && result.length))) {
                // Options should have been provided, but they weren't
                // This can happen for ajax source with an existing value
                if (this_2.options.select_options == null) {
                    this_2.options.select_options = [];
                }
                values[i] = result[0] ? result[0] : {
                    id: v,
                    label: v
                };
            }
            else if (typeof v != 'object' && !isNaN(v) && (typeof v != 'string' || v.match(this_2.int_reg_exp))) {
                v = parseInt(v);
                var label = this_2.egw().link_title('api-accounts', v);
                if (label) // already cached on client-side --> replace it
                 {
                    values[i] = {
                        id: v,
                        label: label || '#' + v
                    };
                }
                else {
                    delete this_2.options.value;
                    this_2.deferred_loading++;
                    this_2.egw().link_title('api-accounts', v, jQuery.proxy(function (idx, id, label) {
                        this.deferred_loading--;
                        values[idx] = {
                            id: id,
                            label: label || '#' + id
                        };
                        if (!this.deferred_loading) {
                            // Seems the magic suggest can not deal with broken taglist value
                            // like selected value with no label set and maxSelection set. This
                            // trys to first unset maxSelection and set value to magix suggest taglist
                            // object then calls set_value of the widget taglist, and at the end
                            // re-set the maxSelection option again.
                            if (this.options.maxSelection)
                                this.taglist.setMaxSelection(null);
                            this.taglist.setValue([{ id: id, label: label || '#' + id }]);
                            this.set_value(values);
                            this.taglist.setMaxSelection(this.options.maxSelection);
                        }
                    }, this_2, i, v));
                }
            }
        };
        var this_2 = this;
        for (var i = 0; i < values.length; ++i) {
            _loop_2(i);
        }
        // Don't proceed if waiting for labels
        if (this.deferred_loading <= 0) {
            _super.prototype.set_value.call(this, values);
        }
    };
    et2_taglist_account._attributes = {
        "autocomplete_url": {
            "default": "EGroupware\\Api\\Etemplate\\Widget\\Taglist::ajax_search"
        },
        allowFreeEntries: {
            "default": false,
            ignore: true
        },
        account_type: {
            name: 'Account type',
            'default': 'accounts',
            type: 'string',
            description: 'Limit type of accounts.  One of {accounts,groups,both,owngroups}.'
        }
    };
    return et2_taglist_account;
}(et2_taglist));
et2_core_widget_1.et2_register_widget(et2_taglist_account, ["taglist-account"]);
/**
 * Taglist customized specifically for emails, which it pulls from the mail application,
 * or addressbook if mail is not available.  Free entries are allowed, and we render
 * invalid free entries differently (but still accept them).
 *
 * @augments et2_taglist
 */
var et2_taglist_email = /** @class */ (function (_super) {
    __extends(et2_taglist_email, _super);
    function et2_taglist_email(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist_email._attributes, _child || {})) || this;
        _this.lib_options = {
            // Search function limits to 3 anyway
            minChars: 3
        };
        if (_this.options.include_lists) {
            _this.options.autocomplete_params.include_lists = true;
        }
        // Make domain name optional for EMAIL_PREG if it's requested
        if (_this.options.domainOptional) {
            et2_taglist_email.EMAIL_PREG = new RegExp(/^(([^\042',<][^,<]+|\042[^\042]+\042|\'[^\']+\'|)\s?<)?[^\x00-\x20()\xe2\x80\x8b<>@,;:\042\[\]\x80-\xff]+(@([a-z0-9ÄÖÜäöüß](|[a-z0-9ÄÖÜäöüß_-]*[a-z0-9ÄÖÜäöüß])\.)+[a-z]{2,})?>?$/i);
        }
        return _this;
    }
    // PREG for validation comes from et2_url
    //EMAIL_PREG: new RegExp(/^(([^\042',<][^,<]+|\042[^\042]+\042|\'[^\']+\'|)\s?<)?[^\x00-\x20()\xe2\x80\x8b<>@,;:\042\[\]\x80-\xff]+@([a-z0-9ÄÖÜäöüß](|[a-z0-9ÄÖÜäöüß_-]*[a-z0-9ÄÖÜäöüß])\.)+[a-z]{2,}>?$/i),
    //
    // REGEXP with domain part to be optional
    // new RegExp(/^(([^\042',<][^,<]+|\042[^\042]+\042|\'[^\']+\'|)\s?<)?[^\x00-\x20()\xe2\x80\x8b<>@,;:\042\[\]\x80-\xff]+(@([a-z0-9ÄÖÜäöüß](|[a-z0-9ÄÖÜäöüß_-]*[a-z0-9ÄÖÜäöüß])\.)+[a-z]{2,})?>?$/i)
    et2_taglist_email.prototype.selectionRenderer = function (item) {
        // Trim
        if (typeof item.id == 'string') {
            item.id = item.id.trim();
        }
        if (typeof item.label == 'string') {
            item.label = item.label.trim();
        }
        // We check free entries for valid email, and render as invalid if it's not.
        var valid = item.id != item.label || et2_taglist_email.EMAIL_PREG.test(item.id || '');
        if (!valid && item.id) {
            // automatic quote 'Becker, Ralf <rb@stylite.de>' as '"Becker, Ralf" <rb@stylite.de>'
            var matches = item.id.match(/^(.*) ?<(.*)>$/);
            if (matches && et2_taglist_email.EMAIL_PREG.test('"' + matches[1].trim() + '" <' + matches[2].trim() + '>')) {
                item.id = item.label = '"' + matches[1].trim() + '" <' + matches[2].trim() + '>';
                valid = true;
            }
            // automatic insert multiple comma-separated emails like "rb@stylite.de, hn@stylite.de"
            if (!valid) {
                var parts = item.id.split(/, */);
                var items_1 = [], errors = [];
                if (parts.length > 1) {
                    for (var i = 0; i < parts.length; ++i) {
                        parts[i] = parts[i].trim();
                        if (!et2_taglist_email.EMAIL_PREG.test(parts[i])) {
                            errors.push(parts[i]);
                        }
                        else {
                            items_1.push({ id: parts[i], label: parts[i] });
                        }
                    }
                    item.id = item.label = errors.length ? errors.join(', ') : items_1.shift().id;
                    valid = !errors.length;
                    // insert further parts into taglist, after validation first one
                    if (items_1.length) {
                        // a bit ugly but unavoidable
                        if (valid) {
                            // if no error, we need to delay insert, as taglist gets into wired state and shows first item twice
                            var taglist = this.taglist;
                            window.setTimeout(function () {
                                taglist.addToSelection(items_1);
                            }, 10);
                        }
                        else {
                            // if we have an error, we need to insert items now, to not overwrite the error
                            this.taglist.addToSelection(items_1);
                        }
                    }
                }
            }
        }
        var label = jQuery('<span>').text(item.label);
        if (item.class)
            label.addClass(item.class);
        if (typeof item.title != 'undefined')
            label.attr('title', item.title);
        if (typeof item.data != 'undefined')
            label.attr('data', item.data);
        if (!valid) {
            label.addClass('ui-state-error');
            window.setTimeout(jQuery.proxy(function () {
                this.taglist.removeFromSelection(item);
                this.set_validation_error(egw.lang("'%1' has an invalid format", item.label));
                this.taglist.input.val(item.label).focus();
            }, this), 1);
            return null;
        }
        if (typeof item.icon != 'undefined' && item.icon) {
            var wrapper = jQuery('<div>').addClass('et2_taglist_tags_icon_wrapper');
            jQuery('<span/>')
                .addClass('et2_taglist_tags_icon')
                .css({ "background-image": "url(" + (item.icon.match(/^(http|https|\/)/) ? item.icon : egw.image(item.icon, item.app)) + ")" })
                .appendTo(wrapper);
            label.appendTo(wrapper);
            return wrapper;
        }
        return label;
    };
    et2_taglist_email._attributes = {
        "autocomplete_url": {
            "default": "EGroupware\\Api\\Etemplate\\Widget\\Taglist::ajax_email"
        },
        "autocomplete_params": {
            "default": {}
        },
        allowFreeEntries: {
            "default": true,
            ignore: true
        },
        include_lists: {
            name: "Include lists",
            description: "Include mailing lists in search results",
            default: false,
            type: "boolean"
        },
        useCommaKey: {
            name: "comma will start validation",
            type: "boolean",
            "default": false,
            description: "Set to false to allow comma in entered content"
        },
        domainOptional: {
            name: "Domain optional",
            description: "Allows domain part of an email address to be optional",
            default: false,
            type: "boolean"
        }
    };
    et2_taglist_email.EMAIL_PREG = et2_url.EMAIL_PREG;
    return et2_taglist_email;
}(et2_taglist));
et2_core_widget_1.et2_register_widget(et2_taglist_email, ["taglist-email"]);
/**
 * Taglist customized specifically for categories, with colors
 *
 * Free entries are not allowed.
 *
 * @augments et2_taglist
 */
var et2_taglist_category = /** @class */ (function (_super) {
    __extends(et2_taglist_category, _super);
    function et2_taglist_category(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist_email._attributes, _child || {})) || this;
        _this.lib_options = {};
        _this.div.addClass('et2_taglist_category');
        return _this;
    }
    /**
     * Get options automatically from select option cache
     * @param {type} _attrs
     */
    et2_taglist_category.prototype.transformAttributes = function (_attrs) {
        // Pretend to be a select box so it works
        var type = this.getType();
        this.setType('select-cat');
        _super.prototype.transformAttributes.call(this, _attrs);
        this.setType(type);
    };
    /**
     * convert selectbox options from the cache to taglist data [{id:...,label:...},...] format
     *
     * @param {(object|array)} _options id: label or id: {label: ..., title: ...} pairs, or array if id's are 0, 1, ...
     *
     * @return {Object[]} Returns an array of objects with ID and label
     */
    et2_taglist_category.prototype._options2data = function (_options) {
        var options = jQuery.isArray(_options) ? jQuery.extend({}, _options) : _options;
        var data = [];
        for (var id in options) {
            var option = {};
            if (typeof options[id] == 'object') {
                jQuery.extend(option, options[id]);
                if (option["value"])
                    option["id"] = option["value"];
            }
            else {
                option["label"] = options[id];
            }
            data.push(option);
        }
        return data;
    };
    et2_taglist_category.prototype.selectionRenderer = function (item) {
        var label = jQuery('<span>').text(item.label);
        if (item.class)
            label.addClass(item.class);
        jQuery('<span class="cat_' + item.id + '"/>').prependTo(label);
        if (typeof item.title != 'undefined')
            label.attr('title', item.title);
        if (typeof item.data != 'undefined')
            label.attr('data', item.data);
        return label;
    };
    et2_taglist_category._attributes = {
        "minChars": {
            default: 0
        },
        "autocomplete_url": {
            "default": ""
        },
        "autocomplete_params": {
            "default": {}
        },
        allowFreeEntries: {
            "default": false,
            ignore: true
        }
    };
    return et2_taglist_category;
}(et2_taglist));
et2_core_widget_1.et2_register_widget(et2_taglist_category, ["taglist-cat"]);
/**
 * Taglist customized specificlly for image url shown as thumbnail,
 *
 */
var et2_taglist_thumbnail = /** @class */ (function (_super) {
    __extends(et2_taglist_thumbnail, _super);
    function et2_taglist_thumbnail(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist_thumbnail._attributes, _child || {})) || this;
        _this.div.addClass('et2_taglist_thumbnail');
        return _this;
    }
    et2_taglist_thumbnail.prototype.selectionRenderer = function (item) {
        var tag = jQuery('<span>').attr('title', item.label);
        jQuery('<img class="et2_taglist_thumbnail_img"/>').attr('src', item.label).prependTo(tag);
        return tag;
    };
    et2_taglist_thumbnail._attributes = {
        "minChars": {
            default: 0
        },
        "autocomplete_url": {
            "default": ""
        },
        "autocomplete_params": {
            "default": {}
        }
    };
    return et2_taglist_thumbnail;
}(et2_taglist));
et2_core_widget_1.et2_register_widget(et2_taglist_thumbnail, ["taglist-thumbnail"]);
/**
 * Taglist represents list of states of a country,
 *
 */
var et2_taglist_state = /** @class */ (function (_super) {
    __extends(et2_taglist_state, _super);
    function et2_taglist_state(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist_state._attributes, _child || {})) || this;
        _this.div.addClass('et2_taglist_state');
        return _this;
    }
    /**
     * Get options automatically from select option cache
     * @param {type} _attrs
     */
    et2_taglist_state.prototype.transformAttributes = function (_attrs) {
        // Pretend to be a select box so it works
        var type = this.getType();
        this.setType('select-state');
        _super.prototype.transformAttributes.call(this, _attrs);
        this.setType(type);
    };
    /**
     * convert selectbox options from the cache to taglist data [{id:...,label:...},...] format
     *
     * @param {(object|array)} _options id: label or id: {label: ..., title: ...} pairs, or array if id's are 0, 1, ...
     *
     * @return {Object[]} Returns an array of objects with ID and label
     */
    et2_taglist_state.prototype._options2data = function (_options) {
        var options = jQuery.isArray(_options) ? jQuery.extend({}, _options) : _options;
        var data = [];
        for (var id in options) {
            var option = {};
            if (typeof options[id] == 'object') {
                jQuery.extend(option, options[id]);
                if (option["value"])
                    option["id"] = option["value"];
            }
            else {
                option["label"] = options[id];
            }
            data.push(option);
        }
        return data;
    };
    et2_taglist_state.prototype.set_country_code = function (_country_code) {
        var country_code = _country_code || '';
        var old_code = this.options.country_code;
        this.country_code = country_code;
        this.options.country_code = country_code;
        // Reload if needed
        if (this.options.country_code !== old_code && this.isInTree()) {
            var sel_options = et2_widget_selectbox_1.et2_selectbox.find_select_options(this, {}, this.options);
            this.set_select_options(sel_options);
        }
    };
    et2_taglist_state._attributes = {
        "minChars": {
            default: 0
        },
        "autocomplete_url": {
            "default": ""
        },
        "autocomplete_params": {
            "default": {}
        },
        "country_code": {
            name: "country code to fetch states for",
            default: "de",
            type: "string",
            description: "Defines country code to fetch list of states for it"
        }
    };
    return et2_taglist_state;
}(et2_taglist));
et2_core_widget_1.et2_register_widget(et2_taglist_state, ["taglist-state"]);
/**
 * et2_taglist_ro is the readonly implementation of the taglist.
 *
 * @augments et2_selectbox
 */
var et2_taglist_ro = /** @class */ (function (_super) {
    __extends(et2_taglist_ro, _super);
    /**
     * Constructor
     *
     * @memberOf et2_selectbox_ro
     */
    function et2_taglist_ro(_parent, _attrs, _child) {
        var _this = 
        // Call the inherited constructor
        _super.call(this, _parent, _attrs, et2_core_inheritance_1.ClassWithAttributes.extendAttributes(et2_taglist_ro._attributes, _child || {})) || this;
        _this.span = jQuery('<div><ul /></div>')
            .addClass('et2_taglist_ro');
        _this.setDOMNode(_this.span[0]);
        _this.span = jQuery('ul', _this.span)
            .addClass('ms-sel-ctn');
        return _this;
    }
    et2_taglist_ro.prototype.set_value = function (_value) {
        _super.prototype.set_value.apply(this, arguments);
        jQuery('li', this.span).addClass('ms-sel-item');
    };
    return et2_taglist_ro;
}(et2_selectbox_ro));
et2_core_widget_1.et2_register_widget(et2_taglist_ro, ["taglist_ro", "taglist_email_ro", "taglist_account_ro"]);
// Require css
// included via etemplate2.css
//if(typeof egw == 'function') egw(window).includeCSS(egw.webserverUrl + "/api/js/jquery/magicsuggest/magicsuggest.css");
//# sourceMappingURL=et2_widget_taglist.js.map