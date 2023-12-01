<?php 
include('inc/dbconnection.php');
// var_dump($_POST['action'] == "CategoryDelete");die;
if (isset($_POST['category_id']) && $_POST['category_id'] !== '') {
    $cate_title     = $_POST['category_title'];
    $sql = "UPDATE photo_category SET category_title = '$cate_title' WHERE cate_id ='".$_POST['category_id']."'";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
    
}elseif($_POST['action'] == "CategoryDelete") {

        // var_dump('exe2');die;

        // $query = "SELECT * FROM photo_category ";
        $query = "UPDATE photo_category SET cate_status ='D' WHERE cate_id ='".$_POST['c_id']."'";
        $exc = pg_query($db,$query);
        if(!$exc) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        }
        pg_close($db);
}
else{
    
        $cate_title     = $_POST['category_title'];
        $sql = "INSERT INTO photo_category(category_title) VALUES('$cate_title')";
        $exe = pg_query($db,$sql);
        if($exe){
            echo 1;
        }
}
?>