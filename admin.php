<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
		<?php include ('asset.php');?>
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bg {
  /* The image used */
  background-image: url("images/admin-bg.jpg");

  /* Full height */
  height: 87.8%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>

<!-- Header -->
<?php $page = 'dashbord' ; include('admin_Header.php'); ?>
<div class="bg">
<br><br>
<div class="container-fluid">
<h1 style="color: white">Welcome to Admin Dashboard</h1> <br>
</div>
<br>
<div class="container-fluid" align="center">
	<div class="row">

		<div class="col-sm-4">
			<div style="background-color: #676767; width:250px ; height:330px" >
				<img src="images/admin.jpg" class="img-thumbnail" width="250px" height="250px">
				<h3 style="color:white; text-shadow: 1px 1px 1px black">Admins</h3>
				<a href="admin-list.php"><button class="btn btn-primary">Click to See</button></a>
			</div>
		</div>

		<div class="col-sm-4">
			<div style="background-color: #676767; width:250px ; height:330px" >
				<img src="images/view.jpg" class="img-thumbnail" width="250px" height="250px">
				<h3 style="color:white; text-shadow: 1px 1px 1px black">View Students</h3>
				<a href="admin-view-all-students.php"><button class="btn btn-primary">Click to See</button></a>
			</div>
		</div>

		<div class="col-sm-4">
			<div style="background-color: #676767; width:250px ; height:330px" >
				<img src="images/add.jpg" class="img-thumbnail" width="250px" height="250px">
				<h3 style="color:white; text-shadow: 1px 1px 1px black">Add Students</h3>
				<a href="admin_add_records.php"><button class="btn btn-primary">Click to See</button></a>
			</div>
		</div>
	</div>
</div>

</div>


<!-- Footer -->
<?php include ('Footer.php') ;?>
</body>
</html>