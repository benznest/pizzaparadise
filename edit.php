<style type="text/css">
<!--
body,td,th {
	color: #FFF;
}
body {
	background-color: #F9F;
}
-->
</style><?php
//profile
$myfirstname = $_POST['firstname'];
$mylastname = $_POST['lastname'];


$mysex = $_POST['sex'];

$myphone = $_POST['phone'];

//address info
$mypostcode = $_POST['postcode'];
$myprovince= $_POST['province'];
$myroad = $_POST['road'];
$myaddress_no = $_POST['address_no'];
$myname_build = $_POST['name_build'];
$myaddress_type = $_POST['address_type'];
$myroom_no = $_POST['room_no'];
$myfloor = $_POST['floor'];
$mynote = $_POST['note'];

echo "<form action='update.php?key1=" . $mykey1 .  "'method='POST'>";
echo "<center><table>";
echo  "<TR><TD>ID Number</TD><TD><INPUT TYPE=text name='idnum' value=$mykey1></TD></TR>";
echo  "<TR><TD>Title</TD><TD><INPUT TYPE=text name='titlename' value=$mykey2 ></TD></TR>";
echo  "<TR><TD>First Name</TD><TD><INPUT TYPE=text name='firstname' value=$mykey3 ></TD></TR>";
echo  "<TR><TD>Last Name</TD><TD><INPUT TYPE=text name='lastname'  value=$mykey4></TD></TR>";

echo  "<TR><TD>ID faculty</TD><TD><INPUT TYPE=text name='id_fac'  value=$mykey5 ></TD></TR>";
echo  "<TR><TD>Name faculty</TD><TD><INPUT TYPE=text name='name_fac'  value=$mykey6></TD></TR>";
echo  "<TR><TD>ID Department</TD><TD><INPUT TYPE=text name='id_depart'  value=$mykey7></TD></TR>";
echo  "<TR><TD>Name Department</TD><TD><INPUT TYPE=text name='name_depart'  value=$mykey8></TD></TR>";

echo  "<TR><TD>Group Name</TD><TD><INPUT TYPE=text name='groupname' value=$mykey9></TD></TR>";
echo  "<TR><TD>Project</TD><TD><INPUT TYPE=text name='project' value=$mykey10 ></TD></TR>";

echo  "<TR><TD>Age</TD><TD><INPUT TYPE=text name='age' value=$mykey11 ></TD></TR>";

echo  "<TR><TD>sex</TD><TD><select name='sex'>";
if($mykey12=='M'){
	echo  "<option  value='M' selected>Male</option>";
	echo  "<option  value='F' >Female</option>";
	}
else{
	echo  "<option  value='M' >Male</option>";
	echo  "<option  value='F' selected>Female</option></TD>";
}
echo "<TR><TD><INPUT TYPE=submit value=UPDATE></TD><TD><INPUT TYPE=reset value='cancel'></TD></TR></table>";

?> 