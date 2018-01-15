

<html><style type='text/css'>
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
body,td,th {
	color: #F00;
}
-->
</style>

<center>

<?php 
session_start();
$id_user = $_REQUEST['key1'];

include('dbconnect.php'); //connect phpMyAdmin dedatbase.
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
	?>

<table width="79%" height="363" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="10" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="image\logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td height="57" bgcolor="#00A2E8"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
      <?php
        echo"<th width='51' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user'><img src='image/menu_home_1.png' alt='' width='102' height='38' hspace='0' vspace='5' border='0'></a></th>
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user''><img src='image/menu_all_1.png' width='89' height='38' border='0'></a></th>
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='member_pizza.php?key1=$id_user''><img src='image/menu_pizza_1.png' alt='' width='97' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='240' bgcolor='#00A2E8' scope='col'><a href='member_friedchicken.php?key1=$id_user''><img src='image/menu_friedchicken_1.png' alt='' width='228' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='120' bgcolor='#00A2E8' scope='col'><a href='member_salad.php?key1=$id_user''><img src='image/menu_salad_1.png' alt='' width='120' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_beverage.php?key1=$id_user''><img src='image/menu_beverage_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='404' height='57' bgcolor='#00A2E8' scope='col'><a href='member_icecream.php?key1=$id_user''><img src='image/menu_icecream_1.png' alt='' width='178' height='38'></img></a></th>";
		?>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="44" bgcolor="#66CCCC">
     <?php
    echo"<table width='567' border='0'>
      <tr>
     
        <th width='126' scope='col'><a href='edit_profile.php?key1=$id_user'><img src='image/menu_profile_2.png' width='126' height='38' border='0'></a></th>
        <th width='248' scope='col'><a href='info_change_password.php?key1=$id_user'><img src='image/menu_change_password_1.png' width='248' height='38' border='0'></a></th>
        <th width='179' scope='col'><a href='my_address.php?key1=$id_user'><img src='image/menu_my_address_1.png' width='182' height='38' border='0'></a></th>
		<th width='179' scope='col'><a href='info_add_address.php?key1=$id_user'><img src='image/menu_add_address_1.png' border='0'></a></th>
		
      </tr>
    </table>";
	?>
    
    </td>
  </tr>
  <tr>
	<?php
    $con=mysql_CONNECT('localhost','root','');
	mysql_select_db('pizzaparadise',$con);
	
	$Email = mysql_query("select * from user where (id_member = '$id_user')");
    $result_email = mysql_fetch_array($Email);
	
	$Array = mysql_query("select * from member where (id_member = '$id_user')");
    $result = mysql_fetch_array($Array);
	
	$Address= mysql_query("select * from address_member where (id_member = '$id_user')");
    $result_address = mysql_fetch_array($Address);
 	?>
    <td height="95" bgcolor="#FFFFFF">
    
    <?php
	echo"<form action='update.php?key1=".$id_user."' method='POST'><center>
	<table width='200' border='0'>
  <tr><td><table width='738' align='center'>
  <TR>
        <TD width='126'>&nbsp;</TD>
        <TD width='183'>&nbsp;</TD>
        <TD width='10' height='5'>&nbsp;</TD>
        <TD width='167'>&nbsp;</TD>
        <TD width='231'>&nbsp;</TD>
        </TR>
      <TR>
        <TD colspan='2'><img src='image/pic_register_3.png' width='245' height='65'></TD>
        <TD width='10' rowspan='11'>&nbsp;</TD>
        <TD colspan='2'><img src='image/pic_register_2.png' width='245' height='65'></TD>
        </TR>
      <TR>
        <TD><strong>First Name</strong></TD>
        <TD><INPUT TYPE=text name='firstname' value='$result[1]' ></TD>
        <TD><strong>Post code</strong></TD>
        <TD><input type=text name='postcode' id='postcode'  value='$result_address[4]'></TD>
        </TR>
      <TR>
        <TD><strong>Last Name</strong></TD>
        <TD><INPUT name='lastname' TYPE=text value='$result[2]'></TD>
        <TD><strong>Province</strong></TD>
        <TD><input type=text name='province' id='province' value='$result_address[5]'></TD>
        </TR>
      <TR>
        <TD><strong>Email</strong></TD>
	
        <TD><INPUT name='email' TYPE=text id='email' readonly='readonly' disabled value='$result_email[1]'></TD>
        <TD>Road</TD>
        <TD><input type=text name='road' id='road' value='$result_address[6]'></TD>
        </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD>Address No.</TD>
        <TD><input type=text name='address_no' id='address_no' value='$result_address[7]'></TD>
        </TR>
      <TR>
        <TD><strong>Gender</strong></TD>
        <TD><select name='sex'>";
          	if($result[3]=='M'){
				echo"<option  value='M' selected>Male</option>";
				echo"<option  value='F' >Female</option>";
			}
			else{
				echo"<option  value='M' >Male</option>";
				echo"<option  value='F' selected>Female</option></TD>";
			}
          echo"</select></TD>
        <TD>Name Building</TD>
        <TD><input type=text name='name_build' id='name_build' value='$result_address[2]'></TD>
        </TR>
      <TR>
        <TD><strong>Birth date</strong></TD>
        <TD><?php include('datetime.php') ?></TD>
        <TD>Address Type</TD>
        <TD><select name='address_type' id='address_type'>
          <option value='home' selected>Home</option>
          <option value='office' selected>Office</option>
          </select></TD>
        </TR>
      <TR>
        <TD><strong>Phone</strong></TD>
        <TD><input type=text name='phone' id='phone' value='$result[5]'></TD>
        <TD>Room No.</TD>
        <TD><input type=text name='room_no' id='room_no' value='$result_address[8]'></TD>
        </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD>Floor</TD>
        <TD><input type=text name='floor' id='floor' value='$result_address[9]'></TD>
        </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD>Direction Guide</TD>
        <TD rowspan='2'><textarea name='note' id='note'>$result_address[10]</textarea></TD>
        </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD width='10'>&nbsp;</TD>
        <TD><input type=submit value='Update'></TD>
        <TD><input type=reset value='cancel'></TD>
        </TR>
         
  </table>
  </form>";
  ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
    </center>
</td>
  </tr>
  <tr>
    <td height='10' bgcolor='#FF99CC'>&nbsp;</td>
  </tr>
</table>
<?php 

} else{
   include('dbase.php');
}
?>
</html>