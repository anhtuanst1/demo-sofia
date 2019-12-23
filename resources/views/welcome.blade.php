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
            <div class="hero-slider hero-slider-s1">
                <div class="slide-item">
                    <img src="{{ asset('images/slider/slide-1.jpg') }}" alt class="slider-bg">
                </div>
                <div class="slide-item">
                    <img src="{{ asset('images/slider/slide-2.jpg') }}" alt class="slider-bg">
                </div>
                <div class="slide-item">
                    <img src="{{ asset('images/slider/slide-3.jpg') }}" alt class="slider-bg">
                </div>
            </div>

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
                            <h1 id="logo-header"><a href="javascript:void(0);" data-nav-section="home"><img class="logo-header navbar-brand-full m-0" src="{{ asset('images/logo.png') }}"></a></h1>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" data-nav-section="home">Home</a></li>
                            <li class=""><a href="javascript:void(0);"data-nav-section="couple">Couple</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="story">Story</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="events">Events</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="people">People</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="rsvp">RSVP</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="gallery">Gallery</a></li>
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
                            <h1 id="logo-header"><a href="javascript:void(0);" data-nav-section="home"><img class="logo-header navbar-brand-full m-0" src="{{ asset('images/logo.png') }}"></a></h1>
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
                            <li class=""><a href="javascript:void(0);" data-nav-section="rsvp">RSVP</a></li>
                            <li class=""><a href="javascript:void(0);" data-nav-section="gallery">Gallery</a></li>
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
                                <img src="{{ asset('images/slider/couple-1.jpg') }}" alt="">
                            </div>
                            <div class="details" style="height: 456px;">
                                <div class="details-inner">
                                    <h3>The groom</h3>
                                    <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <span class="signature">Anh Tuan</span>
                                    <ul class="social-links">
                                        <li><a href="https://www.facebook.com/profile.php?id=100010740218669"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gb bride">
                            <div class="details" style="height: 456px;">
                                <div class="details-inner">
                                    <h3>The Bride</h3>
                                    <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <span class="signature">Thu Ha</span>
                                    <ul class="social-links">
                                        <li><a href="https://www.facebook.com/ha.tong.9638"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="img-holder wow fadeInRightSlow" style="background-image: url(&quot;images/couple/img-2.jpg&quot;); background-size: cover; background-position: center center; visibility: visible; animation-name: fadeInRightSlow;">
                                <img src="{{ asset('images/slider/couple-2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end wedding-couple-section -->


        <!-- start count-down-section -->
        <section class="count-down-section section-padding parallax" data-bg-image="{{ asset('images/slider/slide-3.jpg') }}" data-speed="7">
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
                                    <div class="img-holder story-slider">
                                        <img src="{{ asset('images/slider/story-first-meet-1.jpg') }}" alt="" class="img img-responsive">
                                        <img src="{{ asset('images/slider/story-first-meet-2.jpg') }}" alt="" class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder">
                                        <img src="{{ asset('images/slider/story-first-date-1.jpg') }}" alt class="img img-responsive">
                                    </div>
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
                                        <h3>Challenges</h3>
                                        <span class="date">Apr 15 2015</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder right-align-text story-slider">
                                        <img src="{{ asset('images/slider/story-challenges-1.jpg') }}" alt class="img img-responsive">
                                        <img src="{{ asset('images/slider/story-challenges-2.jpg') }}" alt class="img img-responsive">
                                        <img src="{{ asset('images/slider/story-challenges-3.jpg') }}" alt class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder video-holder">
                                        <img src="{{ asset('images/slider/story-proposal-1.jpg') }}" alt="" class="img img-responsive">
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
                                        <h3>Proposal</h3>
                                        <span class="date">Apr 14 2017</span>
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
        <section class="cta section-padding parallax" data-bg-image="{{ asset('images/slider/nhan.jpg') }}" data-speed="7">
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
                                        <a href="#groomsmen" data-toggle="tab" aria-expanded="true">Groomsmen</a>
                                    </li>
                                    <li class="">
                                        <a href="#bridesmaid" data-toggle="tab" aria-expanded="false">Bridesmaid</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade grid-wrapper active in" id="groomsmen">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/thuy.jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/thuy.jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Bích Thùy</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/thuyluong3008"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/anh.jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/anh.jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Nhật Ánh</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/nhatanh12333"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade grid-wrapper" id="bridesmaid">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/73209062_1487997501351645_8896840907588894720_n.jpg?_nc_cat=102&_nc_ohc=UNLDsW_5My4AQmDgF6rH19SSA2ZrmMir19s3IeBV4W-LQuint4D3v0YCA&_nc_ht=scontent.fsgn5-4.fna&oh=632770b04b96a6661a69fca648bc4981&oe=5EA79B80" class="popup-image">
                                                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/73209062_1487997501351645_8896840907588894720_n.jpg?_nc_cat=102&_nc_ohc=UNLDsW_5My4AQmDgF6rH19SSA2ZrmMir19s3IeBV4W-LQuint4D3v0YCA&_nc_ht=scontent.fsgn5-4.fna&oh=632770b04b96a6661a69fca648bc4981&oe=5EA79B80" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Đức Ý</h3>
                                            <span>Made of honor</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/profile.php?id=100004242277037"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/19029341_1185606538251761_1756304055542253887_n.jpg?_nc_cat=102&_nc_ohc=uFRpZaJbaoYAQmC2ngWAWdmKPBielBX5WKPTKQK3ho5Nv35dY8is7Do7g&_nc_ht=scontent.fsgn5-4.fna&oh=c0fd61993d07db5626a548adbb6d050f&oe=5EB27301" class="popup-image">
                                                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/19029341_1185606538251761_1756304055542253887_n.jpg?_nc_cat=102&_nc_ohc=uFRpZaJbaoYAQmC2ngWAWdmKPBielBX5WKPTKQK3ho5Nv35dY8is7Do7g&_nc_ht=scontent.fsgn5-4.fna&oh=c0fd61993d07db5626a548adbb6d050f&oe=5EB27301" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Như Thanh</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/nhu.thanh.2004"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="https://scontent.fsgn5-6.fna.fbcdn.net/v/t1.0-9/75593883_1324375134436485_7771602644753186816_n.jpg?_nc_cat=109&_nc_ohc=81Ufvvm4O04AQnzAbmIrsFrWAO6422tJZx7_bVfYovKfXci5n-B3CQtVw&_nc_ht=scontent.fsgn5-6.fna&oh=a9aac068b646f9c496833a8e444fd682&oe=5E6F454C" class="popup-image">
                                                <img src="https://scontent.fsgn5-6.fna.fbcdn.net/v/t1.0-9/75593883_1324375134436485_7771602644753186816_n.jpg?_nc_cat=109&_nc_ohc=81Ufvvm4O04AQnzAbmIrsFrWAO6422tJZx7_bVfYovKfXci5n-B3CQtVw&_nc_ht=scontent.fsgn5-6.fna&oh=a9aac068b646f9c496833a8e444fd682&oe=5E6F454C" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Thanh Tuyền</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/profile.php?id=100005920331179"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/30708884_981274705368459_960160584928591872_o.jpg?_nc_cat=105&_nc_ohc=TicIo80XhlcAQk89KtjgfhheFg4SmicJcWxhd3jL26s_JxF_UW8ZZSbTQ&_nc_ht=scontent.fsgn5-2.fna&oh=17a46cb163e980a8b160e09d7654e605&oe=5E712CA4" class="popup-image">
                                                <img src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/30708884_981274705368459_960160584928591872_o.jpg?_nc_cat=105&_nc_ohc=TicIo80XhlcAQk89KtjgfhheFg4SmicJcWxhd3jL26s_JxF_UW8ZZSbTQ&_nc_ht=scontent.fsgn5-2.fna&oh=17a46cb163e980a8b160e09d7654e605&oe=5E712CA4" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Trinh Nguyễn</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/nguyen.trinh.96995238"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/52001741_1212779592212146_5718853824840466432_o.jpg?_nc_cat=104&_nc_ohc=YUIVUXwCzekAQkjnPAfBnsiWelDm_YjCNWmVpse39Nw6Bsrz7AsooxGqA&_nc_ht=scontent.fsgn5-4.fna&oh=463ef424410a8854bd5dc7c6c7338d94&oe=5EAD5861" class="popup-image">
                                                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/52001741_1212779592212146_5718853824840466432_o.jpg?_nc_cat=104&_nc_ohc=YUIVUXwCzekAQkjnPAfBnsiWelDm_YjCNWmVpse39Nw6Bsrz7AsooxGqA&_nc_ht=scontent.fsgn5-4.fna&oh=463ef424410a8854bd5dc7c6c7338d94&oe=5EAD5861" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Diễm Phúc</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/djemphuc.lam"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="{{ asset('images/slider/thao.jpg') }}" class="popup-image">
                                                <img src="{{ asset('images/slider/thao.jpg') }}" alt="" class="img img-responsive">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Như Thảo</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/thaozit.kute"><i class="fab fa-facebook-f"></i></a></li>
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


        <!-- start rsvp-section -->
        <section class="rsvp-section section-padding parallax" data-bg-image="{{ asset('images/slider/namtay.jpg') }}" data-speed="7" id="rsvp" data-section="rsvp">
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
                                <li><a data-filter="*" href="javascript:void(0);" class="current">All</a></li>
                                <li><a data-filter=".wedding" href="javascript:void(0);" class="">Wedding</a></li>
                                <li><a data-filter=".travel" href="javascript:void(0);" class="">Travel</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            @foreach (glob('images/slider/gallery/friend/*.*') as $key => $file)
                                <div class="grid pre-wedding">
                                    @if ($key == 6)
                                        <a href="https://www.youtube.com/embed/uXJT5x2X3H8?autoplay=1" data-type="iframe" class="video-play-btn">
                                            <img src="{{ asset($file) }}" alt="" class="img img-responsive">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    @else
                                        <a href="{{ asset($file) }}" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="{{ asset($file) }}" alt="" class="img img-responsive">
                                        </a>
                                    @endif
                                </div>
                            @endforeach

                            @foreach (glob('images/slider/gallery/travel/*.*') as $key => $file)
                                <div class="grid travel">
                                    <a href="{{ asset($file) }}" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset($file) }}" alt="" class="img img-responsive">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-section -->


        <!-- start footer -->
        <footer class="site-footer">
            <div class="back-to-top">
                <a href="javascript:void(0);" class="back-to-top-btn"><span><i class="fi flaticon-cupid"></i></span></a>
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