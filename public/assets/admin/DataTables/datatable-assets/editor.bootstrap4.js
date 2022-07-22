'use strict';

/*
 * Set the default display controller to be our bootstrap control 
 */
$.fn.dataTable.Editor.defaults.display = "bootstrap";


/*
 * Alter the buttons that Editor adds to Buttons so they are suitable for bootstrap
 */
var i18nDefaults = $.fn.dataTable.Editor.defaults.i18n;
$.fn.dataTable.Editor.defaults.i18n.create.title = '<h5 class="modal-title">'+i18nDefaults.create.title+'</h5>';
$.fn.dataTable.Editor.defaults.i18n.edit.title = '<h5 class="modal-title">'+i18nDefaults.edit.title+'</h5>';
$.fn.dataTable.Editor.defaults.i18n.remove.title = '<h5 class="modal-title">'+i18nDefaults.remove.title+'</h5>';


/*
 * Change the default classes from Editor to be classes for Bootstrap
 */
$.extend( true, $.fn.dataTable.Editor.classes, {
	"header": {
		"wrapper": "DTE_Header modal-header"
	},
	"body": {
		"wrapper": "DTE_Body modal-body"
	},
	"footer": {
		"wrapper": "DTE_Footer modal-footer"
	},
	"form": {
		"tag": "form-horizontal",
		"button": "btn",
		"buttonInternal": "btn btn-outline-secondary"
	},
	"field": {
		"wrapper": "DTE_Field form-group row",
		"label":   "col-lg-4 col-form-label",
		"input":   "col-lg-8",
		"error":   "error is-invalid",
		"msg-labelInfo": "form-text text-secondary small",
		"msg-info":      "form-text text-secondary small",
		"msg-message":   "form-text text-secondary small",
		"msg-error":     "form-text text-danger small",
		"multiValue":    "card multi-value",
		"multiInfo":     "small",
		"multiRestore":  "card multi-restore"
	}
} );

$.extend( true, $.fn.dataTable.ext.buttons, {
	create: {
		formButtons: {
			className: 'btn-primary'
		}
	},
	edit: {
		formButtons: {
			className: 'btn-primary'
		}
	},
	remove: {
		formButtons: {
			className: 'btn-danger'
		}
	}
} );

$.fn.dataTable.Editor.fieldTypes.datatable.tableClass = 'table';

/*
 * Bootstrap display controller - this is effectively a proxy to the Bootstrap
 * modal control.
 */

let shown = false;
let fullyShown = false;

const dom = {
	// Note that `modal-dialog-scrollable` is BS4.3+ only. It has no effect on 4.0-4.2
	content: $(
		'<div class="modal fade DTED">'+
			'<div class="modal-dialog modal-dialog-scrollable"></div>'+
		'</div>'
	),
	close: $('<button class="close">&times;</div>')
};

$.fn.dataTable.Editor.display.bootstrap = $.extend( true, {}, $.fn.dataTable.Editor.models.displayController, {
	init: function ( dte ) {
		// Add `form-control` to required elements
		dte.on( 'displayOrder.dtebs', function ( e, display, action, form ) {
			$.each( dte.s.fields, function ( key, field ) {
				$('input:not([type=checkbox]):not([type=radio]), select, textarea', field.node() )
					.addClass( 'form-control' );
			} );
		} );

		return $.fn.dataTable.Editor.display.bootstrap;
	},

	open: function ( dte, append, callback ) {
		$(append).addClass('modal-content');

		// Special class for DataTable buttons in the form
		$(append).find('div.DTE_Field_Type_datatable div.dt-buttons')
			.removeClass('btn-group')
			.addClass('btn-group-vertical');

		// Setup events on each show
		dom.close
			.attr('title', dte.i18n.close)
			.off('click.dte-bs4')
			.on('click.dte-bs4', function () {
				dte.close('icon');
			})
			.appendTo($('div.modal-header', append));

		// This is a bit horrible, but if you mousedown and then drag out of the modal container, we don't
		// want to trigger a background action.
		let allowBackgroundClick = false;
		$(document)
			.off('mousedown.dte-bs4')
			.on('mousedown.dte-bs4', 'div.modal', function (e) {
				allowBackgroundClick = $(e.target).hasClass('modal') && shown
					? true
					: false;
			} );

		$(document)
			.off('click.dte-bs4')
			.on('click.dte-bs4', 'div.modal', function (e) {
				if ( $(e.target).hasClass('modal') && allowBackgroundClick ) {
					dte.background();
				}
			} );

		var content = dom.content.find('div.modal-dialog');
		content.children().detach();
		content.append( append );

		if ( shown ) {
			if ( callback ) {
				callback();
			}
			return;
		}

		shown = true;
		fullyShown = false;

		$(dom.content)
			.one('shown.bs.modal', function () {
				// Can only give elements focus when shown
				if ( dte.s.setFocus ) {
					dte.s.setFocus.focus();
				}

				fullyShown = true;

				if ( callback ) {
					callback();
				}
			})
			.one('hidden', function () {
				shown = false;
			})
			.appendTo( 'body' )
			.modal( {
				backdrop: "static",
				keyboard: false
			} );
	},

	close: function ( dte, callback ) {
		if ( ! shown ) {
			if ( callback ) {
				callback();
			}
			return;
		}

		// Check if actually displayed or not before hiding. BS4 doesn't like `hide`
		// before it has been fully displayed
		if ( ! fullyShown ) {
			$(dom.content)
				.one('shown.bs.modal', function () {
					$.fn.dataTable.Editor.display.bootstrap.close( dte, callback );
				} );

			return;
		}

		$(dom.content)
			.one( 'hidden.bs.modal', function () {
				$(this).detach();
			} )
			.modal('hide');

		shown = false;
		fullyShown = false;

		if ( callback ) {
			callback();
		}
	},

	node: function ( dte ) {
		return dom.content[0];
	}
} );