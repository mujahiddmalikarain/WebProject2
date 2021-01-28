<?php
$servername = "localhost";
$username = "root";

$password="";
$db="form";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"form");
if (isset($_POST['email'])) {
  
  $email=$_POST['email'];
    $password=$_POST['password'];
 $sql="select*from form where user='".$email."'AND Pass='".$password."' limit 1";

$result=mysqli_query($sql);
if (mysqli_num_rows($result)==1) {
    header('Location: index.php');
  #echo "succes";
  
}
else{
  header('Location: login.php');
 # echo "in corect pw";
  #exit();
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin-Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
<link href="css/file.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
	
<?php
include("includes/header.php");
include("includes/nav.php");
?>
<main>
<div class="bg-img">
  <form action="" class="container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>


</main>
</body>
<?php
include("includes/footer.php");
?>
</html>