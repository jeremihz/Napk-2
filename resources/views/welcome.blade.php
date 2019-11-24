@extends('layouts.master')

@section('content')


<!-- SLIDER -->

    <section class="politics-slider" id="politics-slider">
        <div class="carousel slide politics-carousel" id="politics-carousel" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="politics-carousel" data-slide-to="0" class="active"></li>
                <li data-target="politics-carousel" data-slide-to="1"></li>
            </ol> <!-- .carousel-indicators ends -->

            <div class="carousel-inner">
                <div class="item active">
                    <img class="carousel-bg" src="img/uploads/slide-1.jpg" alt="carousel image">
                    <div class="carousel-caption">
                        <div class="caption-image">
                            <img data-animation="animated fadeInRight" src="http://placehold.it/363x680" alt="caption image">
                        </div> <!-- .caption-image ends -->
                        <div class="caption-content">
                            <h1><small data-animation="animated fadeInDown">Wind of changes</small>  <span data-animation="animated fadeInRight">News days are comming</span></h1>
                            <p data-animation="animated fadeInUp">
                                Quisque ut nisi. Sed fringilla et nibh. Ut varius tincidunt libero. Maecenas  he nunc fringilla tristique.
                            </p>
                            <button class="btn btn-main btn-lg" data-animation="animated fadeInUp">Join Us</button>
                        </div> <!-- .caption-content ends -->
                        
                    </div> <!-- .carousel-caption ends -->
                </div> <!-- .item active ends -->
                <div class="item">
                    <img class="carousel-bg" src="img/uploads/slide-2.jpg" alt="carousel image">
                    <div class="carousel-caption">
                    
                        <div class="caption-content">
                            <h1><small data-animation="animated fadeInDown">A beautiful Day</small> <span data-animation="animated fadeInDown">The Judgement day</span></h1>
                            <p data-animation="animated fadeInUp">
                                Quisque ut nisi. Sed fringilla et nibh. Ut varius tincidunt libero. Maecenas  he nunc fringilla toma dermajhe kikeu tomra kakebolo na amadero ase bondhuam manbona tobeb tristique.
                            </p>
                            <button class="btn btn-main btn-lg" data-animation="animated fadeInUp">Learn More</button>
                        </div> <!-- .caption-content ends -->
                        
                    </div> <!-- .carousel-caption ends -->
                </div> <!-- .item active ends -->
            </div> <!-- .carousel-inner ends -->

            <!-- CONTROLS -->
            <a class="left carousel-control" href="#politics-carousel" role="button" data-slide="prev">
                <span class="icon ion-ios-arrow-back" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> <!-- .left carousel-control ends -->

            <a class="right carousel-control" href="#politics-carousel" role="button" data-slide="next">
                <span class="icon ion-ios-arrow-forward" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> <!-- .right carousel-control ends -->

        </div> <!-- .carousel slide ends -->
    </section> <!-- .politics-slider ends -->

    <!-- INTRO SECTION -->

    <section class="intro-section section-block" id="intro-section">
        <div class="container">
            <div class="section-title-block">
                <h2>Welcome <span>to the world of Politics</span></h2>
                <div class="title-style">
                    <i class="icon ion-ios-star"></i>
                    <i class="icon ion-ios-star"></i>
                    <i class="icon ion-ios-star"></i>
                </div>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident.
                </p>
            </div> <!-- .section-title-block ends -->

            <div class="row section-content">
                <div class="col-lg-3">
                    <div class="content-wrapper">
                        <div class="icon-block"><i class="icon ion-ios-world-outline"></i></div>
                        <h3><a href="#">Our Mandate</a></h3>
                        <p>
                            Nolabore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud mmodo autit.
                        </p>
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- col-lg-3 ends -->

                <div class="col-lg-3">
                    <div class="content-wrapper">
                        <div class="icon-block"><i class="icon ion-ios-chatboxes-outline"></i></div>
                        <h3><a href="#">Election Campaign</a></h3>
                        <p>
                            Nolabore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud mmodo autit.
                        </p>
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- col-lg-3 ends -->

                <div class="col-lg-3">
                    <div class="content-wrapper">
                        <div class="icon-block"><i class="icon ion-ios-personadd-outline"></i></div>
                        <h3><a href="#">Get involved</a></h3>
                        <p>
                            Nolabore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud mmodo autit.
                        </p>
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- col-lg-3 ends -->

                <div class="col-lg-3">
                    <div class="content-wrapper">
                        <div class="icon-block"><i class="icon ion-ios-color-wand-outline"></i></div>
                        <h3><a href="#">Make Donation</a></h3>
                        <p>
                            Nolabore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud mmodo autit.
                        </p>
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- col-lg-3 ends -->
            </div> <!-- .row section-content ends -->
        </div> <!-- .container ends -->
    </section> <!-- .intro-section ends -->


    <!-- LATEST NEWS -->

    <section class="latest-news section-block-2" id="latest-news">
        <div class="container">
            <div class="section-title-block-2">
                <h3>Whats New</h3>
                <p>
                    Lorem ipsum in reprehe velit essepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui id est laborum.
                </p>
            </div> <!-- .section-title-block-2 ends -->

            <div class="row section-content">
                <div class="col-md-6 featured-news">
                    <div class="news-wrapper">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="latest news image">

                        <div class="news-content">
                            <a class="news-category" href="#">World War</a>
                            <div class="content-wrapper">
                                <h4>America needs a real hero to work like me</h4>
                                <p>
                                    Laboris nisi ut aliquip ex ea commodo
                                    consequaepteur sint occaecat cupidatat non
                                    proident, suntt anim id est laborum <a class="read-more-link" href="#">Continue</a>
                                </p>
                            </div> <!-- .content-wrapper ends -->
                        </div> <!-- .news-content ends -->
                    </div> <!-- .news-wrapper ends -->
                </div> <!-- .col-md-6 ends -->

                <div class="col-md-6 news-block">
                    <div class="row">
                        <div class="col-sm-6 news-item">
                            <div class="item-wrapper">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="latest news image">

                                <div class="item-content">
                                    <span class="item-date">May 24, 2016</span>
                                    <h4>Commodo consequ aepteur sint oatat non</h4>
                                </div> <!-- .item-content ends -->
                            </div> <!-- .item-wrapper ends -->
                        </div> <!-- .col-md-6 news-item ends -->

                        <div class="col-sm-6 news-item">
                            <div class="item-wrapper">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="latest news image">

                                <div class="item-content">
                                    <span class="item-date">May 24, 2016</span>
                                    <h4>Commodo consequ aepteur sint oatat non</h4>
                                </div> <!-- .item-content ends -->
                            </div> <!-- .item-wrapper ends -->
                        </div> <!-- .col-md-6 news-item ends -->

                        <div class="col-sm-6 news-item">
                            <div class="item-wrapper">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="latest news image">

                                <div class="item-content">
                                    <span class="item-date">May 24, 2016</span>
                                    <h4>Commodo consequ aepteur sint oatat non</h4>
                                </div> <!-- .item-content ends -->
                            </div> <!-- .item-wrapper ends -->
                        </div> <!-- .col-md-6 news-item ends -->

                        <div class="col-sm-6 news-item">
                            <div class="item-wrapper">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="latest news image">

                                <div class="item-content">
                                    <span class="item-date">May 24, 2016</span>
                                    <h4>Commodo consequ aepteur sint oatat non</h4>
                                </div> <!-- .item-content ends -->
                            </div> <!-- .item-wrapper ends -->
                        </div> <!-- .col-md-6 news-item ends -->
                    </div> <!-- .row ends -->
                </div> <!-- .col-md-6 news-block ends -->
            </div> <!-- .row section-content ends -->
        </div> <!-- .container ends -->
    </section> <!-- .latest-news ends -->


    <!-- FEATURED CONTENT -->

    <section class="featured-content" id="featured-content">        
        <div class="container">
            <div class="content-block">
                <h2>World needs a leader and you need me!</h2>
                <p>
                    Lorem ipsur xcepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="btn btn-main btn-normal">Learn More</button>
            </div> <!-- .content-block ends -->
            <div class="image-block">
                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="man image 2">
            </div> <!-- .image-block ends -->
        </div> <!-- .container ends -->
    </section> <!-- .featured-content ends -->
    <br>
    <br>


    <!-- QUICK LINKS BLOCK -->

    <section class="quick-links-block" id="quick-links-block">
        <div class="container-fluid">
            <div class="row section-content">
                <div class="col-md-4 mission-block">
                    <div class="content-wrapper">
                        <i class="icon ion-ios-paw-outline"></i>
                        <h3>Our Mission</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                        <a class="read-more-link" href="#">Learn More</a>
                    </div> <!-- .content-block ends -->
                </div> <!-- col-md-4 ends -->

                <div class="col-md-4 vision-block">
                    <div class="content-wrapper">
                        <i class="icon ion-ios-eye-outline"></i>
                        <h3>Our Vision</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                        <a class="read-more-link" href="#">Learn More</a>
                    </div> <!-- .content-block ends -->
                </div> <!-- col-md-4 ends -->

                <div class="col-md-4 issue-block">
                    <div class="content-wrapper">
                        <i class="icon ion-ios-paper-outline"></i>
                        <h3>Our Issue</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                        <a class="read-more-link" href="#">Learn More</a>
                    </div> <!-- .content-block ends -->
                </div> <!-- col-md-4 ends -->
            </div> <!-- .row section-content ends -->
        </div> <!-- .container-fluid ends -->
    </section> <!-- .quick-links-block ends -->


    <!-- PRESS RELEASE -->

    <section class="press-release section-block-2" id="press-release">
        <div class="container">
            <div class="section-title-block-2">
                <h3>Press Release</h3>
                <p>
                    Lorem ipsum in reprehe velit essn
                    proident, sunt eprehe velin culpa qui id est laborum.
                </p>
            </div> <!-- .section-title-block-2 ends -->

            <div class="row section-content">
                <div class="col-md-4">
                    <div class="image-block">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="press release image">
                    </div> <!-- .image-block ends -->

                    <div class="content-block">
                        <h3>Epteur sint ocecat cutat no</h3>

                        <div class="content-details">
                            <span class="press-date">May 24, 2016</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor dolore mag culit anim id est laborum.
                            </p>
                            <a class="read-more-link" href="#">Read More</a>
                        </div> <!-- .content-details ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-4 ends -->

                <div class="col-md-4">
                    <div class="image-block">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="press release image">
                    </div> <!-- .image-block ends -->

                    <div class="content-block">
                        <h3>Epteur sint ocecat cutat no</h3>

                        <div class="content-details">
                            <span class="press-date">May 24, 2016</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor dolore mag culit anim id est laborum.
                            </p>
                            <a class="read-more-link" href="#">Read More</a>
                        </div> <!-- .content-details ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-4 ends -->

                <div class="col-md-4">
                    <div class="image-block">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="press release image">
                    </div> <!-- .image-block ends -->

                    <div class="content-block">
                        <h3>Epteur sint ocecat cutat no</h3>

                        <div class="content-details">
                            <span class="press-date">May 24, 2016</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor dolore mag culit anim id est laborum.
                            </p>
                            <a class="read-more-link" href="#">Read More</a>
                        </div> <!-- .content-details ends -->
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-4 ends -->
            </div> <!-- .row section-content ends -->
        </div> <!-- .container ends -->
    </section> <!-- .press-release ends -->


    <!-- DONATION BANNER -->

    <section class="donation-banner" id="donation-banner">
        <div class="container">
            <div class="banner-content">
                <h2>Serve the nation</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button class="btn btn-main btn-lg">Donate Now</button>
            </div> <!-- .banner-content ends -->

            <div class="donation-amount">
                <h3 data-from="2000000" data-to="23232543" data-speed="6000">$ 23,232,543</h3>
                <span>Donated till now</span>
            </div> <!-- .donation-amount ends -->
        </div> <!-- .container ends -->
    </section> <!-- .donation-banner ends -->


    <!-- TESTIMONIAL -->

    <section class="testimonial section-block" id="testimonial">
        <div class="container">
            <div class="section-title-block">
                <h2>Testimonial <span>what our supporter's say</span></h2>
                <div class="title-style">
                    <i class="icon ion-ios-star"></i>
                    <i class="icon ion-ios-star"></i>
                    <i class="icon ion-ios-star"></i>
                </div>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident.
                </p>
            </div> <!-- .section-title-block ends -->

            <div class="row section-content">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-carousel" id="testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="item">
                                <span class="quote-icon"><i class="icon ion-quote"></i></span>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco ore magna aliq laid est laborum.
                                </blockquote>
                                <div class="quote-author">
                                    <div class="image-wrapper">
                                        <img class="img-responsive" src="http://placehold.it/80x80" alt="quote author image">
                                    </div> <!-- .image-wrapper ends -->
                                    

                                    <div class="author-details">
                                        <h4>Andromina Eva</h4>
                                        <span>Ceo</span>
                                        <p>Manual Communication</p>
                                    </div> <!-- .author-details ends -->

                                </div> <!-- .quote-author ends -->
                            </div> <!-- .item ends -->
                        </div> <!-- .testimonial-item ends -->

                        <div class="testimonial-item">
                            <div class="item">
                                <span class="quote-icon"><i class="icon ion-quote"></i></span>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco ore magna aliq laid est laborum.
                                </blockquote>
                                <div class="quote-author">
                                    <div class="image-wrapper">
                                        <img class="img-responsive" src="http://placehold.it/80x80" alt="quote author image">
                                    </div> <!-- .image-wrapper ends -->
                                    

                                    <div class="author-details">
                                        <h4>Andromina Eva</h4>
                                        <span>Ceo</span>
                                        <p>Manual Communication</p>
                                    </div> <!-- .author-details ends -->

                                </div> <!-- .quote-author ends -->
                            </div> <!-- .item ends -->
                        </div> <!-- .testimonial-item ends -->

                        <div class="testimonial-item">
                            <div class="item">
                                <span class="quote-icon"><i class="icon ion-quote"></i></span>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco ore magna aliq laid est laborum.
                                </blockquote>
                                <div class="quote-author">
                                    <div class="image-wrapper">
                                        <img class="img-responsive" src="http://placehold.it/80x80" alt="quote author image">
                                    </div> <!-- .image-wrapper ends -->
                                    

                                    <div class="author-details">
                                        <h4>Andromina Eva</h4>
                                        <span>Ceo</span>
                                        <p>Manual Communication</p>
                                    </div> <!-- .author-details ends -->

                                </div> <!-- .quote-author ends -->
                            </div> <!-- .item ends -->
                        </div> <!-- .testimonial-item ends -->

                    </div> <!-- .content-wrapper ends -->
                </div> <!-- .col-md-8 col-md-offset-2 ends -->
            </div> <!-- .section-content ends -->
        </div> <!-- .container ends -->
    </section> <!-- .testimonial section-block ends -->


    <!-- VOLUNTEER BANNER -->

    <section class="volunteer-banner" id="volunteer-banner">
        <div class="container">
            <div class="content-block">
                <h2>Become A Volunteer</h2>
                <p>
                    Lorem ipsur xcepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="btn btn-main btn-normal">Join Now</button>
            </div> <!-- .content-block ends -->
            <div class="image-block">
                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="volunteers">
            </div> <!-- .image-block ends -->
        </div> <!-- .container ends -->
    </section> <!-- .volunteer-banner ends -->


    <!-- CAMPAIGN EVENTS -->

    <section class="campaign-events section-block-2" id="campaign-events">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-6 campaign-block">
                    <h3 class="block-title">Featured Campaign</h3>
                    <div class="image-wrapper">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="campaign images">
                    </div> <!-- .image-wrapper ends -->
                    <div class="campaign-content">
                        <h2>Campaign for federal central election</h2>

                        <div class="campaign-details">
                            <ul class="campaign-meta">
                                <li>Manager: <span>John Doe</span></li>
                                <li>Budget: <span>$1.5 M</span></li>
                                <li>Area: <span>New York</span></li>
                            </ul>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incir. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a class="read-more-link" href="#">Read More</a>
                        </div> <!-- .campaign-details ends -->
                    </div> <!-- .campaign-content ends -->
                </div> <!-- .col-lg-6 ends -->
                <div class="col-lg-6 event-block">
                    <h3 class="block-title">Upcomming Events</h3>

                    <ul class="event-list">
                        <li class="event clearfix">
                            <div class="image-block">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="event image">
                            </div> <!-- .image-block ends -->
                            <div class="content-block">
                                <span class="event-date">May 24, 2016</span>
                                <div class="event-details">
                                    <h2>Eepteur sint o erunt mo est laboru</h2>
                                    <ul class="event-meta">
                                        <li>Time: <span>10.00 am</span></li>
                                        <li>Place: <span>Dhaka University</span></li>
                                    </ul> <!-- .event-meta ends -->
                                    <div class="event-footer">
                                        <a class="join-link" href="#">Join Now</a>
                                        <a class="read-more-link" href="#">Learn More</a>
                                    </div> <!-- .event-footer ends -->
                                </div> <!-- .event-details ends -->
                            </div> <!-- .content-block ends -->
                        </li> <!-- .event ends -->

                        <li class="event clearfix">
                            <div class="image-block">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="event image">
                            </div> <!-- .image-block ends -->
                            <div class="content-block">
                                <span class="event-date">May 24, 2016</span>
                                <div class="event-details">
                                    <h2>Eepteur sint o erunt mo est laboru</h2>
                                    <ul class="event-meta">
                                        <li>Time: <span>10.00 am</span></li>
                                        <li>Place: <span>Dhaka University</span></li>
                                    </ul> <!-- .event-meta ends -->
                                    <div class="event-footer">
                                        <a class="join-link" href="#">Join Now</a>
                                        <a class="read-more-link" href="#">Learn More</a>
                                    </div> <!-- .event-footer ends -->
                                </div> <!-- .event-details ends -->
                            </div> <!-- .content-block ends -->
                        </li> <!-- .event ends -->

                        <li class="event clearfix">
                            <div class="image-block">
                                <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="event image">
                            </div> <!-- .image-block ends -->
                            <div class="content-block">
                                <span class="event-date">May 24, 2016</span>
                                <div class="event-details">
                                    <h2>Eepteur sint o erunt mo est laboru</h2>
                                    <ul class="event-meta">
                                        <li>Time: <span>10.00 am</span></li>
                                        <li>Place: <span>Dhaka University</span></li>
                                    </ul> <!-- .event-meta ends -->
                                    <div class="event-footer">
                                        <a class="join-link" href="#">Join Now</a>
                                        <a class="read-more-link" href="#">Learn More</a>
                                    </div> <!-- .event-footer ends -->
                                </div> <!-- .event-details ends -->
                            </div> <!-- .content-block ends -->
                        </li> <!-- .event ends -->
                    </ul> <!-- .event-list ends -->
                </div> <!-- .col-lg-6 ends -->
            </div> <!-- .row ends -->
        </div> <!-- .container ends -->
    </section> <!-- .campaign-events ends -->


    <!-- FEATURED EVENT  -->

    <section class="featured-event" id="featured-event">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 event-block">
                    <h2>Upcomming Election</h2>

                    <ul class="event-counting">
                        <li>
                            <h3><span class="days">239</span> <small>Days</small></h3>
                        </li>
                        <li>
                            <h3><span class="hours">23</span> <small>Hours</small></h3>
                        </li>
                        <li>
                            <h3><span class="minutes">9</span> <small>Minutes</small></h3>
                        </li>
                        <li>
                            <h3><span class="seconds">49</span> <small>Seconds</small></h3>
                        </li>
                    </ul>
                </div> <!-- .col-lg-8 ends -->

                <div class="col-lg-4 facts-block">
                    <ul class="facts-content">
                        <li>
                            <div class="icon-block"><i class="icon ion-ios-people-outline"></i></div>
                            <h3><strong class="timer" data-from="100000" data-to="232343" data-speed="5000">232,343</strong> <span>Volunteers</span></h3>
                        </li>

                        <li>
                            <div class="icon-block"><i class="icon ion-ios-briefcase-outline"></i></div>
                            <h3><strong class="timer" data-from="10000" data-to="32343" data-speed="5000">32,343</strong> <span>Projects</span></h3>
                        </li>

                        <li>
                            <div class="icon-block"><i class="icon ion-ios-chatboxes-outline"></i></div>
                            <h3><strong class="timer" data-from="1000" data-to="2343" data-speed="5000">2,343</strong> <span>Campaigns</span></h3>
                        </li>

                        <li>
                            <div class="icon-block"><i class="icon ion-ios-heart-outline"></i></div>
                            <h3><strong class="timer" data-from="1000" data-to="343" data-speed="5000">343</strong> <span>Awards</span></h3>
                        </li>
                    </ul>
                </div> <!-- .col-lg-4 ends -->
            </div> <!-- .row ends -->
            
        </div> <!-- .container-fluid ends -->
    </section> <!-- .featured-event ends -->


    <!-- OUR MEMBERS -->

    <section class="our-members section-block" id="our-members">
        <div class="container">
            <div class="section-title-block">
                <h2>Our Members <span>See our soldiers</span></h2>
                <div class="title-style">
                    <i class="icon ion-ios-star"></i>
                    <i class="icon ion-ios-star"></i>
                    <i class="icon ion-ios-star"></i>
                </div>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident.
                </p>
            </div> <!-- .section-title-block ends -->

            <div class="row section-content">
                <div class="col-lg-3 member-block">
                    <div class="content-wrapper">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="member photo">

                        <div class="member-content">
                            <h4 class="member-name">Jhonson Doe</h4>
                            <span class="designation">President</span>
                            <div class="hover-content">
                                <p>
                                    Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                                </ul> <!-- .social-links ends -->
                            </div> <!-- .hover-content ends -->
                            
                        </div> <!-- .member-content ends -->
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- .col-lg-3 member-block ends -->

                <div class="col-lg-3 member-block">
                    <div class="content-wrapper">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="member photo">

                        <div class="member-content">
                            <h4 class="member-name">Alex Murphy</h4>
                            <span class="designation">Chairman</span>
                            <div class="hover-content">
                                <p>
                                    Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                                </ul> <!-- .social-links ends -->
                            </div> <!-- .hover-content ends -->
                            
                        </div> <!-- .member-content ends -->
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- .col-lg-3 member-block ends -->

                <div class="col-lg-3 member-block">
                    <div class="content-wrapper">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="member photo">

                        <div class="member-content">
                            <h4 class="member-name">James Anderson</h4>
                            <span class="designation">Member</span>
                            <div class="hover-content">
                                <p>
                                    Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                                </ul> <!-- .social-links ends -->
                            </div> <!-- .hover-content ends -->
                            
                        </div> <!-- .member-content ends -->
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- .col-lg-3 member-block ends -->

                <div class="col-lg-3 member-block">
                    <div class="content-wrapper">
                        <img class="img-responsive" src="img/uploads/slide-1.jpg" alt="member photo">

                        <div class="member-content">
                            <h4 class="member-name">Amenda Parker</h4>
                            <span class="designation">Cashier</span>
                            <div class="hover-content">
                                <p>
                                    Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                                </ul> <!-- .social-links ends -->
                            </div> <!-- .hover-content ends -->
                            
                        </div> <!-- .member-content ends -->
                    </div> <!-- .content-wrapper ends -->
                </div> <!-- .col-lg-3 member-block ends -->
            </div> <!-- .row section-content ends -->
        </div> <!-- .container ends -->
    </section> <!-- .our-members ends -->


    <!-- EMAIL SUBSCRIPTION -->

    <section class="email-subscription" id="email-subscription">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-block"><i class="icon ion-ios-email-outline"></i></div>
                    <div class="content-block">
                        <h2>Get latest news</h2>
                        <p>Subscribe to our newsletter</p>
                    </div> <!-- .content-block ends -->
                </div> <!-- .col-md-6 ends -->
                <div class="col-md-6">
                    <form class="subscription-form" id="subscription-form">
                        <div class="row no-padding">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email:</label>
                                    <input class="form-control" type="email" id="email" placeholder="Your email here">
                                    
                                </div> <!-- .form-group ends -->
                            </div> <!-- .col-sm-8 ends -->
                            <div class="col-sm-4">
                                <button class="btn btn-main">Submit</button>
                            </div> <!-- .col-sm-4 ends -->
                        </div> <!-- .row ends -->
                        
                    </form> <!-- .subscrition-form ends -->
                </div> <!-- .form-block ends -->
            </div> <!-- .row ends -->
        </div> <!-- .container ends -->
    </section> <!-- .email-subscriptin ends -->

@stop