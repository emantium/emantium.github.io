<?php 
// Include the RSS handler functions
include_once('assets/php/rss_loader.php');

// Include the array of feeds to retreive for display on the site.
include_once('data/rss_feeds_array.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Giles Laurence">
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://Emantium.com",
      "name": "Emantium Group",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-213-432-2377",
        "contactType": "Customer service"
      }
    }
    </script>

    <!-- Start of HubSpot Embed Code -->
      <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3776725.js"></script>
    <!-- End of HubSpot Embed Code -->

    <title>Emantium Home</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line-font.css" rel="stylesheet">
    <link href="assets/css/simpletextrotator.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/css/superslides.css" rel="stylesheet">
    <link href="assets/css/margins.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Template core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive media querries -->
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>
<body>

    <!-- PRELOADER -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->

    <!-- BORDERS -->
    <span class="border-line top-frame visible-lg"></span>
    <span class="border-line right-frame visible-lg"></span>
    <span class="border-line bottom-frame visible-lg"></span>
    <span class="border-line left-frame visible-lg"></span>

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- NAVIGATION -->
        <nav class="border-navbar navbar-custom navbar-transparent navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- YOU LOGO HERE -->
                    <a class="navbar-brand" href="index.html">
                        <!-- IMAGE OR SIMPLE TEXT -->
                        <img class="dark-logo" src="assets/images/site-logo-dark.png" width="65" alt="">
                        <img class="light-logo" src="assets/images/site-logo-white.png" width="65" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#hero" class="section-scroll">Home</a></li>
                        <li><a href="#about" class="section-scroll">About</a></li>
                        <li><a href="#services" class="section-scroll">Services</a></li>
                        <li><a href="#team" class="section-scroll">Team</a></li>
                        <li><a href=".footer" class="section-scroll">Contact</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle search-dropdown" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu leftauto" role="menu">
                                <li>
                                    <div class="dropdown-search">
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <!-- /NAVIGATION -->

        <!-- HERO -->
        <section id="hero" class="brick-hero-2 full-height">

            <!-- PARTICLES -->
            <div id="particles-js">
                <!-- HERO TEXT -->
                <div class="hero-caption">
                    <div class="hero-text">
                        <h1 class="lop-size-lg">Emantium</h1>

                    </div>
                </div>
                <!-- /HERO TEXT -->
            </div>

        </section>
        <!-- /HERO -->

        <!-- ABOUT SECTION -->
        <div id="about" class="brick">
            <div class="container">
                <!-- brick title -->
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <h2 class="text-center lead"><br> Main Street for Mainlining funds<br></h2>
                        <div class="divider title-divider"></div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <p class="welcome-text mb-50">At Emantium we believe a valuation shouldnt just tell you current market value.
                                                 Our Proprietary algorythm not only shows your value today, but what if you waited 6 months? What if a BB drops another 30%? We use our patented MechaAI to make multi scenario value predictions as well as give actionable insights leading to higher multiples.
                                                  Decrease the interpretation of risk, interest rates and skepticisiom for your investors.
                                                    We sing the music bankers want to hear. We know, because we are bankers. <br>Big Cheap Money, it feels great saying it in anticipation</p>
                        <!-- history button should go here-->
                    </div>
                </div>
                <!-- end of brick title -->
            </div>
        </div >
        <!-- END OF ABOUT SECTION -->

           <!-- SERVICES SECTION -->
        <section id="services" class="brick bg-dark">
            <div class="container">
                <div class="row align-vertical">

                    <!-- //////////////////////////////// Service 1 //////////////////////////////// -->
                    <div class="col-md-3 col-xs-12 mt30 mb30">
                        <div class="service-container text-center">
                            <div class="icon-container parallaxe mb-50 bg-sv">
                                <i class="icon-tools"></i>
                            </div>
                            <div class="service-body">
                                <div class="service-title">
                                    <h3 class="text-white">Valuations</h3>
                                </div>
                                <p class="text-dark">Your Business is more than a number and more than the number they are giving you. Emantium Valuation+ doesnt stop at market price, we also show what it could be</p>
                            </div>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////// -->


                    <!-- //////////////////////////////// Service 2 //////////////////////////////// -->
                    <div class="col-md-3 col-xs-12 mt30 mb30">
                        <div class="service-container text-center">
                            <div class="icon-container parallaxe mb-50 bg-sv">
                                <i class="icon-strategy"></i>
                            </div>
                            <div class="service-body">
                                <div class="service-title ">
                                    <h3 class="text-white">Growth</h3>
                                </div>
                                <p class="text-dark">Focus on your product, we make it rain. Emantium Custom Growth Solutions makes the stars that much closer</p>
                            </div>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////// -->


                    <!-- //////////////////////////////// Service 3 //////////////////////////////// -->
                    <div class="col-md-3 col-xs-12 mt30 mb30">
                        <div class="service-container text-center">
                            <div class="icon-container parallaxe mb-50 bg-sv">
                                <i class="icon-flag"></i>
                            </div>
                            <div class="service-body">
                                <div class="service-title">
                                    <h3 class="text-white">Psychology</h3>
                                </div>
                                <p class="text-dark">Predict rationally. No need to follow a trend with the tools to set it. Emantium Psyhcology= statisticly significant</p>
                            </div>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////// -->


                    <!-- //////////////////////////////// Service 4 //////////////////////////////// -->
                    <div class="col-md-3 col-xs-12 mt30 mb30">
                        <div class="service-container text-center">
                            <div class="icon-container parallaxe mb-50 bg-sv">
                                <i class="icon-layers"></i>
                            </div>
                            <div class="service-body">
                                <div class="service-title">
                                    <h3 class="text-white">Finance</h3>
                                </div>
                                <p class="text-dark">Cash is King. With Emantium Financial Advisory, we'll build your castle. Long term plans are not problem</p>
                            </div>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////// -->

                </div>
            </div>
        </section>
        <!-- END OF SERVICES SECTION -->

        <!-- TEAM SECTION -->

        <!-- END OF TEAM SECTION -->

        <!-- FACTS SECTION -->
        <section id="facts" class="brick brick-md brick-parallax bg-film" data-background="assets/images/facts-2.jpg">

            <div class="container">
                <div class="row">
                    <!-- COUNTER -->
                    <div class="col-sm-4 mb-md-20">
                        <div class="counter-item">
                            <div class="counter-box">
                                <h5 class="counter-number text-white" data-number="9717"><span>9717</span></h5>
                                <h3 class="counter-title text-white bold">Great Ideas</h3>
                                <p class="text-white">funded globally 2016</p>
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                    <!-- COUNTER -->
                    <div class="col-sm-4 mb-md-20">
                        <div class="counter-item">
                            <div class="counter-box">
                                <h5 class="counter-number text-white" data-number="1600"><span>1600</span></h5>
                                <h3 class="counter-title text-white bold">Dollars in Millions</h3>
                                <p class="text-white">of impact with our people</p>
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                    <!-- COUNTER -->
                    <div class="col-sm-4 mb-md-20">
                        <div class="counter-item">
                            <div class="counter-box">
                                <h5 class="counter-number text-white" data-number="27"><span>27</span></h5>
                                <h3 class="counter-title text-white bold">Finished projects</h3>
                                <p class="text-white">and in progress</p>
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                </div>
            </div>

        </section>
        <!-- /FACTS SECTION -->

        <!-- PORTFOLIO SECTION -->
        <section id="portfolio" class="brick">
            <div class="container">
                <!-- brick title -->
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2 col-xs-12 mb-80">
                        <h2 class="brick-title">Our portfolio</h2>
                        <div class="divider title-divider"></div>
                        <p class="font-droid">For over 10 years we’ve worked with organisations around Europe and across the globe. Our clients span the very largest global companies, down to non-profits and local government. We hold fast to the idea of us as lightbringers for the ideas of others. As such, we keep our client lists and the nature of work for which we were engaged confidential.</p>
                    </div>
                </div>
                <!-- end of brick title -->
                <div class="row mt-50 mt-sm-0">
                    <div class="col-sm-12 overflow">
                        <div class="row portfolio-container">

                        </div> <!-- End of portfolio container -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF PORTFOLIO SECTION -->

        <!-- TESTIMONIALS -->
        <div class="brick brick-md brick-parallax bg-film" data-background="assets/images/hero-2.jpg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">

                        <!-- TESTIMONIALS CAROUSEL -->
                        <div class="owl-carousel slider-testimonials text-center">
                                                    <div class="slider-projects owl-carousel owl-theme text-center">

                            <!-- SLIDE 1 -->
                            <div class="item">
                                <div class="brick-icon mb-20">
                                    <span class="icon-quote"></span>
                                </div>
                                <div class="client-txt mb-20">
                                    The best way to predict the future is to create it
                                </div>
                                <div class="quote-author">Peter Drucker</div>
                            </div>
                            <!-- /SLIDE 1 -->

                            <!-- SLIDE 2 -->
                            <div class="item">
                                <div class="brick-icon mb-20">
                                    <span class="icon-quote"></span>
                                </div>
                                <div class="client-txt mb-20">
                                    All money is a matter of belief.
                                </div>
                                <div class="quote-author">Adam Smith</div>
                            </div>
                            <!-- /SLIDE 2 -->

                            <!-- SLIDE 3 -->
                            <div class="item">
                                <div class="brick-icon mb-20">
                                    <span class="icon-quote"></span>
                                </div>
                                <div class="client-txt mb-20">
                                    ...marketing is used for hollow products that don’t really speak. And it’s the only way you can sell them.
                                </div>
                                <div class="quote-author">Tom Ford</div>
                            </div>
                                                    </div> <!-- owl carousel -->

                            <!-- /SLIDE 3 -->

                        </div>
                        <!-- /TESTIMONIALS CAROUSEL -->

                    </div>

                </div>

            </div>

        </div>
        <!-- /TESTIMONIALS -->

        <!-- BLOG SECTION-->

        <!-- BLOG SECTION -->

        <!-- CONTACT -->
        <section class="brick bg-light brick-border">

            <div class="container">

                <!-- brick title -->
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <h2 class="brick-title">Contact us</h2>
                        <div class="divider title-divider"></div>
                        <p class="font-droid">Whether you're looking for answers, would like to solve a problem, or just want to let us know how we did, you'll find many ways to contact us right here</p>
                    </div>
                </div>
                <!-- /brick title -->

                <div class="row mt-100 pb-50">
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20">
                        <div class="contact-ico"><div class="lop-icon"><i class="fa fa-phone" aria-hidden="true"></i></div><div class="ci-title">Call Us</div><div class="ci-text">
                            +1(213)432-2377
                        </div>
                                            </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20">
                        <div class="contact-ico"><div class="lop-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div><div class="ci-title">Address</div><div class="ci-text">
                            100 Wilshire Blvd, Santa Monica
                        </div>
                                            </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-ico"><div class="lop-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div><div class="ci-title">Email</div><div class="ci-text">
                            <a href="mailto:Inquire@emantium.com">Inquire@emantium.com</a>
                        </div>
                                            </div>
                    </div>
                </div>

                <div class="row mt-sm-70 mt-xs-20">

                    <div class="col-sm-5">
                        <p>
                            Give us a call or shoot us a line, we will respond it no time.
                        </p>
                        <p>
                            We are open from 9am — 5pm week days.
                        </p>
                        <p>
                            Legal Info:
                            <a href="#">Emantium inc</a>
                            <br> a consulting syndicate
                        </p>
                    </div>

                    <div class="col-sm-7">

                        <form id="contact-form" novalidate="">

                            <div class="form-group">
                                <label class="sr-only" for="cname">Name</label>
                                <input type="text" id="cname" class="form-control" name="cname" placeholder="Name*" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="cemail">Your Email</label>
                                <input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail*" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message*" required="" data-validation-required-message="Please enter your message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <button class="action-btn btn-g">
                                Contact
                            </button>

                        </form>

                        <!-- Ajax response -->
                        <div id="contact-response" class="ajax-response"></div>

                    </div>

                </div>

            </div>
        </section>
        <!-- /CONTACT -->

        

        <!-- GOOGLE MAP -->
        <div class="contact_us_map">
            <div class="looper-map" data-lat="34.016794" data-lng="-118.500641" data-top="34.016794" data-left="-118.500641" data-marker="assets/images/map-icon.png" data-zoom="12" data-style="style-3" data-string="WPC string"></div>
        </div>
        <!-- /GOOGLE MAP -->

        <?php /* Include FEED SECTION */ include('view/feed_view.php'); ?>
        
        <!-- FOOTER SECTION-->
        <footer class="footer bg-light">

            <div class="container">

                <div class="content mb-50">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="dark-logo mb-30" src="assets/images/site-logo-dark.png" width="95" alt="">
                            <p>Flow forth, through us, as if <br>we were the source</p>
                        </div>
                        <div class="col-md-2">
                            <h4>About</h4>
                            <ul class="links-vertical">
                                <li>
                                    <a href="#pablo">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo">
                                        Presentation
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="col-md-2">
                            <h4>Legal</h4>
                            <ul class="links-vertical">
                                <li>
                                    <a href="#pablo">
                                        Transactions FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo">
                                        Licenses
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Instagram Feed</h4>
                            <div class="gallery-feed">
                                <a target="_blank" href="#"><img src="assets/images/instagram/1.jpg" class="img img-raised" alt="" /></a>
                                <a target="_blank" href="#"><img src="assets/images/instagram/2.jpg" class="img img-raised" alt="" /></a>
                                <a target="_blank" href="#"><img src="assets/images/instagram/3.jpg" class="img img-raised" alt="" /></a>
                                <a target="_blank" href="#"><img src="assets/images/instagram/4.jpg" class="img img-raised" alt="" /></a>

                                <a target="_blank" href="#"><img src="assets/images/instagram/5.jpg" class="img img-raised" alt="" /></a>
                                <a target="_blank" href="#"><img src="assets/images/instagram/6.jpg" class="img img-raised" alt="" /></a>
                                <a target="_blank" href="#"><img src="assets/images/instagram/7.jpg" class="img img-raised" alt="" /></a>
                                <a target="_blank" href="#"><img src="assets/images/instagram/8.jpg" class="img img-raised" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <ul class="social-buttons">
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-google">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-youtube">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                </ul>

                <div class="copyright pull-center">
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script> Emantium All Rights Reserved.
                </div>

            </div>

        </footer>
        <!-- /FOOTER SECTION -->
    </div>
    <!-- /WRAPPER -->

    <!-- Javascript files -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.youtubebackground.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/packery-mode.pkgd.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/jquery.fitvids.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/contact_mailer.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/splitslider.js"></script>
    <script src="assets/js/horizontaltimeline.js"></script>
    <script src="assets/js/jquery.mobile.custom.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBphh6ekXB5_c8DtKGCN7w_DZnIZvPGXLg"></script>
    <script src="assets/js/jquery.superslides.min.js"></script>

</body>
</html>
