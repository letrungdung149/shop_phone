<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="icon" href="frontend/frontend/img/index/favicon.png" sizes="16x16">
    <!--css-->
    <link href="frontend/css/style-1.css" rel="stylesheet" type="text/css">
    <!--BOOTSTRAP-->
    <link href="frontend/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <link href="frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="frontend/fonts/font/flaticon.css" rel="stylesheet" type="text/css">
    <!--thumbnail-slider-->
    <link href="frontend/css/lightslider.css" rel="stylesheet" type="text/css">
    <!--slider-->
    <link href="frontend/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="frontend/css/theme.css" rel="stylesheet" type="text/css">
    <!--Revolution-->
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <script src="frontend/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="frontend/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<body>

<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@include('shop.layouts.header')

@yield('content')

@include('shop.layouts.footer')

<!--js-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="frontend/js/ajax.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<!-- JS Global-slider -->
<script src="frontend/js/owl.carousel.min.js"></script>
<script src="frontend/js/theme.js"></script>
<!--countdown-->
<script src="frontend/js/countdown.js"></script>
<!--index-->
<script src="frontend/js/index.js"></script>
<!--light-slider-->
<script src="frontend/js/lightslider.js"></script>
<!--custom-->
<script src="frontend/js/custom.js"></script>
<!--client-slider-->
<script src="frontend/js/jquery.flexisel.js"></script>
<!--Revolution-->
<script src="frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="frontend/revolution/js/rev-main.js"></script>
<script language=JavaScript>

    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
            return false;
        }
    });

    $(document).on("contextmenu", function (e) {
        e.preventDefault();
    });

</script>
</body>
</html>
