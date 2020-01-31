<?php 
include('Connection.php');
	
    $fullname = $_POST['fullname'];
    $initial = $_POST['nameWithInitial'];
    $admission = $_POST['admissionNumber'];
    $address = $_POST['address'];
    $grade = $_POST['grade'];
    $gender = $_POST['gender'];
    $nic = $_POST['nic'];
    $ethnic = $_POST['ethnic'];
    $hmTel = $_POST['homeTelNo'];
    $guardianTel = $_POST['guardianTelNo'];
    $religion = $_POST['religion'];
    $dob = $_POST['dob'];
    $fatherName = $_POST['fatherName'];
    $motherName = $_POST['motherName'];
    $classTeacher = $_POST['classTeacher'];

//Data insertion
$sql = "INSERT INTO students (std_fullname,std_nameWithInitial,admissionNo,adress,grade,gender,nic,ethnic,homeTel,guardianTel,religion,dob,fatherName,motherName,classTeacher) 
		VALUES ('$fullname','$initial','$admission','$address','$grade', '$gender' , '$nic','$ethnic','$hmTel','$guardianTel','$religion','$dob', '$fatherName' , '$motherName', '$classTeacher')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);



header("Location: admin-view-all-students.php");
	
?>