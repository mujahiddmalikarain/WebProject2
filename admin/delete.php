<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
<?php
include('../include/db_con.php');

if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql="delete from roomdetail where id='".$id."'";
mysql_query($sql) or die (mysql_error($con));

header("location:adminpanal.php");
}
?>
</body>
</html>
