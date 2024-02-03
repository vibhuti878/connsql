<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
	form input{
		border: 2px solid black;
		border-radius: 5px;
	}
	form input:hover{
		background-color: rgb(211, 211, 211);
	}
</style>
<body>
<center>
	<h1 style="margin: 20px;">Insert Data</h1>
	<form action="" method="post">
		<label for="fname">FirstName:</label>
        <input type="text" name="fname"> <br><br>
        <label for="lname">LastName:</label>
        <input type="text" name="lname"> <br><br>
        <label for="addr">Address:</label>
        <input type="text" name="addr"> <br><br>
        <input type="submit" class="btn btn-success" name="sub"> <br><br>

</form>
<a href="table.php">See Your Entry</a>
</center>

<?php 

$con = mysqli_connect('localhost','root','','vibhuti') or die();

if (isset($_REQUEST['sub'])) {
	// code...

$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$address = $_POST['addr'];
 
 $query = mysqli_query($con,"INSERT INTO `con_sql`(`first_name`, `last_name`, `address`) VALUES ('$f_name','$l_name','$address')");

 if ($query) {
 	// code...
 	echo "<script>alert('Successfully Submitted')</script>";
}else{
	 	echo "<script>alert('Not Submitted');</script>";
      }
}
 ?>
</body>
</html>