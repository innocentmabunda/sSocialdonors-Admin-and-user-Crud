<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style66.css">
</head>

<body class="bodyy"><br><br><br><br><br>
  <center>
  	<h2>Login</h2>
  <form method="post" action="login.php">
  	<div class="input-group">
  		<label></label>
  		<input type="text" name="username"placeholder="username" >
  	</div>
  	<div class="input-group">
  		<label></label>
  		<input type="password" name="password" placeholder="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</center>
</body>
</html>