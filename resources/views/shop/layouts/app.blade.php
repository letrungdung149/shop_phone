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

<!--modal-->
<div class="modal fade quick-modal in" id="quick-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="col-md-5 detail-left text-center">
                    <ul class="color-var">
                        <li><a href="#"><i class="fa fa-check"></i></a></li>
                        <li><a href="#" class="active"><i class="fa fa-check"></i></a></li>
                        <li><a href="#"><i class="fa fa-check"></i></a></li>
                        <li><a href="#"><i class="fa fa-check"></i></a></li>
                        <li><a href="#"><i class="fa fa-check"></i></a></li>
                    </ul>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active" data-thumb="0"> <img src="frontend/img/product-list/quick-img-1.jpg" alt=""> </div>
                            <div class="item" data-thumb="1"> <img src="frontend/img/product-list/quick-img-2.jpg" alt=""> </div>
                            <div class="item" data-thumb="2"> <img src="frontend/img/product-list/quick-img-3.jpg" alt=""> </div>
                            <div class="item" data-thumb="3"> <img src="frontend/img/product-list/quick-img-4.jpg" alt=""> </div>
                            <div class="item" data-thumb="4"> <img src="frontend/img/product-list/quick-img-1.jpg" alt=""> </div>
                            <div class="item" data-thumb="5"> <img src="frontend/img/product-list/quick-img-2.jpg" alt=""> </div>
                            <div class="item" data-thumb="6"> <img src="frontend/img/product-list/quick-img-3.jpg" alt=""> </div>
                            <div class="item" data-thumb="7"> <img src="frontend/img/product-list/quick-img-4.jpg" alt=""> </div>
                        </div>
                    </div>
                    <div id="thumbcarousel" class="carousel thumbcarousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="frontend/img/product-list/thumb-img-1.jpg" alt=""></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="frontend/img/product-list/thumb-img-2.jpg" alt=""></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="frontend/img/product-list/thumb-img-3.jpg" alt=""></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="frontend/img/product-list/thumb-img-4.jpg" alt=""></div>
                            </div>
                            <!-- /item -->
                            <div class="item">
                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="frontend/img/product-list/thumb-img-1.jpg" alt=""></div>
                                <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="frontend/img/product-list/thumb-img-2.jpg" alt=""></div>
                                <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="frontend/img/product-list/thumb-img-3.jpg" alt=""></div>
                                <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="frontend/img/product-list/thumb-img-4.jpg" alt=""></div>
                            </div>
                            <!-- /item -->
                        </div>
                        <!-- /carousel-inner -->
                        <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"> <span class="fa fa-angle-right"></span> </a> </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-7 detail-right">
                    <div class="detail-top">
                        <h1>iPhone 7 128GB Rose Gold </h1>
                        <div class="rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            <span>( 12 reviews )</span>
                            <a href="#">Write a review</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="rate">
                            <h2>495.50$ <del>$520.20</del></h2>
                            <label class="offer-label">-15%</label>
                            <span><i class="fa fa-check-circle"></i> In stock</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="detail">
                        <li class="sub-menu"><a class="main-a" href="javascript:void(0)">Description <div class="icon-plus"><i class="fa flaticon-3-signs"></i></div></a>
                            <ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib porttitor egestas orci, vitae ullamcorper risus  dolor sit amet, consectetur adium porttitor egestas orci, vitae ullamcorper risus consectetur id. </p>
                            </ul>
                        </li>
                    </ul>
                    <ul class="detail feature">
                        <li class="sub-menu"><a class="main-a" href="javascript:void(0)">Features <div class="icon-plus"><i class="fa flaticon-3-signs"></i></div></a>

                            <ul>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>12MP primary camera </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>Quad-LED True Tone flash</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>7MP front facing HD camera </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>4.7-inch (diagonal) Retina HD</li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>128GB internal memoryVestib</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>single Nano-SIM </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>Li-Ion 1960 mAh battery</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>1 year manufacturer warranty</li>
                            </ul>
                            <div class="clearfix"></div>

                        </li>
                    </ul>
                    <div class="detail-btm">
                        <div class="detail-row">
                            <p class="text-uppercase">Size</p>
                            <ul class="size">
                                <li><a href="#">32 GB</a></li>
                                <li><a href="#">64 GB</a></li>
                                <li class="active"><a href="#">128 GB</a></li>
                            </ul>
                        </div>
                        <div class="detail-row quantity-box">
                            <p class="text-uppercase">Quantity</p><div class="clearfix"></div>
                            <div id="field1" class="input--filled">
                                <button type="button" id="sub" class="sub"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                <input type="text" id="1" value="1" class="field">
                                <button type="button" id="add" class="add"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <div class="clearfix"></div>
                            </div>
                            <a class="coupon" href="#">Add to cart</a>
                            <div class="action-icon pull-right">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Wish list</a>
                                <a href="#"><i class="flaticon-refresh"></i>Compare</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-row"><p><span>SKU:</span> N/A</p></div>
                        <div class="detail-row"><p><span>Categories:</span> All, Featured, Shoes</p></div>
                        <div class="detail-row"><p><span>Tags:</span> Black, Brown, Red, Shoes, £0.00 - £150.00</p></div>
                        <div class="detail-row">
                            <p><span>Share:</span></p>
                            <div class="soc-icon">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribble"><i class="fa fa-dribbble"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!--page-load-modal-->
<div class="modal page-modal fade" id="pageloadmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="col-sm-5">
                    <img src="frontend/img/index/page-modal-img.jpg" alt="" class="img-responsive" />
                </div>
                <div class="col-sm-7">
                    <h2>Sign up our newsletter and save 25% off for the next purchase!</h2>
                    <p>Subscribe and get modified at first on the latest update and offers</p>
                    <div class="email-input">
                        <input class="email" type="email" name="email" placeholder="Email address" required />
                        <span class="input-hover"></span>
                    </div>
                    <a href="#" class="btn-insta">SEND</a>
                    <span>Note: We do not spam</span>
                    <div class="privacy-sec">
                        <input id="7" type="checkbox" /><label for="7">Do not show it anymore</label>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!--js-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
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
