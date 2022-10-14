<?php
	include('inc/dbconnection.php');
	include('inc/checkval.php');
    // var_dump($_POST);die;
    if (isset($_POST['action_mes']) && $_POST['action_mes'] == 'delete') {
        $slider_id = check_numeric($_POST['slider_id']);
        if ($slider_id == "2D") {
            $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>ID is NOT Numeric</li>";
        }
        $sql = "DELETE FROM sliders WHERE slider_id = '$slider_id'";
        $ret = pg_query($db, $sql);
        if($ret){
            echo json_encode(["code"=>205,"msg"=>'Deleted Successfully']);
        }
        pg_close($db);
    }else {
        if (isset($_POST['slider_id']) && !empty($_POST['slider_id'])) {
            $slider_id = check_numeric($_POST['slider_id']);
            $slider_name   = $_POST['slider_title'];
            $slider_type    = $_POST["slider_type"];
            $slider_status  = $_POST["slider_status"];
            $slider_caption = $_POST["slider_caption"];

            if ($_FILES["slider_u"]["name"] == '') {
                $sql = "SELECT * FROM sliders WHERE slider_id = '$slider_id'";
                $ret = pg_query($db, $sql);
                $data = pg_fetch_assoc($ret);


                $sql = "UPDATE sliders SET slider_title = '$slider_name',slider_img = '".$data['slider_img']."',slider_caption = '$slider_caption',
                slider_status = '$slider_status', slider_type ='$slider_type' WHERE slider_id='$slider_id'";
                $res = pg_query($db, $sql);
                if($ret != ''){
                    echo json_encode(["code"=>206,"msg"=>'Updated Successfully']);
                }
                pg_close($db);

            }else {
                $slider_name = checkString($_POST['slider_title']);
                $slider_image = $_FILES["slider_u"]["name"];
                $target_dir = "uploads/Sliders/";
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $name = date('m-d-Y_');
                $target_file = $name.basename($slider_image);
                $FileType = checktypeImage(strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));
        
                if ($FileType == 2) {
                    $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid File Format</li>";
                }
                if (empty($errorMSG)) {
                    $slider_id = check_numeric($_POST['slider_id']);
                    if (move_uploaded_file($_FILES["slider_u"]["tmp_name"], $target_dir.$name.$slider_image)) {
                        $sql = "UPDATE sliders SET slider_title = '$slider_name',slider_img = '$target_file', slider_caption = '$slider_caption',
                        slider_status = '$slider_type', slider_type='$slider_type' WHERE slider_id ='$slider_id'";
                        $ret = pg_query($db, $sql);
                        if($ret != ''){
                            echo json_encode(["code"=>206,"msg"=>'Updated Successfully']);
                        }
                        pg_close($db);
                    }
                }else{
                    echo json_encode(["code"=>404,"msg"=>$errorMSG]);
                }
            }
            
        }else{
            $slider_title   = $_POST["slider_title"];
            $slider_caption = $_POST["slider_caption"];
            $slider_type    = $_POST["slider_type"];
            $slider_status  = $_POST["slider_status"];
            
            $errorMSG = "";
        
            $target_dir = "uploads/Sliders/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $name = date('m-d-Y_');
            $target_file = $name.basename($_FILES["slider_upload"]["name"]);
            $FileType = checktypeImage(strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));
        
            if ($FileType == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid File Format</li>";
            }
            if (empty($errorMSG)) {
                if(move_uploaded_file($_FILES["slider_upload"]["tmp_name"], $target_dir.$name.$_FILES["slider_upload"]["name"])) {
                    $sql = "INSERT INTO sliders(slider_title,slider_img,slider_caption,slider_status,slider_type) VALUES
                    ('$slider_title','$target_file','$slider_caption','$slider_status','$slider_type')";
                    $ret = pg_query($db, $sql);
                    if($ret != ''){
                        echo json_encode(["code"=>200,"msg"=>"Slider Added Successfully"]);
                    }
                    pg_close($db);
                }
            }else{
                echo json_encode(["code"=>404,"msg"=>$errorMSG]);
            }
        }
    }



    
    // $slider_name = checkString($_POST['slider_title']);
    // $slider_caption = $_POST['slider_caption'];
    // $slider_image = $_FILES["slider_u"]["name"];
    // $slider_type = $_POST['slider_type'];
    // $slider_status = $_POST['slider_status'];

    // if (isset($_POST['action_mes']) && $_POST['action_mes'] == 'delete') {
    //     $slider_id = check_numeric($_POST['slider_id']);
    //     $sql = "DELETE FROM sliders WHERE slider_id = '$slider_id'";

    //     $ret = pg_query($db, $sql);
    //     if($ret){
    //         echo 4;
    //     }
    //     pg_close($db);
    // }else{
    //     if (isset($_POST['slider_id']) && !empty($_POST['slider_id'])) {
    //         $slider_id = check_numeric($_POST['slider_id']);
    //         $slider_image = $_FILES["slider_u"]["name"];
    //         if ($slider_image == '') {
    //             $sql = "SELECT * FROM sliders WHERE slider_id = '$slider_id'";
    //             $ret = pg_query($db, $sql);
    //             $data = pg_fetch_assoc($ret);


    //             $sql = "UPDATE sliders SET slider_title = '$slider_name',slider_img = '".$data['slider_img']."', slider_caption = '$slider_caption',
    //             slider_status = '$slider_type', slider_type ='$slider_type' WHERE slider_id='$slider_id'";
    //             $res = pg_query($db, $sql);
    //             if($ret != ''){
    //                 echo 7;
    //             }
    //             pg_close($db);

    //         }else{

    //             $slider_name = checkString($_POST['slider_title']);
    //             $slider_image = $_FILES["slider_u"]["name"];
    //             $target_dir = "uploads/Sliders/";
    //             if (!file_exists($target_dir)) {
    //                 mkdir($target_dir, 0777, true);
    //             }
    //             $name = date('m-d-Y_');
    //             $target_file = $name.basename($slider_image);
    //             $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
    //             $allowed_image_extension = array(
    //                 "png",
    //                 "jpg",
    //                 "jpeg"
    //             );
    //             if (! in_array($FileType, $allowed_image_extension)) {
    //                 echo 6;
    //             }else{
    //                 $slider_id = check_numeric($_POST['slider_id']);
    //                 if (move_uploaded_file($_FILES["slider_u"]["tmp_name"], $target_dir.$name.$slider_image)) {
    //                     $sql = "UPDATE sliders SET slider_title = '$slider_name',slider_img = '$target_file', slider_caption = '$slider_caption',
    //                     slider_status = '$slider_type', slider_type='$slider_type' WHERE slider_id ='$slider_id'";
    //                     $ret = pg_query($db, $sql);
    //                     if($ret != ''){
    //                         echo 7;
    //                     }
    //                     pg_close($db);
    //                 }
    //             }    
    //         }
    //     }else{
    //         $slider_name = checkString($_POST['slider_title']);
    //         $target_dir = "uploads/Sliders/";
    //         if (!file_exists($target_dir)) {
    //             mkdir($target_dir, 0777, true);
    //         }
    //         $name = date('m-d-Y_');
    //         $target_file = $name.basename($_FILES["slider_upload"]["name"]);
    //         $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
    
    //         $allowed_image_extension = array(
    //             "png",
    //             "jpg",
    //             "jpeg"
    //         );
    //         if (! in_array($FileType, $allowed_image_extension)) {
    //             echo 6;
    //         }else{
    //             if (move_uploaded_file($_FILES["slider_upload"]["tmp_name"], $target_dir.$name.$_FILES["slider_upload"]["name"])) {
    //                 $sql = "INSERT INTO sliders(slider_title,slider_img,slider_caption,slider_status,slider_type) VALUES
    //                 ('$slider_name','$target_file','$slider_caption','$slider_type','$slider_type')";
    //                 $ret = pg_query($db, $sql);
    //                 if($ret != ''){
    //                     echo 1;
    //                 }
    //                 pg_close($db);
    //             }
    //         }    
    //     }

    // }
?>