<?php 
include('inc/dbconnection.php');
// var_dump($_POST,$_FILES);
if(isset($_POST['product_id'])){
    if ($_FILES["product_img"]["name"] == '') {
            // var_dump($_POST['product_id']);die;
            $sql = "select * from product where product_id = '".$_POST['product_id']."'";
            $exe = pg_query($db,$sql);
            $res = pg_fetch_assoc($exe);

            $sql = "UPDATE product SET product_name = '".$_POST['product_name']."',
            product_desc = '".$_POST['product_desc']."',product_image ='".$res['product_image']."'";
            $res = pg_query($db,$sql);
            if($res !== ''){
                echo 1;
            } 
        else{
            echo "File Not Uploaded";
        }
    }else{
        $target_dir = "uploads/products/";
        if(!is_dir($target_dir )) 
        {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        if(move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)){
            $sql = "UPDATE product SET product_name = '".$_POST['product_name']."',
            product_desc = '".$_POST['product_desc']."',product_image ='$target_file'";
            $res = pg_query($db,$sql);
            if($res !== ''){
                echo 1;
            } 
        }
        else{
            echo "File Not Uploaded";
        }
    }
}else{
    // var_dump($_POST,$_FILES);
    $target_dir = "uploads/products/";
    if(!is_dir($target_dir )) 
    {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)){
        $sql = "INSERT INTO product(product_name,product_desc,product_image) VALUES(
        '".$_POST['product_title']."','".$_POST['pro_desc']."','$target_file')";
        $res = pg_query($db,$sql); 
        if ($res !== 0) {
            echo 1;
        }
    }
    else{
        echo "File Not Uploaded";
    }
}









?>