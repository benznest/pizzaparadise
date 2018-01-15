

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

<center>

<?php
session_start();


$id_user      = $_REQUEST['key1'];
$my_id_address = $_REQUEST['key2'];

include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<?php 

$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);


mysql_query("DELETE FROM address_member where (id_address_member = $my_id_address)");
echo "<script>alert('remove address success.')</script>";


echo "<script>location.href='my_address.php?key1=$id_user'</script>";
}
else{
   echo "<script>location.href='index.php'</script>";
}

?>
</html>