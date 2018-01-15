

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
}.xxx {
	text-align: left;
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
    <td height="57" bgcolor="#00A2E8"><?php 
		//Menu for Member
        echo"<table border='0' bgcolor='#00A2E8' width='100%'><th width='51' bgcolor='#00A2E8' scope='col'><a href='home.php'><img src='image/menu_home_2.png' width='102' 
		height='38' hspace='0' vspace='5' border='0'></a></th>
        
		<th width='97' bgcolor='#00A2E8' scope='col'><a href='index2.php'>
	
        <img src='image/menu_all_1.png' width='89' height='38' border='0'></img></a></th>
		
        <th width='97' bgcolor='#00A2E8' scope='col'><a href='pizza.php'>
		
        <img src='image/menu_pizza_1.png' alt='' width='97' height='38' hspace='0' vspace='0' border='0'></a></th>
		
        <th width='240' bgcolor='#00A2E8' scope='col'><a href='friedchicken.php'><img src='image/menu_friedchicken_1.png' alt='' width='228' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='120' bgcolor='#00A2E8' scope='col'><a href='salad.php'><img src='image/menu_salad_1.png' alt='' width='120' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='beverage.php'><img src='image/menu_beverage_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>
        <th width='170' bgcolor='#00A2E8' scope='col'><a href='icecream.php'><img src='image/menu_icecream_1.png' alt='' width='170' height='38' hspace='0' vspace='0' border='0'></a></th>  </table>";
		
		?></td>
  </tr>
  <tr>
    <td height="95" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="4%" height="44" scope="col">&nbsp;</th>
        <th width="74%" rowspan="2" scope="col"><?php 
		
			$result= mysql_query("select * from food where (id_cate=1)"); // id_cate =1 is pizza


       
		$cate = 1;
		echo"<table border='0'>
		<tr><th scope='col' colspan='2'><img src='image/pic_bestsellers.png'  align='left'></img></th></tr>";
		for($cate=0;$cate<7;$cate++){
			
			if($cate ==0){
				$result= mysql_query("SELECT * from food 
							  ORDER BY rating DESC  LIMIT 4"); 
			}else{
				$result= mysql_query("SELECT * from food 
							 WHERE (id_cate=$cate) ORDER BY id_food DESC  LIMIT 2"); 
			}
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
				echo"		<tr><td><br><a href='login_page.php'><img src='image/bt_login.png' border=0></img></a></td></tr>";
				echo"</td></tr>";
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
				echo"		<tr><td><br><a href='login_page.php'><img src='image/bt_login.png' border=0></img></a></td></tr>";
				echo"		<tr><td></td></tr>
				
				
				</td></tr>";
				echo"		</table>";
				echo"</th>";
				$fact=0;
			}
		  }
		  if($cate==0){
			 echo" <tr><th colspan='2'><img src='image/pic_newproduct.png' align='left'></img></th></tr>";
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
        <th width="22%" bgcolor="#FF9999" scope="col"><form action="login.php" method='POST'>
          <table width="200" border="0" align="center" cellpadding="3" cellspacing="3">
            <tr>
              <th colspan="2" bgcolor="#FF9999" scope="col"><br>
                LOGIN</th>
            </tr>
            <tr>
              <th width="46" bgcolor="#FF9999" class="style-1" scope="col">E-mail</th>
              <th width="144" bgcolor="#FF9999" scope="col"><input type=text name='email' id="email" ></th>
            </tr>
            <tr>
              <td bgcolor="#FF9999">Password</td>
              <td bgcolor="#FF9999"><input type=password name='password' id="password" ></td>
            </tr>
            <tr>
              <td bgcolor="#FF9999">&nbsp;</td>
              <td bgcolor="#FF9999" class="style-1"><input type=submit value='Login'>
                <input type=reset value='cancel'></td>
            </tr>
          </table>
          <p><a href="register.php"><img src="image/bt_register_2.png" width="143" height="40" border="0"></a></p>
        </form>
          </th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td bgcolor="#FF9999"><table width="200" border="0">
          <tr>
            <th colspan="2" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
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