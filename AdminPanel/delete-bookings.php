<?php
require('connection.php');
$booking_id=$_REQUEST['booking_id'];

$query = "DELETE FROM booking WHERE booking_id=$booking_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));

if($result)
{
    echo "<script> alert('Booking Deleted Successfully') </script>";
    header("Location: all-bookings.php");
}
else
{
    echo "<script> alert('Failed to Delete Booking') </script>";
    header("Location: all-bookings.php");
}
?>

