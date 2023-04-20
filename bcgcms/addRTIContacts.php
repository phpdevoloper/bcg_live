<?php 
include('inc/dbconnection.php');
include('inc/checkval.php');
// var_dump($_POST);die;
if (isset($_POST['action_mes']) && $_POST['contact_id'] != '') {
    $del = "DELETE FROM rti_contacts WHERE contact_id = '".$_POST['contact_id']."'";
    $exe = pg_query($db,$del);
    if ($exe) {
        echo 4;
    } 
}else {
    if (isset($_POST['con_id']) && $_POST['con_id'] !='') {
    
        $con_title      = $_POST['con_title'];
    
        $user_email     = checkEmail($_POST['user_email']);
        $org_email      = $_POST['org_email'];
        $mobile         = validate_mobile($_POST['user_phone']);
        
        $errorMSG = "";
        if ($con_title == 2) {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Only letters,single and white spaces allowed</li>";
        }
        if ($user_email == 2) {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid email format</li>";
        }
        if ($org_email == 2) {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid organization email format</li>";
        }
        if(empty($errorMSG)){
            $sql = "UPDATE rti_contacts SET contact_title='".$_POST['con_title']."',user_name='".$_POST['con_name']."',designation = '".$_POST['designation']."',
            contact_address = '".$_POST['office_addres']."',user_phone='".$_POST['user_phone']."',office_phone = '".$_POST['office_phone']."',
            organization_email = '".$_POST['org_email']."' WHERE contact_id= '".$_POST['con_id']."'";
            $exe = pg_query($db,$sql);
            if($exe){
                echo json_encode(['code'=>200]);
            }  
        }else{
            echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
        }
    }
    else{
            $email = checkEmail($_POST['user_email']);
            $mobile = $_POST['user_phone'];
            $url = validate_url($_POST['map_emb']);
            
            $errorMSG = "";
            if ($email == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid email format</li>";
            }
            if($url == 2)
            {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Enter the valid map embedded</li>";
            }
            if(empty($errorMSG)){
                $sql = "INSERT INTO rti_contacts(contact_title,user_name,designation,contact_address,user_phone,office_phone,
                organization_email,user_email) VALUES('".$_POST['con_title']."','".$_POST['con_name']."','".$_POST['designation']."'
                ,'".$_POST['office_addres']."','".$_POST['user_phone']."','".$_POST['office_phone']."','".$_POST['org_email']."'
                ,'".$_POST['user_email']."')";
                echo $sql;
                $exe = pg_query($db,$sql);
                if($exe != ''){
                    echo json_encode(['code'=>200]);
                }  
            }else{
                echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
            }
            
        }
}
?>