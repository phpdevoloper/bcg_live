<?php 
include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
    if (isset($_POST['event_cate_id']) && $_POST['event_cate_id'] !== '') {
        $cate               = $_POST['even_cat'];
        $video              = $_POST['event_photo'];
        $caption            = $_POST['event_caption'];
    
        $sql = "UPDATE video_gallery SET category='$cate', photo_file='$video', photo_caption ='$caption'
        WHERE photo_id = '".$_POST['event_cate_id']."'";
        $exe = pg_query($db,$sql);
        if($exe){
            echo 1;
        }
    }elseif ($_POST['action_mes'] == 'delete') {

        $video_id = $_POST['video_id'];
        $sql = "DELETE FROM video_gallery WHERE photo_id = '$video_id'";
        $exe = pg_query($db,$sql);
        if(!$exe) {
            echo pg_last_error($db);
            exit;
        }else{
            echo json_encode(['code'=>'200','msg'=>'video sucessfully deleted.']);
        }

    }else{

        $cate               = $_POST['even_cat'];
        $video              = $_POST['video_url'];
        $caption            = $_POST['photo_caption'];
        $sql = "INSERT INTO video_gallery(category,photo_file,photo_caption) VALUES('$cate','$video','$caption')";
        $exe = pg_query($db,$sql);
        if($exe){
            echo 1;
        }
    }


?>