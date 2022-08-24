<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;    

    $target_dir = "uploads/Sliders/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $name =date('m-d-Y_');
    $target_file = $name.basename($_FILES["slider_upload"]["name"]);
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if (move_uploaded_file($_FILES["slider_upload"]["tmp_name"], $target_dir.$name.$_FILES["slider_upload"]["name"])) {
        $sql = "INSERT INTO sliders(slider_title,slider_img,slider_caption,slider_status) VALUES
        ('".$_POST['slider_title']."','$target_file','".$_POST['slider_caption']."','".$_POST['slider_status']."')";
        $ret = pg_query($db, $sql);
        if($ret != ''){
            echo 1;
        }
        pg_close($db);
    }
    

?>