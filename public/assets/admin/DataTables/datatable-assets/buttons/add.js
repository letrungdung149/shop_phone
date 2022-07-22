/**
 * DataTables add button.
 *
 * -- Laravel Integration --
 *
 * Button::make('add')->text('<i class="fas fa-plus-square"></i> Add')
 *
 */
$.fn.dataTable.ext.buttons.add = {
    name: 'add',
    className: 'buttons-add',
    text: 'Thêm mới',
    action: function (e, dt, button, config) {
        if (config.url) {
            window.location.href = config.url;
        } else {
            let uri = window.location.toString();
            if (uri.indexOf("?") > 0) {
                uri = uri.substring(0, uri.indexOf("?"));
            }
            if (uri.indexOf("#") > 0) {
                uri = uri.substring(0, uri.indexOf("#"));
            }
            window.location = uri + '/create';
        }
        
    }
};
