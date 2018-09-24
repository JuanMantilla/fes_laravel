@extends('base')

@section('content')
    <section id="header" class="appear"></section>
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars color-white"></span>
                </button>
                <div class="navbar-logo">
                    <a href="index.html"><img data-0="width:155px;" data-300=" width:120px;" src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#section-create-admin">Create user</a></li>
                    <li><a href="#section-create-route">Create route</a></li>
                    <li><a href="#section-demand">Contact</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <section id="intro">
        <div class="intro-content">
            <h2>Welcome to Fes!</h2>
            <h3>This is a software for frequency assignation on a transport system</h3>
            <div>
                <a href="#section-services" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section>
    <div class="container ">
        <div class="row  border-top home-buttons">
            <div class="col-lg-3 align-center">
                <button type="button" class=" btn btn-lg btn-primary btn-block btn-signin"
                        data-toggle="modal" data-target="#create_route_modal">Create route</button>
                <!-- Modal -->
                <div class="modal fade" id="create_route_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                                    <div class="add_margin_top_md align-center">
                                        <h4>Create new Route</h4>
                                    </div>
                                    <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                                        <a href="#" class="hi-icon hi-icon-location align-icon-center">location</a>
                                    </div>
                            <div class="col-md-3">

                            </div>
                            <div class="row">
                                <div class="col-md-6 add_margin_top_md">
                                    @include('route_form')
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <button type="button" class=" btn btn-lg btn-primary btn-block btn-signin"
                        data-toggle="modal" data-target="#store_demand_modal">Store demand</button>
                <!-- Modal -->
                <div class="modal fade" id="store_demand_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="add_margin_top_md align-center">
                                <h4>Store demand</h4>
                            </div>

                            <div class="col-md-3">

                            </div>
                            <div class="row">
                                <div class="col-md-6 add_margin_top_md">
                                    @include('demand_form')
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row align-center home-buttons">
            <div class="col-lg-3">
                <button type="button" class=" btn btn-lg btn-primary btn-block btn-signin"
                        data-toggle="modal" data-target="#create_user_modal">Create new user</button>
                <!-- Modal -->
                <div class="modal fade" id="create_user_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="add_margin_top_md align-center">
                                <h4>Create new user</h4>
                            </div>
                            <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                                <a href="#" class="hi-icon hi-icon-user align-icon-center">location</a>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="row">
                                <div class="col-md-6 add_margin_top_md">
                                    @include('register_admin')
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <button type="button" class=" btn btn-lg btn-primary btn-block"
                        data-toggle="modal" data-target="#create_bus_modal">Create Buses</button>
                <!-- Modal -->
                <div class="modal fade" id="create_bus_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="add_margin_top_md align-center">
                                <h4>Create new Buses</h4>
                            </div>
                            <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                                <a href="#" class="hi-icon hi-icon-contract align-icon-center">location</a>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="row">
                                <div class="col-md-6 add_margin_top_md">
                                    @include('buses_form')
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    {{--<!-- services -->--}}
    {{--<section id="section-create-route" class="section pad-bot30 bg-white">--}}
        {{--@include('route_form')--}}
    {{--</section>--}}
    {{--<!-- about -->--}}
    {{--<section id="section-create-admin" class="section appear clearfix">--}}
        {{--@include('register_admin')--}}
    {{--</section>--}}
    {{--<!-- /about -->--}}
    {{--<!-- map -->--}}
    {{--<section id="section-map" class="clearfix">--}}
        {{--<div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div>--}}
    {{--</section>--}}

    {{--<!-- contact -->--}}
    {{--<section id="section-demand" class="section appear clearfix">--}}
        {{--@include('demand_form')--}}
    {{--</section>--}}

    {{--<!-- contact -->--}}
    {{--<section id="section-demand" class="section appear clearfix">--}}
        {{--@include('buses_form')--}}
    {{--</section>--}}

    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row align-center mar-bot20">
                <ul class="footer-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Get in touch</a></li>
                </ul>
            </div>
            <div class="row align-center copyright">
                <div class="col-sm-12">
                    <p>Copyright &copy; All rights reserved</p>
                </div>
            </div>
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Vlava
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
            </div>
        </div>

    </section>
@endsection