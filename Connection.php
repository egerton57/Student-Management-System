<?php 

$server = "localhost";
$username = "root" ;
$password = "" ;
$db = "students" ;

$con = mysqli_connect($server, $username, $password, $db);

if(!$con){

	die ("Connection Error") . mysql_error() ;
}

 else {

 	echo "" ;
 }
?>