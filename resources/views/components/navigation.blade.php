<header class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img alt="" class="logo" src="{{asset('images/tsib_logo.png')}}"  height="60px" />
                                <img alt="" class="logo-2" src="{{asset('images/tsib_logo.png')}}"  height="60px" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="/">Home<span></span></a>

                            </li>
                            <li>
                                <a href="#">Total Security Insurance Brokers<span></span></a>
                                <ul>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/why-choose-us">Why Choose Us</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Our Services<span></span></a>
                                <ul>
                                    @foreach ($insurances as $insurance)
                                    <li><a href="/our-insurance/{{$insurance->url}}">{{$insurance->name}}</a></li>
                                    @endforeach


                                </ul>
                            </li>
                            <li>
                                <a href="/contact-us">Contact Us<span></span></a>

                            </li>

                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="h-phone"><span>Need&nbsp;Help?</span><i class="fa fa-phone id-color-secondary"></i> 1 200 300 9000</div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
