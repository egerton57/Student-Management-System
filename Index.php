<!DOCTYPE html>
<html>
<head>
	<title>Dharmaloka Vidyalaya</title>
		<?php 
			include ('asset.php');
		?>
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bg {
  /* The image used */
  background-image: url("images/bg.jpg");

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
<?php $page = 'home' ; include('Header.php'); ?>

<div class="bg">
<br><br><br><br><br><br><br><br>
	<div class="container" align="center">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color : white ;font-size: 90px ; text-shadow: 2px 3px 3px black" > Welcome </h1>
				<h1 style="text-shadow: 2px 3px 3px white">Dharmaloka Vidyalaya</h1> <br> <br>

			</div>
		</div>
	</div>
</div>	

<!-- Footer -->
<?php include ('Footer.php') ;?>

</body>
</html>