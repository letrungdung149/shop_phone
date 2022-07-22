/**
 * DataTables add button.
 *
 * -- Laravel Integration --
 *
 * Button::make('ajaxModal')->text('<i class="fas fa-plus-circle"></i> Thêm mới')
 *
 */
 $.fn.dataTable.ext.buttons.ajaxModal = {
    name: 'ajaxModal',
    className: 'buttons-add',
    text: '<i class="fas fa-plus-circle"></i> Thêm mới',
    action: function (e, dt, button, config) {
        
    }
};
