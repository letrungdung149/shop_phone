<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    {{--  custom.css  --}}
    <link href="/assets/admin/css/custom.css" rel="stylesheet" type="text/css">

    {{--  front  --}}
    <link rel="stylesheet" type="text/css" href="/assets/admin/FontAwesome/css/fontawesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/admin/FontAwesome/css/regular.min.css"/>
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

    <script src="assets/admin/js/app.js"></script>
    <script src="/global_assets/js/demo_pages/alpaca_advanced.js"></script>
    <!-- /theme JS files -->

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

</body>
</html>
