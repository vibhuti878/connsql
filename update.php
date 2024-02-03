<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<center>
	<h1>Insert Data</h1>
	<form action="" method="post">
		<label for="fname">First_name:</label>
        <input type="text" name="fname"> <br>
        <label for="lname">Last_name:</label>
        <input type="text" name="lname"> <br>
        <label for="addr">Address:</label>
        <input type="text" name="addr"> <br>
        <input type="submit" name="sub"> 
</form>
<a href="table.php">See Your Entry</a>
</center>

<?php 

$con =mysqli_connect('localhost','root','','vibhuti') or die();

if (isset($_REQUEST['sub'])) {
	// code...
$id = $_GET['user_id'];
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$address = $_POST['addr'];
 
 $query =mysqli_query($con,"UPDATE `con_sql` SET `first_name`='$f_name',`last_name`='$l_name',`address`='$address' WHERE `user_id`= $id ");

 if ($query) {
 	// code...
 	echo "<script>alert('Successfully Updated');window.location.href='show.php'</script>";
}else{
	 	echo "<script>alert('Couldn't Update);</script>";
      }
}
 ?>
</body>
</html>