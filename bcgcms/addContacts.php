<?php 
include('inc/dbconnection.php');
var_dump($_POST);die;
if ((isset($_POST))) {
        $sql = "INSERT INTO bcgvl_contacts(con_email,con_phone,con_address,map_embed) VALUES('".$_POST['con_title']."','".$_POST['con_name']."','".$_POST['designation']."'
        ,'".$_POST['office_addres']."','".$_POST['user_phone']."','".$_POST['office_phone']."','".$_POST['org_email']."'
        ,'".$_POST['user_email']."')";
        $exe = pg_query($db,$sql);
        if($exe){
            echo 1;
        }
    }else{
        echo "not set";
    }
?>