

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
        <th width='248' scope='col'><a href='info_change_password.php?key1=$id_user'><img src='image/menu_change_password_2.png' width='248' height='38' border='0'></a></th>
        <th width='179' scope='col'><a href='my_address.php?key1=$id_user'><img src='image/menu_my_address_1.png' width='182' height='38' border='0'></a></th>
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
        <th width="74%" rowspan="2" scope="col"><p></p>
        <?php
       echo" <form action='change_password.php?key1=$id_user' method='POST'>
		  <table width='383' border='0' cellpadding='5' cellspacing='0'>
		    <tr>
		      <td colspan='2'><img src='image/pic_change_pass.png' width='319' height='65'></td>
		      </tr>
		    <tr>
		      <td><img src='image/pass_1.png' width='154' height='26'></td>
		      <td><input name='oldpassword' type='password' id='floor' value=''></td>
		      </tr>
		    <tr>
		      <td width='179'><p><img src='image/pass_2.png' width='157' height='26'></p></td>
		      <td width='144'><input name='newpassword1' type='password' id='floor2' value=''></td>
		      </tr>
		    <tr>
		      <td><p><img src='image/pass_3.png' width='247' height='26'></p></td>
		      <td><input name='newpassword2' type='password' id='floor3' value=''></td>
		      </tr>
		    <tr>
		      <td class='style2'>h</td>
		      <td><input type=submit value='Chage Password'></td>
		      </tr>
		    </table>
          </form>";
		  ?>
		  <p></p></th>
   
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