<?php 
include('inc/dbconnection.php');
if (!isset($_POST['category_id'])) {
    $cate_title     = $_POST['category_title'];
    
    $sql = "INSERT INTO photo_category(category_title) VALUES('$cate_title')";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
}else{
    if($_POST['category_id'] !== ''){
        $cate_title     = $_POST['category_title'];
        $sql = "UPDATE photo_category SET category_title = '$cate_title' WHERE cate_id ='".$_POST['category_id']."'";
        $exe = pg_query($db,$sql);
        if($exe){
            echo 1;
        }
    }
}
?>