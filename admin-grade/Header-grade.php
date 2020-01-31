<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../admin.php" style="color: deepskyblue">Dharmaloka Vidyalaya - Admin Panal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if($page =='dashbord'){echo 'active';}?>"><a href="../admin.php">Dashboard</a></li>
      <li class="<?php if($page =='result'){echo 'active';}?>"><a href="../admin-view-all-students.php">View all Students</a></li>
      <li class="<?php if($page =='addresult'){echo 'active';}?>"><a href="../admin_add_records.php">Add Students</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="../search.php">
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
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
  </div>
</nav>

<br>