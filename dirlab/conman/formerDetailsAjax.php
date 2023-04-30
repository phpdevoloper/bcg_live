<?php
	include('inc/dbconnection.php');
    // var_dump($_POST);die;
	if(isset($_POST['director_id'])){
        $query = "UPDATE former_directors SET director_name ='".$_POST['former_dir']."',
		year_from ='".$_POST['service_from']."', 
		year_to ='".$_POST['service_to']."'
		WHERE director_id='".$_POST['director_id']."'";
        $ret = pg_query($db, $query);
        pg_close($db);
		echo 1;
	}else{
		$sql = "INSERT INTO former_directors(director_name,year_from,year_to)VALUES('".$_POST['former_dir']."'
		,'".$_POST['service_from']."','".$_POST['service_to']."')";
		$ret = pg_query($db, $sql);
		pg_close($db);
		echo 1;
	}
?>