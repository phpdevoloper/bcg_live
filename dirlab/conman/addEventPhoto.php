<?php 
include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
    if (isset($_POST['event_cate_id']) && $_POST['event_cate_id'] !== '') {
        if ($_FILES["event_photo"]["name"] == '') {
            $sql = "SELECT * FROM event_gallery WHERE photo_id = '".$_POST['event_cate_id']."'";
            $exe = pg_query($sql);
            $res = pg_fetch_assoc($exe);
            
            $update = "UPDATE event_gallery SET category ='".$_POST['even_cat']."', photo_file='".$res['photo_file']."',
            photo_caption = '".$_POST['event_caption']."' WHERE photo_id = '".$_POST['event_cate_id']."'";
            $exe = pg_query($db,$update);
            if($exe !=''){
                echo 1;
            }
            
        }else{
            $target_dir = "uploads/gallery/event/";
            if(!is_dir($target_dir)) 
            {
                mkdir($target_dir, 0777, true);
            }
            $target_file = basename($_FILES["event_photo"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            if (move_uploaded_file($_FILES["event_photo"]["tmp_name"], $target_dir.$_FILES["event_photo"]["name"])) {
                $update = "UPDATE event_gallery SET category ='".$_POST['even_cat']."', photo_file='$target_file',
                photo_caption = '".$_POST['event_caption']."' WHERE photo_id = '".$_POST['event_cate_id']."'";
                $exe = pg_query($db,$update);
                if($exe){
                    echo 1;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
    }else{
        $cate           = $_POST['even_cat'];
        $target_dir = "uploads/gallery/event/";
        if(!is_dir($target_dir )) 
        {
            mkdir($target_dir, 0777, true);
        }
        $target_file = basename($_FILES["event_photo"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if (move_uploaded_file($_FILES["event_photo"]["tmp_name"], $target_dir.$_FILES["event_photo"]["name"])) {
            $sql = "INSERT INTO event_gallery(category,photo_file) VALUES('$cate','$target_file')";
            $exe = pg_query($db,$sql);
            if($exe){
                echo 1;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

?>