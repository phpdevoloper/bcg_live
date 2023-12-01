<?php
	include('inc/dbconnection.php');
    if ($_POST['vs_id'] == '') {
        // var_dump($_POST);die;
         $sql = "INSERT INTO vaccine_supply(vs_details,updated_by)VALUES 
         ('".$_POST['vs_details']."','".$_POST['updated_by']."')";
        //  echo $sql;exit; 
        $ret = pg_query($db, $sql);
        if(!$ret) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        } 
    }
    else {
        // var_dump($_POST."else");die;
        $sql = "UPDATE vaccine_supply SET vs_details ='".$_POST['vs_details']."',
        updated_by='".$_POST['updated_by']."'";
        $ret = pg_query($db, $sql);
        if(!$ret) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        } 
    }
    pg_close($db);	

?>