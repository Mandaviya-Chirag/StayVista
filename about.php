<?php
    include("./includes/loader.php");
    include("./AdminPanel/connection.php");
?>

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StayVista - Your Next Space</title>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<!--  main   -->
<div id="main">
    <!--  header  -->
    <header class="main-header">
        <div class="container">
            <!--  header-top -->
            <div class="header-top  fl-wrap">
                <div class="header-top_contacts"><a href="#"><span>Call:</span> +918765445678</a><a href="#"><span>Find us:</span> INDIA </a></div>
                <div class="header-social">
                    <!-- <ul>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                    </ul> -->
                </div>
                <div class="booking-reviews">
                    <div class="br-counter">
                        <div class="ribbon"></div>
                        <span>4.9</span>
                    </div>
                    <a href="#" target="_blank" class="br_link">
                        <div class="star-rating" data-starrating="5"> </div>
                        <p>Our ratings on Booking.com</p>
                    </a>
                </div>
                <!-- <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div> -->
            </div>
            <!--  header-top end  -->
            <div class=" nav-holder-wrap init-fix-header  fl-wrap  ">
                <a href="index-2.html" class="logo-holder"><img src="./images/logo2.png" alt=""></a>
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="index.php">Home </a>
                                <!--second level -->
                                <!-- <ul>
                                            <li><a href="index-2.html">Style 1</a></li>
                                            <li><a href="index2.html">Style 2</a></li>
                                            <li><a href="index3.html">Style 3</a></li>
                                            <li><a href="onepage.html">One Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul> -->
                                <!--second level end-->
                            </li>
                            <li><a href="about.php" class="act-link">About</a></li>
                            <li>
                                <a href="rooms.php">Rooms</a>
                                <!--second level -->
                                <!-- <ul>
                                            <li><a href="rooms.php">Rooms 1</a></li>
                                            <li><a href="rooms2.html">Rooms 2</a></li>
                                            <li><a href="rooms3.html">Rooms 3</a></li>
                                            <li><a href="rooms4.html">Rooms 4</a></li>
                                            <li><a href="room-single.html">Room single</a></li>
                                            <li><a href="room-single2.html">Room single 2</a></li>
                                            <li><a href="room-single3.html">Room single 3</a></li>
                                        </ul> -->
                                <!--second level end-->
                            </li>
                            <li><a href="restaurant.php">Restaurant</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
                <!-- <div class="show-cart sc_btn   htact"><i class="fa-light fa-basket-shopping-simple"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Wishlist</span></div>
                <div class="show-share-btn showshare htact"><i class="fa-light fa-share-nodes"></i><span class="header-tooltip">Share</span></div> -->
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!-- share-wrapper -->
                <div class="share-wrapper isShare">
                    <div class="share-container fl-wrap"></div>
                </div>
                <!-- share-wrapper-end -->
                <!--wish-list-wrap-->
                <div class="wish-list-wrap novis_cart">
                    <div class="wish-list-close close_cart-init clwl_btn"><i class="fa-regular fa-xmark"></i></div>
                    <div class="wish-list-title">Your Wishlist </div>
                    <div class="wish-list-container">
                        <!--wish-list-item-->
                        <div class="wish-list-item fl-wrap">
                            <div class="wish-list-img"><a href="room-single.html"><img src="images/room/thumbnail/1.jpg" alt=""></a>
                            </div>
                            <div class="wish-list-descr">
                                <h4><a href="room-single.html">Garden Family Room</a></h4>
                                <div class="wish-list-price">$129/Night</div>
                                <a href="room-single.html" class="wshil_link">Book Now</a>
                                <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                            </div>
                        </div>
                        <!--wish-list-item end-->
                        <!--wish-list-item-->
                        <div class="wish-list-item fl-wrap">
                            <div class="wish-list-img"><a href="room-single.html"><img src="images/room/thumbnail/2.jpg" alt=""></a>
                            </div>
                            <div class="wish-list-descr">
                                <h4><a href="room-single.html">Premium Panorama Room</a></h4>
                                <div class="wish-list-price"> $230/Night</div>
                                <a href="room-single.html" class="wshil_link">Book Now</a>
                                <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                            </div>
                        </div>
                        <!--wish-list-item end-->
                    </div>
                    <div class="wish-list-wrap-btns">
                        <a href="#" class="wl_btn">Clear wishlist</a>
                    </div>
                </div>
                <!--wish-list-wrap-->
            </div>
        </div>
    </header>
    <div class="header-overlay close_cart-init"></div>
    <!--  header end  -->

            <!--  section  -->
            <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="images/bg/12.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>About The Hotel</h2>
                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                    </div>
                </div>
                <div class="hero-section-scroll">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <div class="dec-corner dc_lb"></div>
                <div class="dec-corner dc_rb"></div>
                <div class="dec-corner dc_rt"></div>
                <div class="dec-corner dc_lt"></div>
            </div>
            <!-- section end  -->

            <!--content-->
            <div class="content">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <a href="#">Home</a><a href="#">Pages</a><span>About Hotel</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title text-align_left" style="margin-top: 50px;">
                                    <h4>Enjoy your time in our Hotel</h4>
                                    <h2>About Our Hotel</h2>
                                </div>
                                <div class="text-block tb-sin">
                                    <p class="has-drop-cap">Welcome to Diamant Hotel, where luxury meets comfort. Nestled in a prime location, our hotel offers a unique blend of modern elegance and exceptional hospitality. Guests can enjoy beautifully appointed rooms with stunning views, top-notch amenities, and personalized service.
                                    </p>
                                    <p>At Diamant Hotel, we prioritize your experience with a range of facilities, including a gourmet restaurant, a relaxing spa, and a state-of-the-art fitness center. Whether you’re here for business or leisure, our attentive staff is committed to making your stay unforgettable.</p>
                                    <p>Discover the perfect retreat at Diamant Hotel, where every detail is designed with your comfort in mind.</p>
                                    <a href="contact.php" class="btn fl-btn ">Call For Reservation</a>
                                    <div class="dc_dec-item_left"><span></span></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-collge-wrap">
                                    <div class="main-iamge">
                                        <img src="images/all/10.jpg"  class="respimg"  alt="">
                                        <div class="video_link image-popup" id="html5-videos" data-html="#video1"><i class="fas fa-play"></i><span>Play Story Presentation  Video</span></div>
                                    </div>
                                    <div class="dc_dec-item_right"><span></span></div>
                                    <div class="about-img-hotifer dark-bg">
                                        <div class="about-img-hotifer-wrap">
                                            <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
                                            <h4>Mark Antony</h4>
                                            <h5>Diamnt CEO</h5>
                                        </div>
                                    </div>
                                    <div style="display:none;" id="video1" class="popup_video" data-videolink="video/1.mp4">
                                        <video class="lg-video-object lg-html5" controls preload="none">
                                            <source src="https://diamant.kwst.net/" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
                    </div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="content-dec"><span></span></div>
                </div>
                <!-- section end  -->

                <!-- section   -->
                 <div class="content-section  parallax-section hidden-section dark-bg" data-scrollax-parent="true">
                    <div class="bg par-elem"  data-bg="images/bg/14.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                    <div class="overlay overlay-bold"></div>
                    <div class="container">
                        <!-- inline-facts -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="254">154</div>
                                    </div>
                                </div>
                                <h6>New Visiters Every Week</h6>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="12168">12168</div>
                                    </div>
                                </div>
                                <h6>Happy Customers Every Year</h6>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="172">172</div>
                                    </div>
                                </div>
                                <h6>Won Awards</h6>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="732">732</div>
                                    </div>
                                </div>
                                <h6>Weekly Deliveries</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->                          
                    </div>
                    <div class="dec-corner dc_lb"></div>
                    <div class="dec-corner dc_rb"></div>
                    <div class="dec-corner dc_rt"></div>
                    <div class="dec-corner dc_lt"></div>
                </div>
                <!-- section end  -->

                <!-- section   -->
                <div class="content-section">
                    <div class="container">
                        <div class="section-title">
                            <h4>Enjoy your time in our Hotel with pleasure.</h4>
                            <h2>Meet Our Team</h2>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                        </div>
                        <div class="team-container">
                            <div class="dec-container">
                                <div class="text-block">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <!-- team-item -->
                                            <div class="team-box">
                                                <div class="team-photo">
                                                    <img src="images/team/1.jpg" alt="" class="respimg">
                                                    <div class="overlay"></div>
                                                    <div class="team-social">
                                                        <span class="ts_title">Follow</span>
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-info fl-wrap">
                                                    <h3> Kevin  Gray </h3>
                                                    <h4>General Hotel Manager</h4>
                                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- team-item  end-->
                                        <!-- team-item -->
                                        <div class="col-lg-4">
                                            <div class="team-box">
                                                <div class="team-photo">
                                                    <img src="images/team/2.jpg" alt="" class="respimg">
                                                    <div class="overlay"></div>
                                                    <div class="team-social">
                                                        <span class="ts_title">Follow</span>
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-info fl-wrap">
                                                    <h3> Austin Evon </h3>
                                                    <h4>Guest Service Department</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod   labore et dolore magna aliqua.  </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- team-item end  -->
                                        <!-- team-item -->
                                        <div class="col-lg-4">
                                            <div class="team-box">
                                                <div class="team-photo">
                                                    <img src="images/team/3.jpg" alt="" class="respimg">
                                                    <div class="overlay"></div>
                                                    <div class="team-social">
                                                        <span class="ts_title">Follow</span>
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-info fl-wrap">
                                                    <h3> Taylor Roberts </h3>
                                                    <h4>Reservations Hotel Manager</h4>
                                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit   ut aliquid commodi consequatur. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- team-item end  -->					
                                    </div>
                                </div>
                                <div class="dc_dec-item_left"><span></span></div>
                                <div class="dc_dec-item_right"><span></span></div>
                            </div>
                        </div>
                        <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
                        <div class="sc-dec2" style="right: -220px; top: -100px;"></div>
                    </div>
                    <div class="content-dec2 fs-wrapper"></div>
                </div>
                <!-- section end  -->

                <!-- section   -->
                <div class="content-section dark-bg parallax-section no-padding">
                    <div class="row">
                        <div class="st-gallery">
                            <div class="section-title">
                                <h4>Enjoy your time in our Hotel with pleasure.</h4>
                                <h2>Our Gallery</h2>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                            </div>
                            <div class="map-dec2"></div>
                        </div>
                        <div class="col-lg-3">		
                        </div>
                        <div class="col-lg-9">
                            <!-- fw-carousel-wrap -->
                            <div class="single-carousle-container2">
                                <div class="single-carousel-wrap2">
                                    <!-- fw-carousel  -->
                                    <div class="single-carousel2   fl-wrap    lightgallery" data-mousecontrol="0">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide hov_zoom">
                                                    <img src="images/room/1.jpg" alt="">
                                                    <a href="images/room/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="images/room/2.jpg" alt="">
                                                    <a href="images/room/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="images/room/3.jpg" alt="">
                                                    <a href="images/room/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="images/room/5.jpg" alt="">
                                                    <a href="images/room/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="images/room/4.jpg" alt="">
                                                    <a href="images/room/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fw-carousel end -->
                                    <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                                    <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                                    <div class="sc-controls fwc-contr fwc_pag">
                                        <div class="ss-slider-pagination"></div>
                                    </div>
                                </div>
                                <!-- fw-carousel-wrap end -->						
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end  -->

                <!-- section   -->
                <div class="content-section">
                    <div class="container  ">
                        <div class="section-title">
                            <h4>What said about us</h4>
                            <h2>Testimonials and Clients</h2>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                        </div>
                        <div class="sc-dec3" style="left: 40%; bottom: -200px;"></div>
                    </div>
                    <div class="testimonilas-carousel-wrap">
                        <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                        <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                        <div class="testimonilas-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Andy Dimasky</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Booking.com</a>
                                                </div>
                                                <span class="testi-number">01.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Jannet Dellov</h3>
                                                    <div class="star-rating" data-starrating="4"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via hotels.com</a>													
                                                </div>
                                                <span class="testi-number">02.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Centa Simpson</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Booking.com</a>													
                                                </div>
                                                <span class="testi-number">03.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/5.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Nicolo Svensky</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via hotels.com</a>													
                                                </div>
                                                <span class="testi-number">04.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                </div>
                            </div>
                        </div>
                        <div class="tcs-pagination tcs-pagination_init"></div>
                    </div>
                    <div class="content-dec2 fs-wrapper"></div>
                </div>
                <!-- section end  -->				
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->

<?php
    include 'includes/footer.php';
?>