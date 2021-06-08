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
                            <h1>{{$insurance[0]->name}}</h1>
                            <p>{{$insurance[0]->intro}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-about-us-2" class="no-padding" data-bgcolor="#F2F6FE">
        <div class="image-container col-md-6 pull-left" data-bgimage="url({{asset('images/slider/')}}/{{$insurance[0]->left_big_image}}) center"></div>

        <div class="container">
            <div class="row">
                <div class="inner-padding">
                    <div class="col-md-6 offset-md-7" data-animation="fadeInRight" data-delay="200">
                        <span class="p-title invert">Total Security Insurance Brokers</span><br>
                        <h2>
                            {{$insurance[0]->right_header}}

                        </h2>
                        <div class="small-border sm-left"></div>

                       <p>{{$insurance[0]->right_info}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                @foreach ($benefits as $benefit )
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="f-box f-border f-icon-left f-icon-rounded">
                        <i class="icofont-checked bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>{{$benefit->title}}</h4>
                            <p>{{$benefit->info}}</p>
                        </div>
                    </div>
                </div>
                @endforeach


            <div>
        </div>
    </section>

    <section id="section-about-us-2" class="no-padding" data-bgcolor="#F2F6FE">
        <div class="image-container col-md-6 pos-right" data-bgimage="url({{asset('images/slider')}}/{{$insurance[0]->right_big_image}}) center"></div>

        <div class="container">
            <div class="row">
                <div class="inner-padding pos-left">
                    <div class="col-md-6" data-animation="fadeInRight" data-delay="200">
                        <span class="p-title invert">Total Security Insurance Brokers</span><br>
                        <h2>
                           {{$insurance[0]->left_header}}
                        </h2>
                        <div class="small-border sm-left"></div>

                       <p>{{$insurance[0]->left_info}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </section>



</div>
@endsection
