<?php
	include('inc/dbconnection.php');
    include('inc/Validation.php');
    var_dump($_POST,$_FILES);die;

    if(isset($_POST['rti_id']) && $_POST['rti_id'] != ''){
        if ($_POST['rti_url'] == '' && $_FILES['rti_file']['name'] == '') {

            $sql = "select * from mst_rti where rti_id ='".$_POST['rti_id']."'";
            $check_att = pg_query($db, $sql);
            $row = pg_fetch_assoc($check_att);

            $update = "update mst_rti set rti_name='".$_POST['rti_title']."',rti_status='".$_POST['rti_status']."',
            rti_attachment = '".$row['rti_attachment']."',rti_url ='".$row['rti_url']."' where rti_id = '".$_POST['rti_id']."'";
            $ret = pg_query($db, $update);
            if($ret != ''){
                echo 7;
            }
            pg_close($db);
        }else{
            $target_dir = "uploads/RTI/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $name =date('m-d-Y_');
            $target_file = $name.basename($_FILES["rti_file"]["name"]);
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $FileType = checktypeFile($FileType);
            $errorMSG = '';
            if ($FileType == 2) {
                $errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid file format</li>";
            }
            if (empty($errorMSG)) {
                if (move_uploaded_file($_FILES["rti_file"]["tmp_name"], $target_dir.$name.$_FILES["rti_file"]["name"])) {
                    $update = "update mst_rti set rti_name='".$_POST['rti_title']."',rti_status='".$_POST['rti_status']."',
                    rti_attachment = '$target_file',file_type='$FileType',rti_url ='".$_POST['rti_url']."'
                    where rti_id = '".$_POST['rti_id']."'";
                    $ret = pg_query($db, $update);
                    if($ret != ''){ 
                        echo json_encode(['code'=>200]);
                    }
                    pg_close($db);
                }
            }else{
                echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
            }
        }
    }else{
        // if (isset($_FILES)) {
        //     $target_dir = "uploads/RTI/";
        //     if (!file_exists($target_dir)) {
        //         mkdir($target_dir, 0777, true);
        //     }
        //     $name =date('m-d-Y_');
        //     $target_file = $name.basename($_FILES["rti_file"]["name"]);
        //     $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //     if (move_uploaded_file($_FILES["rti_file"]["tmp_name"], $target_dir.$name.$_FILES["rti_file"]["name"])) {
        //         $sql = "INSERT INTO mst_rti(rti_name,rti_status,rti_attachment,file_type) VALUES
        //         ('".$_POST['rti_title']."', '".$_POST['rti_status']."','".$_POST['rti_attachment']."','".$_POST['file_type']."','".$_POST['rti_url']."')";
        //         $ret = pg_query($db, $sql);
        //         if($ret != ''){
        //             echo 1;
        //         }
        //         pg_close($db);
        //     }
        // }else{

            if(isset($_POST['action_mes']) && $_POST['action_mes'] != ''){

                $title = clean($_POST['rti_title']);


                if ($_POST['add_rti_url'] == '') {
                    
                }
                $sql = "INSERT INTO mst_rti(rti_name,rti_status) VALUES
                    ('$title', '".$_POST['rti_status']."')";
                    $ret = pg_query($db, $sql);
                    if($ret != ''){
                        echo 1;
                    }
                pg_close($db);

            }

        // }

        

    }

?>