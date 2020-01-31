<!DOCTYPE html>
<html>
<head>
    <title>Grade 7 Students</title>
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
  <h2>Grade 7 Students</h2>
  <br>
  <table class="table table-condensed" style="font-size: 12px">
    <thead>
      <tr>
        <th>No.</th>
        <th>Index</th>
        <th>Fullname</th>
        <th>Name</th>
        <th>Adress</th>
        <th>Grade</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Ethnic</th>
        <th>Religion</th>
        <th>Father</th>
        <th>Mother</th>
        <th>Guardian's Tel</th>
        <th>Home Tel</th>
        <th>Class Teacher</th>
        <th></th>
      </tr>
    </thead>
<?php 

$sql2 = "SELECT * FROM Students WHERE grade='7' ORDER BY admissionNo ASC" ;

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
        <td><a href="admin_edit_records.php?id='.$row["id"].'">
                <button class="btn-xs btn-warning">Edit</button>
            </a>

            <a onclick="javascript:confirmationDelete($(this));return false;" href="admin_delete.php?id='. $row["id"] .'">
                <button class="btn-xs btn-danger">Delete</button>
            </a> </td>
      </tr>
    </tbody>' ;

    }
} else {
 
    echo "No Records found" ;

}

?>
<script>
    function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>

  </table>

<a href="../admin-view-all-students.php"><button class="btn-md btn-success">Go Back</button></a>
</div>
</div>
<!-- Footer -->
<?php include ('../Footer.php') ;?>
</body>
</html>