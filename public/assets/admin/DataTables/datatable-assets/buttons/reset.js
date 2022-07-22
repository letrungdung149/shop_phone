/**
 * DataTables reset button.
 *
 * -- Laravel Integration --
 *
 * Button::make('reset')
 *
 */
$.fn.dataTable.ext.buttons.reset = {
    name: 'reset',
    className: 'buttons-reset',
    text: '<i class="fas fa-undo" data-toggle="tooltip" data-title="Clear Search"></i>',
    action: function (e, dt, button, config) {
        $('.dataTable').find(':input').each(function () {
            $(this).val('');
        }).each(function (e) {
            let val = $.fn.dataTable.util.escapeRegex($(this).val());
            dt.table().column($(this).closest('th').index()).search(val ? val : '', false, true);
        });
        dt.search('').draw();
    }
};
