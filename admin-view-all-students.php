<!DOCTYPE html>
<html>
<head>
	<title>Admin Records</title>
    <?php include ('asset.php');?>   
</head>
<body>

<!-- Header -->
<?php 
$page = 'result' ;
include('Connection.php');
include('admin_Header.php');
?>

<br> <br> 
<div class="bg">
<div class="container-fluid">
  <h2>Admin - All Students</h2>
  <hr>
  <a href="admin_add_records.php"><button class="btn btn-success">Add new</button></a> 
  <br><br>
<!-- Grade 1 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 1 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-1-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 2 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 2 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-2-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 3 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 3 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-3-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 4 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 4 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-4-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 5 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 5 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-5-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 6 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 6 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-6-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 7 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 7 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-7-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 8 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 8 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-8-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 9 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 9 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-9-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 10 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 10 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-10-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
<!-- Grade 11 -->
  <div class="row">
    <div class="col-md-6">
      <h4>Grade 11 Students</h4>
    </div>

    <div class="col-md-6">
      <a href="admin-grade/grade-11-students.php"><button class="btn btn-warning">View</button></a>
    </div>
  </div>
</div>
</div>
<br><br><br><br><br><br>
<!-- Footer -->
<?php include ('Footer.php') ;?>
</body>
</html>