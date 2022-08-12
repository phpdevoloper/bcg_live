<?php
	include('inc/dbconnection.php');
    // var_dump($_POST);die;
	if(isset($_POST['faq_id']) && ($_POST['faq_id'] != '')){
        $query = "UPDATE faq SET faq_title='".$_POST['faq_title']."',faq_desc ='".$_POST['faq_description']."',
        faq_status ='".$_POST['faq_status']."'  WHERE faq_id='".$_POST['faq_id']."'";
        $ret = pg_query($db, $query);
        echo 1;
        pg_close($db);
	}else{
        $sql = "INSERT INTO faq(faq_title,faq_desc,faq_status)
        VALUES
        ('".$_POST['faq_title']."','".$_POST['faq_description']."','".$_POST['faq_status']."')";
        // echo $sql;exit;  
        $ret = pg_query($db, $sql);
        if(!$ret) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        }
        pg_close($db);
	}
?>