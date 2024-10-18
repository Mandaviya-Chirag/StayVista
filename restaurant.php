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
                <div class="header-top_contacts"><a href="#"><span>Call:</span> +918765445678</a><a href="#"><span>Find us:</span> INDIA</a></div>
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
                            <li><a href="about.php">About</a></li>
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
                            <li><a href="restaurant.php" class="act-link">Restaurant</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
                <?php if (!isset($_SESSION['username'])) { ?>
                    <div class="serach-header-btn_wrap">
                        <a href="AdminPanel/log-in.php" class="serach-header-btn"> <span>SignIn</span></a>
                    </div>
                <?php } ?>
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
                <div class="bg par-elem " data-bg="images/bg/8.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Our Restaurant</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Restaurant</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->

                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title text-align_left" style="margin-top: 50px;">
                                    <h4>Special selection</h4>
                                    <h2>About Our Restaurant</h2>
                                </div>
                                <div class="text-block tb-sin">
                                    <div class="dc_dec-item_left"><span></span></div>
                                    <p class="has-drop-cap">Welcome to our restaurant, where flavor meets wellness. We offer a diverse menu of healthy dishes made from fresh, locally sourced ingredients. With a warm and inviting atmosphere, it’s the perfect spot for casual dining or special occasions. Our dedicated staff ensures exceptional service as you enjoy nourishing meals that delight the palate and support your well-being. 
                                    </p>
                                    <!-- <p>Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis.    Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis.   </p> -->
                                    <a href="#secmenu" class="btn fl-btn custom-scroll-link">Explore Our Menu</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-collge-wrap">
                                    <!-- blog media -->
                                    <div class="blog-media">
                                        <div class="single-slider-wrap">
                                            <div class="single-slider">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper lightgallery">
                                                        <div class="swiper-slide hov_zoom"><img src="images/all/13.jpg" alt=""><a href="images/all/13.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom"><img src="images/all/8.jpg" alt=""><a href="images/all/8.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom"><img src="images/all/9.jpg" alt=""><a href="images/all/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                                            <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                                            <div class="sc-controls fwc_pag">
                                                <div class="ss-slider-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog media end -->	
                                    <div class="dc_dec-item_right"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end  -->

                <!-- section   -->
                <div class="content-section no-padding dark-bg  hidden-section">
                    <div class="bg-ser fs-wrapper"></div>
                    <div class="overlay"></div>
                    <!-- fw-aminit-wrap   -->
                    <div class="fw-aminit-wrap">
                        <!-- fw-aminit-item  -->
                        <div class="fw-aminit-item full-height" data-bgtab="images/bg/9.jpg">
                            <div class="fw-aminit-item-container">
                                <h5>Gourmet Breakfast</h5>
                                <h3>Breakfast Buffet</h3>
                                <h6>Location : Lobby Level</h6>
                                <i class="fa-thin fa-croissant"></i>
                            </div>
                            <div class="aminit-work-time">
                                <span>Monday - Sunday</span>
                                <strong>06:00 am - 22:30 pm</strong>
                            </div>
                        </div>
                        <!-- fw-aminit-item   -->
                        <!-- fw-aminit-item  -->
                        <div class="fw-aminit-item full-height" data-bgtab="images/bg/10.jpg">
                            <div class="fw-aminit-item-container">
                                <h5>Lunch and Dinner</h5>
                                <h3>The Restaurant</h3>
                                <h6>Location :  Location: The 2nd Floor East Wing</h6>
                                <i class="fa-thin fa-salad"></i>
                            </div>
                            <div class="aminit-work-time">
                                <span>Monday - Sunday</span>
                                <strong>06:00 am - 22:30 pm</strong>
                            </div>
                        </div>
                        <!-- fw-aminit-item   -->					
                        <!-- fw-aminit-item  -->
                        <div class="fw-aminit-item full-height" data-bgtab="images/bg/11.jpg">
                            <div class="fw-aminit-item-container">
                                <h5>Bar, Lunch, Dinner</h5>
                                <h3>Japanese Sushi Bar</h3>
                                <h6>Location : Terrace</h6>
                                <i class="fa-thin fa-sushi"></i>
                            </div>
                            <div class="aminit-work-time">
                                <span>Monday - Sunday</span>
                                <strong>06:00 am - 22:30 pm</strong>
                            </div>
                        </div>
                        <!-- fw-aminit-item   -->							
                    </div>
                    <!-- fw-aminit-wrap   -->
                </div>
                <!-- section end  -->	

                <!-- section   -->
                <div class="content-section" id="secmenu">
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container  ">
                        <div class="section-title">
                            <h4>Special selection</h4>
                            <h2>Discover Our Menu</h2>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                        </div>
                        <div class="tabs-act">
                            <div class="hero-menu_header">
                                <ul class="tabs-menu">
                                    <li class="current"><a href="#tab-1"> Starters</a></li>
                                    <li><a href="#tab-2"> North Indian</a></li>
                                    <li><a href="#tab-3"> South Indian</a></li>
                                    <li><a href="#tab-4"> Chinese</a></li>
                                    <li><a href="#tab-5"> Sizzlers</a></li>
                                    <li><a href="#tab-6"> Desserts</a></li>
                                    <li><a href="#tab-7"> Drinks</a></li>
                                </ul>
                            </div>
                            <!--hero-menu-wrap-->
                            <div class="hero-menu-wrap dec-container anim_tabs">
                                <div class="dc_dec-item_left"><span></span></div>
                                <div class="dc_dec-item_right"><span></span></div>
                                <div class="tabs-container">
                                    <div class="tab">
                                        <!--tab -->
                                        <div id="tab-1" class="tab-content first-tab">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/1.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/1.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6>Dragon Potato</h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/2.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/2.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Veg. Crispy </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/3.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/3.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Manchurian Dry </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/4.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/4.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Paneer Tikka Dry </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/5.jpeg" class="hero-menu-item-img image-popup"><img src="images/menu/5.jpeg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Hara Bhara Kabab </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/6.jpeg" class="hero-menu-item-img image-popup"><img src="images/menu/6.jpeg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Cheese Corn Balls </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-2" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/7.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/7.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Paratha </h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/8.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/8.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Naan <span class="hot-desc">-10%</span></h6>
                                                    <span class="hero-menu-item-price">$104</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/9.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/9.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Roti </h6>
                                                    <span class="hero-menu-item-price">$27</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/10.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/10.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Veg Sabji </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/11.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/11.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Paneer Tikka Masala </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/12.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/12.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Cheese Butter Masala </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/13.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/13.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Malai Kofta </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->																																		
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-3" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/14.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/14.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Butter Dhosa <span class="hot-desc">-40%</span></h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Our tender, juicy filet paired with a steamed lobster tail.  </p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/15.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/15.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Uttapam </h6>
                                                    <span class="hero-menu-item-price">$37</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/16.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/16.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Idli <span class="hot-desc">-25%</span></h6>
                                                    <span class="hero-menu-item-price">$54</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/17.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/17.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Menduwada </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-4" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/18.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/18.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Veg Hakka Noodles <span class="hot-desc">-40%</span></h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Our tender, juicy filet paired with a steamed lobster tail.  </p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/19.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/19.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Triple Fried Rice </h6>
                                                    <span class="hero-menu-item-price">$37</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/20.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/20.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Manchurian Rice <span class="hot-desc">-25%</span></h6>
                                                    <span class="hero-menu-item-price">$54</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/21.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/21.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Chinese Bhel </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/22.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/22.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Paneer Chilli Dry </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/23.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/23.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Spicy Hunan Potato </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-5" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/24.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/24.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Veg. Sizzler </h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Our tender, juicy filet paired with a steamed lobster tail.  </p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/25.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/25.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Mexican Sizzler </h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/26.webp" class="hero-menu-item-img image-popup"><img src="images/menu/26.webp" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Italian Sizzler </h6>
                                                    <span class="hero-menu-item-price">$107</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/27.webp" class="hero-menu-item-img image-popup"><img src="images/menu/27.webp" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Chinese Sizzler <span class="hot-desc">-50%</span></h6>
                                                    <span class="hero-menu-item-price">$19</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/28.webp" class="hero-menu-item-img image-popup"><img src="images/menu/28.webp" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Rodeo Sizzler <span class="hot-desc">-50%</span></h6>
                                                    <span class="hero-menu-item-price">$19</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/29.webp" class="hero-menu-item-img image-popup"><img src="images/menu/29.webp" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Paneer Shashlik Sizzler <span class="hot-desc">-50%</span></h6>
                                                    <span class="hero-menu-item-price">$19</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-6" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/30.avif" class="hero-menu-item-img image-popup"><img src="images/menu/30.avif" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Gulab Jamun </h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/31.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/31.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Chocolate Fondue <span class="hot-desc">-10%</span></h6>
                                                    <span class="hero-menu-item-price">$104</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/32.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/32.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Sizzling Brownie </h6>
                                                    <span class="hero-menu-item-price">$27</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/33.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/33.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Tiramisu Cheese Cake </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/34.avif" class="hero-menu-item-img image-popup"><img src="images/menu/34.avif" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Pancakes </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/35.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/35.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Kheer </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/36.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/36.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Choco Lava </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->																																		
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-7" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/37.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/37.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Pina Colada </h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/38.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/38.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Virgin Mojito <span class="hot-desc">-10%</span></h6>
                                                    <span class="hero-menu-item-price">$104</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/39.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/39.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Green Apple Mojito </h6>
                                                    <span class="hero-menu-item-price">$27</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/40.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/40.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6>BLue Lagoon Mojito </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/41.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/41.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Chocolate Thickshake </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="images/menu/42.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/42.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Soft Drinks </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->																																			
                                        </div>
                                        <!--tab end-->						
                                    </div>
                                </div>
                            </div>
                            <!--hero-menu-wrap end-->						
                        </div>
                    </div>
                </div>
                <!-- section end  -->	

                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->
            
    
<?php
    include 'includes/footer.php';
?>