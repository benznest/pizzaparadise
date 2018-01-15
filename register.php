

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
body,td,th {
	color: #F00;
	text-align: left;
}
-->
</style>

<title>-THE PIZZA PARADISE- </title><center>
<p>
  <?php
session_start();

include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
</p>
<table width="379" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th bgcolor="#FFFFFF" scope="col">&nbsp;</th>
    <th bgcolor="#FFFFFF" scope="col"><img src="image/logo1.png" width="804" height="146"></th>
    <th bgcolor="#FFFFFF" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col">&nbsp;</th>
    <th bgcolor="#00A2E8" scope="col"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="51" bgcolor="#00A2E8" scope="col"><a href="index.php"><img src="image/menu_home_1.png" alt="" width="102" height="38" hspace="0" vspace="5" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="index2.php"><img src="image/menu_all_1.png" width="89" height="38" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="pizza.php"><img src="image/menu_pizza_1.png" alt="" width="97" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="240" bgcolor="#00A2E8" scope="col"><a href="friedchicken.php"><img src="image/menu_friedchicken_1.png" alt="" width="228" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="120" bgcolor="#00A2E8" scope="col"><a href="salad.php"><img src="image/menu_salad_1.png" alt="" width="120" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="170" bgcolor="#00A2E8" scope="col"><a href="beverage.php"><img src="image/menu_beverage_1.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
         <th width="170" bgcolor="#00A2E8" scope="col"><a href="icecream.php"><img src="image/menu_icecream_1.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
        
        
        <th width="404" height="57" bgcolor="#00A2E8" scope="col">&nbsp;</th>
      </tr>
    </table></th>
    <th bgcolor="#FFFFFF" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><form action='add.php' method='POST'><center>
<table width="200" border="0">
  <tr>
    <th bgcolor="#FFFFFF" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col"><img src="image/pic_register_1.png" width="796" height="66"></th>
  </tr>
  <tr>
    <td><table width="738" align="center">
      <TR>
        <TD width="126">&nbsp;</TD>
        <TD width="183">&nbsp;</TD>
        <TD width="10" height="5">&nbsp;</TD>
        <TD width="167">&nbsp;</TD>
        <TD width="231">&nbsp;</TD>
      </TR>
      <TR>
        <TD colspan="2"><img src="image/pic_register_3.png" width="245" height="65"></TD>
        <TD width="10" rowspan="11">&nbsp;</TD>
        <TD colspan="2"><img src="image/pic_register_2.png" width="245" height="65"></TD>
        </TR>
      <TR>
        <TD><strong>First Name</strong></TD>
        <TD><INPUT TYPE=text name='firstname' >          *          </TD>
        <TD>Name Building</TD>
        <TD>          <input type=text name='name_build' id="name_build" >
          *<br>
          example: home&nbsp;daring </TD>
      </TR>
      <TR>
        <TD><strong>Last Name</strong></TD>
        <TD><INPUT name='lastname' TYPE=text >
          *</TD>
        <TD><strong>Address Type</strong></TD>
        <TD>          <select name='address_type' id="address_type">
          <option value='home' selected>Home</option>
          <option value='office' selected>Office</option>
          <option value='other' selected>Other</option>
        </select>
          *</TD>
      </TR>
      <TR>
        <TD><strong>Email</strong></TD>
        <TD><INPUT name='email' TYPE=text id="email" >
          *</TD>
        <TD>Road</TD>
        <TD><input type=text name='road' id="road" ></TD>
      </TR>
      <TR>
        <TD><strong>Confirm-email</strong></TD>
        <TD><INPUT name='c_email' TYPE=text id="c_email" >
          *</TD>
        <TD>Address No.</TD>
        <TD><input type=text name='address_no' id="address_no" >
          *</TD>
      </TR>
      <TR>
        <TD><strong>Password</strong></TD>
        <TD><INPUT name='password' TYPE=password id="password" >
          *</TD>
        <TD><strong>Post code</strong></TD>
        <TD><input type=text name='postcode' id="postcode" >
          *</TD>
      </TR>
      <TR>
        <TD><strong>Confirm-password</strong></TD>
        <TD><INPUT name='c_password' TYPE=password id="c_password" >
          *</TD>
        <TD><strong>Province</strong></TD>
        <TD><input type=text name='province' id="province" >
          *</TD>
      </TR>
      <TR>
        <TD><strong>Gender</strong></TD>
        <TD><select name='sex'>
          <option value='M' selected>Male</option>
          <option value='F' selected>Female</option>
        </select>
          *</TD>
        <TD>Room No.</TD>
        <TD><input type=text name='room_no' id="room_no" ></TD>
      </TR>
      <TR>
        <TD><strong>Birth date</strong></TD>
        <TD><?php include("datetime.php") ?></TD>
        <TD>Floor</TD>
        <TD><input name="floor" type="text" id="floor" value=""></TD>
      </TR>
      <TR>
        <TD><strong>Phone</strong></TD>
        <TD><input type=text name='phone' id="phone" >
          *</TD>
        <TD>Direction Guide</TD>
        <TD rowspan="2"><textarea name="note" id="note"></textarea></TD>
      </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
      </TR>
      <TR>
        <TD>&nbsp;</TD>
        <TD>&nbsp;</TD>
        <TD width="10">&nbsp;</TD>
        <TD><input type=submit value='Register'></TD>
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
</form>&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<p>&nbsp; </p>
 <?php 

} else{
   	header("Location: index.php");
}

?>
</html>