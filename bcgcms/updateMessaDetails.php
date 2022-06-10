<?php
	include('../inc/dbconnection.php');
	// var_dump($_POST);die;	
	$sql = "UPDATE director_desk SET
		director_message ='".$_POST['director_message']."'
        WHERE 
        dir_desk_id ='".$_POST['director_id']."'";
		$ret = pg_query($db, $sql);
		if(!$ret) {
			echo pg_last_error($db);
			exit;
		} 
		$result = pg_fetch_assoc($ret);
		echo 1;
		pg_close($db);

?>