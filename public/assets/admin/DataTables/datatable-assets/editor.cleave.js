(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery', 'datatables.net', 'datatables.net-editor'], factory);
	}
	else if (typeof exports === 'object') {
		// Node / CommonJS
		module.exports = function ($, dt) {
			if (!$) { $ = require('jquery'); }
			factory($, dt || $.fn.dataTable || require('datatables.net'));
		};
	}
	else if (jQuery) {
		// Browser standard
		factory(jQuery, jQuery.fn.dataTable);
	}
}(function ($, DataTable) {

	'use strict';

	if (!DataTable.ext.editorFields) {
		DataTable.ext.editorFields = {};
	}

	var _fieldTypes = DataTable.Editor ?
		DataTable.Editor.fieldTypes :
		DataTable.ext.editorFields;

	_fieldTypes.cleave = {

		create: function (conf) {

			conf._safeId = DataTable.Editor.safeId(conf.id);

			conf._input = $('<input/>').attr($.extend({

				id: DataTable.Editor.safeId(conf.id),

				type: 'text'

			}, conf.attr || {}));

			this
				.on('open.cleaveInit-' + conf._safeId, function () {
					conf._instance = new Cleave('#' + conf._safeId, $.extend(true, {}, conf.opts));
				})
				.on('close.cleaveInit-' + conf._safeId, function () {
					conf._instance.destroy();
					conf._input.val('');
				})

			return conf._input[0];
		},

		get: function (conf) {

			return conf._instance.getRawValue();
		},

		set: function (conf, val) {

			conf._input

				.val(val);
		},

		enable: function (conf) {

			conf._input.prop('disabled', false);
		},

		disable: function (conf) {

			conf._input.prop('disabled', true);

		},

		canReturnSubmit: function (conf, node) {

			return true;

		},

		destroy: function (conf) {
			this.off('open.cleaveInit-' + conf._safeId);
			this.off('close.cleaveInit-' + conf._safeId);
		},


		cleave: function ( conf ) {
			return conf._instance;
		}
	};



}));