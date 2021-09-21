<?php 
session_start();
if(isset($_POST['submit'])){
  
    $email = $_POST['email'];
    $username = $_POST['username'];
    
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (email,username,password) values('$email', '$username', '$password')";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:');
    }else{
        die(mysqli_error($con));
    }
}
?>

<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Social Donors</title>
  <link rel="stylesheet" type="text/css" href="style66.css">
</head>
<body class="bodyy"><br><br><br><br><br><br>
  
  <center><h2>Register</h2>
  
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label></label>
  	  <input type="text" name="username" placeholder=" Enter username" autocomplete="off">
  	</div>
  	<div class="input-group">
  	  <label></label>
  	  <input type="email" name="email" placeholder="Enter your email" autocomplete="off">
  	</div>
  	<div class="input-group">
  	  <label></label>
  	  <input type="password" name="password_1" placeholder="Enter your password" autocomplete="off">
  	</div>
  	<div class="input-group">
  	  <label></label>
  	  <input type="password" name="password_2" placeholder="Confirm your password" autocomplete="off">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form></center>
</body>
</html>