<?php require('Connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin List</title>
	<?php include ('asset.php');?>
</head>
<body>
<?php include('admin_Header.php'); ?>
<br><br>
<div class="bg"> <br>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h2>Admin list</h2>
			</div>
			<div class="col-md-2" align="right">
				<button class="btn btn-primary" data-toggle="modal" data-target="#addAdmin">Add an Admin</button>
			</div>
		</div>
	<hr>

<!-- Add Admin Model -->
<div id="addAdmin" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add a new Admin</h4>
			</div>

			<div class="modal-body">
				<form action="" method="post" onsubmit="return validate()">

					<div class="form-group">
						<label>First Name: </label>
						<input type="text" name="fname" class="form-control" required> 
					</div> 

					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" name="lname" class="form-control" required> 
					</div>

					<div class="form-group">
						<label>E-Mail:</label>
						<input type="text" name="adminEmail" class="form-control" required> 
					</div>

                	<div class="form-group">
                    	<label for="password">Password:</label>
                    	<input type="password" class="form-control" id="pwd" name="password" required>
              		</div>       

                	<div class="form-group" id="change">
                    	<label for="confirmpassword">Confirm Password:</label>
                   		<input type="password" class="form-control" id="Confirm_pwd" name="confirmpassword" required placeholder="">
                   		<p id="pTag" style="display: none; color: red">Password doesn't match</p>
               		 </div> 

					<input type="submit" name="submit" class="btn btn-primary">
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>

				<!-- Validate Script -->
				<script>
					function validate() {
						var a = document.getElementById('pwd').value;
						var b = document.getElementById('Confirm_pwd').value;

						if(a != b) {
							document.getElementById('change').className='form-group has-error has-feedback';
							document.getElementById('pTag').style.display='block';
							return false;
						}
					}
				</script>
		</div>

	</div>
</div>

<!-- PHP Codes for add admins-->
<?php
		$display = "";
if(isset($_POST['submit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$adMail = $_POST['adminEmail'];
$pwd = $_POST['password'];
$confirm = $_POST['confirmpassword'];

$sql = "INSERT INTO admin (email,password,firstname,lastname) VALUES ('$adMail','$pwd','$fname','$lname')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

//header("Location: admin.php");
}

?>

<!-- PHP Codes for view all admins-->
<?php 

	$sqlAdmin = "SELECT * FROM admin" ;
	$queryAdmin = mysqli_query($con,$sqlAdmin) or die (mysqli_error());

	while ($row = mysqli_fetch_assoc($queryAdmin)) {
		$id = $row['admin_id'];
		$firtsName = $row['firstname'];
		$lastName = $row['lastname'];
		$email = $row['email'];

		if($id==1){
		echo '<div class="row">
				<div class="col-md-1">
					<img src="images/admin.jpg" width="120px" height="120px">
				</div>
				<div class="col-md-4" style="margin-left:50px">
					<h2>'.$firtsName.' '.$lastName.'</h2>
					<p style="font-size:15px">'.$email.'</p>
				</div>
			 </div> <br>';
			} else {
				echo '<div class="row">
				<div class="col-md-1">
					<img src="images/admin.jpg" width="120px" height="120px">
				</div>
				<div class="col-md-4" style="margin-left:50px">
					<h2>'.$firtsName.' '.$lastName.'</h2>
					<p style="font-size:15px">'.$email.'</p>
            <a onclick="javascript:confirmationDelete($(this));return false;" href="admin-delete-list.php?id='. $row['admin_id'] .'">
                <button class="btn-xs btn-danger">Delete</button>
            </a>
				</div>
			 </div> <br>';
			}
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

<br>
		<a href="admin.php"><button class="btn btn-success">Go Back</button></a>
	</div>
</div>
<br><br><br><br><br>
<?php include('Footer.php') ; mysqli_close($con); ?>
</body>
</html>