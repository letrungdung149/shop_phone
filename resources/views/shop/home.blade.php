@extends('shop.layouts.app')
@section('content')
    <!--product-->
    <div class="container product-sec pt-80">
        <div class="col-md-4 col-sm-4"><div class="ban-sec"><a href="#"><img src="frontend/img/index/banner-1.jpg" class="img-responsive" alt="" /></a></div></div>
        <div class="col-md-4 col-sm-4"><div class="ban-sec"><a href="#"><img src="frontend/img/index/banner-2.jpg" class="img-responsive" alt="" /></a></div></div>
        <div class="col-md-4 col-sm-4"><div class="ban-sec"><a href="#"><img src="frontend/img/index/banner-3.jpg" class="img-responsive" alt="" /></a></div></div>
        <div class="clearfix"></div>
    </div>

    <!--special-offer-->
    <div class="container special-offer padd-80">

        <div class="col-md-4  offer-sale text-center">
            <h3>special-offers</h3>
            <div class="offer">
                <div class="offer-circle">
                    <p>Save</p>
                    <p>$50</p>
                </div>
                <div class="clearfix"></div>
                <img src="frontend/img/index/offer-speaker.jpg" alt="" class="img-responsive" />
                <h2><a href="#">Creative WP-350 Wireless Bluetooth® Headphones with Mic</a></h2>
                <div class="price product-body sale">
                    <h4>95.50$</h4>
                    <h5>$120.20</h5>
                </div>
                <div class="price-range">
                    <p class="price-range-title-left">Already Sold:<span>105</span></p>
                    <p class="price-range-title-right">Availbale:<span>42</span></p>

                    <div class="clearfix"></div>
                </div>
                <div class="pro-bar">
                    <div class="pro-bg"></div>
                    <div class="pro-fg"></div>
                </div>
                <!--count-down-->
                <div id="timer-2" class="text-center">
                    <h2>Hurry up! Offer ends in:</h2>
                    <div class="col-sm-3 col-xs-6">
                        <div id="days"></div>
                        <p>Days</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div id="hours"></div>
                        <p>Hours</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div id="minutes"></div>
                        <p>Minutes</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div id="seconds"></div>
                        <p>Seconds</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="tab-style">
                <!-- Nav tabs -->
                <div class="tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home1" aria-controls="home1" role="tab" data-toggle="tab">Featured</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">On Sale</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Top Rated</a></li>
                        <li role="presentation"><a href="#onsale" aria-controls="onsale" role="tab" data-toggle="tab">Popular</a></li>
                        <li role="presentation"><a href="#trending" aria-controls="trending" role="tab" data-toggle="tab">Trending</a></li>
                        <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Latest</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home1">

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount out-stock">Out of stock</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="offer-discount">-15%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="profile">

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="offer-discount">-15%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="messages">

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="offer-discount">-15%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="onsale">

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="offer-discount">-15%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="trending">

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="offer-discount">-15%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="popular">

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/speaker.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                                    <div class="offer-discount">-25%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mt-30">
                            <div class="product">

                                <div class="product-img">
                                    <a href="#" class="product-href"></a>
                                    <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                                    <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                                    <div class="offer-discount new">New</div>
                                    <div class="offer-discount">-15%</div>
                                    <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                </div>
                                <div class="product-body">
                                    <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                    <h4>595.50$</h4>
                                    <div class="product-hover">
                                        <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                        <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>

                </div>

            </div>
        </div>

        <div class="clearfix"></div>

    </div>

    <!--best-seller-->
    <div class="container-fluid best-seller padd-80">
        <div class="container best-product">
            <div class="tab-style">
                <div class="tab-structure">
                    <h3>Best Sellers</h3>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#deals" aria-controls="deals" role="tab" data-toggle="tab">Best Deals </a></li>
                        <li role="presentation"><a href="#audio" aria-controls="audio" role="tab" data-toggle="tab">TV & Audio </a></li>
                        <li role="presentation"><a href="#cameras" aria-controls="cameras" role="tab" data-toggle="tab">Cameras </a></li>
                        <li role="presentation"><a href="#smartphones" aria-controls="smartphones" role="tab" data-toggle="tab">Smartphones</a></li>
                        <li role="presentation"><a href="#computers" aria-controls="computers" role="tab" data-toggle="tab">Computers </a></li>
                        <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
                    </ul>
                    <div class="clearfix"></div>

                </div>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="deals">
                        <div class="col-md-12 best-deals">

                            <div class="col-md-6 mt-30 product">
                                <div class="seller text-center">
                                    <div class="offer-circle">
                                        <p>Save</p>
                                        <p>$150</p>
                                    </div>

                                    <div class="best-phone">

                                        <div class="product-detail text-center">

                                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                <li data-thumb="frontend/img/detail/small-1.jpg">
                                                    <img src="frontend/img/index/best-deala.phone.jpg" alt="" class="img-responsive" />
                                                </li>
                                                <li data-thumb="frontend/img/detail/small-3.jpg">
                                                    <img src="frontend/img/detail/sld-3.png" alt="" class="img-responsive" />
                                                </li>
                                                <li data-thumb="frontend/img/detail/small-5.jpg">
                                                    <img src="frontend/img/detail/sld-5.png" alt="" class="img-responsive" />
                                                </li>

                                            </ul>
                                        </div>

                                        <p class="text-left"><a href="#">iPhone 6s rose gold 126GB</a></p>
                                        <h4 class="text-left">595.50$</h4>
                                        <h5 class="text-left">$720.20</h5>

                                        <div class="product-hover">
                                            <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                            <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 computer">

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple iPad Tablet Space Grey</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple Smart Watch white Colour</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Beats Studio Wireless Over-Ear Headphone</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="audio">
                        <div class="col-md-12 best-deals">

                            <div class="col-md-6 mt-30 product">
                                <div class="seller text-center">
                                    <div class="offer-circle">
                                        <p>Save</p>
                                        <p>$150</p>
                                    </div>

                                    <div class="best-phone">
                                        <img src="frontend/img/index/best-deala.phone.jpg" alt="" class="img-responsive" />
                                        <p class="text-left">iPhone 6s rose gold 126GB</p>
                                        <span class="text-left">Electonics</span>
                                        <h4 class="text-left">595.50$</h4>
                                        <h5 class="text-left">$720.20</h5>

                                        <div class="product-hover">
                                            <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                            <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 computer">

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple iPad Tablet Space Grey</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple Smart Watch white Colour</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Beats Studio Wireless Over-Ear Headphone</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="cameras">
                        <div class="col-md-12 best-deals">

                            <div class="col-md-6 mt-30 product">
                                <div class="seller text-center">
                                    <div class="offer-circle">
                                        <p>Save</p>
                                        <p>$150</p>
                                    </div>

                                    <div class="best-phone">
                                        <img src="frontend/img/index/best-deala.phone.jpg" alt="" class="img-responsive" />
                                        <p class="text-left">iPhone 6s rose gold 126GB</p>
                                        <span class="text-left">Electonics</span>
                                        <h4 class="text-left">595.50$</h4>
                                        <h5 class="text-left">$720.20</h5>

                                        <div class="product-hover">
                                            <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                            <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 computer">

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple iPad Tablet Space Grey</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple Smart Watch white Colour</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Beats Studio Wireless Over-Ear Headphone</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="smartphones">
                        <div class="col-md-12 best-deals">

                            <div class="col-md-6 mt-30 product">
                                <div class="seller text-center">
                                    <div class="offer-circle">
                                        <p>Save</p>
                                        <p>$150</p>
                                    </div>

                                    <div class="best-phone">
                                        <img src="frontend/img/index/best-deala.phone.jpg" alt="" class="img-responsive" />
                                        <p class="text-left">iPhone 6s rose gold 126GB</p>
                                        <span class="text-left">Electonics</span>
                                        <h4 class="text-left">595.50$</h4>
                                        <h5 class="text-left">$720.20</h5>

                                        <div class="product-hover">
                                            <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                            <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 computer">

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple iPad Tablet Space Grey</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple Smart Watch white Colour</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Beats Studio Wireless Over-Ear Headphone</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="computers">
                        <div class="col-md-12 best-deals">

                            <div class="col-md-6 mt-30 product">
                                <div class="seller text-center">
                                    <div class="offer-circle">
                                        <p>Save</p>
                                        <p>$150</p>
                                    </div>

                                    <div class="best-phone">
                                        <img src="frontend/img/index/best-deala.phone.jpg" alt="" class="img-responsive" />
                                        <p class="text-left">iPhone 6s rose gold 126GB</p>
                                        <span class="text-left">Electonics</span>
                                        <h4 class="text-left">595.50$</h4>
                                        <h5 class="text-left">$720.20</h5>

                                        <div class="product-hover">
                                            <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                            <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 computer">

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple iPad Tablet Space Grey</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple Smart Watch white Colour</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Beats Studio Wireless Over-Ear Headphone</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="accessories">
                        <div class="col-md-12 best-deals">

                            <div class="col-md-6 mt-30 product">
                                <div class="seller text-center">
                                    <div class="offer-circle">
                                        <p>Save</p>
                                        <p>$150</p>
                                    </div>

                                    <div class="best-phone">
                                        <img src="frontend/img/index/best-deala.phone.jpg" alt="" class="img-responsive" />
                                        <p class="text-left">iPhone 6s rose gold 126GB</p>
                                        <span class="text-left">Electonics</span>
                                        <h4 class="text-left">595.50$</h4>
                                        <h5 class="text-left">$720.20</h5>

                                        <div class="product-hover">
                                            <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                            <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 computer">

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-otg.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple iPad Tablet Space Grey</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount">-25%</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Apple Smart Watch white Colour</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-30">
                                    <div class="product">

                                        <div class="product-img">
                                            <a href="#" class="product-href"></a>
                                            <img src="frontend/img/index/best-seller-headphone.jpg" alt="" class="img-responsive img-overlay" />
                                            <img src="frontend/img/index/best-seller-watch.jpg" alt="" class="img-responsive" />
                                            <div class="offer-discount new">New</div>
                                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                                        </div>
                                        <div class="product-body">
                                            <p><a href="#">Beats Studio Wireless Over-Ear Headphone</a></p>
                                            <h4>595.50$</h4>
                                            <div class="product-hover">
                                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!--featured-product-->
    <div class="container featured-product product-sec padd-80">
        <div class="col-md-4 col-sm-4 ban-sec"><a href="#"><img src="frontend/img/index/img-1.jpg" alt="" class="img-responsive" /></a></div>
        <div class="col-md-4 col-sm-4 ban-sec"><a href="#"><img src="frontend/img/index/img-2.jpg" alt="" class="img-responsive" /></a></div>
        <div class="col-md-4 col-sm-4 ban-sec"><a href="#"><img src="frontend/img/index/img-3.jpg" alt="" class="img-responsive" /></a></div>
        <div class="col-md-8 col-sm-8 ban-sec mt-30"><a href="#"><img src="frontend/img/index/img-4.jpg" alt="" class="img-responsive" /></a></div>
    </div>

    <!--most-popular-product-->
    <div class="container product-slider">
        <div class="col-md-3">
            <h3>Most Populer Products</h3>
            <p>Lorem ipsum dolor sit amet, conse tetur adipiscing elit. </p>
            <a href="#" class="bg-btn">View all</a>
        </div>
        <div class="tranding col-md-9">
            <div class="owl-carousel special-offer" id="blog">

                <div class="thumbnail no-border no-padding">
                    <div class="product">

                        <div class="product-img">
                            <a href="#" class="product-href"></a>
                            <img src="frontend/img/product/laptop.png" alt="" class="img-responsive img-overlay" />
                            <img src="frontend/img/product/camera.png" alt="" class="img-responsive" />
                            <div class="offer-discount new">New</div>
                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                        </div>
                        <div class="product-body">
                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                            <h4>595.50$</h4>
                            <div class="product-hover">
                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="thumbnail no-border no-padding">
                    <div class="product">

                        <div class="product-img">
                            <a href="#" class="product-href"></a>
                            <img src="frontend/img/product/mobile.png" alt="" class="img-responsive img-overlay" />
                            <img src="frontend/img/product/speaker.png" alt="" class="img-responsive" />
                            <div class="offer-discount">-25%</div>
                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                        </div>
                        <div class="product-body">
                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                            <h4>595.50$</h4>
                            <div class="product-hover">
                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="thumbnail no-border no-padding">
                    <div class="product">

                        <div class="product-img">
                            <a href="#" class="product-href"></a>
                            <img src="frontend/img/product/camera.png" alt="" class="img-responsive img-overlay" />
                            <img src="frontend/img/product/refrigetor.png" alt="" class="img-responsive" />
                            <div class="offer-discount new">New</div>
                            <div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
                        </div>
                        <div class="product-body">
                            <p><a href="#">Samsung RFG23 Classic Style</a></p>
                            <h4>595.50$</h4>
                            <div class="product-hover">
                                <div class="add-cart-hover"><a href="#"><h6>Add to cart</h6> <i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
                                <div class="quick-view"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--discount-->
    <div class="container-fluid discount-sec">
        <div class="container discount-ban">
            <div class="col-md-12 discount"><a href="#"><img src="frontend/img/index/banner.png" class="img-responsive" alt="" /></a></div>
        </div>
    </div>

    <!--join-to-instagram-->
    <div class="container joininsta-sec padd-80">

        <div class="col-md-7 insta-world">
            <div class="col-md-6 col-sm-6 insta-img">
                <div class="tag-people tag-photo">
                    <img src="frontend/img/index/insta-2.jpg" alt="" class="img-responsive" />
                    <div class="insta-people">
                        <img src="frontend/img/index/insta-2.png" alt="" />
                        <h5>Lucius_cashmere</h5>
                    </div>
                </div>

                <div class="tag-people">
                    <img src="frontend/img/index/insta-3.jpg" alt="" class="img-responsive mt-10" />
                    <div class="insta-people">
                        <img src="frontend/img/index/insta-3.png" alt="" />
                        <h5>Aliciapurple01</h5>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-6 instaworld insta-img">
                <div class="insta-body">
                    <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                    <p>We totally love you <span>#swiss!</span></p>
                    <div class="insta-name">
                        <img src="frontend/img/index/insta-4.png" alt="" class="img-responsive" />
                        <h2>Samuel001</h2>
                    </div>
                </div>

                <div class="tag-people">
                    <img src="frontend/img/index/insta-1.jpg" alt="" class="img-responsive" />
                    <div class="insta-people">
                        <img src="frontend/img/index/insta-1.png" alt="" />
                        <h5>Alcohol500</h5>
                    </div>
                </div>

            </div>

            <p class="has-tag">#</p>

        </div>
        <div class="col-md-4 col-md-offset-1 join-insta">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <h3>Join our <span>#instaworld</span></h3>
            <span>Share your happiness.</span>
            <p>Tag your instagram posts wth #swiss and show us the things you love!</p>
            <a href="#" class="btn-insta">Follow instagram</a>
        </div>
    </div>

    <!--top-rated-product-->
    <div class="container top-rated">

        <div class="col-md-4 col-sm-6 top-rated-product pt-60">
            <h3><a href="#">Featured Product</a></h3>
            <span></span>
            <div class="tranding">
                <div class="owl-carousel special-offer" id="topproduct">

                    <div class="thumbnail no-border no-padding">
                        <div class="popular-product col-xs-12 sale col-md-12">
                            <a href="#"><img src="frontend/img/product/top_product_phone.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">iPhone 6s rose gold 126GB</a></h2>
                            <h4>750.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 sale col-md-12">
                            <a href="#"><img src="frontend/img/product/watch.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">iWatch Apple</a></h2>
                            <h4>700.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/otg.jpg" alt="" class="img-responsive"></a>
                            <h2><a href="#">PQi iConnect USB OTG </a></h2>
                            <h4>700.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="thumbnail no-border no-padding">
                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_fridge.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">SAMSUNG RFG23UERS</a> </h2>
                            <h4>750.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_laptop.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">HP Stream 14" Laptop</a></h2>
                            <h4>650.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/top_product_speaker.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Home Theater System</a></h2>
                            <h4>570.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="thumbnail no-border no-padding">
                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_camera.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">OLYMPUS Stylus TG-5</a> </h2>
                            <h4>755.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_cell-phone.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Samsung Galaxy S8</a> </h2>
                            <h4>580.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/top_product_tv.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Sony KDL43W7 43"(108cm)</a></h2>
                            <h4>540.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class=" clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 top-rated-product pt-60">
            <h3><a href="#">Top Rated</a></h3>
            <span></span>
            <div class="tranding">
                <div class="owl-carousel special-offer" id="featureproduct">

                    <div class="thumbnail no-border no-padding">

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_fridge.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">SAMSUNG RFG23UERS</a> </h2>
                            <h4>750.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_laptop.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">HP Stream 14" Laptop</a></h2>
                            <h4>650.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/top_product_speaker.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Home Theater System</a></h2>
                            <h4>570.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="thumbnail no-border no-padding">

                        <div class="popular-product col-xs-12 sale col-md-12">
                            <a href="#"><img src="frontend/img/product/top_product_phone.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">iPhone 6s rose gold 126GB</a></h2>
                            <h4>750.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 sale col-md-12">
                            <a href="#"><img src="frontend/img/product/watch.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">iWatch Apple</a></h2>
                            <h4>700.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/otg.jpg" alt="" class="img-responsive"></a>
                            <h2><a href="#">PQi iConnect USB OTG </a></h2>
                            <h4>700.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="thumbnail no-border no-padding">
                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_camera.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">OLYMPUS Stylus TG-5</a> </h2>
                            <h4>755.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_cell-phone.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Samsung Galaxy S8</a> </h2>
                            <h4>580.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/top_product_tv.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Sony KDL43W7 43"(108cm)</a></h2>
                            <h4>540.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class=" clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-offset-0 col-md-4  top-rated-product pt-60 pb-60">
            <h3><a href="#">Popular Products</a></h3>
            <span></span>
            <div class="tranding">
                <div class="owl-carousel special-offer" id="popularproduct">

                    <div class="thumbnail no-border no-padding">
                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_camera.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">OLYMPUS Stylus TG-5</a> </h2>
                            <h4>755.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_cell-phone.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Samsung Galaxy S8</a> </h2>
                            <h4>580.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/top_product_tv.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Sony KDL43W7 43"(108cm)</a></h2>
                            <h4>540.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class=" clearfix"></div>
                    </div>

                    <div class="thumbnail no-border no-padding">

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_fridge.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">SAMSUNG RFG23UERS</a> </h2>
                            <h4>750.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale">
                            <a href="#"><img src="frontend/img/product/top_product_laptop.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">HP Stream 14" Laptop</a></h2>
                            <h4>650.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/top_product_speaker.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">Home Theater System</a></h2>
                            <h4>570.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="thumbnail no-border no-padding">

                        <div class="popular-product col-xs-12 sale col-md-12">
                            <a href="#"><img src="frontend/img/inner-page/top_product_phone.html" alt="" class="img-responsive" /></a>
                            <h2><a href="#">iPhone 6s rose gold 126GB</a></h2>
                            <h4>750.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 sale col-md-12">
                            <a href="#"><img src="frontend/img/product/watch.jpg" alt="" class="img-responsive" /></a>
                            <h2><a href="#">iWatch Apple</a></h2>
                            <h4>700.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="popular-product col-xs-12 col-md-12 sale connect">
                            <a href="#"><img src="frontend/img/product/otg.jpg" alt="" class="img-responsive"></a>
                            <h2><a href="#">PQi iConnect USB OTG </a></h2>
                            <h4>700.50$</h4>

                            <div class="hover-product">
                                <div class="hover-product-body">
                                    <div class="hover-icon heart"><a href="#"><i class="flaticon-heart"></i></a></div>
                                    <div class="hover-icon"><a href="#" data-toggle="modal" data-target="#quick-modal"><i class="flaticon-4-search"></i></a></div>
                                    <div class="hover-icon"><a href="#"><i class="flaticon-3-signs"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--client-slider-->
    <div class="container client-sec">
        <h2>DISCOVER OUR BRAND</h2>
        <div class="nbs-flexisel-inner">
            <ul id="flexiselDemo3">
                <li><img src="frontend/img/brand/img-1.jpg" alt="" /></li>
                <li><img src="frontend/img/brand/img-2.jpg" alt="" /></li>
                <li><img src="frontend/img/brand/img-3.jpg" alt="" /></li>
                <li><img src="frontend/img/brand/img-4.jpg" alt="" /></li>
                <li><img src="frontend/img/brand/img-5.jpg" alt="" /></li>
            </ul>
        </div>
        <div class="clearfix"></div>

    </div>

    <!--newsletter-->
    <div class="container-fluid news-letter">
        <div class="container padd-40">
            <div class="col-md-4 col-sm-6 letter">
                <i class="flaticon-newsletter"></i>
                <p>Sign up to</p>
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-3 col-sm-6 sign-news">
                <p>Sign up our newsletter and receive
                    $20 coupon for first shopping</p>
            </div>
            <div class="col-md-5 email-address">
                <input type="email" name="email" placeholder="Enter your email address" />
                <div class="round">
                    <a href="#"><i class="flaticon-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
