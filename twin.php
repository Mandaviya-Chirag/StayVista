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
                <div class="bg par-elem " data-bg="images/bg/5.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Twin Room</h2>
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
                        <a href="#">Home</a><a href="#">Rooms</a><span>Room single</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section notp">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <!-- fw-carousel-wrap -->
                    <div class="single-carousle-container">
                        <div class="single-carousel-wrap ">
                            <!-- fw-carousel  -->
                            <div class="single-carousel   fl-wrap    lightgallery" data-mousecontrol="0">
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
                            <div class="sc-controls fwc_pag">
                                <div class="ss-slider-pagination"></div>
                            </div>
                        </div>
                        <!-- fw-carousel-wrap end -->			
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="dec-container">
                                    <div class="dc_dec-item_left"><span></span></div>
                                    <div class="text-block">
                                        <div class="text-block-title">
                                            <h4>About Accommodation</h4>
                                            <div class="sr-opt">
                                                <div class="sa-price">$129/Night</div>
                                                <div class="sa_towishlist">Add to Wishlist</div>
                                            </div>
                                        </div>
                                        <div class="room-card-details rcd-single">
                                            <ul>
                                                <li><i class="fa-light fa-crop"></i><span>44m2</span></li>
                                                <li><i class="fa-light fa-user"></i><span>4 Guest</span></li>
                                                <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li>
                                            </ul>
                                        </div>
                                        <div class="text-block-container">
                                            <p class="has-drop-cap">Qraesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim.   </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla facilisi nedeuter .</p>
                                            <p>Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis. Diam dui euismod eget donec. Pharetra leo sed felis urna. At a viverra urna elementum tristique ac integer pretium. Vel tincidunt sed mi nulla lectus sagittis.</p>
                                        </div>
                                        <div class="tbc-separator"></div>
                                        <div class="tbc_subtitle">Room Amenities  </div>
                                        <div class="meg_aminites">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-water-ladder"></i><span>Free Swimming Pool</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-baby-carriage"></i><span>Extra  Baby Bed</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-dryer"></i><span>Washing Machine</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-wifi"></i><span>Free  Wi Fi</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-air-conditioner"></i><span>Air Conditioned</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-refrigerator"></i><span>In-room Refrigerator</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tbc-separator"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tbc_subtitle">What  included in this suite?</div>
                                                <div class="text-block_list">
                                                    <ul>
                                                        <li>Upholstered seat beside the panoramic window</li>
                                                        <li>Bathroom with rain shower</li>
                                                        <li>Private balcony</li>
                                                        <li>Service station with   coffee machine  and tea</li>
                                                        <li>Upholstered seat beside the panoramic window</li>
                                                        <li>TV-UHD screen for watching</li>
                                                        <li>Writing desk with USB ports</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tbc_subtitle">Room Video Presentation</div>
                                                <div class="video-box">
                                                    <img src="images/room/2.jpg" class="respimg" alt="">
                                                    <div class="overlay"></div>
                                                    <div class="video-box-btn image-popup color-bg" id="html5-videos" data-html="#video1"><i class="fas fa-play"></i></div>
                                                </div>
                                                <div style="display:none;" id="video1" class="popup_video" data-videolink="video/1.mp4">
                                                    <video class="lg-video-object lg-html5" controls preload="none">
                                                        <source src="https://diamant.kwst.net/" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tbc-separator"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fix-bar-init">
                                    <div class="fw-search-wrap">
                                        <div class="fw-search-wrap-title">Book  This Suite</div>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                        <form  class="custom-form" action="" name="bookform" method="POST">
                                            <fieldset>
                                            <div class="input-wrap">
                                            <label for="first_name">First Name:</label>
                                            <input type="text" name="first_name" required>
                                        </div>
                                        <div class="input-wrap">
                                            <label for="last_name">Last Name:</label>
                                            <input type="text" name="last_name" required>
                                        </div>
                                        <div class="input-wrap">
                                            <label for="phone_number">Phone Number:</label>
                                            <input type="text" name="phone_number" required>
                                        </div>
                                        <div class="input-wrap">
                                            <label for="Room Type">Room Type:</label>
                                            <input type="text" name="room_type" value="Twin" required>
                                        </div>
                                        <div class="input-wrap">
                                            <label for="rooms">Number of Rooms:</label>
                                            <input type="text" name="no_of_rooms" min="1" required>
                                        </div>
                                        <div class="date-container input-wrap">
                                            <label for="check_in">Check-In Date:</label>
                                            <!-- <div class="form-control-wrap"> -->
                                            <input type="text" name="check_in_date" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                            <!-- </div> -->
                                        </div>
                                        <div class="date-container input-wrap">
                                            <label for="check_out">Check-Out Date:</label>
                                            <input type="date" name="check_out_date" required>
                                        </div>
                                        <div class="quantity input-wrap ">
                                            <div class="quantity_title">Adults: </div>
                                            <div class="quantity-item">
                                                <input type="button" value="-" class="minus">
                                                <input type="text" name="adults" title="Qty" class="qty color-bg" data-min="1" data-step="1" value="0">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                        <div class="quantity input-wrap ">
                                            <div class="quantity_title">Children: </div>
                                            <div class="quantity-item">
                                                <input type="button" value="-" class="minus">
                                                <input type="text" name="children" title="Qty" class="qty color-bg" data-min="1" data-step="1" value="1">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                        <button class="searchform-submit bs_btn" name="submit">Book Your Stay</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="limit-box"></div>
                        <!--post-related-->
                        <div class="post-related">
                            <div class="post-related_title">
                                <h6>Similar Rooms</h6>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                            </div>
                            <!-- post-related -->  
                            <div class=" row">
                                <!-- 1  --> 
                                <div class="item-related col-lg-4">
                                    <a href="room-single.html" class="item-related_img">
                                        <img src="images/room/3.jpg" class="respimg"   alt="">
                                        <div class="overlay"></div>
                                        <span>View Details</span>
                                    </a>
                                    <h3><a href="room-single.html">Premium Panorama Room</a></h3>
                                    <span class="post-date post-price">$230/Night</span>
                                    <div class="room-card-details">
                                        <ul>
                                            <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 1 end--> 
                                <!-- 2  --> 
                                <div class="item-related col-lg-4">
                                    <a href="room-single.html" class="item-related_img">
                                        <img src="images/room/4.jpg" class="respimg"   alt="">
                                        <div class="overlay"></div>
                                        <span>View Details</span>
                                    </a>
                                    <h3><a href="room-single.html">Beach Villa Room</a></h3>
                                    <span class="post-date post-price">$321/Night</span>
                                    <div class="room-card-details">
                                        <ul>
                                            <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 2 end-->  
                                <!-- 3  --> 
                                <div class="item-related col-lg-4">
                                    <a href="room-single.html" class="item-related_img">
                                        <img src="images/room/5.jpg" class="respimg"   alt="">
                                        <div class="overlay"></div>
                                        <span>View Details</span>
                                    </a>
                                    <h3><a href="room-single.html">Superior Panorama Room</a></h3>
                                    <span class="post-date post-price">$143/Night</span>
                                    <div class="room-card-details">
                                        <ul>
                                            <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 3 end-->                                        
                            </div>
                        </div>
                        <!-- post-related  end--> 						
                    </div>
                </div>
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->

            <?php

                if (isset($_POST['submit'])) 
                {
                    $first_name =$_POST['first_name'];
                    $last_name =$_POST['last_name'];
                    $phone_number = $_POST['phone_number'];
                    $room_type = $_POST['room_type'];
                    $no_of_rooms = $_POST['no_of_rooms'];
                    $check_in_date = $_POST['check_in_date'];
                    $check_out_date = $_POST['check_out_date'];
                    $adults = $_POST['adults'];
                    $children = $_POST['children'];

                        $sql = "INSERT INTO booking(first_name, last_name, phone_number, room_type, no_of_rooms, check_in_date, check_out_date, adults, children) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ssisissii", $first_name, $last_name, $phone_number, $room_type, $no_of_rooms, $check_in_date, $check_out_date, $adults, $children);
                        
                        if ($stmt === false) {
                            die("Prepare failed: " . $conn->error);
                        }
                        
                        if (!$stmt->execute()) {
                            die("Execution failed: " . $stmt->error);
                        }
                        
                        $stmt->close();
                        echo "<script>
                            alert('Thank you for booking in Diament');
                            window.location.href='./rooms.php';
                            </script>";
                }
                   
                
                ?>


    <?php
        include("./includes/footer.php");
    ?>