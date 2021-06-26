@extends('layouts.mainlayout')

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>Contact Us</h1>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
</section>
    <!-- section close -->

    <section id="FAQ" aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="p-title invert text-white">Frequently</span><br>
                    <h2>Asked Questions</h2>
                    <div class="small-border"></div>
                </div>

                <div class="col-md-6">
                    <!-- Accordion -->
                    <div id="accordion-1" class="accordion">

                        <!-- Accordion item 1 -->
                        <div class="card">
                            <div id="heading-a1" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a1" aria-expanded="false" aria-controls="collapse-a1" class="d-block position-relative text-dark collapsible-link py-2">When is time to renew my policy</a></h6>
                            </div>
                            <div id="collapse-a1" aria-labelledby="heading-a1" data-parent="#accordion-1" class="collapse">
                                <div class="card-body p-4">
                                    <p class="m-0">You can renew your policy any time before its expiry date.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 2 -->
                        <div class="card">
                            <div id="heading-a2" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a2" aria-expanded="false" aria-controls="collapse-a2" class="d-block position-relative collapsed text-dark collapsible-link py-2">How often should I review my life insurance needs?</a></h6>
                            </div>
                            <div id="collapse-a2" aria-labelledby="heading-a2" data-parent="#accordion-1" class="collapse">
                                <div class="card-body p-4">
                                    <p class="m-0">It is advisable to renew your policy yearly as it secures you against unforseen circumstances.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 3 -->
                        <div class="card">
                            <div id="heading-a3" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a3" aria-expanded="false" aria-controls="collapse-a3" class="d-block position-relative collapsed text-dark collapsible-link py-2">What happen to my insurance if I stop paying?</a></h6>
                            </div>
                            <div id="collapse-a3" aria-labelledby="heading-a3" data-parent="#accordion-1" class="collapse">
                                <div class="card-body p-4">
                                    <p class="m-0">Failure to renew your policy might result to not being covered under the said policy and you are prone to bear 100% fees incase of unforseen circumstances.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-6">
                    <!-- Accordion -->
                    <div id="accordion-2" class="accordion">

                        <!-- Accordion item 1 -->
                        <div class="card">
                            <div id="heading-b1" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b1" aria-expanded="false" aria-controls="collapse-b1" class="d-block position-relative text-dark collapsible-link py-2">What does the comprehensive car insurance cover?</a></h6>
                            </div>
                            <div id="collapse-b1" aria-labelledby="heading-b1" data-parent="#accordion-2" class="collapse">
                                <div class="card-body p-4">
                                    <p class="m-0">Comprehensive Motor Insurance covers you , your car and the third party during any incident of damage/fire/theft .</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 2 -->
                        <div class="card">
                            <div id="heading-b2" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b2" aria-expanded="false" aria-controls="collapse-b2" class="d-block position-relative collapsed text-dark collapsible-link py-2">What makes this company different form other?</a></h6>
                            </div>
                            <div id="collapse-b2" aria-labelledby="heading-b2" data-parent="#accordion-2" class="collapse">
                                <div class="card-body p-4">
                                    <p class="m-0">Total Security Insurance Brokers Ltd is a dynamic insurance service provider, with a technical crew that is driving insurance brokerage to new heights by creating new and improved services to its customers.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 3 -->
                        <div class="card">
                            <div id="heading-b3" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b3" aria-expanded="false" aria-controls="collapse-b3" class="d-block position-relative collapsed text-dark collapsible-link py-2">Do I need a life insurance policy?</a></h6>
                            </div>
                            <div id="collapse-b3" aria-labelledby="heading-b3" data-parent="#accordion-2" class="collapse">
                                <div class="card-body p-4">
                                    <p class="m-0">Every Individual needs a life insurance policy, as it serves as a safety net. A good way of showing your loved ones you care is by obtaining a Group life insurance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="FORM" aria-label="section">
        @include('partials.flash_message')
        <div class="container">
                <div class="row">

                    <div class="col-lg-8 mb-sm-30">
                    <h3>Do you have any question?</h3>

                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="#">
                        @csrf
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" />
                        </div>

                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                        </div>

                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" value="Submit Form" class="btn btn-custom" />
                        </div>
                        @isset($message)
                        <div class="success">{{$message}}.</div>
                        @endisset



                        <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                    </form>
                </div>

                <div class="col-lg-4">

                    <div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
                        <h3>Abuja Office</h3>
                        <address class="s1">
                            <span><i class="id-color fa fa-map-marker fa-lg"></i><a target="_blank" href="https://goo.gl/maps/3dpiwkRqwoVRvveW8">No 31 wushishi crescent, Utako, Abuja, Nigeria</a></span>
                            <span><i class="id-color fa fa-phone fa-lg"></i>+234 906 063 7132</span>
                            <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">info@totalsecurityinsurancebrokers.com</a></span>
                        <!--    <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                        </address>
                    </div>





                </div>

                </div>
            </div>

    </section>

</div>
@endsection
