<?php
	include('inc/dbconnection.php');
	// include('../Upload.php');
    // var_dump($_POST);die;
	$sql = "UPDATE director_desk SET director_status ='".$_POST['dir_status']."' WHERE 
    dir_desk_id ='".$_POST['dir_id']."'";
		$ret = pg_query($db, $sql);
		if(!$ret) {
			echo pg_last_error($db);
			exit;
		}else{
            echo 1;
            pg_close($db);
        } 
		

?>