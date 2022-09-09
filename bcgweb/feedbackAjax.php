<?php
    session_start();
	include('inc/dbconnection.php');
    // var_dump($_POST);die;
    if($_SESSION["captcha"]     ==   $_POST["captcha_code"]){
    $sql = "INSERT INTO feedback(feed_sub,feed_msg,feedback_from,feedback_mail)
    VALUES
    ('".$_POST['user_sub']."','".$_POST['user_msg']."','".$_POST['user_name']."','".$_POST['user_email']."')";
    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        exit;
    }else{
        echo 1;
    }
    pg_close($db);
   }else{
        $t = 2;
        echo json_encode($t);
   }
?>