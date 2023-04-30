<?php 
include('inc/dbconnection.php');
include('inc/checkval.php');
// var_dump($_POST);die;
if (isset($_POST['action_mes']) && $_POST['action_mes'] == 'delete') {
    $sql = "DELETE FROM bcgvl_contacts WHERE contact_id = '".$_POST['contact_id']."'";
    $ret = pg_query($db, $sql);
    if($ret){
        echo 4;
    }
    pg_close($db);
    
}else {
    if (isset($_POST['user_id']) &&  $_POST['user_id'] != '') {

        $email = checkEmail($_POST['user_email']);
        $mobile = $_POST['user_phone'];
        $url = validate_url($_POST['map_emb']);
        
        $errorMSG = "";
        if ($email == 2) {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid email format</li>";
        }
        // if($mobile == 2)
        // {
        //     $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid mobile no</li>";
        // }
        if($url == 2)
        {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Enter the valid map embedded</li>";
        }
        if(empty($errorMSG)){
            $sql = "UPDATE bcgvl_contacts SET con_email ='$email', con_phone = '$mobile',
            con_address = '".$_POST['office_addres']."', map_embed='$url' 
            WHERE contact_id = '".$_POST['user_id']."'";
            $exe = pg_query($db,$sql);
            if($exe){
                echo json_encode(['code'=>200]);
            } 
        }else{
            echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
        }
    }else {
    
        $email = checkEmail($_POST['user_email']);
        // var_dump($email);die;
        $mobile = validate_mobile($_POST['user_phone']);
        $url = validate_url($_POST['map_emb']);
        
        $errorMSG = "";
        if ($email == 2) {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid email format</li>";
        }
        // if($mobile == 2)
        // {
        //     $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid mobile no</li>";
        // }
        if($url == 2)
        {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Enter the valid map embedded</li>";
        }
        if(empty($errorMSG)){
            $sql = "INSERT INTO bcgvl_contacts(con_email,con_phone,con_address,map_embed) VALUES('$email','$mobile','".$_POST['office_addres']."'
            ,'$url')";
            $exe = pg_query($db,$sql);
            if($exe){
                echo json_encode(['code'=>200]);
            } 

        }else{
            echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
        }
       
    }
}
    
?>