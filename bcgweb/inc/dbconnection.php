<?php 
	$host        = "host = localhost";
	$port        = "port = 5432";
	$dbname      = "dbname = bcgvldb";
	$credentials = "user = bcgvlc password=BcgVlc@975";

$db = pg_connect("host='localhost' port=5432 dbname='bcgvlc' user='bcgvlc' password='BcgVlc@975'");
	//$db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db) {
	echo "Error : Unable to connect the database\n";
	} 
