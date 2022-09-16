<?php 
include('inc/dbconnection.php');
include('inc/checkval.php');
// var_dump($_POST);die;
if (isset($_POST['action_mes']) && $_POST['action_mes'] == 'delete') {
    $sql = "DELETE FROM bcgvl_contacts WHERE contact_id = '".$_POST['contact_id']."'";
    $ret = pg_query($db, $sql);
    if($ret){
        $error_code['a']= 4;
        echo json_encode($error_code);
    }
    pg_close($db);
    
}else {
    if (isset($_POST['user_id']) &&  $_POST['user_id'] != '') {
        $sql = "UPDATE bcgvl_contacts SET con_email ='".$_POST['user_email']."', con_phone = '".$_POST['user_phone']."',
        con_address = '".$_POST['office_addres']."', map_embed='".$_POST['map_emb']."' 
        WHERE contact_id = '".$_POST['user_id']."'";
    
        $exe = pg_query($db,$sql);
        if($exe){
            echo 7;
        } 
    }else {
    
        $email = checkEmail($_POST['user_email']);
        $mobile = validate_mobile($_POST['user_phone']);
        $url = validate_url($_POST['map_emb']);
        

        if (!is_null($email)) {
            echo json_encode($email);
        }else if(!is_null($mobile)){
            echo json_encode($mobile);
        }else if(!is_null($url)){
            echo json_encode($url);
        }else{
            $sql = "INSERT INTO bcgvl_contacts(con_email,con_phone,con_address,map_embed) VALUES('$email','$mobile','".$_POST['office_addres']."'
            ,'".$_POST['map_emb']."')";
            $exe = pg_query($db,$sql);
            if($exe){
                $error_code['a']= 1;
                echo json_encode($error_code);
            } 
        }
    }
}
    
?>