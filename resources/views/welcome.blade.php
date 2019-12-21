@extends('layouts.app-public')

@section('content-public')
    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader" style="display: none;">
            <div class="inner">
                <span class="icon"><i class="fi flaticon-two"></i></span>
            </div>
        </div>
        <!-- end preloader -->


        <!-- strat music-box -->
        <div class="music-box">
            <button class="music-box-toggle-btn">
                <i class="fa fa-music"></i>
            </button>

            <div class="music-holder">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https://soundcloud.com/yan-black/cuoi-nhau-di-yes-i-do-bui-anh-tuan-ft-hien-ho-lyric-mv&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true">
                </iframe>
            </div>
        </div>
        <!-- end music box -->


        <!-- start of hero -->
        <section class="hero" id="home" data-section="home">
            <div class="hero-slider hero-slider-s1 slick-initialized slick-slider slick-dotted" role="toolbar"><button type="button" class="slick-prev slick-arrow" style="display: block;">Previous</button>
                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 2540px;"><div class="slide-item slick-slide slick-current slick-active" data-slick-index="0" style="background-image: url(&quot;images/slider/slide-1.jpg&quot;); background-size: cover; background-position: center center; width: 1270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00">
                    <img src="{{ asset('images/slider/slide-1.jpg') }}" alt="" class="slider-bg">
                </div><div class="slide-item slick-slide" data-slick-index="1" style="background-image: url(&quot;images/slider/slide-2.jpg&quot;); background-size: cover; background-position: center center; width: 1270px; position: relative; left: -1270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01">
                    <img src="{{ asset('images/slider/slide-2.jpg') }}" alt="" class="slider-bg">
                </div></div></div>

                
            <button type="button" class="slick-next slick-arrow" style="display: block;">Next</button><ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li></ul></div>
            <div class="wedding-announcement">
                <div class="couple-name-merried-text">
                    <h2 class="wow slideInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: slideInUp;">Tuan &amp; Ha</h2>
                    <div class="married-text wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
                        <h4 class="">
                        <span class="wow fadeInUp" data-wow-delay="1.05s" style="visibility: visible; animation-delay: 1.05s; animation-name: fadeInUp;">W</span>
                        <span class="wow fadeInUp" data-wow-delay="1.10s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeInUp;">e</span>
                        <span class="wow fadeInUp" data-wow-delay="1.15s" style="visibility: visible; animation-delay: 1.15s; animation-name: fadeInUp;">'</span>
                        <span class="wow fadeInUp" data-wow-delay="1.20s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">r</span>
                        <span class="wow fadeInUp" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 1.25s; animation-name: fadeInUp;">e</span>
                        <span>&nbsp;</span>
                        <span class="wow fadeInUp" data-wow-delay="1.30s" style="visibility: visible; animation-delay: 1.3s; animation-name: fadeInUp;">g</span>
                        <span class="wow fadeInUp" data-wow-delay="1.35s" style="visibility: visible; animation-delay: 1.35s; animation-name: fadeInUp;">e</span>
                        <span class="wow fadeInUp" data-wow-delay="1.40s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">t</span>
                        <span class="wow fadeInUp" data-wow-delay="1.45s" style="visibility: visible; animation-delay: 1.45s; animation-name: fadeInUp;">t</span>
                        <span class="wow fadeInUp" data-wow-delay="1.50s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">i</span>
                        <span class="wow fadeInUp" data-wow-delay="1.55s" style="visibility: visible; animation-delay: 1.55s; animation-name: fadeInUp;">n</span>
                        <span class="wow fadeInUp" data-wow-delay="1.60s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">g</span>
                        <span>&nbsp;</span>
                        <span class="wow fadeInUp" data-wow-delay="1.65s" style="visibility: visible; animation-delay: 1.65s; animation-name: fadeInUp;">m</span>
                        <span class="wow fadeInUp" data-wow-delay="1.70s" style="visibility: visible; animation-delay: 1.7s; animation-name: fadeInUp;">a</span>
                        <span class="wow fadeInUp" data-wow-delay="1.75s" style="visibility: visible; animation-delay: 1.75s; animation-name: fadeInUp;">r</span>
                        <span class="wow fadeInUp" data-wow-delay="1.80s" style="visibility: visible; animation-delay: 1.8s; animation-name: fadeInUp;">r</span>
                        <span class="wow fadeInUp" data-wow-delay="1.85s" style="visibility: visible; animation-delay: 1.85s; animation-name: fadeInUp;">i</span>
                        <span class="wow fadeInUp" data-wow-delay="1.90s" style="visibility: visible; animation-delay: 1.9s; animation-name: fadeInUp;">e</span>
                        <span class="wow fadeInUp" data-wow-delay="1.95s" style="visibility: visible; animation-delay: 1.95s; animation-name: fadeInUp;">d</span>

                        </h4>
                    </div>
                    <!-- <i class="fa fa-heart"></i> -->
                </div>

                <div class="save-the-date popup-save-the-date">
                    <h4>Save the date</h4>
                    <span class="date">20 Apr 2017</span>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default original" style="visibility: visible;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="couple-logo">
                            <h1><a href="javascript:void(0);" data-nav-section="home"><img class="logo-header navbar-brand-full m-0" src="{{ asset('images/logo.png') }}"></a></h1>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" data-nav-section="home">Home</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="couple">Couple</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="story">Story</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="events">Events</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="people">People</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="gallery">Gallery</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="rsvp">RSVP</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav><nav class="navigation navbar navbar-default sticky" style="width: 1270px;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="couple-logo">
                            <h1><a href="javascript:void(0);" data-nav-section="home"><img class="logo-header navbar-brand-full m-0" src="{{ asset('images/logo.png') }}"></a></h1>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" data-nav-section="home">Home</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="couple">Couple</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="story">Story</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="events">Events</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="people">People</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="gallery">Gallery</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="rsvp">RSVP</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start wedding-couple-section -->
        <section class="wedding-couple-section section-padding" id="couple" data-section="couple">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="gb groom">
                            <div class="img-holder wow fadeInLeftSlow" style="background-image: url(&quot;images/couple/img-1.jpg&quot;); background-size: cover; background-position: center center; visibility: visible; animation-name: fadeInLeftSlow;">
                                <img src="{{ asset('images/slider/img-1.jpg') }}" alt="">
                            </div>
                            <div class="details" style="height: 456px;">
                                <div class="details-inner">
                                    <h3>The groom</h3>
                                    <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <span class="signature">Suntina</span>
                                    <ul class="social-links">
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gb bride">
                            <div class="details" style="height: 456px;">
                                <div class="details-inner">
                                    <h3>The Bride</h3>
                                    <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <span class="signature">Famico</span>
                                    <ul class="social-links">
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="img-holder wow fadeInRightSlow" style="background-image: url(&quot;images/couple/img-2.jpg&quot;); background-size: cover; background-position: center center; visibility: visible; animation-name: fadeInRightSlow;">
                                <img src="{{ asset('images/slider/img-2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end wedding-couple-section -->


        <!-- start count-down-section -->
        <section class="count-down-section section-padding parallax" data-bg-image="images/countdown-bg.jpg" data-speed="7" style="background-image: url(&quot;images/countdown-bg.jpg&quot;); background-position: 50% -277.571px; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <h2><span>We are waiting for.....</span> The adventure</h2>
                    </div>
                    <div class="col col-md-7 col-md-offset-1">
                        <div class="count-down-clock">
                            <div id="clock"><div class="box"><div>03</div> <span>Days</span> </div><div class="box"><div>12</div> <span>Hours</span> </div><div class="box"><div>21</div> <span>Mins</span> </div><div class="box"><div>32</div> <span>Secs</span> </div></div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end count-down-section -->


        <!-- start story-section -->
        <section class="story-section section-padding" id="story" data-section="story">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our love story</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="story-timeline">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="story-text right-align-text">
                                        <h3>First meet</h3>
                                        <span class="date">Jan 12 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder">
                                        <img src="{{ asset('images/slider/img-1(1).jpg') }}" alt="" class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder right-align-text story-slider owl-carousel owl-theme owl-loaded">
                                        
                                        
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1320px, 0px, 0px); transition: all 1s ease 0s; width: 2640px;"><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-2(1).jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-3.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-2(1).jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item active" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-3.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-2(1).jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-3.jpg') }}" alt="" class="img img-responsive"></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
                                </div>
                                <div class="col col-md-6 text-holder">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text">
                                        <h3>First date</h3>
                                        <span class="date">Feb 14 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6 text-holder right-heart">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text right-align-text">
                                        <h3>Proposal</h3>
                                        <span class="date">Apr 14 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder right-align-text story-slider owl-carousel owl-theme owl-loaded">
                                        
                                        
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1320px, 0px, 0px); transition: all 1s ease 0s; width: 2640px;"><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-7.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-5.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-7.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item active" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-5.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-7.jpg') }}" alt="" class="img img-responsive"></div><div class="owl-item cloned" style="width: 440px; margin-right: 0px;"><img src="{{ asset('images/slider/img-5.jpg') }}" alt="" class="img img-responsive"></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder video-holder">
                                        <img src="{{ asset('images/slider/img-8.jpg') }}" alt="" class="img img-responsive">
                                        <a href="https://www.youtube.com/embed/XSGBVzeBUbk?autoplay=1" data-type="iframe" class="video-play-btn">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-6 text-holder">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text">
                                        <h3>Enagagement</h3>
                                        <span class="date">Jul 14 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end story-section -->


        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="images/cta-bg.jpg" data-speed="7" style="background-image: url(&quot;images/cta-bg.jpg&quot;); background-position: 50% -590.521px; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2><span>We are going to...</span> Celebrate Our Love</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->



        <!-- start events-section -->
        <section class="events-section section-padding" id="events" data-section="events">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Wedding events</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="event">
                            <div class="img-holder">
                                <img src="{{ asset('images/slider/img-1(2).jpg') }}" alt="" class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>The reception</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>
                                    <li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>
                                </ul>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">
                                    See location <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="event">
                            <div class="img-holder">
                                <img src="{{ asset('images/slider/img-2(2).jpg') }}" alt="" class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Wedding party</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>
                                    <li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>
                                </ul>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0160484383277!2d144.99053291585201!3d-37.81309307975254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ef89a7e023%3A0xb1353055e38c1ab8!2sNew+York+Tomato+Cafe!5e0!3m2!1sbn!2sbd!4v1503743893919">
                                    See location <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-section -->


        <!-- start inportant-people-section -->
        <section class="inportant-people-section section-padding" id="people" data-section="people">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Groomsmen &amp; Bridesmaid</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="inportant-people-content">
                            <div class="tablist">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#groomsmen" data-toggle="tab" aria-expanded="true">Groomsmen</a>
                                    </li>
                                    <li class="">
                                        <a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#bridesmaid" data-toggle="tab" aria-expanded="false">Bridesmaid</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade grid-wrapper active in" id="groomsmen">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-1(3).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-1(3).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Jhon Michel</h3>
                                            <span>Best man</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-2(3).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-2(3).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Chasmoos jhon</h3>
                                            <span>Best friden</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-3(1).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-3(1).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Kaiste pate</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-4.jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-4.jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Hatu Michel</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-5(1).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-5(1).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Michel doin</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-6.jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-6.jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Topper jone</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade grid-wrapper" id="bridesmaid">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-1(4).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-1(4).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Rachel Li</h3>
                                            <span>Made of honor</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-2(4).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-2(4).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Male Vign</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-3(2).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-3(2).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Jonny Mich</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-4(1).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-4(1).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Brodd Wid</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-5(2).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-5(2).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Nokshal bedi</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/img-6(1).jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/img-6(1).jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Holly Fie</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end inportant-people-section -->


        <!-- start gallery-section -->
        <section class="gallery-section section-padding" id="gallery" data-section="gallery">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our gallery</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#" class="current">All</a></li>
                                <li><a data-filter=".wedding" href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#" class="">Wedding</a></li>
                                <li><a data-filter=".ceremony" href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#" class="">Ceremony</a></li>
                                <li><a data-filter=".party" href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#" class="">Party</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container gallery-fancybox masonry-gallery" style="position: relative; height: 1046.26px;">
                            <div class="grid wedding" style="position: absolute; left: 0px; top: 0px;">
                                <a href="{{ asset('images/slider/img-1(5).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-1(5).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid wedding ceremony" style="position: absolute; left: 384px; top: 0px;">
                                <a href="{{ asset('images/slider/img-2(5).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-2(5).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid ceremony eudcation" style="position: absolute; left: 769px; top: 0px;">
                                <a href="{{ asset('images/slider/img-3(3).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-3(3).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid wedding party" style="position: absolute; left: 0px; top: 261px;">
                                <a href="{{ asset('images/slider/img-4(2).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-4(2).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid ceremony" style="position: absolute; left: 384px; top: 292px;">
                                <a href="{{ asset('images/slider/img-5(3).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-5(3).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid party" style="position: absolute; left: 769px; top: 372px;">
                                <a href="{{ asset('images/slider/img-6(2).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-6(2).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid wedding" style="position: absolute; left: 384px; top: 628px;">
                                <a href="{{ asset('images/slider/img-7(1).jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-7(1).jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                            <div class="grid ceremony" style="position: absolute; left: 769px; top: 634px;">
                               <!--  <a href="images/gallery/img-8.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-8.jpg" alt class="img img-responsive">
                                </a> -->
                                <a href="https://www.youtube.com/embed/XSGBVzeBUbk?autoplay=1" data-type="iframe" class="video-play-btn">
                                    <img src="{{ asset('images/slider/img-8(1).jpg') }}" alt="" class="img img-responsive">
                                    <i class="fa fa-play"></i>
                                </a>

                            </div>
                            <div class="grid ceremony" style="position: absolute; left: 0px; top: 709px;">
                                <a href="{{ asset('images/slider/img-9.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{ asset('images/slider/img-9.jpg') }}" alt="" class="img img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-section -->



        <!-- start rsvp-section -->
        <section class="rsvp-section section-padding parallax" data-bg-image="images/rsvp-bg.jpg" data-speed="7" id="rsvp" data-section="rsvp" style="background-image: url(&quot;images/rsvp-bg.jpg&quot;); background-position: 50% -1206.6px; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Join our party</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <p>Please reserve before December 16th, 2017.</p>
                        <form id="rsvp-form" class="form validate-rsvp-form row" method="post" novalidate="novalidate">
                            <div class="col col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name*">
                            </div>
                            <div class="col col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email*">
                            </div>
                            <div class="col col-sm-6">
                                <select class="form-control" name="guest">
                                    <option disabled="" selected="">Number Of Guest*</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col col-sm-6">
                                <select class="form-control" name="events">
                                    <option disabled="" selected="">I Am Attending*</option>
                                    <option>Al events</option>
                                    <option>Wedding ceremony</option>
                                    <option>Reception party</option>
                                </select>
                            </div>
                            <div class="col col-sm-12">
                                <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                            </div>
                            <div class="col col-sm-12 submit-btn">
                                <button type="submit" class="submit">Send Invitation</button>
                                <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span>
                            </div>
                            <div class="col col-md-12 success-error-message">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end rsvp-section -->


        <!-- start getting-there-section -->
        <section class="getting-there-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Getting there</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-md-6">
                        <h3>Transportation</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                    <div class="col col-md-6">
                        <h3>Accommodations</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end getting-there-section -->


        <!-- start gift-registration-section -->
        <section class="gift-registration-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Gift registration</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, cupiditate, repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic, deleniti maiores rem iste labore commodi perferendis cumque.repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic.</p>

                        <div class="gif-registration-slider owl-carousel owl-theme owl-loaded">
                            
                            
                            
                            
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2205px, 0px, 0px); transition: all 1s ease 0s; width: 3485px; padding-left: 10px; padding-right: 10px;"><div class="owl-item cloned" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-3(4).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item cloned" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-1(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item cloned" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-2(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-1(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-2(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-3(4).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-1(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item active" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-2(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item cloned active" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-1(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item cloned active" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-2(6).jpg') }}" alt="" class="img img-responsive">
                            </div></div><div class="owl-item cloned" style="width: 295px; margin-right: 20px;"><div class="register">
                                <img src="{{ asset('images/slider/img-3(4).jpg') }}" alt="" class="img img-responsive">
                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gift-registration-section -->


        <!-- start footer -->
        <footer class="site-footer">
            <div class="back-to-top">
                <a href="http://irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html#" class="back-to-top-btn"><span><i class="fi flaticon-cupid"></i></span></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Forever and Always Our Love</h2>
                        <span>- Mick (The groom)</span>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->

    </div>
    <!-- end of page-wrapper -->
@endsection