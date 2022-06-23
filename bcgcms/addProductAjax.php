<?php 
include('inc/dbconnection.php');
// var_dump($_POST,$_FILES);
$target_dir = "uploads/products/";
$target_file = $target_dir . basename($_FILES["product_img"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)){
    $sql = "INSERT INTO product(product_name,product_desc,product_image) VALUES(
    '".$_POST['product_title']."','".$_POST['pro_desc']."','$target_file')";
    $res = pg_query($db,$sql); 
}
else{
    echo "File Not Uploaded";
}









?>