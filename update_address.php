<?php


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

$id_user= $_REQUEST['key1'];
$my_id_address = $_REQUEST['key2'];

$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);

mysql_query("update address_member set postcode ='$mypostcode' ,province = '$myprovince' , road ='$myroad',address_no='$myaddress_no' , name_building = '$myname_build' , address_type ='$myaddress_type' , room_no ='$myroom_no' ,floor ='$myfloor' , note ='$mynote' 
			where (id_member = '$id_user' and id_address_member = $my_id_address)");

echo "<script>alert('Successfully Updated')</script>";
echo "<script>location.href='my_address.php?key1=$id_user'</script>";

?>