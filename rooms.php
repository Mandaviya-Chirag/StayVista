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
                                <a href="rooms.php" class="act-link">Rooms</a>
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
                            <li><a href="restaurant.php" >Restaurant</a></li>
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
                <div class="bg par-elem " data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Rooms And Suites</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Rooms And Suites</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="section-dec"></div>
                    <!-- <div class="container small-container ">
                        <div class="fw-search-wrap">
                            <form  class="custom-form" action="https://diamant.kwst.net/" name="searchform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="date-container input-wrap">
                                                <label>Date:</label>
                                                <input type="text" id="res_date"     name="resdate"   value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="quantity">
                                                <div class="quantity_title">Rooms: </div>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="quantity">
                                                <div class="quantity_title">Guests: </div>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchform-submit" id="searchform-submit">Search Room</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div> -->
                    <div class="container">
                        <div class="dec-container">
                            <div class="dc_dec-item_left"><span></span></div>
                            <div class="dc_dec-item_right"><span></span></div>
                            <div class="text-block">
                                <!-- gallery start -->
                                <div class="gallery-items grid-big-pad  lightgallery  ">
                                    <!-- gallery-item-->
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="single.php">Single </a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Single Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$129/Night</span>
                                            </div>
                                            <a href="single.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="standarddouble.php">Standard Double</a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Single Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$129/Night</span>
                                            </div>
                                            <a href="standarddouble.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/1.jpg"    alt="">
                                            <a href="images/room/1.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="twin.php">Twin </a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Single Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$129/Night</span>
                                            </div>
                                            <a href="twin.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item seafood">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/2.jpg"    alt="">
                                            <a href="images/room/2.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="triple.php">Triple </a></h3>
                                            <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>4 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$230/Night</span>
                                            </div>
                                            <a href="triple.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/3.jpg"    alt="">
                                            <a href="images/room/3.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="quad.php">Quad </a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$321/Night</span>
                                            </div>
                                            <a href="quad.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item seafood">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/4.jpg"    alt="">
                                            <a href="images/room/4.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="deluxe.php">Deluxe </a></h3>
                                            <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$84/Night</span>
                                            </div>
                                            <a href="deluxe.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->					
                                    <!-- gallery-item-->
                                    <div class="gallery-item desserts">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/5.jpg"    alt="">
                                            <a href="images/room/5.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="suite.php">Executive/Suite </a>  </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.  </p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$543/Night</span>
                                            </div>
                                            <a href="suite.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item seafood">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/room/6.jpg"    alt="">
                                            <a href="images/room/6.jpg" class="box-media-zoom   single-popup-image"><i class="fa-light fa-magnifying-glass"></i></a>
                                            <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                        </div>
                                        <div class="grid-item-details">
                                            <h3><a href="presidential.php">Presidential Suite</a></h3>
                                            <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                                            <div class="room-card-details">
                                                <ul>
                                                    <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                    <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                    <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                </ul>
                                            </div>
                                            <div class="grid-item_price">
                                                <span>$1030/Night</span>
                                            </div>
                                            <a href="presidential.php" class="gid_link"><span>View Details</span> <i class="fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                    <!-- gallery-item end-->										
                                </div>
                            </div>
                        </div>
                        <!-- pagination-->
                        <div class="pagination">
                            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                            <a href="#" >1</a>
                            <a href="#" class="current-page">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                        </div>
                        <!-- pagination end-->	
                    </div>
                </div>
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->

<?php
    include("./includes/footer.php");
?>