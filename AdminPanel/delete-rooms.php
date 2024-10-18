<?php
require('connection.php');
$room_id=$_REQUEST['room_id'];

$query = "DELETE FROM rooms WHERE room_id=$room_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));

if($result)
{
    echo "<script> alert('User Deleted Successfully') </script>";
    header("Location: all-rooms.php");
}
else
{
    echo "<script> alert('Failed to Delete User') </script>";
    header("Location: all-rooms.php");
}
?>

