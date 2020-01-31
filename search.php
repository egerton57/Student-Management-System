<?php
include('Connection.php');
include('asset.php');

$output='';
$table=null;
if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	if (empty($searchq)){
		$output = '<div class="container"><h4>You must type a name of index number to search!</h4></div>';
	} else {
	$searchq = preg_replace("#[^0-9a-z] #i", "", $searchq);

	$sql = "SELECT * FROM students WHERE admissionNo LIKE '%$searchq%' OR std_fullname LIKE '%$searchq%' 
			OR std_nameWithInitial LIKE '%$searchq%'";

	$query = mysqli_query($con,$sql) or die("could not search!");
	$count = mysqli_num_rows($query);
	if ($count == 0){
		$output = 'No result found !';
		$table = '';
	}else{
		$table .= '<table class="table table-condensed" style="font-size: 12px">
    <thead>
      <tr>
        <th>No.</th>
        <th>Index</th>
        <th>Student FullName</th>
        <th>Name with initial</th>
        <th>Adress</th>
        <th>Grade</th>
        <th>Gender</th>
        <th>Ethnic</th>
        <th></th>
        <th></th>
      </tr>
    </thead>' ;
		while ($row = mysqli_fetch_array($query)) {

			$output .= '
    <tbody>
      <tr>
        <td></td>
        <td>'. $row['admissionNo'] .'</td>
        <td>'. $row['std_fullname'] . '</td>
        <td>'. $row['std_nameWithInitial'] .'</td>
        <td>'. $row['adress'] .'</td>
        <td>'. $row['grade'] .'</td>
        <td>'. $row['gender'] .'</td>
        <td>'. $row['ethnic'] .'</td>
      </tr>
    </tbody>
' ;
		}
'</table>';
	}
 }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Results</title>

<?php include ('asset.php');?>

</head>
<body>
<!-- Header -->
<?php include('Header.php'); ?>
<br><br>
<?php print("$table");?>
<?php print("$output");; mysqli_close($con);?>
</body>
</html>
