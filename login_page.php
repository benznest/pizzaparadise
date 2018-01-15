

<html><style type="text/css">
<!--
body {
	background-color: #FFF;
	color: #FFF;
	text-align: left;
	background-image: url(wall_pink.jpg);
}
.benznest {
	color: #F00;
}
.benznest td {
	color: #FFF;
}
.benznest1 {	color: #FFF;
}
.style-1 {	text-align: left;
}
.style-1 {
	color: #FFF;
	text-align: center;
}
.style-1 {
	font-weight: bold;
	text-align: center;
}
a:link {
	color: #FFC;
}
a:visited {
	color: #FFC;
}
a:hover {
	color: #FFC;
}
-->
</style>

<center>

<?php
session_start();

include("dbconnect.php"); //connect phpMyAdmin dedatbase.
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<table width="62%" height="262" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="5" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="10" rowspan="5" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="image\logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td height="57" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="51" bgcolor="#00A2E8" scope="col"><a href="index.php"><img src="image/menu_home_1.png" alt="" width="102" height="38" hspace="0" vspace="5" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="index2.php"><img src="image/menu_all_1.png" width="89" height="38" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="pizza.php"><img src="image/menu_pizza_1.png" alt="" width="97" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="240" bgcolor="#00A2E8" scope="col"><a href="friedchicken.php"><img src="image/menu_friedchicken_1.png" alt="" width="228" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="120" bgcolor="#00A2E8" scope="col"><a href="salad.php"><img src="image/menu_salad_1.png" alt="" width="120" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="170" bgcolor="#00A2E8" scope="col"><a href="beverage.php"><img src="image/menu_beverage_1.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="404" height="57" bgcolor="#00A2E8" scope="col">&nbsp;</th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" bgcolor="#FF9999"><p>&nbsp;</p>
      <form action="login.php" method='POST'>
        <table width="342" border="0" align="center" cellpadding="4" cellspacing="4">
          <tr>
            <th colspan="2" bgcolor="#FF9999" scope="col"><br>
            <img src="image/login_banner.png" width="321" height="73"></th>
          </tr>
          <tr>
            <th width="170" bgcolor="#FF9999" scope="col">E-<span class="benznest1">m</span>ail</th>
            <th width="144" bgcolor="#FF9999" scope="col"><input type=text name='email' id="email" ></th>
          </tr>
          <tr>
            <td bgcolor="#FF9999" class="style-1">Password</td>
            <td bgcolor="#FF9999"><input type=password name='password' id="password" ></td>
          </tr>
          <tr>
            <td bgcolor="#FF9999" class="style-1"><a href="register.php">register</a></td>
            <td bgcolor="#FF9999" class="style-1"><input type=submit value='Login'>
              <input type=reset value='cancel'></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FF99CC">&nbsp;</td>
  </tr>
</table>
<?php 

} else{
   include("dbase.php");
}
?>
</html>