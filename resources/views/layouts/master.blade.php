<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <title>National | Alliance | Movement</title>


    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="home" data-spy="scroll" data-target=".politics-navbar">

    <!-- SITE HEADER -->
    <header class="site-header">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 trending-topics hidden-sm hidden-xs">
                        <h4>Trending</h4>
                        <ul class="list-inline">
                            <li><a href="#">Global Warming</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div> <!-- .col-md-6 ends -->
                    <div class="col-md-6 social-links">
                        <button class="btn btn-main btn-sm pull-right">Donate Us</button>
                        <ul class="list-inline">
                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-linkedin-outline"></i></a></li>
                        </ul>

                    </div> <!-- .col-md-6 ends -->
                </div> <!-- .row ends -->
            </div> <!-- .container-fluid ends -->
        </div> <!-- .top-bar ends -->
        <nav class="navbar navbar-default politics-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#politics-navbar-real" area-expanded="false">

                        <span class="sr-only">Toggle Navigation</span>
                        <span class="glyphicon glyphicon-menu-hamburger"></span>

                    </button>

                    <a class="navbar-brand" href="#">Politics</a>
                </div> <!-- .navbar-header ends -->
                <div class="collapse navbar-collapse" id="politics-navbar-real">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a data-scroll href="#site-header">Home <span class="sr-only">(current)</span></a></li>
                        <li><a data-scroll href="#latest-news">News</a></li>
                        <li><a data-scroll href="#press-release">Press</a></li>
                        <li><a data-scroll href="#campaign-events">Campaigns</a></li>
                    </ul> <!-- .nav navbar-nav ends -->

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a data-scroll href="#featured-event">Events</a></li>
                        <li><a data-scroll href="#our-members">Members</a></li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                                
                               <li><a href="{{URL::to('/singlepost')}}">Single Post</a></li>
                            </ul> <!-- .dropdown-menu ends -->

                        </li> <!-- .dropdown ends -->
                       <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                    </ul> <!-- .nav navbar-nav ends -->
                </div> <!-- .collapse navbar-collapse ends -->
            </div> <!-- .container ends -->
        </nav> <!-- .navbar navbar-default ends -->
        
    </header> <!-- .site-header ends -->
            
            @yield('content')


            <!-- MAIN FOOTER -->

    <footer class="main-footer section-block" id="main-footer">
        <div class="container">
            <div class="row section-content">
                <div class="col-md-3 col-sm-6 widget about">
                    <h3 class="widget-title">About Politics</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incit anim id est laborum.
                    </p>

                    <ul class="contact-list">
                        <li>
                            <i class="icon ion-ios-location-outline"></i>
                            <address>
                                82, Bardeshi, Amin Bazar <br>
                                Savar, Dhaka - 1348
                            </address>
                        </li>
                        <li>
                            <i class="icon ion-ios-email-outline"></i>
                            <a href="mailto:email@website.com">email@website.com</a>
                        </li>
                        <li>
                            <i class="icon ion-ios-telephone-outline"></i>
                            <a href="#">+88 111 - 222 - 3456789</a>
                        </li>
                    </ul>
                </div> <!-- .col-md-3 ends -->
                <div class="col-md-3 col-sm-6 widget quick-links clearfix">
                    <h3 class="widget-title">Quick links</h3>
                    <div class="link-block">
                        <h4>About</h4>
                        <ul class="link-list">
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Future Plan</a></li>
                        </ul>
                    </div> <!-- .link-block ends -->
                    <div class="link-block">
                        <h4>Get Involved</h4>
                        <ul class="link-list">
                            <li><a href="#">Become Member</a></li>
                            <li><a href="#">Become Volunteer</a></li>
                            <li><a href="#">Donate Us</a></li>
                        </ul>
                    </div> <!-- .link-block ends -->
                    <div class="link-block">
                        <h4>News &amp; Videos</h4>
                        <ul class="link-list">
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="#">Press Release</a></li>
                            <li><a href="#">Videos</a></li>
                        </ul>
                    </div> <!-- .link-block ends -->
                    <div class="link-block">
                        <h4>Issues</h4>
                        <ul class="link-list">
                            <li><a href="#">Foreign Relations</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Economy</a></li>
                        </ul>
                    </div> <!-- .link-block ends -->
                </div> <!-- .col-md-3 ends -->
                <div class="col-md-3 col-sm-6 widget photo-block">
                    <h3 class="widget-title">Photo Gallery</h3>

                    <ul class="gallery-photos clearfix">
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="http://placehold.it/95x68" alt="gallery image"></a>
                        </li>
                    </ul> <!-- .gallery-photos ends -->
                </div> <!-- .col-md-3 ends -->

                <!-- <div class="clearfix visible-xs"></div> -->

                <div class="col-md-3 col-sm-6 widget twitter-updates">
                    <h3 class="widget-title">Twitter Updates</h3>

                    <ul class="twitter-update-list">
                        <li>
                            <i class="icon ion-social-twitter"></i>
                            <p>
                                <a class="id-link" href="#">@rainydesign</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo <a class="tweet-link" href="#">http://bit.ly/3As8ds</a>
                            </p>
                        </li>

                        <li>
                            <i class="icon ion-social-twitter"></i>
                            <p>
                                <a class="id-link" href="#">@rainydesign</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo <a class="tweet-link" href="#">http://bit.ly/3As8ds</a>
                            </p>
                        </li>
                    </ul>
                </div> <!-- .col-md-3 ends -->
            </div> <!-- .row section-content ends -->
        </div> <!-- .container ends -->

        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 copyright-block">
                        <p>All rights reserved &copy; 2016 <a href="www.rainydesign.com">Rainy Design</a></p>
                    </div> <!-- .col-md-4 ends -->
                    <div class="col-lg-4 social-block">
                        <ul class="social-icon-list list-inline">
                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                        </ul>
                    </div> <!-- .col-lg-4 ends -->
                    <div class="col-lg-4 extra-links-block">
                        <ul class="extra-links list-inline">
                            <li><a href="#">Terms &amp; Condition</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul> <!-- .extra-links ends -->
                    </div> <!-- .col-lg-4 ends -->
                </div> <!-- .row ends -->
            </div> <!-- .container-fluid ends -->
        </div> <!-- .bottom-bar ends -->
    </footer> <!-- .main-fooer ends -->


    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/jquery.downCount.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/smooth-scroll.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>