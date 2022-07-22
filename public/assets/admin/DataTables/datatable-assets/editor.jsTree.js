'use strict';

if (!$.fn.dataTable.ext.editorFields) {
    $.fn.dataTable.ext.editorFields = {};
}

let _fieldTypes = $.fn.dataTable.Editor ?
    $.fn.dataTable.Editor.fieldTypes :
    $.fn.dataTable.ext.editorFields;

_fieldTypes.jsTree = {
    create(conf) {
        conf._div = $('<div />');
        conf._searchForm = $('<div class="input-group mb-1" />');
        conf._div.append(conf._searchForm);

        conf._searchForm.prepend(
            '<div class="input-group-prepend">' +
            '<span class="input-group-text">' +
            '<i class="far fa-fw fa-search"></i>' +
            '</span>' +
            '</div>'
        );
        conf._search = $('<input class="form-control form-control-sm" placeholder="Tìm kiếm..." />').appendTo(conf._searchForm);
        conf._searchForm.append(
            '<div class="input-group-append">' +
            '<button class="btn btn-sm btn-primary btn-clear">' +
            '<i class="far fa-fw fa-undo"></i>' +
            '</button>' +
            '<button class="btn btn-sm btn-primary btn-select-all">' +
            '<i class="far fa-fw fa-check-square"></i>' +
            '</button>' +
            '<button class="btn btn-sm btn-primary btn-deselect-all">' +
            '<i class="far fa-fw fa-square"></i>' +
            '</button>' +
            '</button>'
        );

        conf._searchForm.on('click', '.btn-clear', () => {
            conf._search.val('');
            conf._tree.jstree('close_all');
            conf._tree.jstree('clear_search');
        });
        conf._searchForm.on('click', '.btn-select-all', () => {
            conf._search.val('');
            conf._tree.jstree('select_all');
        });
        conf._searchForm.on('click', '.btn-deselect-all', () => {
            conf._search.val('');
            conf._tree.jstree('deselect_all');
        });

        conf._tree = $('<div />')
            .attr($.extend({
                id: $.fn.dataTable.Editor.safeId(conf.id)
            }, conf.attr || {}));

        conf._div.append(conf._tree);

        conf._to = false;
        conf._search.on('keyup', () => {
            if (conf._to) {
                clearTimeout(conf._to);
            }
            conf._to = setTimeout(function () {
                let v = conf._search.val();
                conf._tree.jstree('search', v);
            }, 250);
        });

        let options = $.extend({
            core: {
                data: conf.options,
            },
            search: {
                fuzzy: false,
                show_only_matches: true,
                search_leaves_only: true,
                close_opened_onclear: true
            },
            plugins: ["checkbox", "wholerow", "search"]
        }, conf.opts);

        conf._tree.jstree(options).bind("loaded.jstree", function (event, data) {
            $(this).jstree("open_all");
        });

        return conf._div;
    },

    get(conf) {
        return conf._tree.jstree('get_selected');
    },

    set(conf, val) {
        conf._tree.jstree('deselect_all');

        if ($.isArray(val)) {
            val.forEach((v) => conf._tree.jstree('select_node', v))
        }
    },

    enable(conf) {
        $(conf._tree).removeAttr('disabled');
    },

    disable(conf) {
        $(conf._tree).attr('disabled', 'disabled');
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