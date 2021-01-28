<?php 

$username = "";
$email    = "";
$errors = array();

 &db =mysql_connect('localhost','root','','registrion');

if (isset($_POST['registrion'])) {
	# code...
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2= mysqli_real_escape_string($db, $_POST['password_2']);



if (empty($username)) {
 array_push($errors, "Username is required");
  }
  if (empty($email)) {
   array_push($errors, "Email is required"); 
}
if (empty($age)) {
   array_push($errors, "Age is required");
    }
  if (empty($password_1)) {
   array_push($errors, "Password is required");
    }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

//to check user do not exect.
 $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }//mabe some esho
if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email,age, password) 
  			  VALUES('$username', '$email','$age' '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}



 ?>