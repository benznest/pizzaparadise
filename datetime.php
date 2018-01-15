<?php
	$i=1;
    echo "<select name ='day'>";
	while($i<=31){
		echo "<option value='$i'>$i</option>";
		$i++;
	}
     echo "</select> : ";
	
	
	 echo "<select name ='month'>";
    $i=1;
	while($i<=12){
		echo "<option value='$i'>$i</option>";
		$i++;
	}
     echo "</select> : ";
	
	
	
	
	$i=1930;
	 echo "<select name ='year'>";
	while($i<=2014){
		echo "<option value='$i'>$i</option>";
		$i++;
	}
     echo "</select>";
?>