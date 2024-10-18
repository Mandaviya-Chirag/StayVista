<?php
include('./includes/header.php');
include('connection.php');
?>

<html>

<body>

    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.php" class="logo">
                    <img src="./assets/img/2.png" alt="" class="navbar-brand" height="175px" width="200px" />
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
                                <li class="active">
                                    <a href="all-bookings.php">
                                        <span class="sub-item">All Bookings</span>
                                    </a>
                                </li>
                                <li>
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



            <div class="nk-content ">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Update Booking</h3>
                                    </div>
                                </div>
                                <br><br>
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
                                                                <option value="single">Single</option>
                                                                <option value="standard-double">Standard Double</option>
                                                                <option value="twin">Twin</option>
                                                                <option value="triple">Triple</option>
                                                                <option value="quad">Quad</option>
                                                                <option value="deluxe">Deluxe</option>
                                                                <option value="executive/suite">Executive/Suite</option>
                                                                <option value="presidential-suite">Presidential Suite</option>
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
                                                        <input type="number" class="form-control" name="adults" placeholder="No of Adults">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group"><label class="form-label"
                                                            for="children">Children</label>
                                                        <input type="number" class="form-control" name="children" placeholder="No of Children">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" name="edit_btn">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>

<?php
if (isset($_POST['edit_btn'])) {
    $booking_id = $row['booking_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $phone_number = $row['phone_number'];
    $room_type = $row['room_type'];
    $no_of_rooms = $row['no_of_rooms'];
    $check_in_date = $row['check_in_date'];
    $check_out_date = $row['check_out_date'];
    $adults = $row['adults'];
    $children = $row['children'];


    $query = "UPDATE booking SET first_name='$first_name', last_name='$last_name', phone_number='$phone_number', room_type='$room_type', no_of_rooms='$no_of_rooms', check_in_date='$check_in_date', check_out_date='$check_out_date', adults='$adults', children='$children' WHERE booking_id='$booking_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);

    if ($result) {
        echo "<script>alert('Booking Updated Successfully')</script>";
        header('location: all-bookings.php');
    } else {
        echo "<script>alert('Booking Update Failed')</script>";
        header('location: all-bookings.php');
    }
}
?>