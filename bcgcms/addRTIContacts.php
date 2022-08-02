<?php 
include('inc/dbconnection.php');
// var_dump($_POST);die;
if ((isset($_POST))) {
        $sql = "INSERT INTO rti_contacts(contact_title,user_name,designation,contact_address,user_phone,office_phone,
        organization_email,user_email) VALUES('".$_POST['con_title']."','".$_POST['con_name']."','".$_POST['designation']."'
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