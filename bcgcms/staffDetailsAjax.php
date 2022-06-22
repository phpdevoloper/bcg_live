<?php
	include('inc/dbconnection.php');
    var_dump($_POST);die;
	if($_POST['org_id'] != ''){
        $query = "UPDATE bcgvl_staff_details SET org_pic ='$target_file' WHERE org_id='".$_POST['org_id']."'";
        $ret = pg_query($db, $query);
        pg_close($db);
	}else{
		$sql = "INSERT INTO bcgvl_staff_details(staff_name,deg_code,cate_code)VALUES ('$target_file')";
		$ret = pg_query($db, $sql);
		pg_close($db);
	}
?>