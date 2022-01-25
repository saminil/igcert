/**
 * Super class for the different views.
 *
 * Each separate view overrides what it needs
 */
import {etemplate2} from "../../api/js/etemplate/etemplate2";

export abstract class View
{
	// List of etemplates to show for this view
	public static etemplates : (string | etemplate2)[] = ['calendar.view'];

	/**
	 * Translated label for header
	 * @param {Object} state
	 * @returns {string}
	 */
	static header(state)
	{
		let formatDate = new Date(state.date);
		formatDate = new Date(formatDate.valueOf() + formatDate.getTimezoneOffset() * 60 * 1000);
		return View._owner(state) + date(egw.preference('dateformat'), formatDate);
	}

	/**
	 * If one owner, get the owner text
	 *
	 * @param {object} state
	 */
	static _owner(state)
	{
		let owner = '';
		if(state.owner.length && state.owner.length == 1 && app.calendar.sidebox_et2)
		{
			var own = app.calendar.sidebox_et2.getWidgetById('owner').getDOMNode();
			if(own.selectedIndex >= 0)
			{
				owner = own.options[own.selectedIndex].innerHTML + ": ";
			}
		}
		return owner;
	}

	/**
	 * Get the start date for this view
	 * @param {Object} state
	 * @returns {Date}
	 */
	static start_date(state)
	{
		const d = state.date ? new Date(state.date) : new Date();
		d.setUTCHours(0);
		d.setUTCMinutes(0);
		d.setUTCSeconds(0);
		d.setUTCMilliseconds(0);
		return d;
	}

	/**
	 * Get the end date for this view
	 * @param {Object} state
	 * @returns {Date}
	 */
	static end_date(state)
	{
		const d = state.date ? new Date(state.date) : new Date();
		d.setUTCHours(23);
		d.setUTCMinutes(59);
		d.setUTCSeconds(59);
		d.setUTCMilliseconds(0);
		return d;
	}

	/**
	 * Get the owner for this view
	 *
	 * This is always the owner from the given state, we use a function
	 * to trigger setting the widget value.
	 *
	 * @param {number[]|String} state state.owner List of owner IDs, or a comma seperated list
	 * @returns {number[]|String}
	 */
	static owner(state)
	{
		return state.owner || 0;
	}

	/**
	 * Should the view show the weekends
	 *
	 * @param {object} state
	 * @returns {boolean} Current preference to show 5 or 7 days in weekview
	 */
	static show_weekend(state)
	{
		return state.weekend;
	}

	/**
	 * How big or small are the displayed time chunks?
	 *
	 * @param {object} state
	 */
	static granularity(state)
	{
		var list = egw.preference('use_time_grid', 'calendar');
		if(list == '0' || typeof list === 'undefined')
		{
			return parseInt('' + egw.preference('interval', 'calendar')) || 30;
		}
		if(typeof list == 'string') list = list.split(',');
		if(!(<string><unknown>list).indexOf && jQuery.isPlainObject(list))
		{
			list = jQuery.map(list, function (el)
			{
				return el;
			});
		}
		return list.indexOf(state.view) >= 0 ?
			0 :
			parseInt(egw.preference('interval', 'calendar')) || 30;
	}

	static extend(sub)
	{
		return jQuery.extend({}, this, {_super: this}, sub);
	}

	/**
	 * Determines the new date after scrolling.  The default is 1 week.
	 *
	 * @param {number} delta Integer for how many 'ticks' to move, positive for
	 *	forward, negative for backward
	 * @returns {Date}
	 */
	static scroll(delta)
	{
		var d = new Date(app.calendar.state.date);
		d.setUTCDate(d.getUTCDate() + (7 * delta));
		return d;
	}
}

/**
 * Etemplates and settings for the different views.  Some (day view)
 * use more than one template, some use the same template as others,
 * most need different handling for their various attributes.
 */

export class day extends View
{
	public static etemplates : (string | etemplate2)[] = ['calendar.view', 'calendar.todo'];

	static header(state)
	{
		var formatDate = new Date(state.date);
		formatDate = new Date(formatDate.valueOf() + formatDate.getTimezoneOffset() * 60 * 1000);
		return date('l, ', formatDate) + super.header(state);
	}

	static start_date(state)
	{
		var d = super.start_date(state);
		state.date = app.calendar.date.toString(d);
		return d;
	}

	static show_weekend(state)
	{
		state.days = '1';
		return true;
	}

	static scroll(delta)
	{
		var d = new Date(app.calendar.state.date);
		d.setUTCDate(d.getUTCDate() + (delta));
		return d;
	}
}

export class day4 extends View
{
	static end_date(state)
	{
		var d = super.end_date(state);
		state.days = '4';
		d.setUTCHours(24 * 4 - 1);
		d.setUTCMinutes(59);
		d.setUTCSeconds(59);
		d.setUTCMilliseconds(0);
		return d;
	}

	static show_weekend(state)
	{
		state.weekend = 'true';
		return true;
	}

	static scroll(delta)
	{
		var d = new Date(app.calendar.state.date);
		d.setUTCDate(d.getUTCDate() + (4 * delta));
		return d;
	}
}

export class week extends View
{
	static header(state)
	{
		var end_date = state.last;
		if(!week.show_weekend(state))
		{
			end_date = new Date(state.last);
			end_date.setUTCDate(end_date.getUTCDate() - 2);
		}
		return super._owner(state) + app.calendar.egw.lang('Week') + ' ' +
			app.calendar.date.week_number(state.first) + ': ' +
			app.calendar.date.long_date(state.first, end_date);
	}

	static start_date(state)
	{
		return app.calendar.date.start_of_week(super.start_date(state));
	}

	static end_date(state)
	{
		var d = app.calendar.date.start_of_week(state.date || new Date());
		// Always 7 days, we just turn weekends on or off
		d.setUTCHours(24 * 7 - 1);
		d.setUTCMinutes(59);
		d.setUTCSeconds(59);
		d.setUTCMilliseconds(0);
		return d;
	}
}

export class weekN extends View
{
	static header(state)
	{
		return super._owner(state) + app.calendar.egw.lang('Week') + ' ' +
			app.calendar.date.week_number(state.first) + ' - ' +
			app.calendar.date.week_number(state.last) + ': ' +
			app.calendar.date.long_date(state.first, state.last);
	}

	static start_date(state)
	{
		return app.calendar.date.start_of_week(super.start_date(state));
	}

	static end_date(state)
	{
		state.days = '' + (state.days >= 5 ? state.days : egw.preference('days_in_weekview', 'calendar') || 7);

		var d = app.calendar.date.start_of_week(super.start_date(state));
		// Always 7 days, we just turn weekends on or off
		d.setUTCHours(24 * 7 * (parseInt(app.calendar.egw.preference('multiple_weeks', 'calendar')) || 3) - 1);
		return d;
	}
}

export class month extends View
{
	static header(state)
	{
		var formatDate = new Date(state.date);
		formatDate = new Date(formatDate.valueOf() + formatDate.getTimezoneOffset() * 60 * 1000);
		return super._owner(state) + app.calendar.egw.lang(date('F', formatDate)) + ' ' + date('Y', formatDate);
	}

	static start_date(state)
	{
		var d = super.start_date(state);
		d.setUTCDate(1);
		return app.calendar.date.start_of_week(d);
	}

	static end_date(state)
	{
		var d = super.end_date(state);
		d = new Date(d.getFullYear(), d.getUTCMonth() + 1, 1, 0, -d.getTimezoneOffset(), 0);
		d.setUTCSeconds(d.getUTCSeconds() - 1);
		return app.calendar.date.end_of_week(d);
	}

	static scroll(delta)
	{
		var d = new Date(app.calendar.state.date);
		// Set day to 15 so we don't get overflow on short months
		// eg. Aug 31 + 1 month = Sept 31 -> Oct 1
		d.setUTCDate(15);
		d.setUTCMonth(d.getUTCMonth() + delta);
		return d;
	}
}

export class planner extends View
{
	public static etemplates : (string | etemplate2)[] = ['calendar.planner'];

	static header(state)
	{
		var startDate = new Date(state.first);
		startDate = new Date(startDate.valueOf() + startDate.getTimezoneOffset() * 60 * 1000);

		var endDate = new Date(state.last);
		endDate = new Date(endDate.valueOf() + endDate.getTimezoneOffset() * 60 * 1000);
		return super._owner(state) + date(egw.preference('dateformat'), startDate) +
			(startDate == endDate ? '' : ' - ' + date(egw.preference('dateformat'), endDate));
	}

	static group_by(state)
	{
		return state.sortby ? state.sortby : 0;
	}

	// Note: Planner uses the additional value of planner_view to determine
	// the start & end dates using other view's functions
	static start_date(state)
	{
		// Start here, in case we can't find anything better
		var d = super.start_date( state);

		if(state.sortby && state.sortby === 'month')
		{
			d.setUTCDate(1);
		}
		else if(state.planner_view && app.classes.calendar.views[state.planner_view])
		{
			d = app.classes.calendar.views[state.planner_view].start_date.call(this, state);
		}
		else
		{
			d = app.calendar.date.start_of_week(d);
			d.setUTCHours(0);
			d.setUTCMinutes(0);
			d.setUTCSeconds(0);
			d.setUTCMilliseconds(0);
			return d;
		}
		return d;
	}

	static end_date(state)
	{

		var d = super.end_date( state);
		if(state.sortby && state.sortby === 'month')
		{
			d.setUTCDate(0);
			d.setUTCFullYear(d.getUTCFullYear() + 1);
		}
		else if(state.planner_view && app.classes.calendar.views[state.planner_view])
		{
			d = app.classes.calendar.views[state.planner_view].end_date(state);
		}
		else if(state.days)
		{
			// This one comes from a grid view, but we'll use it
			d.setUTCDate(d.getUTCDate() + parseInt(state.days) - 1);
			delete state.days;
		}
		else
		{
			d = app.calendar.date.end_of_week(d);
		}
		return d;
	}

	static hide_empty(state)
	{
		var check = state.sortby == 'user' ? ['user', 'both'] : ['cat', 'both'];
		return (check.indexOf(egw.preference('planner_show_empty_rows', 'calendar') + '') === -1);
	}

	static scroll(delta)
	{
		if(app.calendar.state.planner_view && !isNaN(delta) && app.calendar.state.sortby !== "month")
		{
			return app.classes.calendar.views[app.calendar.state.planner_view].scroll(delta);
		}
		let d = new Date(app.calendar.state.date);
		let days = 1;
		delta = parseInt(delta) || 0;

		// Yearly view, grouped by month - scroll 1 month
		if(app.calendar.state.sortby === 'month')
		{
			d.setUTCMonth(d.getUTCMonth() + delta);
			d.setUTCDate(1);
			d.setUTCHours(0);
			d.setUTCMinutes(0);
			return d;
		}
		// Need to set the day count, or auto date ranging takes over and
		// makes things buggy
		if(app.calendar.state.first && app.calendar.state.last)
		{
			//@ts-ignore
			let diff = new Date(app.calendar.state.last) - new Date(app.calendar.state.first);
			days = Math.round(diff / (1000 * 3600 * 24));
		}
		d.setUTCDate(d.getUTCDate() + (days * delta));
		if(days > 8)
		{
			d = app.calendar.date.start_of_week(d);
		}
		return d;
	}
}

export class listview extends View
{
	public static etemplates : (string | etemplate2)[] = ['calendar.list'];

	static header(state)
	{
		var startDate = new Date(state.first || state.date);
		startDate = new Date(startDate.valueOf() + startDate.getTimezoneOffset() * 60 * 1000);
		var start_check = '' + startDate.getFullYear() + startDate.getMonth() + startDate.getDate();

		var endDate = new Date(state.last || state.date);
		endDate = new Date(endDate.valueOf() + endDate.getTimezoneOffset() * 60 * 1000);
		var end_check = '' + endDate.getFullYear() + endDate.getMonth() + endDate.getDate();
		return super._owner(state) +
			date(egw.preference('dateformat'), startDate) +
			(start_check == end_check ? '' : ' - ' + date(egw.preference('dateformat'), endDate));
	}
}
