

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
$my_id_food = $_REQUEST['key2'];



include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<?php 

$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);


mysql_query("DELETE FROM basket where (id_food = $my_id_food and id_member =$id_user)");
echo "<script>location.href='info_basket_page.php?key1=".$id_user."&key2=".$my_id_food."'</script>";
}
else{
   echo "<script>location.href='index.php'</script>";
}

?>
</html>