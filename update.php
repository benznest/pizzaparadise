<?php

//profile
$myfirstname = $_POST['firstname'];
$mylastname = $_POST['lastname'];

$mysex = $_POST['sex'];

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

$key1 = $_REQUEST['key1'];

$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);

mysql_query("update member set Fname='$myfirstname', Lname='$mylastname', sex='$mysex', phone ='$myphone',post_code ='$mypostcode' ,
			province = '$myprovince' , road ='$myroad',address_no='$myaddress_no' , name_building = '$myname_build' ,
			address_type ='$myaddress_type' , room_no ='$myroom_no' ,floor ='$myfloor' , note ='$mynote' where id_member = '$key1'");



echo "<script>alert('Successfully Updated')</script>";
echo "<script>location.href='edit_profile.php?key1=". $key1 ."'</script>";

?>