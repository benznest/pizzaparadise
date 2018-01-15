

<html><style type="text/css">
<!--
body {
	background-color: #FFF;
	color: #FFF;
	text-align: center;
	background-image: url(/wall_pink.jpg);
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

include("../dbconnect.php"); //connect phpMyAdmin dedatbase.
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
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="/image/logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td height="57" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="51" bgcolor="#00A2E8" scope="col"><a href="/index.php"><img src="/image/menu_home_1.png" alt="" width="102" height="38" hspace="0" vspace="5" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="../index2.php"><img src="/image/menu_all_1.png" width="83" height="38" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="../pizza.php"><img src="/image/menu_pizza_1.png" alt="" width="97" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="240" bgcolor="#00A2E8" scope="col"><a href="../friedchicken.php"><img src="/image/menu_friedchicken_1.png" alt="" width="228" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="120" bgcolor="#00A2E8" scope="col"><a href="../salad.php"><img src="/image/menu_salad_1.png" alt="" width="120" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="170" bgcolor="#00A2E8" scope="col"><a href="../beverage.php"><img src="/image/menu_beverage_1.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="404" height="57" bgcolor="#00A2E8" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="57" colspan="7" bgcolor="#99FF00" scope="col"><table width="448" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <th width="119" scope="col"><a href="admin_food_manager.php"><img src="/image/menu_admin_food_manager.png" width="112" height="38" border="0"></a></th>
            <th width="113" scope="col"><img src="/image/menu_admin_member_manager.png" width="119" height="38"></th>
            <th width="86" scope="col"><img src="/image/menu_admin_statistic.png" width="141" height="38"></th>
            <th width="130" scope="col"><img src="/image/menu_admin_order.png" width="138" height="38"></th>
          </tr>
        </table></th>
        </tr>
      <tr>
        <td height="5" colspan="7" bgcolor="#00A2E8" scope="col">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF"><table width="228" height="141" border="0" cellpadding="0" cellspacing="0">
        <tr>
        <th width="6" height="61" bgcolor="#00A2E8" scope="col"><img src="/image/menu_insert_food_1.png" width="228" height="61"></th>
      </tr>
      <tr>
        <td bgcolor="#00A2E8"><img src="/image/menu_edit_food_1.png" width="228" height="61"></td>
      </tr>
      <tr>
        <td bgcolor="#00A2E8"><img src="/image/menu_search_food_1.png" width="228" height="61"></td>
      </tr>
      <tr>
        <td bgcolor="#00A2E8">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FF99CC">&nbsp;</td>
  </tr>
</table>
<?php 

} else{
   include("../dbase.php");
}
?>
</html>