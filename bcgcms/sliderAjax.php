<?php
	include('inc/dbconnection.php');
	include('inc/checkval.php');
    // var_dump($_POST);die;
    // checkString($_POST['slider_title']);
    if (isset($_POST['action_mes']) && $_POST['action_mes'] == 'delete') {
        $sql = "DELETE FROM sliders WHERE slider_id = '".$_POST['slider_id']."'";

        $ret = pg_query($db, $sql);
        if($ret){
            echo 4;
        }
        pg_close($db);
    }else{
        if (isset($_POST['slider_id']) && !empty($_POST['slider_id'])) {
            if ($_FILES["slider_u"]["name"] == '') {
                $sql = "SELECT * FROM sliders WHERE slider_id = '".$_POST['slider_id']."'";
                $ret = pg_query($db, $sql);
                $data = pg_fetch_assoc($ret);
                // var_dump($data['slider_img']);die;

                $slider_name = checkString($_POST['slider_title']);

                $sql = "UPDATE sliders SET slider_title = '$slider_name',slider_img = '".$data['slider_img']."', slider_caption = '".$_POST['slider_caption']."',
                slider_status = '".$_POST['slider_status']."', slider_type ='".$_POST['slider_type']."' WHERE slider_id='".$_POST['slider_id']."'";
                $res = pg_query($db, $sql);
                if($ret != ''){
                    echo 7;
                }
                pg_close($db);

            }else{

                $slider_name = checkString($_POST['slider_title']);
                $target_dir = "uploads/Sliders/";
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $name = date('m-d-Y_');
                $target_file = $name.basename($_FILES["slider_u"]["name"]);
                $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
                $allowed_image_extension = array(
                    "png",
                    "jpg",
                    "jpeg"
                );
                if (! in_array($FileType, $allowed_image_extension)) {
                    echo 6;
                }else{
                    if (move_uploaded_file($_FILES["slider_u"]["tmp_name"], $target_dir.$name.$_FILES["slider_u"]["name"])) {
                        $sql = "UPDATE sliders SET slider_title = '$slider_name',slider_img = '$target_file', slider_caption = '".$_POST['slider_caption']."',
                        slider_status = '".$_POST['slider_status']."', slider_type='".$_POST['slider_type']."' WHERE slider_id ='".$_POST['slider_id']."'";
                        $ret = pg_query($db, $sql);
                        if($ret != ''){
                            echo 7;
                        }
                        pg_close($db);
                    }
                }    
            }
        }else{
            $slider_name = checkString($_POST['slider_title']);
            $target_dir = "uploads/Sliders/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $name = date('m-d-Y_');
            $target_file = $name.basename($_FILES["slider_upload"]["name"]);
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
    
            $allowed_image_extension = array(
                "png",
                "jpg",
                "jpeg"
            );
            if (! in_array($FileType, $allowed_image_extension)) {
                echo 6;
            }else{
                if (move_uploaded_file($_FILES["slider_upload"]["tmp_name"], $target_dir.$name.$_FILES["slider_upload"]["name"])) {
                    $sql = "INSERT INTO sliders(slider_title,slider_img,slider_caption,slider_status,slider_type) VALUES
                    ('$slider_name','$target_file','".$_POST['slider_caption']."','".$_POST['slider_status']."','".$_POST['slider_type']."')";
                    $ret = pg_query($db, $sql);
                    if($ret != ''){
                        echo 1;
                    }
                    pg_close($db);
                }
            }    
        }

    }
?>