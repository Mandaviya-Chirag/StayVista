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
                                <li class="active">
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
<style>
    body {
    overflow-y: scroll !important; /* Force vertical scroll */
    overflow-x: scroll !important; /* Force horizontal scroll */
}
</style>
                <div class="nk-content ">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">All Rooms</h3>
                                    </div>
                                </div>
                            </div>
                    <table class="table mt-3">
                      <thead>
                        <tr>
                          <th scope="col">Room Id</th>
                          <th scope="col">Room Number</th>
                          <th scope="col">Room Type</th>
                          <th scope="col">Description</th>
                          <th scope="col">Max Occupancy</th>
                          <th scope="col">Availablility Status</th>
                        </tr>
                      </thead>
                      <tbody>
                                    <?php
                                    include('connection.php');

                                    $sql = "SELECT * FROM rooms";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $room_id = $row['room_id'];
                                        $room_number = $row['room_number'];
                                        $room_type = $row['room_type'];
                                        $description = $row['description'];
                                        $max_occupancy = $row['max_occupancy'];
                                        $availability_status = $row['availability_status'];
                                    ?>
                                    <tr>
                                        <td><?php echo $row['room_id']; ?></td>
                                        <td><?php echo $row['room_number']; ?></td>
                                        <td><?php echo $row['room_type']; ?></td>                                        
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['max_occupancy']; ?></td>
                                        <td><?php echo $row['availability_status']; ?></td>
                                        <td>
                                        <a href="edit-rooms.php?room_id=<?php echo $row["room_id"]; ?>"><img src="../images/edit-text.png" alt="" height="25px"></a>
                                        </td>
                                        <td>
                                        <a href="delete-rooms.php?room_id=<?php echo $row["room_id"]; ?>"><img src="../images/trash.png" alt="" height="25px"></a>
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