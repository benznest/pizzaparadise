

<html><style type="text/css">
<!--
body {
	background-color: #FFF;
	color: #F00;
	text-align: center;
	background-image: url(wall_pink.jpg);
}
.stly2 {
	text-align: center;
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
<table width="67%" height="338" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="5" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="41" rowspan="5" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="image\logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td height="57" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th height="57" bgcolor="#00A2E8" scope="col"><?php 
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
		
		?></th>
        </tr>
      <tr>
        <th height="57" bgcolor="#99FF00" scope="col">
        <?php
        echo"<table width='448' border='0' align='left' cellpadding='0' cellspacing='0'>
          <tr>
            <th width='119' scope='col'><a href='admin.php?key1=$id_user'><img src='image/menu_admin_home.png' width='112' height='38' border='0'></a></th>
            <th width='86' scope='col'><a href='admin_stat.php?key1=$id_user'><img src='image/menu_admin_statistic.png' width='141' height='38' border='0'></a></th>
            <th width='130' scope='col'><a href='admin_order.php?key1=$id_user'><img src='image/menu_admin_order.png' width='138' height='38' border='0'></a></th>
			<th width='130' scope='col'><a href='admin_member.php?key1=$id_user'><img src='image/menu_admin_member.png' width='138' height='38' border='0'></a></th>
          </tr>
        </table>";
		?>
        
        
        </th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="6%" scope="col">&nbsp;</th>
          <th width="87%" rowspan="4" scope="col"><p>
              <br>
              <?php
         echo" <form action='admin_search.php?key1=$id_user' method='post'>
            <table width='200' border='0' align='center'>
            <tr>
              <th colspan='3' scope='col'><img src='image/pic_search.png' width='161' height='44' align='left'></th>
              </tr>
            <tr>
              <td><select name='search_type'>
                <option value='member'>Member</option>
                <option value='food' selected>Food</option>
              </select></td>
              <td><input type=text name='data'></td>
              <td><input type=submit value='   search   '></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          </form>";
		  
		  ?>
            </p>
            <table width="90%" border="0">
              <tr>
                <th scope="col"><img src="image/pic_statistic.png" width="251" height="65" align="left"></th>
              </tr>
              <tr>
                <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0099FF">
                  <tr class="stly2">
                    <td width="132" bgcolor="#FFFF66"><b>Year</b></td>
                    <td width="172" bgcolor="#FFFF66"><b>Total Sell/<b></td>
                    <td width="172" bgcolor="#FFFF66"><b>Total Quantity</b></td>
                    <td width="155" bgcolor="#FFFF66"><b>Total benefi</b>t</td>
                  </tr>
                  
                  <?php
				  
				  $result = mysql_query("select * from statistic");
				  while($row=mysql_fetch_array($result)){
                  echo"<tr>
                    <td><center>$row[0] </ceneter></td>
                    <td><center>$row[1] Bath.</ceneter></td>
                    <td><center>$row[2] item.</ceneter></td>
                    <td><center>$row[3] Bath.</ceneter></td>
                  </tr>";
				  }
                  ?>
                  
                </table></td>
              </tr>
            </table>
          <p>&nbsp;</p></th>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table></td>
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