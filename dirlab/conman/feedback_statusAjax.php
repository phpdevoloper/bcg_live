<?php
	include('inc/dbconnection.php');
    // var_dump($_POST['feed_id']);die;


    $sql = "UPDATE feedback SET feed_status='2' WHERE feedback_id ='".$_POST['feed_id']."'";
    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        exit;
    }else{
        echo 1;
    }
    pg_close($db);
?>