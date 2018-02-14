<?php
if (isset($_GET) && count($_GET) > 0) {
    $to = "contact@safestartmedical.com";
    $subject = "Web Inquiry From Safestart";

    $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Here is Web enquiry Details</p>
<table>
<tr>
<td><b>Firstname</b></td>
<td>" . $_GET['first_name'] . "</td>
</tr>
<tr>
<td><b>Lastname</b></td>
<td>" . $_GET['last_name'] . "</td>
</tr>
<tr>
<td><b>Organization</b></td>
<td>" . $_GET['organization'] . "</td>
</tr>
<td><b>email</b></td>
<td>" . $_GET['email'] . "</td>
</tr>
</table><p><b>Message:</b><p>" . $_GET['message'] . "</p>
</body>
</html>
";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <' . $_GET['email'] . '>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>SafeStart | Surgical Safety System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	

        <!-- SCRIPTS -->
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE]><html class="ie" lang="en"> <![endif]-->

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
        <script src="js/superfish.min.js" type="text/javascript"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/animate.js" type="text/javascript"></script>
        <script src="js/jquery.BlackAndWhite.js"></script>
        <script src="js/myscript.js" type="text/javascript"></script>
        <script>

            //PrettyPhoto
            jQuery(document).ready(function () {
                $("a[rel^='prettyPhoto']").prettyPhoto();
            });

            //BlackAndWhite
            $(window).load(function () {
                $('.client_img').BlackAndWhite({
                    hoverEffect: true, // default true
                    // set the path to BnWWorker.js for a superfast implementation
                    webworkerPath: false,
                    // for the images with a fluid width and height 
                    responsive: true,
                    // to invert the hover effect
                    invertHoverEffect: false,
                    // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                    intensity: 1,
                    speed: {//this property could also be just speed: value for both fadeIn and fadeOut
                        fadeIn: 300, // 200ms for fadeIn animations
                        fadeOut: 300 // 800ms for fadeOut animations
                    },
                    onImageReady: function (img) {
                        // this callback gets executed anytime an image is converted
                    }
                });
            });

        </script>
        <!-- Google Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-112760395-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->

    </head>
    <body>

        <!-- PRELOADER -->
        <img id="preloader" src="images/preloader.gif" alt="" />
        <!-- //PRELOADER -->
        <div class="preloader_hide">

            <!-- PAGE -->
            <div id="page">

                <!-- HEADER -->
                <header>

                    <!-- MENU BLOCK -->
                    <div class="menu_block">

                        <!-- CONTAINER -->
                        <div class="container clearfix">

                            <!-- LOGO -->
                            <div class="logo pull-left">
                                <a href="index.html" >
                                    <i class="fa fa-check-circle-o"></i>
                                    <h1 tile="Safetstart Medical Checklist Application">SAFESTART</h1>
                                </a>
                            </div><!-- //LOGO -->

                            <!-- SEARCH FORM -->
                            <!--					<div id="search-form" class="pull-right">
                                                                            <form method="get" action="#">
                                                                                    <input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
                                                                            </form>
                                                                    </div> SEARCH FORM -->

                            <!-- MENU -->
                            <div class="pull-right">
                                <div class="navmenu btns-nav-menu right">
                                    <ul>
                                        <li class="first active scroll_btn">
                                            <a href="#">Login</a>
                                        </li>
                                        <li class="scroll_btn btns-nav-menu-demo">
                                            <a href="contact.html">Request a Demo</a>
                                        </li>
                                    </ul>
                                </div>
                                <nav class="navmenu center">
                                    <ul>
                                        <li class="sub-menu">
                                            <a href="javascript:void(0);" >Who We Serve</a>
                                            <ul>
                                                <li><a href="hospitals.html" >Hospitals</a></li>
                                                <li><a href="pediatric_surgery.html" >Pediatric Surgery</a></li>
                                                <li><a href="surgery_centers.html" >Surgery Centers</a></li>
                                            </ul>
                                        </li>                                        <li class="scroll_btn"><a href="about.html" >About Us</a></li>
                                        <li class="sub-menu">
                                            <a href="javascript:void(0);" >Resources</a>
                                            <ul>
                                                <li><a href="videos.html" >Videos</a></li>
                                            </ul>
                                        </li> 
                                        <li class="scroll_btn"><a href="contact.html" >Contact</a></li>                                               
                                    </ul>
                                </nav>
                            </div><!-- //MENU -->
                        </div><!-- //MENU BLOCK -->
                    </div><!-- //CONTAINER -->
                </header><!-- //HEADER -->


                <!-- HOME -->
                <section id="home" class="padbot0">

                    <!-- TOP SLIDER -->
                    <div class="flexslider top_slider top_slider_contact">
                        <ul class="slides">
                            <li class="slide1">
                                <div class="flex_caption1">
                                    <h1 class="text-agin-center">
                                        <p class="title2 captionDelay4 FromTop">Contact Us</p>
                                    </h1>
                                </div>
                                <!--						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>-->
                            <li class="slide2">
                                <div class="flex_caption1">
                                    <h1 class="text-agin-center">
                                        <p class="title2 captionDelay4 FromTop">Contact Us</p>
                                    </h1>
                                </div>
                                <!--                                <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>-->
                            </li>
                            <li class="slide3">
                                <div class="flex_caption1">
                                    <h1 class="text-agin-center">
                                        <p class="title2 captionDelay4 FromTop">Contact Us</p>
                                    </h1>
                                </div>
                                <!--                                <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>-->

                                <!-- VIDEO BACKGROUND -->
                                <a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
                                <!-- //VIDEO BACKGROUND -->
                            </li>
                        </ul>
                    </div>
                    <!--                    <div id="carousel">
                                            <ul class="slides">
                                                <li><img src="images/slider/slide1_bg.jpg" alt="" /></li>
                                                <li><img src="images/slider/slide2_bg.jpg" alt="" /></li>
                                                <li><img src="images/slider/slide3_bg.jpg" alt="" /></li>
                                            </ul>
                                        </div> -->
                    <!-- //TOP SLIDER -->
                </section><!-- //HOME -->

                <!-- Contact Form -->
                <section id="team-members">
                    <div class="container">
                        <h1 class="team-title">Contact US</h1>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <form id="contact-form-face" class="clearfix" action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="first_name" placeholder="First Name*" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="last_name" value="" placeholder="Last Name*" required="required">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="organization" placeholder="Organization">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email Address*" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea required="required" name="message" placeholder="How may we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-align-left">
                                            <input class="contact_btn" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- //Contact Form -->
                <!-- COPYRIGHT -->
                <section class="darkbox copyright-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>&COPY; 2018 SAFESTART MEDICAL, INC. &nbsp;&nbsp;&nbsp; <a class="color_light_black" href="privacy_policy.html">Privacy Policy</a> &nbsp;&nbsp;&nbsp; <a class="color_light_black" href="terms_of_use.html">Terms of use</a></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- //COPYRIGHT -->
            </div><!-- //PAGE -->

            <!-- CONTACTS -->
            <section id="contacts">
            </section><!-- //CONTACTS -->

            <!-- FOOTER -->
            <footer>

                <!-- CONTAINER -->
                <div class="container">

                    <!-- ROW -->
                    <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

                        <div class="col-lg-3 col-md-3 col-sm-3 padbot30">
                            <h4 class="safestart-footertext">SAFESTART</h4>
                            <p>211 E. Ontario St. Suit 1195 Chicago, IL 60611</p>
                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-9 padbot30 foot_about_block">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h4>WHO WE SERVE</h4>
                                <p><a href="hospitals.html">Hospitals</a></p>
                                <p><a href="pediatric_surgery.html" >Pediatric Surgery</a></p>
                                <p><a href="surgery_centers.html">Surgery Centers</a></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h4>RESOURCES</h4>
                                <p><a href="#">News</a></p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h4>COMPANY</h4>
                                <p><a href="about.html">About Us</a></p>
                                <p><a href="contact.html">Contact</a></p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h4>FOLLOW US</h4>
                                <p><a href="https://twitter.com/safestartmed">Twitter</a></p>
                                <p><a href="https://web.facebook.com/SafeStart-Medical-769286666495337/">Facebook</a></p>
                                <p><a href="https://www.linkedin.com/company/10692304/">LinkedIn</a></p>   
                                <p style="margin-top: 10px;"><a href="https://play.google.com/store/apps/details?id=com.safestartmedical.safestart2"><img src="images/android-white.png"></a></p>
                                <p style="margin-top: 10px;"><a href="https://itunes.apple.com/us/app/safestart-2/id1216818735?mt=8"><img src="images/apple-white.png"></a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- //CONTAINER -->
            </footer><!-- //FOOTER -->


            <!-- MAP -->
            <div id="map">
                <a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
                <iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
            </div><!-- //MAP -->

        </div>
    </body>
</html>