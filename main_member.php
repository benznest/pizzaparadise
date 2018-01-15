

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
-->
</style>

<center>

<?php
session_start();

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
    <td height="57" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="51" bgcolor="#00A2E8" scope="col"><a href="member_index.php"><img src="image/menu_home_1.png" alt="" width="102" height="38" hspace="0" vspace="5" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="member_index.php"><img src="image/menu_all_2.png" width="89" height="38" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="member_pizza.php"><img src="image/menu_pizza_1.png" alt="" width="97" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="240" bgcolor="#00A2E8" scope="col"><a href="member_friedchicken.php"><img src="image/menu_friedchicken_1.png" alt="" width="228" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="120" bgcolor="#00A2E8" scope="col"><a href="member_salad.php"><img src="image/menu_salad_1.png" alt="" width="120" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="170" bgcolor="#00A2E8" scope="col"><a href="member_beverage.php"><img src="image/menu_beverage_1.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="404" height="57" bgcolor="#00A2E8" scope="col"><a href="member_icecream"><img src="image/menu_icecream_1.png" width="178" height="38" border="0"></a></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF">&nbsp;</td>
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