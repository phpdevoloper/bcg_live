<?php
	include('inc/dbconnection.php');
	include('inc/Validation.php');
    // var_dump($_POST,$_FILES);die;

    $slider_title = $_POST['slider_title'];
    if ($slider_title == '') {
        echo 4;
    //    $error_code[1] = "Name is required";
    //    json_encode($error_code);
    }else{
        $slider_title = $Validation->clean($_POST["slider_title"]);
    }
    
    

    // $target_dir = "uploads/Sliders/";
    // if (!file_exists($target_dir)) {
    //     mkdir($target_dir, 0777, true);
    // }
    // $name =date('m-d-Y_');
    // $target_file = $name.basename($_FILES["slider_upload"]["name"]);
    // $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // // Check if image file is a actual image or fake image
    // if (move_uploaded_file($_FILES["slider_upload"]["tmp_name"], $target_dir.$name.$_FILES["slider_upload"]["name"])) {
    //     $sql = "INSERT INTO sliders(slider_title,slider_img,slider_caption,slider_status,slider_type) VALUES
    //     ('".$_POST['slider_title']."','$target_file','".$_POST['slider_caption']."','".$_POST['slider_status']."','".$_POST['slider_type']."')";
    //     $ret = pg_query($db, $sql);
    //     if($ret != ''){
    //         echo 1;
    //     }
    //     pg_close($db);
    // }
    

?>