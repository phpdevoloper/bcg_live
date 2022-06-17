<?php
	include('../inc/dbconnection.php');
	$sql = "SELECT * FROM user_info WHERE uname='".$_POST['user_name']."' AND upass='".$_POST['user_pass']."'";
	$ret = pg_query($db, $sql);
	if(!$ret) {
		echo pg_last_error($db);
		exit;
	} 
	while($row = pg_fetch_assoc($ret)) {
		// Set session variables
		session_start();
		$_SESSION["user"] 	   = $row;
		echo 1;
	}
	pg_close($db);
?>