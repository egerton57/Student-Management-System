<!DOCTYPE html>
<html>
<head>
	<title>Add Records</title>
		<?php include ('asset.php');?>
</head>
<body>

<!-- Header -->
<?php $page = 'addresult' ; include('admin_Header.php'); ?>
<br> <br> <br> <br>
<div class="container">

	<form action="insert.php" method="post">

		<div class="form-group">
			<label>Student's fullname: </label>
				<input type="text" name="fullname" class="form-control"> 
		</div> 

		<br>

		<div class="form-group">
			<label>Name with initial:</label>
				<input type="text" name="nameWithInitial" class="form-control"> 
		</div>

		<br>

		<div class="form-group">
			<label>Admission Number:</label>
				<input type="text" name="admissionNumber" class="form-control"> 
		</div>

		<br>

		<div class="form-group">
			<label>Address:</label>
				<input type="text" name="address" class="form-control"> 
		</div> 

		<br>

		<div class="form-group">
			<label>Grade:</label>
                    <select class="form-control" required name="grade">
                        <option value="_blank" checked></option>
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
                    <label><input type="radio" name="gender" value="Male" checked>Male</label>
                </div>

                <div class="radio">
                    <label> <input type="radio" name="gender" value="Female"> Female</label>
                </div>
        </div>

		<div class="form-group">
			<label>NIC:</label>
				<input type="text" name="nic" class="form-control"> 
		</div>

  		<div class="form-group">
            <label name="ethnic">Ethnic:</label>
                <select class="form-control" name="ethnic" required="">
                    <option value="_blank" checked></option>
                    <option value="Sinhalese">Sinhalese</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Burgher">Burgher</option>
                </select>               
        </div>

		<div class="form-group">
			<label>Home Telephone Number:</label>
				<input type="text" name="homeTelNo" class="form-control"> 
		</div>

		<div class="form-group">
			<label>Guardian's Telephone Number:</label>
				<input type="text" name="guardianTelNo" class="form-control"> 
		</div>

		<div class="form-group">
			<label>Religion:</label>
                <select class="form-control" name="religion" required>
                    <option value="_blank" checked></option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Islam">Islam</option>
                    <option value="Christian">Christian</option>
                </select>  
		</div>

		<div class="form-group">
			<label>Date of birth:</label>
				<input type="Date" name="dob" class="form-control"> 
		</div>

		<div class="form-group">
			<label>Father's Name of the students:</label>
				<input type="text" name="fatherName" class="form-control"> 
		</div>

		<div class="form-group">
			<label>Mother's Name of the students:</label>
				<input type="text" name="motherName" class="form-control"> 
		</div>

		<div class="form-group">
			<label>Class Teacher's Name:</label>
				<input type="text" name="classTeacher" class="form-control"> 
		</div>

		<br>

		<input type="submit" class="btn btn-primary">
	</form>	
</div>
<br><br><br>
<!-- Footer -->
<?php include ('Footer.php') ;?>
</body>
</html>