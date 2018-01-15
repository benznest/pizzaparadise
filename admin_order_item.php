

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

<title>-THE PIZZA PARADISE- </title><center>

<?php

session_start();

	$id_user = $_REQUEST['key1'];
	$my_id_address_order = $_REQUEST['key2'];
	$total_pay = $_REQUEST['key3'];
	
	
include("dbconnect.php"); //connect phpMyAdmin dedatbase.
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
?>
<table width="79%" height="474" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="8" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="10" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="804" height="148" bgcolor="#FFFFFF" scope="col"><img src="image\logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <td height="43" bgcolor="#00A2E8"><?php 
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
		?></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="6%" scope="col">&nbsp;</th>
          <th width="87%" rowspan="2" scope="col"><table width="95%" border="0">
            <tr>
              <th scope="col"><img src="image/pic_detail.png" width="251" height="65" align="left"></th>
            </tr>
            <tr>
              <th scope="col"><p>&nbsp;</p>
              <?php
             echo" <form action='change_status_order.php?key1=".$id_user."&key2=".$my_id_address_order."' method='post'>
                <table width='353' border='0' align='center'>
                <tr>
                  <th scope='col'>Pay Total </th>
                  <th scope='col'><?php echo'$total_pay'; ?> Bath.</th>
                  <th scope='col'>&nbsp;</th>
                </tr>
                <tr>
                    <th width='88' scope='col'>Status</th>
                    <th width='126' scope='col'><select name='address_type' id='address_type'>
                      <option value='senting'>Senting</option>
                      <option value='problem' >Problem</option>
                      <option value='cancelld' >Cancelled</option>
                      <option value='complete' >Complete</option>
                    </select></th>
                    <th width='125' scope='col'><input type=submit value='    Update    '></th>
                  </tr>
                </table>
                </form>";
                ?>
                <p>
                <?php
                $result2= mysql_query("SELECT name_building,address_type,postcode,province,road,address_no,room_no,floor,note
								 FROM address_order
								 WHERE (id_address_order= $my_id_address_order)");
                  $rower = mysql_fetch_array($result2);
               
                  echo"<textarea name='address_order' rows='10' >$rower[0] ($rower[1]) $rower[2] , $rower[3] , road $rower[4] address No. $rower[5] ,room $rower[6] floor $rower[7]</textarea>";
				  
                  echo"<br><font size='4'>Note : </font><br><textarea name='address_order' rows='5' >$rower[8]</textarea>";
				  ?>
                </p></th>
              </tr>
            <tr>
              <th scope="col"><img src="image/pic_order.png" width="251" height="65" align="left"></th>
            </tr>
            <tr>
              <td><table width="100%" border="1" align="center" cellpadding="10" cellspacing="0" bordercolor="#FF0000">
                <tr>
                  <th width="10%" scope="col" bgcolor="#FFFF33">Number</th>
                  <th width="27%" scope="col" bgcolor="#FFFF33">Picture</th>
                  <th width="26%" scope="col" bgcolor="#FFFF33">Name food</th>
                  <th width="14%" scope="col" bgcolor="#FFFF33">Quantity</th>
                  <th width="16%" scope="col" bgcolor="#FFFF33">Total</th>
                  <th width="16%" scope="col" bgcolor="#FFFF33">Status</th>
                </tr>
                <?php
			
            $result= mysql_query("SELECT L.id_food,F.name_food,L.quantity,L.total,L.status_order
								 FROM order_list L,food F
								 WHERE (L.id_address_order = $my_id_address_order and L.id_food = F.id_food) 
								 ");
            $i=1;
            while($row=mysql_fetch_array($result)){
           echo" <tr>
              <td><center><font size='2'>$i</font></center></td>
              <td><center><font size='2'><img src='image/food/$row[0].jpg' width='50'></img></font></center></td>
              <td><center><font size='2'>$row[1]</font></center></td>
              <td><center><font size='2'>$row[2] items</font></center></td>
              <td><center><font size='2'>$row[3] .-</font></center></td>
			   <td><center><font size='2'>$row[4]</font></center></td>
            </tr>";
			$i++;
           }
           ?>
              </table></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
          <th width="7%" bgcolor="#22B14C" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td bgcolor="#22B14C"><table width="200" border="0">
            <tr>
              <th height="51" scope="col">&nbsp;</th>
              </tr>
            <tr>
              <td height="51">&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td bgcolor="#22B14C">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td bgcolor="#22B14C">&nbsp;</td>
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