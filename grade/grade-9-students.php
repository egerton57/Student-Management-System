<!DOCTYPE html>
<html>
<head>
	<title>Grade 9 Students</title>
    <?php include ('asset-grade.php');?>   
</head>
<body>

<!-- Header -->
<?php 
$page = 'result' ;
include('../Connection.php');
include('Header-grade.php');
?>

<br> <br> 
<div class="bg">
<div class="container-fluid">
  <h2>Grade 9 Students</h2>
  <br>
  <table class="table table-condensed" style="font-size: 12px">
    <thead>
      <tr>
        <th>No.</th>
        <th>Index</th>
        <th>Fullname</th>
        <th>Name with initial</th>
        <th>Adress</th>
        <th>Grade</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Ethnic</th>
        <th>Religion</th>
        <th>Father</th>
        <th>Mother</th>
        <th>Guardian's Tel</th>
        <th>Home Tel</th>
        <th>Class Teacher</th>
      </tr>
    </thead>
<?php 

$sql2 = "SELECT * FROM Students WHERE grade='9' ORDER BY admissionNo ASC" ;

$result = mysqli_query($con,$sql2);


if (mysqli_num_rows($result) > 0) {

	while($row = mysqli_fetch_assoc($result)) {

	echo '
    <tbody>
      <tr>
        <td></td>
        <td>'. $row['admissionNo'] .'</td>
        <td>'. $row['std_fullname'] . '</td>
        <td>'. $row['std_nameWithInitial'] .'</td>
        <td>'. $row['adress'] .'</td>
        <td>'. $row['grade'] .'</td>
        <td>'. $row['gender'] .'</td>
        <td>'. $row['dob'] .'</td>
        <td>'. $row['ethnic'] .'</td>
        <td>'. $row['religion'] .'</td>
        <td>'. $row['fatherName'] .'</td>
        <td>'. $row['motherName'] .'</td>
        <td>'. $row['guardianTel'] .'</td>
        <td>'. $row['homeTel'] .'</td>
        <td>'. $row['classTeacher'] .'</td>
      </tr>
    </tbody>' ;

	}
} else {
 
	echo "No Records found" ;

}

?>

  </table>

<a href="../view-all-students.php"><button class="btn-md btn-success">Go Back</button></a>
</div>
</div>
<!-- Footer -->
<?php include ('../Footer.php') ;?>
</body>
</html>