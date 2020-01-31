
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color: deepskyblue">Dharmaloka Vidyalaya</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if($page=='home'){echo 'active';}?>"><a href="index.php">Home</a></li>
      <li class="<?php if($page =='result'){echo 'active';}?>"><a href="view-all-students.php">View all Students</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="search.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
         <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	     <ul class="nav navbar-nav navbar-right">
	     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
	      <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
	    </ul>
  </div>
</nav>
<!-- Modal --> 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin Login</h4>
        </div>
        <div class="modal-body">

     <form class="w3-container" action="" method="post">
        <div class="w3-section">
          <label><b>Admin E-Mail:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter you E-Mail Address" name="email" required>
          <label><b>Admin Password:</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter your Password" name="password" required>
          <button class="w3-btn-block w3-blue w3-section w3-padding" type="submit" value="Login" name="submit">Login</button>
        </div>
      </form>
        <?php
        if (isset($_POST["submit"])) {

            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $con = mysqli_connect('localhost', 'root', '', 'students') or die(mysqli_error());
                $sql = "SELECT * FROM admin WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1";
                $query = mysqli_query($con, $sql) or die(mysqli_error($con));


                if (mysqli_num_rows($query) > 0) {
                    $row = mysqli_fetch_assoc($query) or die(mysqli_error($con));
                    if ($email == $row['email'] && $password == $row['password']) {
                        session_start();
                        $_SESSION['sess_users'] = $email;

                        /* Redirect browser */
                        header("Location: admin.php");
                    }
                } else {
                    echo "Invalid username or password!";
                }
            } else {
                echo "All fields are required!";
            }
        }
        ?>  

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<br>