/**
 * DataTables print button.
 *
 * -- Laravel Integration --
 *
 * Button::make('print')
 *
 */
$.fn.dataTable.ext.buttons.print = {
    name: 'print',
    className: 'buttons-print',
    text: '<i class="fas fa-print"></i>',
    action: function (e, dt, button, config) {
        window.location = _buildUrl(dt, 'print');
    }
};
