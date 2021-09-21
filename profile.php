<?php
session_start();
	include('server.php');
	// //fetch the record to be updated.
	// if(isset($_GET['edit'])){
	// 	$id = $_GET['edit'];
	// 	$edit_state = true;
	// 	$rec = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
	// 	$record = mysqli_fetch_assoc($db, "SELECT * FROM users WHERE id=$id");
	// 	$username = $record['username'];
	// 	$email = $record['email'];
	// 	$id = $record['id'];
	// }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Social Donors</title>
  <link rel="stylesheet" type="text/css" href="style66.css">
</head>
<body class="bodyy"><br><br><br><br><br><br>
  	

  <center><h2>User Profile</h2>
  
	
  <form method="post">
    <div class="input-group">
      <label></label>
      <input type="email" name="" value='<?php echo (''.$_SESSION['email']); ?> '>
    </div>
    <div class="input-group">
      <label></label>
      <input type="text" name=""  value='<?php echo (''.$_SESSION['username']); ?> '>
    </div>
  	<div class="input-group">
  	  <label></label>
  	  <input type="password" name=""  value='<?php echo (''.$_SESSION['password']); ?> '>
  	</div>
  
  	<div class="input-group">
  	  <button type="submit" class="btn"  name="userupdate"><a href="userupdate.php">Update<a></button>
  	  <button type="submit" class="btn" name="userdelete"><a href="userdelete.php">Delete<a></button>
  	</div>
  	<br>
    <p>
  	<a href="logout.php">Logout</a>
  	</p>
  </form></center>
</body>
</html>

