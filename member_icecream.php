

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
$id_user = $_REQUEST['key1'];
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
    <td height="57" bgcolor="#00A2E8"><?php 
		//Menu for Member
        echo"<table border='0' bgcolor='#00A2E8' width='100%'><th width='51' bgcolor='#00A2E8' scope='col'><a href='member_home.php?key1=$id_user'><img src='image/menu_home_1.png' width='102' 
		height='38' hspace='0' vspace='5' border='0'></a></th>
        
		<th width='97' bgcolor='#00A2E8' scope='col'><a href='index_member.php?key1=$id_user'>
	
        <img src='image/menu_all_1.png' width='89' height='38' border='0'></img></a></th>
		
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='member_pizza.php?key1=$id_user'>
		
        <img src='image/menu_pizza_1.png' alt='' width='97' height='38' hspace='0' vspace='0' border='0'></a></th>
		
        <th width='240' bgcolor='#00A2E8' scope='col'><a href='member_friedchicken.php?key1=$id_user''>
		
		<img src='image/menu_friedchicken_1.png' alt='' width='228' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='120' bgcolor='#00A2E8' scope='col'><a href='member_salad.php?key1=$id_user''>
		
		<img src='image/menu_salad_1.png' alt='' width='120' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_beverage.php?key1=$id_user''>
		
		<img src='image/menu_beverage_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='member_icecream.php?key1=$id_user''>
		
		<img src='image/menu_icecream_2.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>  </table>";
		
		?></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="4%" height="44" scope="col">&nbsp;</th>
        <th width="74%" rowspan="2" scope="col"><?php 
		
			$result= mysql_query("select * from food where (id_cate=5)"); // id_cate =5 is pizza


       echo"<table width='200' border='0' align='left'>
  <tr>
    <th scope='col'><img src='image/pic_icecream.png'></th>
  </tr>
</table>";
       
	   
		echo"<table border='0'>";
		$fact = 0;
        while($row=mysql_fetch_array($result)){
			if($fact<1){
				echo" <tr>";
				$fact=1;
				echo"<th><img src='image/food/$row[0].jpg'></img></th>";
            	echo"<th width='400'> ";
				echo"		<table  width='100%'>";
				echo"		<tr><td><font color='red'><b>$row[1]</b></font></td></tr>";
				echo"		<tr><td><font color='red'>Price $row[3].-</font></td></tr>";
				echo"		<tr><td><font color='red'>$row[4]</font></td></tr>";
				echo"		<tr><td><a href='info_basket_page.php?key1=".$id_user."&key2=".$row[0]."'>
				<img src='image/bt_add_basket.png' border=0></img></a>
				<a href='add_favorite.php?key1=".$id_user."&key2=".$row[0]."'>
				<img src='image/bt_add_favorite.png' border=0></img></a></td></tr>
				
				</td></tr>";
				echo"		</table>";
				echo"</th>";
            	//echo"<th width='100'></th>";
			}
			else{
				echo"<th><img src='image/food/$row[0].jpg'></img></th>";
            	echo"<th width='400'> ";
				echo"		<table  width='100%'>";
				echo"		<tr><td><font color='red'><b>$row[1]</b></font></td></tr>";
				echo"		<tr><td><font color='red'>Price $row[3].-</font></td></tr>";
				echo"		<tr><td><font color='red'>$row[4]</font></td></tr>";
				echo"		<tr><td><a href='info_basket_page.php?key1=".$id_user."&key2=".$row[0]."'>
				<img src='image/bt_add_basket.png' border=0></img></a>
				<a href='add_favorite.php?key1=".$id_user."&key2=".$row[0]."'>
				<img src='image/bt_add_favorite.png' border=0></img></a></td></tr>
				
				
				</td></tr>";
				echo"		</table>";
				echo"</th>";
				$fact=0;
			}
            
            
        }
       echo "</table>";
		}
		else{
			echo "<script>location.href='index.php'</script>";
            die();
		}
		?>
          &nbsp;</th>
        <th width="22%" bgcolor="#FF9999" scope="col"><?php 
			$result = mysql_query("select * from user where (id_member  =$id_user)");
		    $member =mysql_fetch_array($result);
			echo "<br><br>$member[1]";
			if($member[3]=='admin'){
				echo"<br><a href='admin.php?key1=$id_user'><img src='image/bt_admin.png' alt='' border='0'></img></a>";
			}
			$result = mysql_query("select Fname,Lname,point from member where (id_member  =$id_user)");
		    $member =mysql_fetch_array($result);
			echo "<br>$member[0] $member[1] <br> Point : $member[2]
			<br><a href='edit_profile.php?key1=$id_user'><img src='image/bt_edit.png' alt='' border='0'></img></a>
			<br><a href='my_favorite.php?key1=$id_user'><img src='image/bt_favorite.png' alt='' border='0'></img></a>
            <br><a href='my_basket.php?key1=$id_user'><img src='image/bt_basket.png' alt='' border='0'></img></a>
			<br><a href='index2.php'><img src='image/bt_logout.png' alt='' border='0'></img></a>
			
			";?>
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