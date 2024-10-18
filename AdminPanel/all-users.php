<?php
include("./includes/header.php");
include('connection.php');
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
                    <li class="nav-item active">
                        <a data-bs-toggle="collapse" href="#users">
                            <i class="fas fa-pen-square"></i>
                            <p>Users</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="users">
                            <ul class="nav nav-collapse">
                                <li class="active">
                                    <a href="all-users.php">
                                        <span class="sub-item">All Users</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#reviews">
                            <i class="fas fa-table"></i>
                            <p>Reviews</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="reviews.php">
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
                            <h3 class="nk-block-title page-title">All Users</h3>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="booking-add.html"><span>Add
                                    Users</span></a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">User Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                          <p class="scroll">
                                    <?php
                                    include('connection.php');
                                    
                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $user_id = $row['user_id'];
                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $user_name = $row['username'];
                                        $pw = $row['password'];
                                        $email = $row['email'];
                                        $phone_number = $row['phone_number'];
                                        ?>
                                    <tr>
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name']; ?></td>
                                        <td><?php echo $row['username']; ?></td>                                       
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone_number']; ?></td>
                                        <td>
                                        <a href="delete-users.php?user_id=<?php echo $row["user_id"]; ?>"><img src="../images/trash.png" alt="" height="25px"></a>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            include("./includes/footer.php");
                            ?>

                        </div>
                    </div>
                </div>
            </div>

<style>
    .scroll{
        overflow: scroll;
        
    }
</style>