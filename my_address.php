

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

<title>-THE PIZZA PARADISE- </title><center>

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
        <th width='179' scope='col'><a href='my_address.php?key1=$id_user'><img src='image/menu_my_address_2.png' width='182' height='38' border='0'></a></th>
		<th width='179' scope='col'><a href='info_add_address.php?key1=$id_user'><img src='image/menu_add_address_1.png' border='0'></a></th>
		
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
		  <p><img src="image/pic_edit_address.png" width="245" height="65" align="left"> </p>
		  <p>&nbsp;</p>
		  <p>
		    <?php 
		  	$result_name_address = mysql_query("SELECT id_address_member,name_building FROM address_member WHERE (id_member = '$id_user')"); 
		  
          echo"<br><br><form action='edit_address.php?key1=$id_user' method='POST'>
          <table width='65%' border='0'>
            <tr>
              <th width='62%' scope='col'><strong><font color='red'>Select your Address</font></strong></th>
              <th width='38%' scope='col'>
			  <select name='name_address' id='address_name'>";
               while($row_address = mysql_fetch_array($result_name_address)){
                	echo"<option value='$row_address[0]'>$row_address[1]</option>";
			   }
              echo"</select>
                &nbsp; <input type=submit value='   OK   '></th>
            </tr>
            <tr>
              <th colspan='2' scope='col'><font color='gray' size='2'>select some address to edit data address.</font></th>
              </tr>
          </table>
		  
          </form>";
          ?>
		    </p>
          <hr>
          <p><img src="image/pic_delete_address.png" width="278" height="65" align="left"></p>
          <p>&nbsp;</p>
          <?php
		  echo"<br><br><table width='300' border='0' align='center'> ";
		  $result_name_address_t = mysql_query("SELECT id_address_member,name_building FROM address_member WHERE (id_member = '$id_user')"); 
          $i=1;
		  while($row_address_t = mysql_fetch_array($result_name_address_t)){
		    echo"<tr>
			  <th scope='col'><font color='red'>$i.</font></th>
		      <th scope='col'><font color='red'>$row_address_t[1]</font></th>
		      <th scope='col'><a href='remove_address.php?key1=".$id_user."&key2=".$row_address_t[0]."'>
			  <img src='image/bt_remove.png' width='80' height='15'></a></th>
		    </tr>";
			$i++;
          }
	      echo"</table>";
		  ?>
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