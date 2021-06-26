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
                        <h1>About Us</h1>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
</section>
    <!-- section close -->


    <section aria-label="section" data-bgcolor="#ffffff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <span class="p-title invert">Who We Are</span><br>
                    <h2>Your partner for insurance</h2>
                    <p>Total Security Insurance Brokers Ltd is a dynamic insurance service provider, with a technical crew that is driving insurance brokerage to new heights by creating new and improved services to its customers. With responsive and professional staff TSIB provides the best coverage at reasonable costs, thereby giving the customer peace of mind and competitive rates.</p>
                </div>

                <div class="col-md-6 offset-md-1">
                    <div class="de-images">
                            <img class="di-small-2" src="images/misc/d2.jpg" alt="" />
                            <img class="di-big img-fluid" src="images/services/family.jpg" alt="" />
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb30">
                    <div class="f-box f-border f-icon-left f-icon-rounded">
                        <i class="icofont-checked bg-color-secondary"></i>
                        <div class="fb-text">
                            <h4>Mission</h4>
                            <p>To be the preferred risk solutions provider operating out of Sub-Saharan Africa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb30">
                    <div class="f-box f-border f-icon-left f-icon-rounded">
                        <i class="icofont-checked bg-color-secondary"></i>
                        <div class="fb-text">
                            <h4>Vision</h4>
                            <p>To manage exceptional risk through prompt and effective service, adequate coverage and competitive rates, while giving the customer peace of mind.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb30">
                    <div class="f-box f-border f-icon-left f-icon-rounded">
                        <i class="icofont-checked bg-color-secondary"></i>
                        <div class="fb-text">
                            <h4>Core Values</h4>
                            <p>Professionalism, Responsiveness, Reliability, Innovation and Integrity are the reasons we stand out.</p>
                        </div>
                    </div>
                </div>


            <div>
        </div>
    </section>


    <x-achievements></x-achievements>

    <x-consult-quote-snippet></x-consult-quote-snippet>


</div>
@endsection
