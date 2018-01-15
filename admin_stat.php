

<html><style type="text/css">
<!--
body {
	background-color: #FFF;
	color: #F00;
	text-align: center;
	background-image: url(wall_pink.jpg);
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
<table width="79%" height="536" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="10" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="image\logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td height="51" bgcolor="#00A2E8"><?php 
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
		
		?>&nbsp;</td>
  </tr>
  <tr>
    <td height="57" bgcolor="#99FF00"> <?php
        echo"<table width='448' border='0' align='left' cellpadding='0' cellspacing='0'>
          <tr>
            <th width='119' scope='col'><a href='admin.php?key1=$id_user'><img src='image/menu_admin_home.png' width='112' height='38' border='0'></a></th>
            
            <th width='86' scope='col'><a href='admin_stat.php?key1=$id_user'><img src='image/menu_admin_statistic.png' width='141' height='38' border='0'></a></th>
            <th width='130' scope='col'><a href='admin_order.php?key1=$id_user'><img src='image/menu_admin_order.png' width='138' height='38' border='0'></a></th>
			<th width='130' scope='col'><a href='admin_member.php?key1=$id_user'><img src='image/menu_admin_member.png' width='138' height='38' border='0'></a></th>
          </tr>
        </table>";
		?>&nbsp;</td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="6%" height="154" scope="col">&nbsp;</th>
          <th width="87%" rowspan="2" scope="col">
          
          
          <p><img src="image/pic_food_rating.png" width="265" height="65" align="left"></p>
          <p>&nbsp;</p>
          <table width="95%" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#FF0000">
            <tr>
              <th width="10%" scope="col" bgcolor="#FFFF33">number</th>
              <th width="13%" scope="col" bgcolor="#FFFF33">Picture</th>
              <th width="33%" scope="col" bgcolor="#FFFF33">name</th>
              <th width="19%" scope="col" bgcolor="#FFFF33">categories</th>
              <th width="16%" scope="col" bgcolor="#FFFF33">status</th>
              <th width="9%" scope="col" bgcolor="#FFFF33">rating</th>
              </tr>
            <?php
            $result= mysql_query("SELECT F.id_food,F.name_food,C.name_cate,F.status,F.rating
								 FROM food F,categories C
								 WHERE (F.id_cate = C.id_cate and rating > 0) 
								 ORDER BY F.rating DESC LIMIT 10");
            $i=1;
            while($row=mysql_fetch_array($result)){
           echo" <tr>
              <td><center><font size='3'>$i</font></center></td>
              <td><center><font size='3'><img src='image/food/$row[0].jpg' width='50'></img></font></center></td>
              <td><center><font size='3'>$row[1]</font></center></td>
              <td><center><font size='3'>$row[2]</font></center></td>
              <td><center><font size='3'>$row[3]</font></center></td>
			   <td><center><font size='3'>$row[4]</font></center></td>
            </tr>";
			$i++;
           }
           ?>
            
          </table>          </th>
          <th width="7%" rowspan="3" bgcolor="#FFCCCC" scope="col"><table width="200" border="0">
            <tr>
              <th scope="col">&nbsp;</th>
              </tr>
            <tr>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td bgcolor="#FFCCCC">&nbsp;</td>
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