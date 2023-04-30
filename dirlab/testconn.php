<?php
	
 
	
$db = pg_connect("host='10.163.79.26' port=5432 dbname='bcgvlc' user='bcgvlc' password='%%VLbGC##'");
	//$db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db) {
	echo "Error : Unable to connect the database\n";
	} 


?>