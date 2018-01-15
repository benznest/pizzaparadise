

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

<title>THE PIZZA PARADISE- </title><center>

<?php
session_start();

$my_id_basket = $_REQUEST['key1'];
$id_user      = $_REQUEST['key2'];


include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<?php 

$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);


mysql_query("DELETE FROM basket where (id_basket = $my_id_basket)");
echo "<script>alert('remove items success.')</script>";


echo "<script>location.href='my_basket.php?key1=$id_user'</script>";
}
else{
   echo "<script>location.href='index.php'</script>";
}

?>
</html>