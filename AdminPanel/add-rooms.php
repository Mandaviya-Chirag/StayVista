<?php
include("./includes/header.php");
?>

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
                    <li class="nav-item">
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
                                <li>
                                    <a href="add-bookings.php">
                                        <span class="sub-item">Add Bookings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
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
                                <li class="active">
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
                                        <h3 class="nk-block-title page-title">Add Rooms</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="  " method="POST">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row gy-4">
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="room_number">Room Number</label>
                                                        <input type="text" class="form-control" name="room_number" placeholder="Room Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Select Room Type</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" name="room_type">
                                                                <option value="default_option">Select Room Type</option>
                                                                <option value="single">Single</option>
                                                                <option value="standard-double">Standard_Double</option>
                                                                <option value="twin ">Twin</option>
                                                                <option value="triple">Triple</option>
                                                                <option value="quad">Quad</option>
                                                                <option value="deluxe">Deluxe</option>
                                                                <option value="executive/suite">Executive/Suite</option>
                                                                <option value="presidential-suite">Presidential_Suite</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="description">Description </label>
                                                        <input type="text" class="form-control" name="description" placeholder="Description">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="max_occupancy">Max Occupancy</label>
                                                        <input type="text" class="form-control" name="max_occupancy" placeholder="Max Occupancy">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Availability Status</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" name="availability_status">
                                                                <option value="default_option">Select Availablility Status</option>
                                                                <option value="Available">Available</option>
                                                                <option value="Under_Maintenance">Under Maintenance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group"><button type="submit"
                                                        class="btn btn-primary" name="submit">Add Room</button></div>
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

        <?php
        require_once('connection.php');

            if(isset($_POST['submit']))
            {
                $room_number = ($_POST['room_number'])  ? trim($_POST['room_number']) : null;;
                $room_type = ($_POST['room_type'])  ? trim($_POST['room_type']) : null;;
                $description = ($_POST['description'])  ? trim($_POST['description']) : null;;
                $max_occupancy = ($_POST['max_occupancy'])  ? trim($_POST['max_occupancy']) : null;;
                $availability_status = ($_POST['availability_status'])  ? trim($_POST['availability_status']) : null;;

                if($room_type === 'default_option')
                {
                    die('Please select a valid room type');
                }
                if($availability_status === 'default_option')
                {
                    die('Please select a valid availability status');
                }

                echo $room_number;
                echo $room_type;
                echo $description;
                echo $max_occupancy;
                echo $availability_status;

                $sql = "INSERT INTO rooms(room_number, room_type, description, max_occupancy, availability_status) VALUES(?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssis",  $room_number, $room_type, $description, $max_occupancy, $availability_status);

                if($stmt === false)
                {
                    die("Prepare failed: ". $conn->error);
                }
                if(!$stmt->execute())
                {
                    die("Execution failed: ". $stmt->error);
                }


                $stmt->close();
                echo "<script>
                alert('Record Inserted Successfully');
                window.location.href='./all-rooms.php';
                </script>";
            }
            else
            {
                if (!in_array($room_type, $allowed_enum_values)) {
                    echo "Invalid value for Room TYpe. Please select a valid option.";
                } else {
                    echo "Please fill all fields.";
                }
            }
        ?>

        <?php
        include("./includes/footer.php");
        ?>