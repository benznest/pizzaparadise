<style type="text/css">
<!--
body {
	background-color: #F9F;
}
-->
</style>
<?php

//address info

$myname_build = $_POST['name_build'];
$myaddress_type = $_POST['address_type'];
$mypostcode = $_POST['postcode'];
$myprovince= $_POST['province'];
$myroad = $_POST['road'];
$myaddress_no = $_POST['address_no'];

$myroom_no = $_POST['room_no'];
$myfloor = $_POST['floor'];
$mynote = $_POST['note'];

$id_user = $_REQUEST['key1'];
 
 
if (empty($mypostcode) || empty($myprovince) || empty($myroad) || empty($myaddress_no) || empty($myname_build) || empty($myaddress_type) ) 
{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='register.php'</script>";
  die();
}

$con=mysql_CONNECT('localhost','root','');

mysql_select_db("pizzaparadise",$con);


mysql_query("insert into address_member values($id_user,'','$myname_build','$myaddress_type','$mypostcode','$myprovince','$myroad','$myaddress_no','$myroom_no','$myfloor','$mynote')");

echo "<script>alert('Add new address success.')</script>";
echo "<script>location.href='edit_profile.php?key1=$id_user'</script>";

?>