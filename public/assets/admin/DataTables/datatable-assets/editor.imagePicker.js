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

    if ( ! DataTable.ext.editorFields ) {
        DataTable.ext.editorFields = {};
    }

    var _fieldTypes = DataTable.Editor ?
        DataTable.Editor.fieldTypes :
        DataTable.ext.editorFields;

    _fieldTypes.imagePicker = {
        create(conf) {

            var options = conf.options || [];
            
            var div = '<div class="row text-center text-lg-start" id="'+$.fn.dataTable.Editor.safeId( conf.id )+'">';
                
            for (let i = 0; i <conf.options.length; i++) {
                var opt = options[i];
                div += '<div class="col-lg-3 col-md-4 col-6">' +
                '<a href="javascript:void(0)" data-media-id="' + opt.value + '" class="d-block mb-4 h-100 pick-image">' +
                    '<img class="img-fluid img-thumbnail " src="' + opt.label + '" alt="">' +
                '</a>'+
                '</div>';
            }
            div += '</div>';

            conf._div = $(div);

            var isMultiple = conf.opts ? conf.opts.multiple : false;

            conf._div.on('click', '.pick-image', function() {

                if (isMultiple) {
                    $(this).toggleClass('selected');
                } else {
                    conf._div.find('.pick-image.selected').removeClass('selected');

                    $(this).addClass('selected');
                }

            });

            return conf._div;
        },

        get(conf) {
            var selected = [];

            $.each( conf._div.find('.pick-image.selected'), function ( key, val ) {
                selected.push($(val).data('media-id'));   
            });
            var isMultiple = conf.opts ? conf.opts.multiple : false;

            if (!isMultiple) {
                if (selected.length > 0) {
                    return selected[0];
                }
                return null;
            }

            return selected;
        },

        set(conf, val) {
            conf._div.find('.pick-image.selected').removeClass('selected');

            conf._div.find('[data-media-id="' + val + '"]').addClass('selected');

            if (Array.isArray(val)) {
                val.forEach((v) => conf._div.find('[data-media-id="' + v + '"]').addClass('selected'))
            }
        },

        enable(conf) {
        },

        disable(conf) {
        },

        update(conf, data) {

        },

        focus(conf) {

        },

        owns(conf, node) {
            return true;
        },

        canReturnSubmit() {
            return false;
        }
    };

}));