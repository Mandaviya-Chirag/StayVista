<?php
    include("./includes/loader.php");
?>
<?php
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
                            <li><a href="restaurant.php" >Restaurant</a></li>
                            <li><a href="contact.php" class="act-link">Contact</a></li>
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
                <div class="bg par-elem " data-bg="images/bg/7.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Our Contacts</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Contacts</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->

                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <!-- contacts-cards-wrap  -->	
                        <div class="contacts-cards-wrap">
                            <div class="dec-container">
                                <div class="text-block">
                                    <div class="row">
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-location-dot"></i>
                                                <span>Our Location</span>
                                                <p>Diamant Hotel, Opposite Mangal Gopal Tower, Near K. J. Patel College, Jamnagar, Gujarat 361008, India.
                                                </p>
                                                <a href="#">Jamnagar,Gujarat 361008,India.</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->	
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-phone-rotary"></i>
                                                <span>Our   Phone</span>
                                                <p>To enhance your experience, we’ve ensured all fields are user-friendly and clearly labeled. We look forward to connecting with you!</p>
                                                <a href="#"> +91 9909908909</a>
                                                <a href="#"> +91 9845656789</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-mailbox"></i>
                                                <span>Our Mail</span>
                                                <p>Our goal is to respond promptly to your questions, feedback, or concerns, making sure you feel heard and supported. </p>
                                                <a href="#">diament@gmail.com</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- contacts-cards-wrap end   -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dec-container">
                                    <div class="text-block">
                                        <div class="text-block ">
                                            <div class="tbc_subtitle">Your Reviews</div>
                                            <div class="tbc-separator"></div>
                                            <div class="contactform-wrap">
                                                <form  class="comment-form" action="" name="contactform" id="contactform" method="POST">
                                                    <fieldset>
                                                        <div id="message"></div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="name" placeholder="Your Name *" >
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text"  name="email" id="email" placeholder="Email Address *">
                                                            </div>
                                                        </div>
                                                        <textarea name="reviews" cols="40" rows="3" placeholder="Your Review:"></textarea>
                                                        <button class="commentssubmit" type="submit" name="submit">Send Review</button>
                                                    </fieldset>
                                                </form>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                        <div class="dc_dec-item_left"><span></span></div>
                        <div class="dc_dec-item_right"><span></span></div>
                    </div>
                </div>
                <!-- section end  -->

                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->

            <?php
                if (isset($_POST['submit'])) 
                {
                    $name =$_POST['name'];
                    $email = $_POST['email'];
                    $reviews = $_POST['review'];

                        $sql = "INSERT INTO reviews(name, email, review) VALUES (?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sss", $name,  $email, $reviews);
                        
                        if ($stmt === false) {
                            die("Prepare failed: " . $conn->error);
                        }
                        
                        if (!$stmt->execute()) {
                            die("Execution failed: " . $stmt->error);
                        }
                        
                        $stmt->close();
                        echo "<script>
                            alert('Thank you for choosing Diament');
                            window.location.href='contact.php';
                            </script>";
                }
                   
                ?>

        <!-- <script  src="https://maps.google.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo"></script>    	 -->



<?php
    include 'includes/footer.php';
?>