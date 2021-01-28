<!DOCTYPE html>
<html>
<head>
	<title>contect</title>
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
<div id="location"></div>
<div id="cont">
    
    <h2>Contact Us</h2>   
    <form action="contect-fedback.php" method="post" class="main-forms" enctype="multipart/form-data">
      <div><input type="text" name="name" placeholder="Full Name*" required /></div>
      <div><input type="text" name="addres" placeholder="Address*" required /></div>
      <div><input type="text" name="phone" placeholder="Contact*" required /></div>
      <div><input type="email" name="email" placeholder="Email Address*" required /></div>
        <textarea name="msg" placeholder="Please Enter Comments"></textarea>      
      <input type="submit" value="SUBMIT">
    </form>


  </div>


</main>
<?php
include("includes/footer.php");
?>
</body>
</html>