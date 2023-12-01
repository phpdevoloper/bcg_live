<?php 
    include('inc/dbconnection.php');
    // var_dump($_POST);die;
    $sql = "SELECT * FROM product WHERE product_id = '".$_POST['pro_id']."'";
    $res = pg_query($db,$sql);
    $result = pg_fetch_assoc($res);
    echo json_encode($result); 
?>