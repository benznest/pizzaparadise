

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
.style2 {
	text-align: left;
}
.style2 {
	color: #F00;
}
.style3 {
	color: #F00;
}
-->
</style>

<center>

<?php
session_start();
$id_user = $_REQUEST['key1'];
include("dbconnect.php"); //connect phpMyAdmin dedatbase.
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<table width="79%" height="338" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="10" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
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
		
        <img src='image/menu_pizza_1.png' alt='' width='97' height='38' hspace='0' vspace='0' border='0'></a></th>
		
        <th width='240' bgcolor='#00A2E8' scope='col'><a href='member_friedchicken.php?key1=$id_user''><img src='image/menu_friedchicken_1.png' alt='' width='228' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='120' bgcolor='#00A2E8' scope='col'><a href='member_salad.php?key1=$id_user''><img src='image/menu_salad_1.png' alt='' width='120' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_beverage.php?key1=$id_user''><img src='image/menu_beverage_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_icecream.php?key1=$id_user''><img src='image/menu_icecream_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>  </table>";
		
		?></td>
  </tr>
  <tr>
    <td bgcolor="#66CCCC">
     <?php
    echo"<table width='567' border='0'>
      <tr>
     
        <th width='126' scope='col'><a href='edit_profile.php?key1=$id_user'><img src='image/menu_profile_1.png' width='126' height='38' border='0'></a></th>
        <th width='248' scope='col'><a href='info_change_password.php?key1=$id_user'><img src='image/menu_change_password_1.png' width='248' height='38' border='0'></a></th>
        <th width='179' scope='col'><a href='my_address.php?key1=$id_user'><img src='image/menu_my_address_1.png' width='182' height='38' border='0'></a></th>
		<th width='179' scope='col'><a href='info_add_address.php?key1=$id_user'><img src='image/menu_add_address_2.png' border='0'></a></th>
		
      </tr>
    </table>";
	?>
    
    </td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="4%" height="44" scope="col">&nbsp;</th>
        <th width="74%" rowspan="2" scope="col">
        <?php
        echo"<form action='add_new_address.php?key1=$id_user' method='POST'><center>";
		?>
<table width="200" border="0">
  <tr>
    <th bgcolor="#FFFFFF" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td><table width="738" align="center">
      <TR>
        <TD width="20" height="5">&nbsp;</TD>
        <TD width="165">&nbsp;</TD>
        <TD width="537">&nbsp;</TD>
        </TR>
      <TR>
        <TD width="20" rowspan="11">&nbsp;</TD>
        <TD colspan="2"><img src="image/pic_add_address.png" width="306" height="65"></TD>
        </TR>
      <TR>
        <TD class="style2">Name Building</TD>
        <TD><input type=text name='name_build' id="name_build" >
          <span class="style3">        * </span></TD>
      </TR>
      <TR>
        <TD class="style2">Address Type</TD>
        <TD><select name='address_type' id="address_type">
          <option value='home' selected>Home</option>
          <option value='office' selected>Office</option>
          <option value='other' selected>Other</option>
        </select>
          <span class="style3"> *</span></TD>
      </TR>
      <TR>
        <TD class="style2"><strong>Post code</strong></TD>
        <TD><input type=text name='postcode' id="postcode" >
          <span class="style3">*</span></TD>
        </TR>
      <TR>
        <TD class="style2"><strong>Province</strong></TD>
        <TD><input type=text name='province' id="province" >          <span class="style3">*</span></TD>
        </TR>
      <TR>
        <TD class="style2">Road</TD>
        <TD><input type=text name='road' id="road" ></TD>
        </TR>
      <TR>
        <TD class="style2">Address No.</TD>
        <TD><input type=text name='address_no' id="address_no" >          <span class="style3">*</span></TD>
      </TR>
      <TR>
        <TD class="style2">Room No.</TD>
        <TD><input type=text name='room_no' id="room_no" ></TD>
      </TR>
      <TR>
        <TD class="style2">Floor</TD>
        <TD><input name="floor" type="text" id="floor" value=""></TD>
        </TR>
      <TR>
        <TD class="style2">Direction Guide</TD>
        <TD rowspan="2"><textarea name="note" id="note"></textarea></TD>
        </TR>
      <TR>
        <TD>&nbsp;</TD>
        </TR>
      <TR>
        <TD width="20">&nbsp;</TD>
        <TD><input type=submit value='Add Address'></TD>
        <TD><input type=reset value='cancel'></TD>
        </TR>
      </table></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
    </center>
</form>
        
        
        </th>
   
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
			
			";
			
}
?>
          </th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td bgcolor="#FF9999">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FF9999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FF99CC">&nbsp;</td>
  </tr>
</table>

</html>