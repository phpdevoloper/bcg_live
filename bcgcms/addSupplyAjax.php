<?php
	include('inc/dbconnection.php');
	// include('inc/Validation.php');


	$year_of_report  	=$_POST['year_of_report'];
	$state_name			=$_POST['state_name'];
	$supply_details		=$_POST['supply_details'];
	$supply_name		=$_POST['supply_name'];

	if(empty($year_of_report)){
		$error['msg'] = "Please choose the year of supply";
		echo json_encode(['code' =>'403','msg'=>$error]);
	}elseif (empty($state_name)) {
		$error['msg'] = "Please choose the state";
		echo json_encode(['code' =>'403','msg'=>$error]);
	}elseif (empty($supply_details)) {
		$error['msg'] = "Please enter the supply details";
		echo json_encode(['code' =>'403','msg'=>$error]);
	}elseif (empty($supply_name)) {
		$error['msg'] = "Please enter the supply_name";
		echo json_encode(['code' =>'403','msg'=>$error]);
	}else{
		$sql = "INSERT INTO mst_supply_bcgvl(supply_year,state_name,supply_details,supply_name)
		VALUES
		('$year_of_report','$state_name','$supply_details','$supply_name')";
		$ret = pg_query($db, $sql);
		if(!$ret) {
			echo pg_last_error($db);
			exit;
		}else {
			echo json_encode(['code' =>'200','msg'=>'Supply Details succesfully added']);
		}
		
	}

	// supply_id integer NOT NULL DEFAULT 'nextval('mst_supply_bcg_supply_id_seq'::regclass)',
    // supply_year character varying(100) COLLATE pg_catalog."default",
    // state_name character varying(100) COLLATE pg_catalog."default",
    // supply_details character varying(100) COLLATE pg_catalog."default",
	// supply_name character varying(100) COLLATE pg_catalog."default",
    // supply_status character varying(10) COLLATE pg_catalog."default" DEFAULT 'L'::character varying,


?>