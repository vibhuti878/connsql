<?php  

$con = mysqli_connect('localhost','root','','vibhuti') or die();

if (isset($_GET['user_id'])) {
	// code...
$id = $_GET['user_id'];
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$address = $_POST['addr'];
 
 $query = mysqli_query($con,"DELETE FROM `con_sql` WHERE `user_id`=$id");

 if ($query) {
 	// code...
 	echo "<script>alert('Successfully Deleted');window.location.href='show.php'</script>";
}else{
	 	echo "<script>alert('Couldn't Delete);</script>";
      }
}


?>