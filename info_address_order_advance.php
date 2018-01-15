

<html><style type="text/css">
<!--
body {
	background-color: #FFF;
	color: #FFF;
	text-align: center;
	background-image: url(wall_pink.jpg);
}
.benznest {
	color: #F00;
}
.benznest td {
	color: #FFF;
}
.xxx {
	text-align: left;
}
-->
</style>

<center>

<?php
session_start();
$id_user = $_REQUEST['key1'];
$my_id_address = $_POST['name_address'];
include("dbconnect.php"); //connect phpMyAdmin dedatbase.
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<table width="79%" height="338" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="5" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="10" rowspan="5" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="image\logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td width="100%" bgcolor="#00A2E8"><?php 
		//Menu for Member
        echo"<table border='0' bgcolor='#00A2E8' width='100%'><th width='51' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user'><img src='image/menu_home_1.png' width='102' 
		height='38' hspace='0' vspace='5' border='0'></a></th>
        
		<th width='97' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user'>
	
        <img src='image/menu_all_1.png' width='89' height='38' border='0'></img></a></th>
		
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='member_pizza.php?key1=$id_user'>
		
        <img src='image/menu_pizza_2.png' alt='' width='97' height='38' hspace='0' vspace='0' border='0'></a></th>
		
        <th width='240' bgcolor='#00A2E8' scope='col'><a href='member_friedchicken.php?key1=$id_user''><img src='image/menu_friedchicken_1.png' alt='' width='228' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='120' bgcolor='#00A2E8' scope='col'><a href='member_salad.php?key1=$id_user''><img src='image/menu_salad_1.png' alt='' width='120' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_beverage.php?key1=$id_user''><img src='image/menu_beverage_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_icecream.php?key1=$id_user''><img src='image/menu_icecream_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>  </table>";
		
		?></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="4%" height="44" scope="col">&nbsp;</th>
        <th width="74%" rowspan="2" scope="col"><?php 
	
		$result= mysql_query("SELECT F.id_food,F.name_food,F.price,B.quantity,B.total 
								 FROM basket B,food F WHERE (B.id_member= $id_user and B.id_food = F.id_food)"); 
			
		echo"	<br><table border='1' bordercolor='red' width='90%'>";
		echo"<tr>
							<th width='10%' bgcolor='pink'><font color='red'><b>Number</b></font></th>";
				echo"		<th bgcolor='pink'><font color='red'><b>Name</b></font></th>";
				echo"		<th bgcolor='pink'><font color='red'><b>Price</b></font></th>";
				echo"		<th bgcolor='pink'><font color='red'><b>Quantity</b></font></th>";
				echo"		<th bgcolor='pink'><font color='red'><b>Total</b></font></th>
				</tr>";
			$pay_total =0;
			$i=1;
        while($row=mysql_fetch_array($result)){

				echo" <tr>";
				echo"		<th><font color='red'><b>$i</b></font></th>";
				$i++;
				echo"		<th><font color='red'><b>$row[1]</b></font></th>";
				echo"		<th><font color='red'> $row[2].-</font></th>";
				echo"		<th><font color='red'> $row[3]</font></th>";
				echo"		<th><font color='red'> $row[4].-</font></th>";
				$pay_total  = $pay_total+ $row[4];
					echo"</tr>";
        }
       echo "</table>
	   <br><br><font color='red'> Total for this Order : $pay_total Bath.<br></font>";
		}
		else{
			echo "<script>location.href='index.php'</script>";
            die();
		}
		
	
		?>
          <?php 
		  	$result_name_address = mysql_query("SELECT id_address_member,name_building FROM address_member WHERE (id_member = '$id_user')"); 
		  
          echo"<form action='info_address_order_advance.php?key1=".$id_user."' method='POST'>
          <table width='65%' border='0'>
            <tr>
              <th width='62%' scope='col'><strong><font color='red'>Select your Address</font></strong></th>
              <th width='38%' scope='col'>
			  <select name='name_address' id='address_name'>";
               while($row_address = mysql_fetch_array($result_name_address)){
                	echo"<option value='$row_address[0]'>$row_address[1]</option>";
			   }
              echo"</select>
                &nbsp; <input type=submit value='   OK   '></th>
            </tr>
            <tr>
              <th colspan='2' scope='col'><font color='gray' size='2'>if you save address with us, your can select old address.</font></th>
              </tr>
          </table>
          </form>";
          ?>
          
          <?php
		  	$result_address = mysql_query("SELECT * FROM address_member WHERE (id_address_member = '$my_id_address')"); 
			$row_data = mysql_fetch_array($result_address);
          
          
          echo"<form action='add_order.php?key1=$id_user&key2=".$pay_total."' method='POST'>
            <table width='413' align='center'>
              <TR>
                <TD colspan='2'><img src='image/pic_register_2.png' width='245' height='65'></TD>
              </TR>
              <TR>
                <TD width='167'><p><font color='red'>Name Building</font></p></TD>
                <TD width='231'><input type=text name='name_build' id='name_build' value='$row_data[2]'></TD>
                </TR>
              <TR>
                <TD><font color='red'>Address Type</font></TD>
                <TD><select name='address_type' id='address_type'>
                  <option value='home'"; if($row_data[3]=='home'){ echo"selected"; } echo">Home</option>
                  <option value='office'"; if($row_data[3]=='office'){ echo"selected"; } echo">Office</option>
                  <option value='other'"; if($row_data[3]=='other'){ echo"selected"; } echo">Other</option>
                </select></TD>
              </TR>
              <TR>
                <TD><strong><font color='red'>Post code</font></strong></TD>
                <TD><input type=text name='postcode' id='postcode' value='$row_data[4]'></TD>
              </TR>
              <TR>
                <TD><strong><font color='red'>Province</font></strong></TD>
                <TD><input type=text name='province' id='province' value='$row_data[5]'>
                  *</TD>
                </TR>
              <TR>
                <TD><font color='red'>Road</font></TD>
                <TD><input type=text name='road' id='road' value='$row_data[6]' ></TD>
                </TR>
              <TR>
                <TD><font color='red'>Address No.</font></TD>
                <TD><input type=text name='address_no' id='address_no'  value='$row_data[7]'>
                  *</TD>
              </TR>
              <TR>
                <TD><font color='red'>Room No.</font></TD>
                <TD><input type=text name='room_no' id='room_no'  value='$row_data[8]'></TD>
              </TR>
              <TR>
                <TD><font color='red'>Floor</font></TD>
                <TD><input name='floor' type='text' id='floor'  value='$row_data[9]'></TD>
                </TR>
              <TR>
                <TD><font color='red'>Direction Guide</font></TD>
                <TD rowspan='2'><textarea name='note' id='note'> $row_data[10]</textarea></TD>
                </TR>
              <TR>
                <TD>&nbsp;</TD>
                </TR>
              <TR>
                <TD><input type=submit value='Submit address'></TD>
                <TD><input type=reset value='cancel'></TD>
                </TR>
              </table>
          </form>";
		  ?>
          <p>&nbsp;</p></th>
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
        <td></td>
        <td bgcolor="#FF9999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FF99CC">&nbsp;</td>
  </tr>
</table>

</html>