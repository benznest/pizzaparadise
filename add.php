<style type="text/css">
<!--
body {
	background-color: #F9F;
}
-->
</style>
<?php
//profile
$myfirstname = $_POST['firstname'];
$mylastname = $_POST['lastname'];

$myemail = $_POST['email'];
$myemail2 = $_POST['c_email'];

$mypassword = $_POST['password'];
$mypassword2 = $_POST['c_password'];

$mysex = $_POST['sex'];
$myyear = $_POST['year'];
$mymonth = $_POST['month'];
$myday= $_POST['day'];
$myphone = $_POST['phone'];

//address info
$mypostcode = $_POST['postcode'];
$myprovince= $_POST['province'];
$myroad = $_POST['road'];
$myaddress_no = $_POST['address_no'];
$myname_build = $_POST['name_build'];
$myaddress_type = $_POST['address_type'];
$myroom_no = $_POST['room_no'];
$myfloor = $_POST['floor'];
$mynote = $_POST['note'];

 
 
if (empty($myfirstname) || empty($mylastname) || empty($myemail) || empty($myemail2) || empty($mypassword) || empty($mypassword2) || empty($mysex)  || empty($myphone) )
{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='register.php'</script>";
  die();
}

if (empty($mypostcode) || empty($myprovince) || empty($myroad) || empty($myaddress_no) || empty($myname_build) || empty($myaddress_type) ) 
{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='register.php'</script>";
  die();
}

if ($myemail != $myemail2 || $mypassword != $mypassword )
{
  echo "<script>alert('Your Email or Password invalid')</script>";
  echo "<script>location.href='register.php'</script>";
  die();
}

include("dbconnect.php");

mysql_select_db("pizzaparadise");
$result= mysql_query("select * from user where (email ='$myemail') ");

$rows=mysql_num_rows($result);
if ($rows>=1)
{
  echo "<script>alert(' This Email worked by member other.')</script>";
  echo "<script>location.href='register.php'</script>";
  die();
}

$number_id = mysql_num_rows(mysql_query("select * from user"));

mysql_query("insert into user values($number_id,'$myemail','$mypassword','member')");

$bdate = $myyear.'-'.$mymonth.'-'.$myday;


mysql_query("insert into member values($number_id,'$myfirstname','$mylastname','$mysex','$bdate','$myphone',0,0)");

mysql_query("insert into address_member values($number_id,'','$myname_build','$myaddress_type','$mypostcode','$myprovince','$myroad','$myaddress_no','$myroom_no','$myfloor','$mynote')");

echo "<script>alert('Register member Successfully , thank you.')</script>";
echo "<script>location.href='index_member.php?key1=$number_id'</script>";

?>