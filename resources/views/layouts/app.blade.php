<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ShopPhone</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <link href="/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/assets/admin/formvalidation/dist/css/formValidation.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/DataTables-1.11.4/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/Editor-2.0.5/css/editor.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/AutoFill-2.3.7/css/autoFill.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/Buttons-2.2.2/css/buttons.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/ColReorder-1.5.5/css/colReorder.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/DateTime-1.1.1/css/dataTables.dateTime.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/FixedColumns-4.0.1/css/fixedColumns.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/FixedHeader-3.2.1/css/fixedHeader.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/KeyTable-2.6.4/css/keyTable.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/Responsive-2.2.9/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/RowGroup-1.1.4/css/rowGroup.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/RowReorder-1.2.8/css/rowReorder.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/Scroller-2.0.5/css/scroller.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/SearchBuilder-1.3.0/css/searchBuilder.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/SearchPanes-1.4.0/css/searchPanes.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/Select-1.3.4/css/select.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/StateRestore-1.1.0/css/stateRestore.bootstrap4.min.css"/>

    <link rel="stylesheet" type="text/css" href="/assets/admin/DataTables/jquery-datatables-checkboxes/css/dataTables.checkboxes.css"/>
    {{--  front  --}}
    <!-- Core JS files -->
    <script src="/global_assets/js/main/jquery.min.js"></script>
    <script src="/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
    <script src="/global_assets/js/plugins/forms/inputs/alpaca/alpaca.min.js"></script>
    <script src="/global_assets/js/plugins/forms/inputs/alpaca/price_format.min.js"></script>
    <script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/global_assets/js/plugins/ui/prism.min.js"></script>
    <script src="/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>

    <script src="/global_assets/js/demo_pages/alpaca_advanced.js"></script>
    <!-- /theme JS files -->
    <style>
        .simplebar-scrollbar::before {
            background-color: #a5a0a0;
        }
        .DTE_Field .small {
            font-size: 90%;
        }

        .btn-primary {
            color: #fff !important;
            background-color: #2196f3 !important;
            border-color: #2196f3 !important;
        }

        .media-library-hidden {
            display: none !important;
        }

        .fv-plugins-bootstrap .fv-help-block {
            font-size: 90%;
        }

        .b-top {
            border-top: 1px solid #ddd;
        }

        .b-bot {
            border-bottom: 1px solid #ddd;
        }

        #variant-sidebar {
            max-height: 1000px;
            overflow-y: auto;
            flex-wrap: nowrap;
        }

        .dataTables_wrapper .dataTables_processing {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 250px;
            height: 80px;
            margin-left: -125px;
            margin-top: -15px;
            padding: 15px 0 30px 0;
            border: 1px solid #ddd;
            text-align: center;
            color: #444;
            font-size: 14px;
            box-shadow: 2px 2px 5px #444;
            -moz-box-shadow: 2px 2px 5px #444;
            -webkit-box-shadow: 2px 2px 5px #444;
            z-index: 9999;
        }

        .dataTables_empty {
            padding-top: 25px!important;
            padding-bottom: 180px!important;
            text-align: left!important;
            color: #777;
            font-size: 15px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: auto 161px;
        }

        .uf-collection-col-wrap {
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-all;
        }

        .uf-collection span.select2-dropdown.select2-dropdown--below {
            position:absolute;
            top: -32px;
        }

        .cslder {
            display: block;
            text-align: center;
            height: 20px;
            position: relative;
            display: none;
            clear: both
        }

        .cslder .cswrap {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%)
        }

        .csdot {
            width: 5px;
            height: 5px;
            border: 1px solid #288ad6;
            background: #288ad6;
            border-radius: 50%;
            float: left;
            margin: 0 2px;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-animation: fx 1000ms ease infinite 0ms;
            animation: fx 1000ms ease infinite 0ms
        }

        .csdot:nth-child(2) {
            -webkit-animation: fx 1000ms ease infinite 300ms;
            animation: fx 1000ms ease infinite 300ms
        }

        .csdot:nth-child(3) {
            -webkit-animation: fx 1000ms ease infinite 600ms;
            animation: fx 1000ms ease infinite 600ms
        }

        .csslder {
            display: block;
            text-align: center;
            height: 20px;
            position: relative;
            clear: both
        }

        .csslder .csswrap {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%)
        }

        .cssdot {
            width: 10px;
            height: 10px;
            border: 1px solid #288ad6;
            background: #288ad6;
            border-radius: 50%;
            float: left;
            margin: 0 5px;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-animation: fx 1000ms ease infinite 0ms;
            animation: fx 1000ms ease infinite 0ms
        }

        .cssdot:nth-child(2) {
            -webkit-animation: fx 1000ms ease infinite 300ms;
            animation: fx 1000ms ease infinite 300ms
        }

        .cssdot:nth-child(3) {
            -webkit-animation: fx 1000ms ease infinite 600ms;
            animation: fx 1000ms ease infinite 600ms
        }

        .loadingcover {
            z-index: 10000;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255,255,255,.75)
        }

        .loadingcover .csslder {
            top: 50%
        }

        @-webkit-keyframes fx {
            50% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes fx {
            50% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .navbar-brand img {
            height: 2.125rem;
        }
    </style>
    <script>
        window.Config = {
            dateFormat: 'd-m-Y H:i',
            baseUrl: '{{ url('/') }}',
            version: '{{ config('ecc.app_version') }}',
            adminPrefix: '/backend',
            csrf: '{{ csrf_token() }}'
        }

        window.Lang = {
            confirm_delete: "{{ __('Bạn có chắc chắn muốn xóa ?') }}",
            oh_no: "{{ __('Ôi không !') }}",
            system: "{{ __('Hệ thống') }}",
            success: "{{ __('Thành công !') }}",
            confirm: "{{ __('Xác nhận') }}",
            yes: "{{ __('Có') }}",
            no: "{{ __('Không') }}",
            create: "{{ __('Tạo') }}",
            rename: "{{ __('Đổi tên') }}",
            edit: "{{ __('Chỉnh sửa') }}",
            remove: "{{ __('Xóa') }}",
        }
    </script>
    @stack('css')
</head>

<body>

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-section sidebar-user my-1">
                <div class="sidebar-section-body">
                    <div class="media">
                        <a href="#">
                            <img src="/assets/admin/img/logo.png" class="rounded-circle center" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-section">

            </div>
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
									Bảng điều khiển
								</span>
                        </a>
                    </li>
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Sản phẩm</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="fa far fa-folders"></i> <span>Sản phẩm</span></a></li>

                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Danh mục</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item"><a href="{{ route('admin.categories.index') }}" class="nav-link"><i class="fa far fa-folders"></i> <span>Danh mục</span></a></li>
                    <!-- /main -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <div class="navbar navbar-expand-lg navbar-light"><div class="d-flex flex-1 d-lg-none"><button class="navbar-toggler sidebar-mobile-main-toggle" type="button"><i class="icon-transmission"></i></button></div><div class="navbar-collapse collapse flex-lg-1 order-2 order-lg-1" id="navbar-search"><div class="navbar-search d-flex align-items-center py-2 py-lg-0"></div></div><div class="d-flex justify-content-end align-items-center flex-1 flex-lg-0 order-1 order-lg-2"><ul class="navbar-nav flex-row"><li class="nav-item nav-item-dropdown-lg dropdown dropdown-user"><a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle" data-toggle="dropdown"><img src="https://ui-avatars.com/api/?name=L+M&amp;color=7F9CF5&amp;background=EBF4FF" class="rounded-pill mr-lg-2" height="34" alt=""><span class="d-none d-lg-inline-block">Dũng Núi</span></a><div class="dropdown-menu dropdown-menu-right"><a href="https://vulcano.azlink.vn/backend/profile" class="dropdown-item"><i class="icon-user-plus"></i> Hồ sơ</a><div class="dropdown-divider"></div><form method="POST" action="https://vulcano.azlink.vn/logout"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <a href="http://127.0.0.1:8000/logout" class="dropdown-item" onclick="event.preventDefault();
										this.closest('form').submit();"><i class="icon-switch2"></i> Đăng Xuất</a></form></div></li></ul></div></div>

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <a href="alpaca_advanced.html" class="breadcrumb-item">Alpaca</a>
                            <span class="breadcrumb-item active">Advanced inputs</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <a href="#" class="breadcrumb-elements-item">
                                <i class="icon-comment-discussion mr-2"></i>
                                Support
                            </a>

                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear mr-2"></i>
                                    Settings
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                    <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                @yield('content')
            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy;
						</span>

                    <ul class="navbar-nav ml-lg-auto">
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
<script>
    function Backend() {}

    Backend.can = function (permission) {
        return window.App.permissions.includes(permission)
    }

    window.mediaLibraryTranslations = {
        fileTypeNotAllowed: 'Bạn phải tải lên một loại tệp',
        tooLarge: 'Tệp quá lớn, tối đa',
        tooSmall: 'Tệp quá nhỏ, tối thiểu',
        tryAgain: 'vui lòng thử tải lại tệp này lên',
        somethingWentWrong: 'Đã xảy ra lỗi khi tải tệp này lên',
        selectOrDrag: 'Chọn hoặc kéo tệp',
        selectOrDragMax: 'Chọn hoặc kéo tối đa {maxItems} {file}',
        file: { singular: 'file', plural: 'files' },
        anyImage: 'bất kỳ hình ảnh nào',
        anyVideo: 'bất kỳ video nào',
        goBack: 'Quay lại',
        dropFile: 'Thả tệp để tải lên',
        dragHere: 'Kéo tệp vào đây',
        remove: 'Xóa',
        download: 'Tải xuống',
    };

    window.tinymceOptions = {
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        importcss_append: true,
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: 'oxide',
        content_css: 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,
        toolbar_mode: 'wrap',
        language_url : "/assets/admin/tinymce_languages/langs/vi.js",
        language: 'vi',
        quickbars_insert_toolbar: 'quicktable image media codesample',
        extended_valid_elements : "img[class|style|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|loading=lazy]"
    }

</script>
<script src="/global_assets/js/main/jquery.min.js"></script>
<script src="/global_assets/js/main/bootstrap.bundle.min.js"></script>
<script src="/global_assets/js/plugins/notifications/pnotify.min.js"></script>
<script src="/assets/admin/js/app.js"></script>
<script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="https://cdn.tiny.cloud/1/n16hhrb5bl3fgp16t48tl2r8lg6iypue1zhq1ponai343ehm/tinymce/5/tinymce.min.js" referrerpolicy="origin" defer></script>
<script src="/assets/admin/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/assets/admin/formvalidation/dist/js/locales/vi_VN.min.js"></script>
<script src="/assets/admin/formvalidation/dist/js/plugins/J.min.js"></script>
<script src="/assets/admin/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>

<script type="text/javascript" src="/assets/admin/DataTables/DataTables-1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/DataTables-1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Editor-2.0.5/js/dataTables.editor.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Editor-2.0.5/js/editor.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/AutoFill-2.3.7/js/dataTables.autoFill.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/AutoFill-2.3.7/js/autoFill.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Buttons-2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Buttons-2.2.2/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Buttons-2.2.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/ColReorder-1.5.5/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/DateTime-1.1.1/js/dataTables.dateTime.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/FixedColumns-4.0.1/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/FixedHeader-3.2.1/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/KeyTable-2.6.4/js/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Responsive-2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Responsive-2.2.9/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/RowGroup-1.1.4/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/RowReorder-1.2.8/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Scroller-2.0.5/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/SearchBuilder-1.3.0/js/dataTables.searchBuilder.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/SearchBuilder-1.3.0/js/searchBuilder.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/SearchPanes-1.4.0/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/SearchPanes-1.4.0/js/searchPanes.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/Select-1.3.4/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/StateRestore-1.1.0/js/dataTables.stateRestore.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/StateRestore-1.1.0/js/stateRestore.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/plugins/dataTables.scrollToTop.min.js"></script>

<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/helper.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/plugins.js"></script>

<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/ajaxModal.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/add.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/export.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/csv.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/excel.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/pdf.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/print.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/reset.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/reload.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/restore.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/duplicate.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/duplicateSingle.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/forceDelete.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/forceDeleteSingle.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/url.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/ajax.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/ajaxBatch.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/toggleScope.js"></script>
<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/buttons/softDeletes.js"></script>

<script type="text/javascript" src="/assets/admin/DataTables/datatable-assets/callbacks/sweetalert2.js"></script>

<script src="/assets/admin/DataTables/datatable-assets/renderers/badge.js"></script>
<script src="/assets/admin/DataTables/datatable-assets/renderers/boolean.js"></script>
<script src="/assets/admin/DataTables/datatable-assets/renderers/suffix.js"></script>
<script src="/assets/admin/DataTables/datatable-assets/renderers/prefix.js"></script>
<script src="/assets/admin/DataTables/datatable-assets/editor.select2.js"></script>

<script src="/assets/admin/DataTables/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>

<script src="/global_assets/js/plugins/pickers/color/spectrum.js"></script>
@if(request()->routeIs('dashboard'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endif

<script src="/assets/admin/js/datatable.js"></script>
<script>
    window.jquery = jQuery;
    $.fn.select2.defaults.set('language', 'vi');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $( document ).ajaxSuccess(function( event, xhr, settings ) {
        var jsonResponse = xhr.responseJSON;

        if (jsonResponse.hasOwnProperty('action')) {
            var action = jsonResponse.action;

            var message = 'Thêm mới thành công'

            if (action == 'edit') {
                message = 'Cập nhật thành công'
            }

            if (action == 'remove') {
                message = 'Xóa thành công'
            }

            new PNotify({
                title: 'Thành công !',
                text: message,
                addclass: 'bg-success border-success text-white'
            });
        }
    });
    function setSearchSelect2(selector, searchUrl) {

        if (selector.length > 0) {
            selector.select2({
                width: '100%',
                ajax: {
                    url: searchUrl,
                    datatype: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 15) < data.total
                            }
                        };
                    },
                    templateSelection: function(item) { return item.name || item.text; }
                },
            });

            let selected = selector.val();

            if (selector.attr('multiple')) {
                if (selector.val().length > 0) {
                    selected = selector.val().join(',');
                } else {
                    selected = null;
                }
            }

            if (selected) {
                $.ajax({
                    type: 'GET',
                    url: searchUrl + '?id=' + selected
                }).then(function (res) {
                    selector.empty().trigger("change");

                    // create the option and append to Select2
                    res.forEach(function(data) {
                        var option = new Option(data.text, data.id, true, true);
                        selector.append(option).trigger('change');

                        // manually trigger the `select2:select` event
                        selector.trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                    })
                });
            }

        }
    }

    $(function() {
        $('.form-control-select2').select2();

        $('[data-behavior~=delete-resource]').on('click', function(){
            if (!confirm('{{ __("Are you sure to delete this resource") }}')) {
                return;
            }

            var $this = $(this);
            var $body = $('body');

            var actionUrl = $this.data('action-url');
            var csrf = $('meta[name="csrf-token"]').attr('content');

            var $form = $("<form action='" + actionUrl + "' method='POST'><input type='hidden' name='_token' value='" + csrf + "' /><input type='hidden' name='_method' value='delete' /></form>")

            $body.append($form);

            $form.submit({
                tinymceOptions
            });
        });

        tinymce.init($.extend( true, {
            selector: '.editor'
        }, window.tinymceOptions));

    })
</script>
<script>
    window.jquery = jQuery;
    $.fn.select2.defaults.set('language', 'vi');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $( document ).ajaxSuccess(function( event, xhr, settings ) {
        var jsonResponse = xhr.responseJSON;

        if (jsonResponse.hasOwnProperty('action')) {
            var action = jsonResponse.action;

            var message = 'Thêm mới thành công'

            if (action == 'edit') {
                message = 'Cập nhật thành công'
            }

            if (action == 'remove') {
                message = 'Xóa thành công'
            }

            new PNotify({
                title: 'Thành công !',
                text: message,
                addclass: 'bg-success border-success text-white'
            });
        }
    });
    function setSearchSelect2(selector, searchUrl) {

        if (selector.length > 0) {
            selector.select2({
                width: '100%',
                ajax: {
                    url: searchUrl,
                    datatype: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 15) < data.total
                            }
                        };
                    },
                    templateSelection: function(item) { return item.name || item.text; }
                },
            });

            let selected = selector.val();

            if (selector.attr('multiple')) {
                if (selector.val().length > 0) {
                    selected = selector.val().join(',');
                } else {
                    selected = null;
                }
            }

            if (selected) {
                $.ajax({
                    type: 'GET',
                    url: searchUrl + '?id=' + selected
                }).then(function (res) {
                    selector.empty().trigger("change");

                    // create the option and append to Select2
                    res.forEach(function(data) {
                        var option = new Option(data.text, data.id, true, true);
                        selector.append(option).trigger('change');

                        // manually trigger the `select2:select` event
                        selector.trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                    })
                });
            }

        }
    }

    $(function() {
        $('.form-control-select2').select2();

        $('[data-behavior~=delete-resource]').on('click', function(){
            if (!confirm('{{ __("Are you sure to delete this resource") }}')) {
                return;
            }

            var $this = $(this);
            var $body = $('body');

            var actionUrl = $this.data('action-url');
            var csrf = $('meta[name="csrf-token"]').attr('content');

            var $form = $("<form action='" + actionUrl + "' method='POST'><input type='hidden' name='_token' value='" + csrf + "' /><input type='hidden' name='_method' value='delete' /></form>")

            $body.append($form);

            $form.submit({
                tinymceOptions
            });
        });

        tinymce.init($.extend( true, {
            selector: '.editor'
        }, window.tinymceOptions));

    })
</script>
@stack('js')
</body>
</html>
