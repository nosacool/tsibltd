<section data-bgimage="url({{asset('images/background/4.jpg')}}) top" class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".2s">
                <h2>Call us for further information. TSIB customer care is here to help you anytime.</h2>
                <p class="lead id-color-secondary">We're available for 24 hours!</p>
            </div>

            <div class="col-md-6 text-lg-center text-sm-center wow fadeInRight" data-wow-delay=".4s">
                <div class="phone-num-big">
                    <i class="fa fa-phone"></i>
                    <span class="pnb-text id-color-secondary">
                        Call Us Now
                    </span>
                    <span class="pnb-num">
                        0906 063 7132
                    </span>
                </div>
                <a href="#" class="btn-custom invert med">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="widget">
                    <h5>Our Company</h5>
                    <ul>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/why-choose-us">Why Choose Us</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                     </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>Insurance</h5>
                    <ul>
                        @foreach ($insurances as $insurance)
                        <li><a href="/our-insurance/{{$insurance->url}}">{{$insurance->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>Get In Touch</h5>
                    We're here to listen:
                    <address class="s1">
                        <span><i class="fa fa-map-marker fa-lg"></i><a target="_blank" href='https://goo.gl/maps/3dpiwkRqwoVRvveW8'>No 31 wushishi crescent, Utako, Abuja, Nigeria.</a></span>
                        <span><i class="fa fa-phone fa-lg"></i>+234 906 063 7132</span>
                        <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto: info@totalsecurityinsurancebrokers.com">info@totalsecurityinsurancebrokers.com</a></span>
                       <!-- <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                    </address>
                </div>
            </div>


        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            &copy; Copyright {{date('Y')}} - Total Security Insurance Brokers Limited
                        </div>

                        <div class="de-flex-col">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
