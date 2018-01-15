<style type="text/css">
<!--
body {
	background-color: #F9F;
}
-->
</style>

<?php
session_start();
$old_password1 = $_POST['oldpassword'];
$new_password1 = $_POST['newpassword1']; 
$new_password2 = $_POST['newpassword2']; 
$id_user = $_REQUEST['key1'];


include("dbconnect.php"); //connect phpMyAdmin dedatbase.
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {

 ?>
 <?php
if (empty($old_password1) || empty($new_password1) || empty($new_password2))
{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='info_change_password.php?key1=$id_user'</script>";
  die();
}

$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);

$result = mysql_query("select password from user where id_member = $id_user");
 $row=mysql_fetch_array($result);

if($row[0]!=$old_password1 || $new_password1 != $new_password2){
  echo "<script>alert('Please check password.')</script>";
  echo "<script>location.href='info_change_password.php?key1=$id_user'</script>";
  die();
}else{
	mysql_query("update user set password = $new_password1 where id_member = $id_user");
	echo "<script>alert('Change Password to new password success.')</script>";
	echo "<script>location.href='info_change_password.php?key1=$id_user'</script>";
}


}
?><title>-THE PIZZA PARADISE- </title>