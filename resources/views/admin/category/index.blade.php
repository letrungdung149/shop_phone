@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Danh sách chuyên mục</h5>
        </div>

        <div class="card-body">
            <table id="categories-table" class="table" style="width:100%">
                <thead>
                <tr>
                    <th>Tên</th>
                    <th>Ngày tạo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

    </div>
@stop
@push('js')
    <script>
        var editor;
        $(function() {
            editor = new $.fn.dataTable.Editor( {
                ajax: "/backend/categories/editor",
                table: "#categories-table",
                fields: [
                    {
                        label: "name",
                        name: "name"
                    },
                ]
            });


            var $table = $('#categories-table');

            var i18n = $.fn.dataTable.Editor.defaults.i18n;

            onTypeChange = function() {
                if ($(this).val()) {
                    editor.field('parent_id').val(null);
                }
            };

            editor.on('preOpen', function() {

                editor.field('type').inst().on('change', onTypeChange)

            });

            editor.on('preClose', function() {
                editor.field('type').inst().off('change', onTypeChange)
            });

            $table.on('click', 'a.editor-edit', function (e) {
                e.preventDefault();

                editor.edit( $(this).closest('tr'), {
                    title: i18n.edit.title,
                    buttons: {
                        label: i18n.edit.submit,
                        fn: function () {
                            this.submit();
                        },
                        className: "btn-primary"
                    }
                });
            } );

            // Delete a record
            $table.on('click', 'a.editor-delete', function (e) {
                e.preventDefault();

                editor.remove( $(this).closest('tr'), {
                    title: i18n.remove.title,
                    message: i18n.remove.confirm[1],
                    buttons: {
                        label: i18n.remove.submit,
                        fn: function () {
                            this.submit();
                        },
                        className: "btn-danger"
                    }
                });
            });

            var buttons = [
                { extend: "colvis", columns: ':not(.noVis)'},
                { extend: "pageLength"}
            ]


            // if (Backend.can('categories.delete')) {
                buttons.unshift({ extend: "remove", editor: editor, className: 'btn-danger'})
            // }

            // if (Backend.can('categories.edit')) {
                buttons.unshift({ extend: "edit", editor: editor, className: 'btn-primary'})
            // }

            // if (Backend.can('categories.create')) {
                buttons.unshift({ extend: "create", editor: editor, className: 'btn-success'})
            // }


            $table.DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    url: "/backend/categories",
                    type: "GET",
                    data: function(data) {
                        for (var i = 0, len = data.columns.length; i < len; i++) {
                            if (!data.columns[i].search.value) delete data.columns[i].search;
                            if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                            if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                            if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
                        }
                        delete data.search.regex;
                        var formData = $("#form-filter").find("input, select").serializeArray();
                        $.each(formData, function(i, obj) {
                            data[obj.name] = obj.value;
                        });
                    }
                },
                columns: [
                    {
                        data: "name",
                        name: "name",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "created_at_formatted",
                        name: "created_at",
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: null,
                        className: "dt-center noVis",
                        orderable: false,
                        searchable: false,
                        render: function ( data, type, row ) {
                            var action = '<div class="list-icons">';

                            if (row.authorization.edit) {
                                action += '<a href="#" class="list-icons-item text-primary editor-edit"><i class="icon-pencil7"></i></a>';
                            }

                            if (row.authorization.delete) {
                                action += '<a href="#" class="list-icons-item text-danger editor-delete"><i class="icon-trash"></i></a>';
                            }

                            return action;
                        }
                    },
                ],
                dom: "<'row'<'col-sm-8'B><'col-sm-4'f>> <'row'r><'row'<'col-sm-12't>> <'row'<'col-sm-5'i><'col-sm-7'p>>",
                order: [
                    [2, "desc"]
                ],
                select: {
                    style: "multi",
                    selector: "td:first-child"
                },
                scrollToTop: true,
                buttons: buttons,
                initComplete: function() {
                    $('#form-filter').on('change',  (e)=> {
                        e.preventDefault();
                        this.api().draw();
                    });
                }
            });
        });
    </script>
@endpush
