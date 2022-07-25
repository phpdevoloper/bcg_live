<?php 
include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
    $cate               = $_POST['even_cat'];
    $video              = $_POST['video_url'];
    $caption            = $_POST['photo_caption'];

    // $target_dir = "uploads/gallery/video/";
    // if(!is_dir($target_dir )) 
    // {
    //     mkdir($target_dir, 0777, true);
    // }
    // $target_file = basename($_FILES["event_photo"]["name"]);
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    // if (move_uploaded_file($_FILES["event_photo"]["tmp_name"], $target_dir.$_FILES["event_photo"]["name"])) {
    // } else {
    //     echo "Sorry, there was an error uploading your file.";
    // }
    $sql = "INSERT INTO video_gallery(category,photo_file,photo_caption) VALUES('$cate','$video','$caption')";
    $exe = pg_query($db,$sql);
    if($exe){
        echo 1;
    }

?>