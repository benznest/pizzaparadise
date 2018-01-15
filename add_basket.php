

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
$myquantity= $_POST['quantity'];

$id_user = $_REQUEST['key1'];
$id_food  = $_REQUEST['key2'];
$price_food = $_REQUEST['key3'];

include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<?php 




$result= mysql_query("SELECT * FROM basket where (id_member=$id_user and id_food = $id_food)");
$num_rows=mysql_num_rows($result);

if($num_rows>0){
	mysql_query("UPDATE basket SET quantity=quantity+'$myquantity',total=total+('$myquantity'*'$price_food') 
													WHERE id_member='$id_user' and id_food = '$id_food'");	
	echo "<script>alert('Success. increase items in your basket.')</script>";
}
else{
	mysql_query("INSERT INTO basket VALUES ('',$id_food, $id_user ,$myquantity,$myquantity*$price_food)");
	echo "<script>alert('Add to basket success.')</script>";
}

echo "<script>location.href='my_basket.php?key1=$id_user'</script>";
}
else{
   echo "<script>location.href='index.php'</script>";
}

?>
</html>