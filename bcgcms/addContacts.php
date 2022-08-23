<?php 
include('inc/dbconnection.php');
// var_dump($_POST['user_id']);die;
if (isset($_POST['user_id']) &&  $_POST['user_id'] != '') {
    $sql = "UPDATE bcgvl_contacts SET con_email ='".$_POST['user_email']."', con_phone = '".$_POST['user_phone']."',
    con_address = '".$_POST['office_addres']."', map_embed='".$_POST['map_emb']."' 
    WHERE contact_id = '".$_POST['user_id']."'";

    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
}else {
    $sql = "INSERT INTO bcgvl_contacts(con_email,con_phone,con_address,map_embed) VALUES('".$_POST['user_email']."','".$_POST['user_phone']."','".$_POST['office_addres']."'
    ,'".$_POST['map_emb']."')";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
}
    
?>