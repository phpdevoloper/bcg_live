<?php 
include('inc/dbconnection.php');
include('inc/checkval.php');

// var_dump($_POST);

$cate_id = check_numeric($_POST['cate_id']);

if ($cate_id == 2) {
    $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid Numeric or string</li>";
}

if(empty($errorMSG)){
    $sql ="SELECT * FROM photo_gallery WHERE category= '$cate_id' ORDER BY photo_id ASC";
    $exe = pg_query($db,$sql);
    $res = pg_fetch_all($exe);
    echo json_encode(["status" =>'200', 'result'=> $res]);

}else{
    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
}



?>