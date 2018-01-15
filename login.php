

<html><style type="text/css">
<!--
body {
	background-color: #F9F;
	color: #FFF;
	text-align: center;
}
.benznest {
	color: #F00;
}
.benznest td {
	color: #FFF;
}
-->
</style>

<title>-THE PIZZA PARADISE- </title><center>

<?php
session_start();
$user_email = $_POST['email'];
$user_password = $_POST['password'];

if (empty($user_email) || empty($user_password)){
  echo "<script>alert('Please check your email or password.')</script>";
  echo "<script>location.href='index2.php'</script>";
  die();			 
}

include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<?php 

$con=mysql_CONNECT('localhost','root','');

mysql_select_db("pizzaparadise",$con);
$result= mysql_query("select * from user where (email ='$user_email' and password ='$user_password') ");

$num_rows=mysql_num_rows($result);
	if ($num_rows<1){
  		echo "<script>alert('Please check your email or password.')</script>";
  		echo "<script>location.href='login_page.php'</script>";
 	 	die();	
	}
	else{
	    $row = mysql_fetch_array($result);
    	if ($row[3]=='admin'){
			echo "<script>alert('Welcome Admin.')</script>";
    	   echo "<script>location.href='index_member.php?key1=" . $row[0] .  "'</script>";
		}
		else{
			echo "<script>alert('Welcome to The Pizza Paradise.')</script>";
    	   echo "<script>location.href='index_member.php?key1=" . $row[0] .  "'</script>";
	     }
    } 
}
else{
   echo "<script>location.href='index.php'</script>";
}

?>
</html>