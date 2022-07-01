<?php
	include('inc/dbconnection.php');
    // var_dump($_POST);die;
	if($_POST['staff_id'] != ''){
        $query = "UPDATE bcgvl_staff_details SET staff_name ='".$_POST['staff_name']."',
		deg_code ='".$_POST['deg_code']."', 
		cate_code ='".$_POST['group_cate']."'
		WHERE staff_id='".$_POST['staff_id']."'";
        $ret = pg_query($db, $query);
        pg_close($db);
		echo 1;
	}else{
		$sql = "INSERT INTO bcgvl_staff_details(staff_name,deg_code,cate_code)VALUES('".$_POST['staff_name']."'
		,'".$_POST['deg_code']."','".$_POST['group_cate']."')";
		$ret = pg_query($db, $sql);
		pg_close($db);
		echo 1;
	}
?>