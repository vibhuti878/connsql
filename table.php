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
  button{
    margin-left:50% ;
    margin-top: 10px;
    margin-bottom: 20px;
  }
</style>
<body>
 	<table class="table">
  <thead>
    <tr>
      <th>user_id</th>
      <th>first_name</th>
      <th>last_name</th>
      <th>address</th>
    </tr>
  </thead>
  <?php 

$tbl =mysqli_connect('localhost','root','','vibhuti') or die();

$query =mysqli_query($tbl, "SELECT * FROM `con_sql`");
 
 if ($query) {
 	// code...


 	while ($row =mysqli_fetch_array($query)) {
 		// code...
?>
  <tbody>
    <tr>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><a href="update.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-primary">Update</a></td>
      <td><a href="delete.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>
  <?php 
  	}
 }
  ?>
 </table>
  <button class="btn btn-secondary"><a href="show.php" style="text-decoration: none; color: white;">Insert Data</button>
</body>
</html>