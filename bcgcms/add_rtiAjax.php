<?php
	include('inc/dbconnection.php');
    $sql = "INSERT INTO mst_rti(rti_name,status) VALUES
    ('".$_POST['rti_title']."', '".$_POST['rti_status']."')";
    $ret = pg_query($db, $sql);
    if($ret != ''){
        echo 1;
    }
    pg_close($db);
?>