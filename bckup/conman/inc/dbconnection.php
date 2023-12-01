<?php 
	$host        = "host=10.163.79.26";
$port        = "port=5432";
$dbname      = "dbname=bcgvlc";
$credentials = "user=bcgvl password='%%VLbGC##'";
$db = pg_connect( "$host $port $dbname $credentials"  ); 

	//$db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db) {
	echo "Error : Unable to connect the database\n";
	} 
?>