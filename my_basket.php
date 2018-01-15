

<html><style type="text/css">
<!--
body {
	background-color: #F9F;
	color: #FFF;
	text-align: center;
	background-image: url(image/wall_pink.jpg);
}
.benznest {
	color: #FFF;
}
.benznest td {
	color: #FFF;
	text-align: center;
}
body,td,th {
	color: #FFF;
	text-align: center;
}
body table tr td table tr th table tr td strong {
	text-align: left;
}
td {
	font-weight: bold;
}
table {
	color: #FFF;
}
table {
	color: #FFF;
}
th {
	color: #FFF;
}
.style-1 {
	text-align: left;
}
.style-1 {
	color: #FFF;
}
-->
</style>

<link href="piz.css" rel="stylesheet" type="text/css">
<center>

<?php
session_start();
include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
	
	$id_user = $_REQUEST['key1'];
	
       include("dbconnect.php");
		$db_found = mysql_select_db('pizzaparadise');
		if ($db_found) {
			$con=mysql_CONNECT('localhost','root','');
			mysql_select_db("pizzaparadise",$con);
			
			
	
?>
<table width="80%" height="344" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="4" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="5" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="815" height="148" bgcolor="#FFFFFF" scope="col"><img src="image/logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <th height="57" bgcolor="#FFFFFF" scope="col"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
	  <?php 
        echo"<th width='51' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user'>
        <img src='image/menu_home_1.png' alt='' width='102' height='38' hspace='0' vspace='5' border='0'></a></th>
        
		<th width='97' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user'>
	
        <img src='image/menu_all_2.png' width='89' height='38' border='0'></a></th>
		
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='member_pizza.php?key1=$id_user'>
		
        <img src='image/menu_pizza_1.png' alt='' width='97' height='38' hspace='0' vspace='0' border='0'></a></th>
		
        <th width='240' bgcolor='#00A2E8' scope='col'><a href='member_friedchicken.php?key1=$id_user'><img src='image/menu_friedchicken_1.png' alt='' width='228' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='120' bgcolor='#00A2E8' scope='col'><a href='member_salad.php?key1=$id_user'><img src='image/menu_salad_1.png' alt='' width='120' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_beverage.php?key1=$id_user'><img src='image/menu_beverage_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>
		 <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_icecream.php?key1=$id_user''><img src='image/menu_icecream_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th> ";
		
		?>
        <th width="404" height="57" bgcolor="#00A2E8" scope="col">&nbsp;</th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td height="82" bgcolor="#FFFFFF">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="4%" height="44" scope="col">&nbsp;</th>
        <th width="74%" rowspan="2" bgcolor="#FFFFFF" scope="col"><?php 
		
		echo"<table width='200' border='0' align='left'>
  <tr>
    <th scope='col'><img src='image/pic_basket.png'></th>
  </tr>
</table><br><br><br><br>";
		
		    $total_pay = 0;
			$result= mysql_query("select B.id_food,F.name_food,B.quantity,B.total,B.id_basket,F.price from basket B,food F 
								  where (B.id_member=$id_user and B.id_food = F.id_food)");
		$num_rows=mysql_num_rows($result);

		echo"<table border='0'>";
		if($num_rows>0){
        while($row=mysql_fetch_array($result)){
				echo" <tr>";
				echo"<th><img src='image/food/$row[0].jpg' width='100'></img></th>";
            	echo"<th width='400'> ";
				echo"		<table  width='100%'>";
				echo"		<tr><td><b><font color='red' size='4'>$row[1]</font></b></td></tr>";
				echo"		<tr><td><font color='red' size='2'>Price  :  $row[5] .-</font></td></tr>";
				echo"		<tr><td><font color='red' size='2'>Quantity  :  $row[2]</font></td></tr>";
				echo"		<tr><td><font color='red' size='2'>Total : $row[3] .-</font></td></tr>";
				$total_pay += $row[3];
				//echo"		<tr><td><a href='login_page.php'><img src='image/bt_login.png' border=0></img></a></td></tr>";
				echo"		</table>";
				echo"</th>
				<th><a href='remove_basket.php?key1=".$row[4]."&key2=".$id_user."'>
				<img src='image/bt_remove.png' border='0'></img></a>
				
				<font color='red'><a href='edit_basket.php?key1=".$id_user."&key2=".$row[0]."'>
				<img src='image/bt_edit_item.png' border='0'></img></a></font></th>
				</tr>";
            	//echo"<th width='100'></th>";

        }
				echo"<tr><th></th>
				<th><font color='red' size='5'>Total : $total_pay .-</font></th>
				</tr>";
				echo"<tr><th><form action='submit_order.php?key1=".$id_user."' method='POST'>
				<input type=submit value='Submit'>
				</form></th></tr>";
			}
			else{
				echo"<tr><th></th>
				<th><center><font color='red' size='5'>You don't have items in basket.</font></center></th>
				</tr>";
				echo"<tr><th></th></tr>";
			}
			echo "</table>";
		}
		else{
			echo "<script>location.href='index.php'</script>";
            die();
		}
		?>
          &nbsp;</th>
        <th width="22%" bgcolor="#FF9999" scope="col"><?php 
			$result = mysql_query("select * from user where (id_member  =$id_user)");
		    $member =mysql_fetch_array($result);
			echo "<br><br>$member[1]";
			$result = mysql_query("select Fname,Lname,point from member where (id_member  =$id_user)");
		    $member =mysql_fetch_array($result);
			echo "<br>$member[0] $member[1] <br> Point : $member[2]
			<br><a href='edit_profile.php?key1=$id_user'><img src='image/bt_edit.png' alt='' border='0'></img></a>
			<br><a href='my_favorite.php?key1=$id_user'><img src='image/bt_favorite.png' alt='' border='0'></img></a>
            <br><a href='my_basket.php?key1=$id_user'><img src='image/bt_basket.png' alt='' border='0'></img></a>
			<br><a href='index2.php'><img src='image/bt_logout.png' alt='' border='0'></img></a>
			
			";?>
		</th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td bgcolor="#FF9999">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FF9999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FF99CC">&nbsp;</td>
  </tr>
</table>
<p>
  <?php 

} else{
   echo "<script>location.href='index.php'</script>";
}

?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</html>