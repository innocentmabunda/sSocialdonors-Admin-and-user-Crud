<?php 

$con = mysqli_connect('localhost', 'root', '', 'mydb');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  $errors = 0;

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM `users`;";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  // if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database
  	$password = $password_1; 

  	$query = "INSERT INTO `users`(`username`, `email`,`password`)
  			  VALUES('$username', '$email', '$password');";
  	mysqli_query($con, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  // }
}

// ... 


// LOGIN USER
if (isset($_POST['login_user'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    //if (count($errors) == 0) {
       
        $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$password';";

        // echo "$query";

        $result = mysqli_query($con, $query);

        $row = mysqli_num_rows($result);

        if ($row == 1) {
          echo" Done ";
          $_SESSION['email'] = "$email";
          $_SESSION['success'] = "You are now logged in";
          header('location: profile.php');
        } else {
            echo "error";
    }
  }
  
  ?>