/**
 * eGroupWare API: JSON - Contains the client side javascript implementation of class.egw_json.inc.php
 *
 * @link http://www.egroupware.org
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package api
 * @subpackage ajax
 * @author Andreas Stoeckel <as@stylite.de>
 * @version $Id$
 */

/*egw:uses
	jsapi.jsapi; // Contains some helper functions
	vendor.bower-asset.jquery.dist.jquery; // Used for the ajax requests
*/

/* The egw_json_request is the javaScript side implementation of class.egw_json.inc.php.*/

function _egw_json_escape_string(input)
{
	var len = input.length;
	var res = "";

	for (var i = 0; i < len; i++)
	{
		switch (input.charAt(i))
		{
			case '"':
				res += '\\"';
				break;

			case '\n':
				res += '\\n';
				break;

			case '\r':
				res += '\\r';
				break;

			case '\\':
				res += '\\\\';
				break;

			case '\/':
				res += '\\/';
				break;

			case '\b':
				res += '\\b';
				break;

			case '\f':
				res += '\\f';
				break;

			case '\t':
				res += '\\t';
				break;

			default:
				res += input.charAt(i);
		}
	}

	return res;
}

function _egw_json_encode_simple(input)
{
	switch (input.constructor)
	{
		case String:
			return '"' + _egw_json_escape_string(input) + '"';

		case Number:
			return input.toString();

		case Boolean:
			return input ? 'true' : 'false';

		default:
			return null;
	}
}

function egw_json_encode(input)
{
	egw.debug("warn", "Function %s is deprecated, use egw.jsonEncode() instead", arguments.callee.name);
	return egw.jsonEncode(input);
}


/**
 * Some variables needed to store which JS and CSS files have already be included
 */
var egw_json_files = {};


/**
 * Initialize the egw_json_files object with all files which are already bound in
 */
jQuery(document).ready(function() {
	jQuery("script, link").each(function() {
		var file = false;
		if (jQuery(this).attr("src")) {
			file = jQuery(this).attr("src");
		} else if (jQuery(this).attr("href")) {
			file = jQuery(this).attr("href");
		}
		if (file) {
			egw_json_files[file] = true;
		}
	});
});

/**
 * Variable which stores all currently registered plugins
 */
var _egw_json_plugins = [];

/**
 * Register a plugin for the egw_json handler
 */
function egw_json_register_plugin(_callback, _context)
{
	egw.debug("warn", "Function %s is deprecated", arguments.callee.name);
	//Default the context parameter to "window"
	if (typeof _context == 'undefined') {
		_context = window;
	}

	//Add a plugin object to the plugins array
	_egw_json_plugins[_egw_json_plugins.length] = {
		'callback': _callback,
		'context': _context
	};
}

/**
 * Function used internally to pass a response to all registered plugins
 */
function _egw_json_plugin_handle(_type, _response, _context) {
	for (var i = 0; i < _egw_json_plugins.length; i++)
	{
		try {
			var plugin = _egw_json_plugins[i];

			var context = plugin.context;
			if (!plugin.context && typeof _context != "undefined")
			{
				context = _context;
			}

			if (plugin.callback.call(context, _type, _response)) {
				return true;
			}
		} catch (e) {
			if (typeof console != 'undefined')
			{
				console.log(e);
			}
		}
	}

	return false;
}

/** The constructor of the egw_json_request class.
 *
 * @param string _menuaction the menuaction function which should be called and
 *   which handles the actual request. If the menuaction is a full featured
 *   url, this one will be used instead.
 * @param array _parameters which should be passed to the menuaction function.
 * @param object _context is the context which will be used for the callbacks (not callback of sendRequest!)
 */
function egw_json_request(_menuaction, _parameters, _context)
{
	egw.debug("warn", "Function %s is deprecated", arguments.callee.name);
	this.context = window.document;
	if (typeof _context != 'undefined')
		this.context = _context;

	if (typeof _parameters != 'undefined')
	{
		this.parameters = _parameters;
	}
	else
	{
		this.parameters = new Array;
	}

	// Check whether the supplied menuaction parameter is a full featured url
	// or just a menuaction
	if (_menuaction.match(/json.php\?menuaction=[a-z_0-9]*\.[a-z_0-9]*\.[a-z_0-9]*/i))
	{
		// Menuaction is a full featured url
		this.url = _menuaction;
	}
	else
	{
		// We only got a menu action, assemble the url manually.
		this.url = this._assembleAjaxUrl(_menuaction);
	}

	this.request = null;
	this.sender = null;
	this.callback = null;
	this.alertHandler = this.alertFunc;
	this.onLoadFinish = null;
	this.loadedJSFiles = {};
	this.handleResponseDone = false;
	this.app = null;
	if (window.egw_alertHandler)
	{
		this.alertHandler = window.egw_alertHandler;
	}
}

/**
 * Sets the "application" object which is passed to egw_appWindowOpen when a redirect is done
 */
egw_json_request.prototype.setAppObject = function(_app)
{
	this.app = _app;
}

egw_json_request.prototype._assembleAjaxUrl = function(_menuaction)
{
	// Retrieve the webserver url
	var webserver_url = window.egw_webserverUrl || egw_topWindow().egw_webserverUrl;

	// Check whether the webserver_url is really set
	// Don't check for !webserver_url as it might be empty.
	// Thank you to Ingo Ratsdorf for reporting this.
	if (typeof webserver_url == "undefined")
	{
		throw "Internal JS error, top window not found, webserver url could not be retrieved.";
	}

	// Add the ajax relevant parts
	return webserver_url + '/json.php?menuaction=' + _menuaction;
}

/**
 * Sends the AJAX JSON request.
 *
 * @param boolean _async specifies whether the request should be handeled asynchronously (true, the sendRequest function immediately returns to the caller) or asynchronously (false, the sendRequest function waits until the request is received)
 * @param _callback is an additional callback function which should be called upon a "data" response is received
 * @param _sender context (this) of _callback (different from _context param of constructor used for standard callbacks!)
*/
egw_json_request.prototype.sendRequest = function(_async, _callback, _sender)
{
	egw.debug("warn", "egw_json_request is deprecated\n\
Use egw.json(menuaction, parameters [,callback, context, async, sender]).sendRequest() instead.");
	//Store the sender and callback parameter inside this class
	this.sender = _sender;
	if (typeof _callback != "undefined")
		this.callback = _callback;

	//Copy the async parameter which defaults to "true"
	var is_async = true;
	if (typeof _async != "undefined")
		is_async = _async;

	//Assemble the actual request object containing the json data string
	var request_obj = {
		"json_data": egw.jsonEncode(
		{
			"request": {
				"parameters": this.parameters
			}
		})
	};

	//Send the request via the jquery AJAX interface to the server
	this.request = jQuery.ajax({url: this.url,
		async: is_async,
		context: this,
		data: request_obj,
		dataType: 'json',
		type: 'POST',
		success: this.handleResponse,
		error: function(_xmlhttp,_err) {
			window.console.error('Ajax request to ' + this.url + ' failed: ' + _err);
		}
	});
}

egw_json_request.prototype.abort = function()
{
	this.request.abort();
}

egw_json_request.prototype.alertFunc = function(_message, _details)
{
	alert(_message);
	if(_details) _egw_json_debug_log(_message, _details);
}

function _egw_json_debug_log(_msg, _e)
{
	if (typeof console != "undefined" && typeof console.log != "undefined")
	{
		console.log(_msg, _e);
	}
}

/* Displays an json error message */
egw_json_request.prototype.jsonError = function(_msg, _e)
{
	var msg = 'EGW JSON Error: '+_msg;

	//Log and show the error message
	_egw_json_debug_log(msg, _e);
	this.alertHandler(msg);
}

/* Internal function which handles the response from the server */
egw_json_request.prototype.handleResponse = function(data, textStatus, XMLHttpRequest)
{
	this.handleResponseDone = false;
	if (data && data.response)
	{
		var hasResponse = false;
		// Try to load files using API
		if(egw && egw().includeJS)
		{
			var js_files = [];
			var css_files = [];
			for (var i = data.response.length - 1; i > 0; --i)
			{
				var res = data.response[i];
				if(res.type == 'js' && typeof res.data == 'string')
				{
					js_files.unshift(res.data);
					this.loadedJSFiles[res.data] = false;
					data.response.splice(i,1);
				}
			}
			if(js_files.length > 0)
			{
				egw().includeJS(js_files, function() {
					for(var i = 0; i < js_files.length; i++)
					{
						this.loadedJSFiles[js_files[i]] = true;
					}
					this.checkLoadFinish();
				},this);
			}
		}
		for (var i = 0; i < data.response.length; i++)
		{
			try
			{
				var res = data.response[i];

				switch (data.response[i].type)
				{
					case 'alert':
						//Check whether all needed parameters have been passed and call the alertHandler function
						if ((typeof res.data.message != 'undefined') &&
							(typeof res.data.details != 'undefined'))
						{
							this.alertHandler(
								res.data.message,
								res.data.details)
							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
					case 'assign':
						//Check whether all needed parameters have been passed and call the alertHandler function
						if ((typeof res.data.id != 'undefined') &&
							(typeof res.data.key != 'undefined') &&
							(typeof res.data.value != 'undefined'))
						{
							var obj = document.getElementById(res.data.id);
							if (obj)
							{
								obj[res.data.key] = res.data.value;

								if (res.data.key == "innerHTML")
								{
									egw_insertJS(res.data.value);
								}

								hasResponse = true;
							}
						} else
							throw 'Invalid parameters';
						break;
					case 'data':
						//Callback the caller in order to allow him to handle the data
						if (this.callback)
						{
							this.callback.call(this.sender, res.data);
							hasResponse = true;
						}
						break;
					case 'script':
						if (typeof res.data == 'string')
						{
							try
							{
								var func = new Function(res.data);
								func.call(window);
							}
							catch (e)
							{
								e.code = res.data;
								_egw_json_debug_log(e);
							}
							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
					case 'apply':
						if (typeof res.data.func == 'string' && typeof window[res.data.func] == 'function')
						{
							try
							{
								window[res.data.func].apply(window, res.data.parms);
							}
							catch (e)
							{
								_egw_json_debug_log(e, {'Function': res.data.func, 'Parameters': res.data.parms});
							}
							hasResponse = true;
						} else if (typeof res.data.func == "string" &&
								 res.data.func.substr(0,4) == "app." && app)
						{

							var parts = res.data.func.split(".");
							// check if we need a not yet instanciated app.js object --> instanciate it now
							if (parts.length == 3 && typeof app[parts[1]] == 'undefined' &&
								typeof app.classes[parts[1]] == 'function')
							{
								app[parts[1]] = new app.classes[parts[1]]();
							}
							if(parts.length == 3 && typeof app[parts[1]] == "object" &&
								typeof app[parts[1]][parts[2]] == "function")
							{
								try
								{
									this.context = app[parts[1]][parts[2]].apply(app[parts[1]], res.data.parms);
								}
								catch (e)
								{
									_egw_json_debug_log(e, {'Function': res.data.func, 'Parameters': res.data.parms});
								}
							}
							hasResponse = true;

						} else
							throw 'Invalid parameters';
						break;
					case 'jquery':
						if (typeof res.data.select == 'string' &&
							typeof res.data.func == 'string')
						{
							try
							{
								var jQueryObject = jQuery(res.data.select, this.context);
								jQueryObject[res.data.func].apply(jQueryObject,	res.data.parms);
							}
							catch (e)
							{
								_egw_json_debug_log(e, {'Function': res.data.func, 'Parameters': res.data.parms});
							}
							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
					case 'redirect':
						//console.log(res.data.url);
						if (typeof res.data.url == 'string' &&
							typeof res.data.global == 'boolean' &&
							typeof res.data.app == 'string')
						{
							//Special handling for framework reload
							res.data.global |= (res.data.url.indexOf("?cd=10") > 0);

							if (res.data.global)
							{
								egw_topWindow().location.href = res.data.url;
							}
							else
							{
								egw_appWindowOpen(res.data.app, res.data.url);
							}

							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
					case 'css':
						if (typeof res.data == 'string')
						{
							//Check whether the requested file had already be included
							if (!egw_json_files[res.data])
							{
								egw_json_files[res.data] = true;

								//Get the head node and append a new link node with the stylesheet url to it
								var headID = document.getElementsByTagName('head')[0];
								var cssnode = document.createElement('link');
								cssnode.type = "text/css";
								cssnode.rel = "stylesheet";
								cssnode.href = res.data;
								headID.appendChild(cssnode);
							}
							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
					case 'js':
						if (typeof res.data == 'string')
						{
							//Check whether the requested file had already be included
							if (!egw_json_files[res.data])
							{
								egw_json_files[res.data] = true;

								//Get the head node and append a new script node with the js file to it
								var headID = document.getElementsByTagName('head')[0];
								var scriptnode = document.createElement('script');
								scriptnode.type = "text/javascript";
								scriptnode.src = res.data;
								scriptnode._originalSrc = res.data;
								headID.appendChild(scriptnode);

								//Increment the includedJSFiles count
								this.loadedJSFiles[res.data] = false;

								if (typeof console != 'undefined' && typeof console.log != 'undefined')
									console.log("Requested JS file '%s' from server", res.data);

								var self = this;

								//FF, Opera, Chrome
								scriptnode.onload = function(e) {
									var file = e.target._originalSrc;
									if (typeof console != 'undefined' && typeof console.log != 'undefined')
										console.log("Retrieved JS file '%s' from server", file);

									self.loadedJSFiles[file] = true;
									self.checkLoadFinish();
								};

								//IE
								if (typeof scriptnode.readyState != 'undefined')
								{
									if (scriptnode.readyState != 'complete' &&
									    scriptnode.readyState != 'loaded')
									{
										scriptnode.onreadystatechange = function() {
											var node = window.event.srcElement;
											if (node.readyState == 'complete' || node.readyState == 'loaded') {
												var file = node._originalSrc;
												if (typeof console != 'undefined' && typeof console.log != 'undefined')
													console.log("Retrieved JS file '%s' from server", [file]);

												self.loadedJSFiles[file] = true;
												self.checkLoadFinish();
											}
										};
									}
									else
									{
										this.loadedJSFiles[res.data] = true;
									}
								}
							}
							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
					case 'error':
						if (typeof res.data == 'string')
						{
							this.jsonError(res.data);
							hasResponse = true;
						} else
							throw 'Invalid parameters';
						break;
				}

				//Try to handle the json response with all registered plugins
				hasResponse |= _egw_json_plugin_handle(data.response[i].type, res, this.context);
			} catch(e) {
				this.jsonError('Internal JSON handler error', e);
			}
		}

		/* If no explicit response has been specified, call the callback (if one was set) */
		if (!hasResponse && this.callback && data.response[i])
		{
			this.callback.call(this.sender, data.response[i].data);
		}

		this.handleResponseDone = true;

		this.checkLoadFinish();
	}
}

/**
 * The "onLoadFinish" handler gets called after all JS-files have been loaded
 * successfully
 */
egw_json_request.prototype.checkLoadFinish = function()
{
	var complete = true;
	for (var key in this.loadedJSFiles) {
		complete = complete && this.loadedJSFiles[key];
	}

	if (complete && this.onLoadFinish && this.handleResponseDone)
	{
		this.onLoadFinish.call(this.sender);
	}
}

function egw_json_getFormValues(_form, _filterClass)
{
	egw.debug("warn", "Function %s is deprecated", arguments.callee.name);
	var elem = null;
	if (typeof _form == 'object')
	{
		elem = _form;
	}
	else
	{
		elem = document.getElementsByName(_form)[0];
	}

	var serialized = new Object;
	if (typeof elem != "undefined" && elem && elem.childNodes)
	{
		if (typeof _filterClass == 'undefined')
			_filterClass = null;

		_egw_json_getFormValues(serialized, elem.childNodes, _filterClass)
	}

	return serialized;
}

/**
 * Deprecated legacy xajax wrapper functions for the new egw_json interface
 */
_xajax_doXMLHTTP = function(_async, _menuaction, _arguments)
{
	egw.debug("warn", "Function %s is deprecated", arguments.callee.name);
	/* Assemble the parameter array */
	var paramarray = new Array();
	for (var i = 1; i < _arguments.length; i++)
	{
		paramarray[paramarray.length] = _arguments[i];
	}

	/* Create a new request, passing the menuaction and the parameter array */
	var request = new egw_json_request(_menuaction, paramarray);

	/* Send the request */
	request.sendRequest(_async);

	return request;
}

xajax_doXMLHTTP = function(_menuaction)
{
	return _xajax_doXMLHTTP(true, _menuaction, arguments);
}

xajax_doXMLHTTPsync = function(_menuaction)
{
	return _xajax_doXMLHTTP(false, _menuaction, arguments);
};

window.xajax = {
	"getFormValues": function(_form)
	{
		return egw_json_getFormValues(_form);
	}
};

/*
	The following code is adapted from the xajax project which is licensed under
	the following license
	@copyright Copyright (c) 2005-2007 by Jared White & J. Max Wilson
	@copyright Copyright (c) 2008-2009 by Joseph Woolley, Steffen Konerow, Jared White  & J. Max Wilson
	@license http://www.xajaxproject.org/bsd_license.txt BSD License
*/

/**
 * used internally by the legacy "egw_json_response.getFormValues" to recursively
 * run over all form elements
 * @param serialized is the object which will contain the form data
 * @param children is the children node of the form we're runing over
 * @param string _filterClass if given only return
 */
function _egw_json_getFormValues(serialized, children, _filterClass)
{
	egw.debug("warn", "Function %s is deprecated", arguments.callee.name);
	//alert('_egw_json_getFormValues(,,'+_filterClass+')');
	for (var i = 0; i < children.length; ++i) {
		var child = children[i];

		if (typeof child.childNodes != "undefined")
			_egw_json_getFormValues(serialized, child.childNodes, _filterClass);

		if ((!_filterClass || jQuery(child).hasClass(_filterClass)) && typeof child.name != "undefined")
		{
			//alert('_egw_json_getFormValues(,,'+_filterClass+') calling _egw_json_getFormValue for name='+child.name+', class='+child.class+', value='+child.value);
			_egw_json_getFormValue(serialized, child);
		}
	}
}

function _egw_json_getObjectLength(_obj)
{
	var res = 0;
	for (key in _obj)
	{
		if (_obj.hasOwnProperty(key))
			res++;
	}
	return res;
}

/**
 * used internally to serialize
 */
function _egw_json_getFormValue(serialized, child)
{
	//Return if the child doesn't have a name, is disabled, or is a radio-/checkbox and not checked
	if ((typeof child.name == "undefined") || (child.disabled && child.disabled == true) ||
		(child.type && (child.type == 'radio' || child.type == 'checkbox' || child.type == 'button' || child.type == 'submit') && (!child.checked)))
	{
		return;
	}

	var name = child.name;
	var values = null;

 	if ('select-multiple' == child.type)
	{
		values = new Array;
 		for (var j = 0; j < child.length; ++j)
		{
 			var option = child.options[j];
 			if (option.selected == true)
 				values.push(option.value);
 		}
 	}
	else
	{
 		values = child.value;
 	}

	//Special treatment if the name of the child contains a [] - then all theese
	//values are added to an array.
	var keyBegin = name.indexOf('[');
	if (0 <= keyBegin) {
		var n = name;
		var k = n.substr(0, n.indexOf('['));
		var a = n.substr(n.indexOf('['));
		if (typeof serialized[k] == 'undefined')
			serialized[k] = new Object;

		var p = serialized; // pointer reset
		while (a.length != 0) {
			var sa = a.substr(0, a.indexOf(']')+1);

			var lk = k; //save last key
			var lp = p; //save last pointer

			a = a.substr(a.indexOf(']')+1);
			p = p[k];
			k = sa.substr(1, sa.length-2);
			if (k == '') {
				if ('select-multiple' == child.type) {
					k = lk; //restore last key
					p = lp;
				} else {
					k = _egw_json_getObjectLength(p);
				}
			}
			if (typeof p[k] == 'undefined')
			{
				p[k] = new Object;
			}
		}
		p[k] = values;
	} else {
		//Add the value to the result object with the given name
		if (typeof values != "undefined")
		{
			serialized[name] = values;
		}
	}
}
