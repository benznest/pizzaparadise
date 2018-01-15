

<html><style type="text/css">
<!--
body {
	background-color: #F9F;
	color: #FFF;
	text-align: center;
	background-image: url(image/wall_pink.jpg);
}
.benznest {
	color: #FFF;
}
.benznest td {
	color: #FFF;
	text-align: center;
}
body,td,th {
	color: #FFF;
	text-align: center;
}
body table tr td table tr th table tr td strong {
	text-align: left;
}
td {
	font-weight: bold;
}
table {
	color: #FFF;
}
table {
	color: #FFF;
}
th {
	color: #FFF;
}
.style-1 {
	text-align: left;
}
.style-1 {
	color: #FFF;
}.a_left {
	text-align: left;
}
-->
</style>

<link href="piz.css" rel="stylesheet" type="text/css">
<center>

<?php
session_start();
include("dbconnect.php");
$db_found = mysql_select_db('pizzaparadise');
if ($db_found) {
	
?>
<table width="87%" height="420" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="4" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th height="10" bgcolor="#FF99CC" scope="col">&nbsp;</th>
    <th width="36" rowspan="6" bgcolor="#FF99CC" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="815" height="148" bgcolor="#FFFFFF" scope="col"><img src="image/logo1.png" width="804" height="146"></th>
  </tr>
  <tr>
    <th height="57" bgcolor="#FFFFFF" scope="col"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="51" bgcolor="#00A2E8" scope="col"><a href="home.php"><img src="image/menu_home_1.png" alt="" width="102" height="38" hspace="0" vspace="5" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="index2.php"><img src="image/menu_all_1.png" width="89" height="38" border="0"></a></th>
        <th width="97" bgcolor="#00A2E8" scope="col"><a href="pizza.php"><img src="image/menu_pizza_1.png" alt="" width="97" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="240" bgcolor="#00A2E8" scope="col"><a href="friedchicken.php"><img src="image/menu_friedchicken_1.png" alt="" width="228" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="120" bgcolor="#00A2E8" scope="col"><a href="salad.php"><img src="image/menu_salad_1.png" alt="" width="120" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="170" bgcolor="#00A2E8" scope="col"><a href="beverage.php"><img src="image/menu_beverage_1.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
        <th width="170" bgcolor="#00A2E8" scope="col"><a href="icecream.php"><img src="image/menu_icecream_2.png" alt="" width="170" height="38" hspace="0" vspace="0" border="0"></a></th>
        
        
        <th width="404" height="57" bgcolor="#00A2E8" scope="col">&nbsp;</th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td height="158" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="4%" height="179" scope="col">&nbsp;</th>
        <th width="74%" rowspan="2" scope="col"><p>
          <?php 
        include("dbconnect.php");
		$db_found = mysql_select_db('pizzaparadise');
		if ($db_found) {
			$con=mysql_CONNECT('localhost','root','');
			mysql_select_db("pizzaparadise",$con);
			$result= mysql_query("select * from food where (id_cate=5) ORDER BY id_food DESC"); // id_cate =5 icecream

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
				echo"		<tr><td class='a_left'><font color='red'>$row[1]</font></td></tr>";
				echo"		<tr><td class='a_left'><font color='red'>Price $row[3].-</font></td></tr>";
				echo"		<tr><td class='a_left'><font color='red' size='2'>$row[4]</font></td></tr>";
				echo"		<tr><td><a href='login_page.php'><img src='image/bt_login.png' border=0></img></a></td></tr>";
				echo"		</table>";
				echo"</th>";
            	//echo"<th width='100'></th>";
			}
			else{
				echo"<th><img src='image/food/$row[0].jpg'></img></th>";
            	echo"<th width='400'> ";
				echo"		<table  width='100%'>";
				echo"		<tr><td class='a_left'><font color='red'>$row[1]</font></td></tr>";
				echo"		<tr><td class='a_left'><font color='red'>Price $row[3].-</font></td></tr>";
				echo"		<tr><td class='a_left'><font color='red' size='2'>$row[4]</font></td></tr>";
				echo"		<tr><td><a href='login_page.php'><img src='image/bt_login.png' border=0></img></a></td></tr>";
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
          &nbsp;</p></th>
        <th width="22%" bgcolor="#FF9999" scope="col"><form action="login.php" method='POST'>
          <table width="200" border="0" align="center" cellpadding="3" cellspacing="3">
            <tr>
              <th colspan="2" bgcolor="#FF9999" scope="col"><br>
                LOGIN</th>
            </tr>
            <tr>
              <th width="46" bgcolor="#FF9999" class="style-1" scope="col">E-<span class="benznest">m</span>ail</th>
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
          <p><a href="register.php"><img src="image/bt_register_2.png" width="143" height="40" border="0"></a>&nbsp;</p>
          <p>&nbsp;</p>
        </form></th>
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
    <td height="19" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FF99CC">&nbsp;</td>
  </tr>
</table>
<p>
  <?php 

} else{
   echo "<script>location.href='index.php'</script>";
}

?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</html>