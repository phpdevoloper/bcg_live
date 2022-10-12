<?php
    session_start();
	include('inc/dbconnection.php');
    include('inc/checkval.php');
    // var_dump($_POST);die;



    if($_SESSION["captcha"]     ==   $_POST["captcha_code"]){

        $user_sub    = check_empty($_POST['user_sub']);
        $user_msg    = check_empty($_POST['user_msg']);
        $user_name   = check_empty($_POST['user_name']);
        $user_email  = checkEmail($_POST['user_email']);
        if ($user_sub == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>User subject required</li>";
        }
        if ($user_msg == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>User messgage required</li>";
        }
        if ($user_name == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>User name required</li>";
        }
        if ($user_email == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>User email required</li>";
        }

        if(empty($errorMSG)){
            $sql = "INSERT INTO feedback(feed_sub,feed_msg,feedback_from,feedback_mail)
    
            VALUES('$user_sub','$user_msg','$user_name','$user_email')";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
                exit;
            }else{
                echo json_encode(['code'=>200,'msg'=>"Feedback Succesfully submitted"]);
            }
            pg_close($db);
        }else {
            echo json_encode(['code'=>404,'msg'=>$errorMSG]);
        }
    }else{
            $t = 2;
            echo json_encode(['code'=>$t,'msg'=>'Incorrect Captcha']);
    }
?>