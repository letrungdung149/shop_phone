@extends('shop.layouts.app')
@section('content')
    <div class="container contact-main padd-80">

        <div class="col-md-6 contact-left">

            <div class="contact-info">
                <h3>Get in touch with Us <i class="flaticon-1-send pull-right"></i></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor egestas orci, vitae ullamcorper risus consectetur id. </p>
            </div>
            <div class="row">
                <div class="col-sm-6"><label>Full Name *</label><input type="text" /></div>
                <div class="col-sm-6"><label>Your Email *</label><input type="email" /></div>
                <div class="col-sm-6"><label>Phone Number *</label><input type="text" /></div>
                <div class="col-sm-6"><label>Subject *</label><input type="text" /></div>
                <div class="col-sm-12"><label>Your Message</label><textarea></textarea></div>
                <div class="clearfix"></div>
                <div class="col-sm-12 text-right"><a href="#" class="shp-btn">Send a Message<i class="flaticon-paper-plane"></i></a></div>
            </div>

        </div>

        <div class="col-md-6 contact-right">

            <div class="contact-info">
                <h3>About Information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscin Vestibulum portti egestas orci, vitae ullamcorper risus consectetur id. Donec at velit vestibulum, rutrum massa quis, porttitor lorem. Donec et ultricies arcu.Donec et ultricies arcu. In odio augue, hendrerit nec nisl ac, rhoncus gravida mauris. Quisque consectetur ligula eu urna dignissim.</p>
            </div>

            <div class="contact-info">

                <h3>Contact Informations</h3>
                <div class="contact">
                    <i class="flaticon-placeholder-1"></i>
                    <p>Hahnenmoos strasse 20C, 3715  Adelboden, Switzerland</p>
                </div>
                <div class="clearfix"></div>
                <div class="contact">
                    <i class="flaticon-headphones"></i>
                    <p class="phone-no">+01 (9876) 543 210 | +01 (9876) 543 212</p>
                </div>
                <div class="clearfix"></div>
                <div class="contact">
                    <i class="flaticon-message"></i>
                    <p>contact@grabyshop.com</p>
                </div>
                <div class="clearfix"></div>
                <div class="contact">
                    <i class="fa fa-clock-o"></i>
                    <p>Monday - Friday 9am to 5pm<br> Saturday - 9am to 2pm<br> Sunday - Closed</p>
                </div>
                <div class="clearfix"></div>
                <div class="follow-us">
                    <h2>Follow us</h2>
                    <div class="follow">
                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>

        </div>

        <div class="clearfix"></div>

    </div>
@endsection
