<?php 
session_start();
include('inc/dbconnection.php');
include('inc/checkval.php');

// var_dump($_POST);

if ($_POST['action'] == 'CateDelete') {
	$query = "UPDATE photo_category SET category_status='D' WHERE cate_id ='".$_POST['c_id']."'";
    $exc = pg_query($db,$query);
    if(!$exc) {
        echo pg_last_error($db);
        exit;
    }else{
        echo 1;
    }
    pg_close($db);
	
} else {
	$cate_id = check_numeric($_POST['cate_id']);
	$_SESSION['cate_id'] = $cate_id;
	
}




// if ($cate_id == 2) {
//     $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid Numeric or string</li>";
// }

// if(empty($errorMSG)){
//     $sql ="SELECT * FROM photo_gallery WHERE category= '$cate_id' ORDER BY photo_id ASC";
//     $exe = pg_query($db,$sql);
//     $res = pg_fetch_all($exe);
//     echo json_encode(["status" =>'200', 'result'=> $res]);

// }else{
//     echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
// }



?>