<style type="text/css">
<!--
body {
	background-color: #F9F;
}
-->
</style>
<?php
$id_user = $_REQUEST['key1'];
$pay_total = $_REQUEST['key2'];
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

 

if (empty($mypostcode) || empty($myprovince) || empty($myroad) || empty($myaddress_no) || empty($myname_build) || empty($myaddress_type) ) 
{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='info_address_order.php'</script>";
  die();
}


$con=mysql_CONNECT('localhost','root','');

mysql_select_db("pizzaparadise",$con);
$result= mysql_query("select * from basket where (id_member = $id_user) ");
$count_quantity = 0;
 while($row_basket = mysql_fetch_array($result)){
	mysql_query("INSERT INTO order_list VALUES('',$row_basket[1],$row_basket[2],$row_basket[3],$row_basket[4],
																								 (SELECT COUNT(*) FROM address_order),'senting')");
    $count_quantity = $count_quantity + $row_basket[3];
 }

$result_id_address= mysql_query("select id_address_order from order_list where id_member = $id_user ORDER BY id_address_order DESC");
$rowz= mysql_fetch_array($result_id_address);

mysql_query("INSERT INTO address_order VALUES($rowz[0],$id_user,$count_quantity,$pay_total,(SELECT CURRENT_TIMESTAMP),'$myname_build','$myaddress_type','$mypostcode','$myprovince','$myroad','$myaddress_no','$myroom_no','$myfloor','$mynote','senting')");


mysql_query("DELETE FROM basket WHERE id_member = $id_user");

echo "<script>alert('Order Successfully , thank you.')</script>";
echo "<script>location.href='member_thank_you.php?key1=$id_user'</script>";

?>