<?php 
include('inc/dbconnection.php');
if (!isset($_POST['category_id'])) {
    $cate_title     = $_POST['category_title'];
    $from_date      = $_POST['from_date'];
    $to_date        = $_POST['to_date'];
    
    $sql = "INSERT INTO event_category(category_title,from_date,to_date) VALUES('$cate_title','$from_date','$to_date')";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
}
else{
    if($_POST['category_id'] !== '')
    $cate_title     = $_POST['category_title'];
    $from_date      = $_POST['from_date'];
    $to_date        = $_POST['to_date'];
    
    $sql = "UPDATE event_category SET category_title = '$cate_title' ,from_date = '$from_date',to_date ='$to_date'";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }
}
?>