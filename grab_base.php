<?php
	echo "gh5fg4h45fg4hf5gh";
	$host = "mysqld"; 
	$user = "surgery"; $pswd = "Uvd5x7p27j";

	$database = "www_surgery_by1";

	@mysql_pconnect($host,$user,$pswd) or die ("Couldn't connect to mysql server");
	@mysql_select_db($database) or die ("Couldn't select required database");
	mysql_query("SET NAMES cp1251");
	
	$select_all_str = "SELECT * FROM articles1";
	$result= mysql_query($select_all_str);
	
	echo "<table>";
	
	for($i = 0; $i < mysql_num_rows($result); $i++) {
		echo "<tr>";
		
		for($j = 0; $j < mysql_num_fields($result); $j++) {
			echo "<td>".mysql_result($result, $i, $j)."</td>";
		}
		
		echo "</tr>";
	}
	
	echo "<table>";
?>