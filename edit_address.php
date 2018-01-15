

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

<title>-THE PIZZA PARADISE- </title><center>

<?php 
session_start();
$id_user = $_REQUEST['key1'];
$my_id_address = $_POST['name_address'];

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
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user''><img src='image/menu_all_2.png' width='89' height='38' border='0'></a></th>
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
     
        <th width='126' scope='col'><a href='edit_profile.php?key1=$id_user'><img src='image/menu_profile.png' width='126' height='38' border='0'></a></th>
        <th width='248' scope='col'><a href='change_password.php?key1=$id_user'><img src='image/menu_change_password.png' width='248' height='38' border='0'></a></th>
        <th width='179' scope='col'><a href='my_address.php?key1=$id_user'><img src='image/menu_my_address.png' width='182' height='38' border='0'></a></th>
		<th width='179' scope='col'><a href='add_address.php?key1=$id_user'><img src='image/menu_add_address.png' border='0'></a></th>
		
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
			$result_address = mysql_query("SELECT * FROM address_member WHERE (id_address_member = '$my_id_address')"); 
			$row_data = mysql_fetch_array($result_address);
          
          
          echo"<form action='update_address.php?key1=".$id_user."&key2=".$my_id_address."' method='POST'>
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