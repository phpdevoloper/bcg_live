<?php
	include('inc/dbconnection.php');
	// include('inc/Validation.php');

	$year_of_report
	state_name
	supply_details

	$sql = "INSERT INTO supply_of_bcg(year_of_supply,supply_report)
	VALUES
	('".$_POST['year_of_report']."','$target_file')";
	$ret = pg_query($db, $sql);
	if(!$ret) {
		echo pg_last_error($db);
		exit;
	}else {
		echo 1;
	}
	pg_close($db);

?>