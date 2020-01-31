<?php
require('../Connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM students WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
mysqli_close($con);
header("Location: ../admin-view-all-students.php"); 
?>