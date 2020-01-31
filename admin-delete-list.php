<?php
require('Connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM admin WHERE admin_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
mysqli_close($con);
header("Location: admin-list.php"); 
?>