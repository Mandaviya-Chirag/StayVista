<?php
require('connection.php');
$user_id=$_REQUEST['user_id'];

$query = "DELETE FROM users WHERE user_id=$user_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));

if($result)
{
    echo "<script> alert('User Deleted Successfully') </script>";
    header("Location: all-users.php");
}
else
{
    echo "<script> alert('Failed to Delete User') </script>";
    header("Location: all-users.php");
}
?>

