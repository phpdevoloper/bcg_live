<?php
	include('inc/dbconnection.php');
    // var_dump($_POST);die;
	if(isset($_POST['id']) && ($_POST['id'] != '')){
        $query = "delete from faq where faq_id = '".$_POST['id']."'";
        $ret = pg_query($db, $query);
        echo 1;
        pg_close($db);
    }
?>