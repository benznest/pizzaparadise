<?php
//profile
$my_address_type= $_POST['address_type'];

$id_user = $_REQUEST['key1'];
$id_address_order = $_REQUEST['key2'];


$con=mysql_CONNECT('localhost','root','');
mysql_select_db("pizzaparadise",$con);

mysql_query("update address_order set status= '$my_address_type'
			where (id_address_order = $id_address_order)");

echo "<script>alert('Successfully Updated')</script>";
echo "<script>location.href='admin_order.php?key1=$id_user'</script>";


	mysql_query("update order_list set status = '$my_address_type'
				where (id_address_order = $id_address_order)
	");


		

if($my_address_type == 'complete'){
$result = mysql_query("select id_food,quantity,total from order_list
					  where (id_address_order = $id_address_order)");

  while($row=mysql_fetch_array($result)){
	mysql_query("update food set rating = rating+$row[1]
				where (id_food = $row[0])
					  "); 
	
	$benefit = $row[2]*0.2;
	mysql_query("update statistic set total_sell= total_sell + $row[2],
			   total_quantity =  total_quantity + $row[1],
			   total_benefit =  total_benefit + $benefit 
               where ( year = 2557)");
  }
  
  
  
  
}




?>