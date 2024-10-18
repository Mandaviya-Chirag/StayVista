<?php
include("./includes/header.php");
?>
<?php
    include('connection.php');
?>

<body>
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.php" class="logo">
                    <img src="./assets/img/logo.png" alt="" class="navbar-brand" height="175px" width="200px" />
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="index.php" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <br>
                    <br>
                    <li class="nav-item active">
                        <a data-bs-toggle="collapse" href="#booking">
                            <i class="fas fa-layer-group"></i>
                            <p>Bookings</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="booking">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="all-bookings.php">
                                        <span class="sub-item">All Bookings</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="add-bookings.php">
                                        <span class="sub-item">Add Bookings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#rooms">
                            <i class="fas fa-th-list"></i>
                            <p>Rooms</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="rooms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="all-rooms.php">
                                        <span class="sub-item">All Rooms</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="add-rooms.php">
                                        <span class="sub-item">Add Rooms</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#users">
                            <i class="fas fa-pen-square"></i>
                            <p>Users</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="users">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="all-users.php">
                                        <span class="sub-item">All Users</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#tables">
                            <i class="fas fa-table"></i>
                            <p>Reviews</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="tables.php">
                                        <span class="sub-item">All Reviews</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index-2.html" class="logo">
                        <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>

            <?php
            // include("./includes/navbar.php");
            ?>





<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Booking</h3>
                        </div>
                    </div>
                </div>
                        <form action="" method="POST">
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="row gy-4">
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group"><label class="form-label"
                                                        for="first_name">First Name</label><input type="text"
                                                        class="form-control" name="first_name"
                                                        placeholder="First Name" required></div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group"><label class="form-label"
                                                        for="last_name">Last Name</label><input type="text"
                                                        class="form-control" name="last_name" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group"><label class="form-label" for="phone_number" name="phone_number">Phone Number</label>
                                                    <input type="number" class="form-control" name="phone_number" placeholder="Phone no">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group">
                                                    <label class="form-label">Select Room Type</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select js-select2" name="room_type">
                                                            <option value="default_option">Select Room Type</option>
                                                            <option value="single" >Single</option>
                                                            <option value="standard-double" >Standard Double</option>
                                                            <option value="twin" >Twin</option>
                                                            <option value="triple" >Triple</option>
                                                            <option value="quad" >Quad</option>
                                                            <option value="deluxe" >Deluxe</option>
                                                            <option value="executive/suite" >Executive/Suite</option>
                                                            <option value="presidential-suite" >Presidential Suite</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group"><label class="form-label"
                                                        for="no_of_rooms">No of Rooms</label><input type="text"
                                                        class="form-control" name="no_of_rooms" placeholder="No of Rooms">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group"><label class="form-label">Check In Date</label>
                                                    <div class="form-control-wrap">
                                                        <input type="date" class="form-control date-picker"
                                                            data-date-format="yyyy-mm-dd" name="check_in_date" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group">
                                                    <label class="form-label">Check Out Date</label>
                                                    <div class="form-control-wrap">
                                                        <input type="date" name="check_out_date" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="adults">Adults</label>
                                                        <input type="number" class="form-control" name="adults" placeholder="No of Adults"></div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                                <div class="form-group"><label class="form-label"
                                                        for="children">Children</label>
                                                        <input type="number" class="form-control" name="children" placeholder="No of Children"></div>
                                            </div>
                                            <!-- <div class="col-sm-12"> -->
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="submit">Add Booking</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
</body>
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

        if ($room_type === 'default_option') 
        {
            die("Please select a valid room type.");
        }

        echo $first_name;
        echo $last_name;
        echo $phone_number;
        echo $room_type;
        echo $no_of_rooms;
        echo $check_in_date;
        echo $check_out_date;
        echo $adults;
        echo $children;

            $sql = "INSERT INTO booking(first_name, last_name, phone_number, room_type, no_of_rooms, check_in_date, check_out_date, adults, children) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssissssii", $first_name, $last_name, $phone_number, $room_type, $no_of_rooms, $check_in_date, $check_out_date, $adults, $children);
            
            if ($stmt === false) {
                die("Prepare failed: " . $conn->error);
            }
            
            if (!$stmt->execute()) {
                die("Execution failed: " . $stmt->error);
            }
            
            $stmt->close();
            echo "<script>
                alert('Record Inserted Successfully');
                window.location.href='./all-bookings.php';
                </script>";
    }
       
?>
            <?php
            include("./includes/footer.php");
            ?>