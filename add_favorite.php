<style type="text/css">
<!--
body {
	background-color: #F9F;
}
-->
</style>
<?php
//profile

 $id_user = $_REQUEST['key1'];
 $my_id_food = $_REQUEST['key2'];
 


$con=mysql_CONNECT('localhost','root','');

mysql_select_db("pizzaparadise",$con);
$result= mysql_query("select * from favorite where (id_member = $id_user and id_food= $my_id_food)");

$rows=mysql_num_rows($result);
if ($rows>=1)
{
  echo "<script>alert(' You have this item already exists! ')</script>";
  echo "<script>location.href='my_favorite.php?key1=$id_user'</script>";
  die();
}

mysql_query("insert into favorite values('',$my_id_food,$id_user)");

echo "<script>alert('Add item to My favorite success.')</script>";
echo "<script>location.href='my_favorite.php?key1=$id_user'</script>";

?>