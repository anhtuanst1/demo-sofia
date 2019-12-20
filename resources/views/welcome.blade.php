@extends('layouts.app-public')

@section('content-public')
    <header role="banner" id="qbootstrap-header">
        <div class="container">
            <!-- <div class="row"> -->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href=".">Love Story</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="javascript:void(0);" data-nav-section="home"><span>@lang('generic.home')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="groom-bride"><span>@lang('generic.groom') &amp; @lang('generic.bride')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="story"><span>@lang('generic.love_story')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="greetings"><span>@lang('generic.greetings')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="people"><span>@lang('generic.people')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="when-where"><span>@lang('generic.when') &amp; @lang('generic.where')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="rsvp"><span>@lang('generic.rsvp')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="gallery"><span>@lang('generic.gallery')</span></a></li>
                        <li><a href="javascript:void(0);" data-nav-section="blog"><span>@lang('generic.blog')</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- </div> -->
        </div>
    </header>

    <section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_bg_3.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="qbootstrap-overlay"></div>
        <a class="player" data-property="{videoURL:'https://youtu.be/PeWXdkEUPbo',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="animate-box svg-sm colored">
                            <img src="images/flaticon/svg/004-nature.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h1 class="holder"><span>@lang('generic.the_story_of')</span></h1>
                            <h2 id="title_up">Bin &amp; Sofia</h2>
                            <div class="title_date">@lang('generic.start_date')</div>
                            <div class="title_to">@lang('generic.to')</div>
                            <div class="title_date">
                                <script>
                                    n =  new Date();
                                    document.write((n.getDate()) + "." + (n.getMonth() + 1) + "." + (n.getFullYear()))
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="qbootstrap-couple" class="qbootstrap-section-gray">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Are Getting Married</h2>
                        <p> ----------- </p>
                        <p><strong>on -----------Date &mdash;  ----------- </strong></p>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="images/groom.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Pham Anh Tuan</h3>
                        <span>@lang('generic.groom')</span>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><img src="images/flaticon/svg/003-luxury.svg" class="svg img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></h2></div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="images/bride.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Tong Thi Thu Ha</h3>
                        <span>@lang('generic.bride')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-countdown" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);" data-section="wedding-day">
        <div class="overlay"></div>
        <div class="display-over">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored">
                        <img src="images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2 class="">@lang('generic.been_together')</h2>
                        <span class="datewed">@lang('generic.start_date_full')</span>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="countdown">
                            <span id="days"></span>
                            <span id="hours"></span>
                            <span id="minutes"></span>
                            <span id="seconds"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-groom-bride" data-section="groom-bride">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm-2 colored">
                        <img src="images/flaticon/svg/002-wedding-couple.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>@lang('generic.groom') &amp; @lang('generic.bride')</h2>
                        <p> ----------- </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="couple groom text-center animate-box">
                        <img src="images/groom.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <div class="desc">
                            <h2>Pham Anh Tuan</h2>
                            <p> ----------- </p>
                            <ul class="social social-circle">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="couple bride text-center animate-box">
                        <img src="images/bride.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <div class="desc">
                            <h2>Tong Thi Thu Ha</h2>
                            <p> ----------- </p>
                            <ul class="social social-circle">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-story" data-section="story">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm-2">
                        <img src="images/flaticon/svg/003-luxury.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>@lang('generic.our_love_story')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline animate-box">
                        <li class="animate-box">
                            <div class="timeline-badge" style="background-image:url(images/couple-1.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">@lang('generic.first_we_meet')</h3>
                                    <span class="date"> -----------Date </span>
                                </div>
                                <div class="timeline-body">
                                    <p> ----------- </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge" style="background-image:url(images/couple-2.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="overlay overlay-2"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">@lang('generic.first_date')</h3>
                                    <span class="date"> -----------Date </span>
                                </div>
                                <div class="timeline-body">
                                    <p> ----------- </p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box">
                            <div class="timeline-badge" style="background-image:url(images/couple-3.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">@lang('generic.in_a_relationship')</h3>
                                    <span class="date"> -----------Date </span>
                                </div>
                                <div class="timeline-body">
                                    <p> ----------- </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge" style="background-image:url(images/couple-4.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="overlay overlay-2"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">@lang('generic.we_are_engaged')</h3>
                                    <span class="date"> -----------Date </span>
                                </div>
                                <div class="timeline-body">
                                    <p> ----------- </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-testimonials" class="qbootstrap-greetings" data-section="greetings" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 section-heading text-center svg-sm colored">
                    <img src="images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                    <h2 class="">@lang('generic.sweet_messages')</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active">
                                    <blockquote>
                                        <p>&ldquo; ----------- &rdquo;</p>
                                        <span>John Doe</span>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active">
                                    <blockquote>
                                        <p>&ldquo; ----------- &rdquo;</p>
                                        <span>Peter Soon</span>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active">
                                    <blockquote>
                                        <p>&ldquo; ----------- &rdquo;</p>
                                        <span>Mike Sting</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-people" data-section="people">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>The Groomsmen</h2>
                        <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext  ">
                            <h3> ----------- </h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-lg">
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/groom-men-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Ian Bill</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/groom-men-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>George Smith</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/groom-men-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Brian Thompson</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/groom-men-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>David Howard</h3>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>The Bridesmaid</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/bridesmaid-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Angel Thomas</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/bridesmaid-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Kathy Shol</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/bridesmaid-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Rose Mel</h3>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="groom-men">
                        <img src="images/bridesmaid-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Ann Hathway</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-when-where" data-section="when-where">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>@lang('generic.ceremony') &amp; @lang('generic.party')</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3> ----------- </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="ceremony-bg" style="background-image: url(images/wed-ceremony.jpg);"></div>
                        <div class="desc">
                            <h3>@lang('generic.wedding_ceremony')</h3>
                            <div class="row">
                                <div class="col-md-2 col-md-push-5">
                                    <div class="icon-tip">
                                        <span class="icon"><i class="icon-heart-o"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-calendar"></i>
                                        <span>Saturday</span>
                                        <span>02 Dec. 2017</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-clock2"></i>
                                        <span>10:00 AM</span>
                                        <span>11:00 AM</span>
                                    </div>
                                </div>
                            </div>
                            <p> ----------- </p>
                            <p><a href="#" class="btn btn-primary btn-sm">@lang('generic.learn_more')</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="ceremony-bg" style="background-image: url(images/wed-party.jpg);"></div>
                        <div class="desc">
                            <h3>@lang('generic.wedding_party')</h3>
                            <div class="row">
                                <div class="col-md-2 col-md-push-5">
                                    <div class="icon-tip">
                                        <span class="icon"><i class="icon-heart-o"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-calendar"></i>
                                        <span>Saturday</span>
                                        <span>02 Dec. 2017</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-clock2"></i>
                                        <span>10:00 AM</span>
                                        <span>11:00 AM</span>
                                    </div>
                                </div>
                            </div>
                            <p> ----------- </p>
                            <p><a href="#" class="btn btn-primary btn-sm">@lang('generic.learn_more')</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="qbootstrap-map"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>@lang('generic.you_are_invited')</h2>
                        <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext">
                            <h3> ----------- </h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">@lang('generic.name')</label>
                                <input type="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">@lang('generic.email')</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">@lang('generic.i_am_attending')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-gallery" data-section="gallery">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>@lang('generic.our_selfie_photos')</h2>
                        <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext">
                            <h3> ----------- </h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup image-popup" href="images/gallery-1.jpg"><img src="images/gallery-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-10.jpg"><img src="images/gallery-10.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-6.jpg"><img src="images/gallery-6.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-2.jpg"><img src="images/gallery-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-5.jpg"><img src="images/gallery-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-7.jpg"><img src="images/gallery-7.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-3.jpg"><img src="images/gallery-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-8.jpg"><img src="images/gallery-8.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="images/gallery-9.jpg"><img src="images/gallery-9.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-press" data-section="blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>@lang('generic.our_blog')</h2>
                        <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext">
                            <h3> ----------- </h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(images/blog-1.jpg)">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">@lang('generic.the_wedding_party') <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">@lang('generic.learn_more')</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(images/blog-2.jpg)">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">@lang('generic.wedding_party') <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">@lang('generic.learn_more')</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(images/blog-3.jpg);">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">@lang('generic.venue_wedding') <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">@lang('generic.learn_more')</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url(images/blog-4.jpg);">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">@lang('generic.about_the_couple') <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">@lang('generic.learn_more')</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                    <p class="copyright text-center">&copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="." data-nav-section="home">@lang('generic.love_story')</a>. @lang('generic.images_by') <a href="." target="_blank">Bin &amp; Sofia</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection