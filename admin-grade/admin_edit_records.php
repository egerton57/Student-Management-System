<?php
require('../Connection.php');

$id=$_REQUEST['id'];

$query = "SELECT * from students where id='".$id."'";

$result = mysqli_query($con, $query) or die (mysqli_error());

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
<?php include ('asset-grade.php');?>
</head>
<body>
<?php include('Header-grade.php'); ?>
<br><br>
<div class="container">
<h3>Update Record</h3>
<br>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
	$id = $_REQUEST['id'];
    $fullname = $_REQUEST['fullname'];
    $initial = $_REQUEST['nameWithInitial'];
    $admission = $_REQUEST['admissionNumber'];
    $address = $_REQUEST['address'];
    $grade = $_REQUEST['grade'];
    $gender = $_REQUEST['gender'];
    $nic = $_REQUEST['nic'];
    $ethnic = $_REQUEST['ethnic'];
    $hmTel = $_REQUEST['homeTelNo'];
    $guardianTel = $_REQUEST['guardianTelNo'];
    $religion = $_REQUEST['religion'];
    $dob = $_REQUEST['dob'];
    $fatherName = $_REQUEST['fatherName'];
    $motherName = $_REQUEST['motherName'];
    $classTeacher = $_REQUEST['classTeacher'];

$update ="UPDATE students SET std_fullname='".$fullname."', std_nameWithInitial='".$initial."', admissionNo='".$admission."', adress='".$address."', grade='".$grade."', gender='".$gender."', nic='".$nic."', ethnic='".$ethnic."', homeTel='".$hmTel."', guardianTel='".$guardianTel."', religion='".$religion."', dob='".$dob."', fatherName='".$fatherName."', motherName='".$motherName."', classTeacher='".$classTeacher."' WHERE id='".$id."'";

mysqli_query($con,$update) or die(mysqli_error($con));

$status = "Updated Successfully. </br></br><a href='../admin-view-all-students.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

		<div class="form-group">
			<label>Student's fullname: </label>
				<input type="text" name="fullname" class="form-control" value="<?php echo $row['std_fullname'];?>"> 
		</div> 

		<br>

		<div class="form-group">
			<label>Name with initial:</label>
				<input type="text" name="nameWithInitial" class="form-control" value="<?php echo $row['std_nameWithInitial'];?>"> 
		</div>

		<br>

		<div class="form-group">
			<label>Admission Number:</label>
				<input type="text" name="admissionNumber" class="form-control" value="<?php echo $row['admissionNo'];?>"> 
		</div>

		<br>

		<div class="form-group">
			<label>Address:</label>
				<input type="text" name="address" class="form-control" value="<?php echo $row['adress'];?>"> 
		</div> 

		<br>

		<div class="form-group">
			<label>Grade:</label>
                    <select class="form-control" required="" name="grade" required="" >
                        <option value="<?php echo $row['grade'];?>">Grade <?php echo $row['grade'];?></option>
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                        <option value="6">Grade 6</option>
                        <option value="7">Grade 7</option>
                        <option value="8">Grade 8</option>
                        <option value="9">Grade 9</option>
                        <option value="10">Grade 10</option>
                        <option value="11">Grade 11</option>
                    </select>    
		</div>

  		<div class="form-group">
            <label for="gender" name="gender">Gender:</label>        
                <div class="radio">
                    <label><input type="radio" name="gender" value="Male"
                    	<?php if ($row['gender'] == "Male") {echo "checked";}?>>Male</label>
                </div>

                <div class="radio">
                    <label> <input type="radio" name="gender" value="Female" 
                    	<?php if ($row['gender'] == "Female") {echo "checked";}?>> Female</label>
                </div>
        </div>

		<div class="form-group">
			<label>NIC:</label>
				<input type="text" name="nic" class="form-control" value="<?php echo $row['nic'];?>"> 
		</div>

  		<div class="form-group">
            <label name="ethnic">Ethnic:</label>        
                <select class="form-control" name="ethnic" required="">
                    <option value="<?php echo $row['ethnic'];?>" checked><?php echo $row['ethnic'];?></option>
                    <option value="Sinhalese">Sinhalese</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Burgher">Burgher</option>
                </select>              
        </div>

		<div class="form-group">
			<label>Home Telephone Number:</label>
				<input type="text" name="homeTelNo" class="form-control" value="<?php echo $row['homeTel'];?>"> 
		</div>

		<div class="form-group">
			<label>Guardian's Telephone Number:</label>
				<input type="text" name="guardianTelNo" class="form-control" value="<?php echo $row['guardianTel'];?>"> 
		</div>

		<div class="form-group">
			<label>Religion:</label>
                <select class="form-control" name="religion" required>
                    <option value="<?php echo $row['religion'];?>" checked><?php echo $row['religion'];?></option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Islam">Islam</option>
                    <option value="Christian">Christian</option>
                </select>  
		</div>

		<div class="form-group">
			<label>Date of birth:</label>
				<input type="Date" name="dob" class="form-control" value="<?php echo $row['dob'];?>"> 
		</div>

		<div class="form-group">
			<label>Father's Name of the students:</label>
				<input type="text" name="fatherName" class="form-control" value="<?php echo $row['fatherName'];?>"> 
		</div>

		<div class="form-group">
			<label>Mother's Name of the students:</label>
				<input type="text" name="motherName" class="form-control" value="<?php echo $row['motherName'];?>"> 
		</div>

		<div class="form-group">
			<label>Class Teacher's Name:</label>
				<input type="text" name="classTeacher" class="form-control" value="<?php echo $row['classTeacher'];?>"> 
		</div>

		<br>

		<input type="submit" class="btn btn-primary" value="Update">

</form>
<?php } mysqli_close($con); ?>

<br /><br /><br /><br />

</div>
</div>
<?php include('../Footer.php'); ?>
</body>
</html>