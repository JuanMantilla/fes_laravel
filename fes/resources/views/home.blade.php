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

    <!-- services -->
    <section id="section-create-route" class="section pad-bot30 bg-white">
        @include('route_form')
    </section>

    <!-- spacer section:testimonial -->
    <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-center">
                        <div class="flexslider testimonials-slider">
                            <ul class="slides">
                                <li>
                                    <div class="testimonial clearfix">
                                        <div class="mar-bot20">
                                            <img alt="" src="img/testimonial/testimonial1.png" class="img-circle">
                                        </div>
                                        <i class="fa fa-quote-left fa-5x"></i>
                                        <h5>
                                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                                        </h5>
                                        <br/>
                                        <span class="author">&mdash; SARAH DOE <a href="#">www.siteurl.com</a></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="testimonial clearfix">
                                        <div class="mar-bot20">
                                            <img alt="" src="img/testimonial/testimonial2.png" class="img-circle">
                                        </div>
                                        <i class="fa fa-quote-left fa-5x"></i>
                                        <h5>
                                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                                        </h5>
                                        <br/>
                                        <span class="author">&mdash; NICOLE DOE <a href="#">www.siteurl.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial clearfix">
                                        <div class="mar-bot20">
                                            <img alt="" src="img/testimonial/testimonial3.png" class="img-circle">
                                        </div>
                                        <i class="fa fa-quote-left fa-5x"></i>
                                        <h5>
                                            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                                        </h5>
                                        <br/>
                                        <span class="author">&mdash; DASON KRUN <a href="#">www.siteurl.com</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- about -->
    <section id="section-create-admin" class="section appear clearfix">
        @include('register_admin')
    </section>
    <!-- /about -->

    <!-- spacer section:stats -->
    <section id="parallax1" class="section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row appear stats">
                <div class="col-md-3">
                    <div class="align-center color-white txt-shadow">
                        <div class="icon">
                            <i class="fa fa-coffee fa-5x"></i>
                        </div>
                        <strong id="counter-coffee" class="number">500</strong><br>
                        <span class="text">Black Coffee Cups</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="align-center color-white txt-shadow">
                        <div class="icon">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <strong id="counter-music" class="number">345</strong><br>
                        <span class="text">MP3 Songs</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="align-center color-white txt-shadow">
                        <div class="icon">
                            <i class="fa fa-clock-o fa-5x"></i>
                        </div>
                        <strong id="counter-clock" class="number">1235</strong><br>
                        <span class="text">Hard Minutes</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="align-center color-white txt-shadow">
                        <div class="icon">
                            <i class="fa fa-heart fa-5x"></i>
                        </div>
                        <strong id="counter-heart" class="number">478</strong><br>
                        <span class="text">Lovely Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section works -->
    <section id="section-works" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <nav id="filter" class="col-md-12 text-center">
                    <ul>
                        <li><a href="#" class="current btn btn-small" data-filter="*">All</a></li>
                        <li><a href="#" class="btn btn-small" data-filter=".webdesign">Web Design</a></li>
                        <li><a href="#" class="btn btn-small" data-filter=".photography">Photography</a></li>
                        <li><a href="#" class="btn btn-small" data-filter=".print">Print</a></li>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix" id="3">

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img1.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img2.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="col-md-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img3.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img4.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img5.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem webdesign">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img6.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img7.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem photography">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img8.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 isotopeItem print">
                                <div class="portfolio-item">
                                    <img src="img/portfolio/img9.jpg" alt="">
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <h5><a href="#">Portfolio name</a></h5>
                                            <a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section>
    <section id="clients" class="section clearfix bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-2 align-center">
                            <img alt="logo" src="img/clients/logo1.png">
                        </div>

                        <div class="col-sm-2 align-center">
                            <img alt="logo" src="img/clients/logo2.png">
                        </div>

                        <div class="col-sm-2 align-center">
                            <img alt="logo" src="img/clients/logo3.png">
                        </div>

                        <div class="col-sm-2 align-center">
                            <img alt="logo" src="img/clients/logo4.png">
                        </div>

                        <div class="col-sm-2 align-center">
                            <img alt="logo" src="img/clients/logo5.png">
                        </div>
                        <div class="col-sm-2 align-center">
                            <img alt="logo" src="img/clients/logo6.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section id="section-map" class="clearfix">
        <div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div>
    </section>

    <!-- contact -->
    <section id="section-demand" class="section appear clearfix">
        @include('demand_form')
    </section>

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