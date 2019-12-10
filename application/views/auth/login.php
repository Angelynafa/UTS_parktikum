<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>SewaFutsal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?= base_url('assets/');?>favicon.ico">

        <!--Google Font link-->
        <link href="<?= base_url('assets/assets');?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="<?= base_url('assets/assets');?>https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="<?= base_url('assets/assets');?>https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
        <link href="<?= base_url('assets/assets');?>https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/slick.css"> 
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/slick-theme.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/animate.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/iconfont.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/bootsnav.css">



        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?= base_url('assets/');?>assets/css/responsive.css" />

        <script src="<?= base_url('assets/');?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <h3 style="color : white">SewaLapang</h3>
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="#features">About</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="<?= base_url('login/logout');?>">Logout</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h1 class="text-yellow">Hayu futsal</h1>
                                            <h3 class="text-white text-uppercase">One thing taht you learn in sports : </h3>
                                            <h3 class="text-white text-uppercase"> " You don't give up and you fight to the finish "</h3>
                                        </div>
                                    </div><!-- End off slid item -->

                                </div>
                            </div>

                        </div>


                        <a class="mouse-scroll" href="#about"> 
                            <span class="mouse">
                                <span class="mouse-movement"></span>
                            </span>
                            <span class="mouse-message fadeIn">Explore</span> <br />
                            <!--<i class="fa fa-angle-down m-top-10 fadeIn mouse-message"></i>--> 
                        </a>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--About Section-->
            <section id="about" class="about bg-yellow roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_about text-center">
                                <h1 class="text-black">Let's Join us!</h1>
                                

                                <a href=" <?= base_url('auth/jadwal_booking');?>  " class="btn btn-primary m-top-100">JADWAL SEWA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!--Featured Section-->
            <section id="features" class="features bg-white">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">

                            <div class="col-md-5">
                                <div class="features_item">
                                    <div class="head_title">
                                        <h2 class="text-uppercase">Our <strong>Featured</strong></h2>
                                    </div>
                                    <div class="featured_content">
                                        <p> </p>

                                        <a href="" class="btn btn-default m-top-40">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                                <div class="features_item2_area">
                                    <div class="features_item2 text-center">
                                        <div class="divider_horizontal"></div>
                                        <div class="divider_vertical"></div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text">
                                                <img src="assets/images/featured1.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">BOKING MUDAH</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text">
                                                <img src="assets/images/featured2.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">BANYAK PROMO</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text m-top-50">
                                                <img src="assets/images/featured3.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">MATCH LOBBY</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="features_item_text m-top-50">
                                                <img src="assets/images/featured4.jpg" alt="" class="img-circle" />
                                                <p class="m-top-20">MUDAH DIGUNAKAN </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->


            <!--Business Section-->
            <section id="service" class="service bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6">
                                <div class="service_slid">
                                    <div class="slid_shap bg-yellow"></div>
                                    <div class="service_slid_item text-center">
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-tools text-black"></span>
                                            <h5 class="text-black m-top-20">Booking Lapang</h5>
                                        </div>
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-sports-2 text-black"></span>
                                            <h5 class="text-black m-top-20">Let's join with us!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="service_item sm-m-top-50">
                                    <div class="head_title">
                                        <h2 class="text-uppercase">Our <strong>Service</strong></h2>
                                    </div>
                                    <div class="service_content">
                                        <p> </p>

                                        <a href="" class="btn btn-default m-top-40">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->


          


            <!--Choose section-->
            <section id="choose" class="choose bg-grey roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_choose">
                            <div class="col-md-6">
                                <div class="choose_mac">
                                    <div class="choose_slide">
                                        <div class="choose_item">
                                            <img src="assets/images/choose-img1.png" alt="" />
                                        </div>
                                        <div class="choose_item">
                                            <img src="assets/images/choose-img1.png" alt="" />
                                        </div>
                                        <div class="choose_item">
                                            <img src="assets/images/choose-img1.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-6 -->

                            <div class="col-md-5 col-md-offset-1">
                                <div class="choose_content sm-m-top-40">
                                    <div class="head_title">
                                        <h2 class="text-uppercase">Why <strong>Choose Us</strong></h2>
                                    </div>
                                    <div class="choose_item_text fix">
                                        <h6><i class="fa fa-check-square-o"></i> Cheap</h6>
                                        <p> </p>
                                    </div>
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> Comfortable</h6>
                                        <p> </p>
                                    </div>
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> high quality</h6>
                                        <p></p>
                                    </div>
                                    <div class="choose_item_text fix m-top-20">
                                        <h6><i class="fa fa-check-square-o"></i> Clean</h6>
                                        <p> </p>
                                    </div>
                                </div>
                            </div><!-- End off col-md-6 -->
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off choose section -->


            <!--Portfolio Section-->



            <section id="portfolio" class="portfolio margin-top-120">

                <!-- Portfolio container-->
                <div class="container">
                    <div class="row">
                        <div class="main-portfolio roomy-80">

                            <div class="col-md-4">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Our Service</h2>
                                </div>
                            </div>



                            <div style="clear: both;"></div>

                            <div class="grid text-center">

                                <div class="grid-item transition metal ium">
                                    <img alt="" src="<?= base_url('assets/');?>assets/images/gbr-1.jpg">
                                    <div class="grid_hover_area text-center">
                                        <div class="girid_hover_text m-top-50">
                                            <h4 class="text-white">Rp.200.00,00/our</h4>
                                            <p class="text-white"> Rp.200.000,00/our</p>
                                            <a href="<?= base_url('auth/main');?>" class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->

                                <div class="grid-item metalloid " >
                                    <img alt="" src="<?= base_url('assets/');?>assets/images/gbr2.jpg">
                                    <div class="grid_hover_area text-center">
                                        <div class="girid_hover_text m-top-50">
                                            <h4 class="text-white">250.000,00/Our</h4>
                                            <p class="text-white">Rp.250.000,00/Our</p>
                                            <a href="<?= base_url('auth/main');?>" class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->

                                <div class="grid-item post-transition metal numberGreaterThan50">
                                    <img alt="" src="<?= base_url('assets/');?>assets/images/gbr3.jpg">
                                    <div class="grid_hover_area text-center">
                                        <div class="girid_hover_text m-top-50">
                                            <h4 class="text-white">Rp.200.000,00/Our</h4>
                                            <p class="text-white">Rp.200.000,00/Our</p>
                                            <a href="<?= base_url('auth/main');?>" class="btn btn-primary"> Book Now</a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->

                                <div class="grid-item post-transition metal ium" >
                                    <img alt="" src="<?= base_url('assets/');?>assets/images/gbr4.jpg">
                                    <div class="grid_hover_area text-center">
                                        <div class="girid_hover_text m-top-50">
                                            <h4 class="text-white">Rp.250.000,00/Our</h4>
                                            <p class="text-white">Rp.250.000,00</p>
                                            <a href="<?= base_url('auth/main');?>" class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->
<!-- 
                                <div class="grid-item metal ar" >
                                    <img alt="" src="<?= base_url('assets/');?>assets/images/gbr5.jpg">
                                    <div class="grid_hover_area text-center">
                                        <div class="girid_hover_text m-top-50">
                                            <h4 class="text-white">Rp.150.00,00/Our</h4>
                                            <p class="text-white">Rp.150.00,00/Our</p>
                                            <a href="<?= base_url('assets/');?>assets/images/gbr5.jpg" class="btn btn-primary popup-img">Book Now</a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->
 -->
                                <!-- <div class="grid-item alkali ar" >
                                    <img alt="" src="<?= base_url('assets/');?>assets/images/gbr6.jpg">
                                    <div class="grid_hover_area text-center">
                                        <div class="girid_hover_text m-top-50">
                                            <h4 class="text-white">Rp.155.000,00/Our</h4>
                                            <p class="text-white">Rp.155.000,00/Our</p>
                                            <a href="<?= base_url('assets/');?>assets/images/gbr6.jpg" class="btn btn-primary popup-img">Book Now</a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->
 -->
                            </div>



                            <div style="clear: both;"></div>


                        </div>
                    </div>
                </div><!-- Portfolio container end -->
            </section><!-- End off portfolio section -->



            


            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-30">Sport is an activity where humans can maintain theri body with movemnets to from a healty lifestyle and futsal is one og the sports men and women
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                Jl.A.H Nasution No.105, Cipadung Kec.Cibiru, Kota Bandung, Jawa Barat, 40614</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>+1 2345 6789</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>hayufutsal@gmail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="<?= base_url('assets/');?>assets/images/EWR.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>smk Teknik Komputer</p>
                                            <a href="">21<sup>th</sup> July 2019</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="<?= base_url('assets/');?>assets/images/\WRQ.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>UIN Bandung</p>
                                            <a href="">21<sup>th</sup> July 2019</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="<?= base_url('assets/');?>assets/images/DFS.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>UNPAD</p>
                                            <a href="">21<sup>th</sup> July 2019</a>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Booking lapang</a></li>
                                        <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Booking lapang</a></li>
                                        <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Booking lapang</a></li>
                                        <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Booking Lapang</a></li>
                                        <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Booking lapang</a></li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Newsletter</h5>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter you Email">
                                            <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>

                                    </form>
                                    <div class="widget_brand m-top-40">
                                        <a href="<?= base_url('assets/');?>" class="text-uppercase">HayuFutsal</a>
                                        <p>Olahraga sekarang bukan cuma wacana</p>




                                    </div>
                                    <ul class="list-inline m-top-20">
                                        <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            PraktikumPAW
                            2019.
                        </p>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="<?= base_url('assets/');?>assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?= base_url('assets/');?>assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?= base_url('assets/');?>assets/js/jquery.magnific-popup.js"></script>
        <!--<script src="assets/js/jquery.easypiechart.min.js"></script>-->
        <script src="<?= base_url('assets/');?>assets/js/jquery.easing.1.3.js"></script>
        <!--<script src="assets/js/slick.js"></script>-->
        <script src="<?= base_url('assets/');?>assets/js/slick.min.js"></script>
        <script src="<?= base_url('assets/');?>assets/js/js.isotope.js"></script>
        <script src="<?= base_url('assets/');?>assets/js/jquery.collapse.js"></script>
        <script src="<?= base_url('assets/');?>assets/js/bootsnav.js"></script>

        <script src="<?= base_url('assets/');?>https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <script src="<?= base_url('assets/');?>assets/js/plugins.js"></script>
        <script src="<?= base_url('assets/');?>assets/js/main.js"></script>



    </body>
</html>
