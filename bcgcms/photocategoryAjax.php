<?php 
include('inc/dbconnection.php');
if (!isset($_POST['cate_id'])) {
    $cate_title     = $_POST['category_title'];
    
    $sql = "INSERT INTO photo_category(category_title) VALUES('$cate_title')";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
}
?>