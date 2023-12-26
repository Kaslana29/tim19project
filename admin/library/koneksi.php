<?php
	$server = mysql_connect("database-2.cfp1xpieesup.ap-southeast-1.rds.amazonaws.com","admin","");
	$db = mysql_select_db("db_laptop");
	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}
	if(!$db){
		echo "Maaf, Gagal tersambung dengan database !";
	}
?>
