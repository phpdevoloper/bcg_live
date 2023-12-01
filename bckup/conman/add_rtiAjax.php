<?php
	include('inc/dbconnection.php');
    include('inc/checkval.php');
	
    if(isset($_POST['rti_id']) && $_POST['rti_id'] != ''){
        if($_POST['rti_url'] == '' && $_FILES['rti_file']['name'] == '') {
            if(isset($_POST['action']) && !empty($_POST['action'])){
                if($_POST['action'] == "FirstLevel"){
                    // $sql = "SELECT * FROM mst_sub_rti where sub_rti_id ='".$_POST['rti_id']."' ORDER BY sub_rti_id ASC ";
                    // $check_att = pg_query($db, $sql);
                    // $row = pg_fetch_assoc($check_att);
    
                    $update = "update mst_sub_rti set sub_rti_name='".$_POST['rti_title']."',
                     status='".$_POST['rti_status']."'
                    where sub_rti_id = '".$_POST['rti_id']."'";
                    if($ret = pg_query($db, $update)){
                        echo json_encode(["code" => "200","msg"=>"Successfully Updated"]);
                    }
                }else if ($_POST['action'] == "SecondLevel") {                    
                    $update = "update subs_rti_id set subs_rti_name='".$_POST['rti_title']."',
                     status='".$_POST['rti_status']."'
                    where subs_rti_id = '".$_POST['rti_id']."'";
                    if($ret = pg_query($db, $update)){
                        echo json_encode(["code" => "200","msg"=>"Successfully Updated"]);
                    }
                   
                }

            }else {
                
                $sql = "select * from mst_rti where rti_id ='".$_POST['rti_id']."'";
                $check_att = pg_query($db, $sql);
                $row = pg_fetch_assoc($check_att);
    
                $update = "update mst_rti set rti_name='".$_POST['rti_title']."',rti_status='".$_POST['rti_status']."',
                rti_attachment = '".$row['rti_attachment']."',rti_url ='".$row['rti_url']."' where rti_id = '".$_POST['rti_id']."'";
                if($ret = pg_query($db, $update)){
                    echo json_encode(["code" => "200","msg"=>"Successfully Updated"]);
                }
                pg_close($db);
            }
        }else{
            if(isset($_POST['action']) && !empty($_POST['action'])){
                if($_POST['action'] == "FirstLevel"){

                    if (empty($_FILES["rti_file"]["name"])) {
                        $update = "update mst_sub_rti set sub_rti_name='".$_POST['rti_title']."',status='".$_POST['rti_status']."',
                            rti_upload ='".$_POST['rti_url']."',file_type='Url'
                            where sub_rti_id = '".$_POST['rti_id']."'";
                            if($ret = pg_query($db, $update)){ 
                                echo json_encode(['code'=>"200"]);
                            }else {
                                echo json_encode(['code'=>"500"]);
                            }
                        
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
                        }else {
                            if (empty($errorMSG)) {
                                if (move_uploaded_file($_FILES["rti_file"]["tmp_name"], $target_dir.$name.$_FILES["rti_file"]["name"])) {
                                    $update = "update mst_sub_rti set sub_rti_name='".$_POST['rti_title']."',status='".$_POST['rti_status']."',
                                    rti_upload = '$target_file',file_type='$FileType'
                                    where sub_rti_id = '".$_POST['rti_id']."'";
                                    if($ret = pg_query($db, $update)){ 
                                        echo json_encode(['code'=>"200"]);
                                    }
                                    pg_close($db);
                                }
                            }else{
                                echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
                            }
                        }
                    }
                }else if($_POST['action'] == "SecondLevel"){

                    if (!empty($_POST['rti_url'])) {
                        $update = "update mst_subs_rti set subs_rti_name='".$_POST['rti_title']."',
                        file_type = 'Url',
                        status='".$_POST['rti_status']."',
                        rti_upload = '".$_POST['rti_url']."'
                        where subs_rti_id = '".$_POST['rti_id']."'";
                        if($ret = pg_query($db, $update)){
                            echo json_encode(["code" => "200","msg"=>"Successfully Updated"]);
                        }else {
                            echo json_encode(["code" => "500","msg"=>"Something went wrong in the datebase"]);
                        }
                        
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
                        }else {
                                if (empty($errorMSG)) {
                                    if (move_uploaded_file($_FILES["rti_file"]["tmp_name"], $target_dir.$name.$_FILES["rti_file"]["name"])) {
                                        $update = "update mst_subs_rti set subs_rti_name='".$_POST['rti_title']."',
                                        file_type = '$FileType',
                                        status='".$_POST['rti_status']."',
                                        rti_upload = '$target_file'
                                        where subs_rti_id = '".$_POST['rti_id']."'";

                                        if($ret = pg_query($db, $update)){ 
                                            echo json_encode(['code'=>"200"]);
                                        }
                                        pg_close($db);
                                    }
                                }else{
                                    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
                                }
                            // }
                        }
                    }
                }
            }else {

                if (!empty($_POST['rti_url'])) {
                    $update = "update mst_rti set rti_name='".$_POST['rti_title']."',rti_status='".$_POST['rti_status']."',
                            file_type='$FileType',rti_url ='".$_POST['rti_url']."'
                            where rti_id = '".$_POST['rti_id']."'";
                            if($ret = pg_query($db, $update)){ 
                                echo json_encode(['code'=>200]);
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
                            file_type='$FileType',rti_attachment ='$target_file'
                            where rti_id = '".$_POST['rti_id']."'";
                            if($ret = pg_query($db, $update)){ 
                                echo json_encode(['code'=>200]);
                            }
                            pg_close($db);
                        }
                    }else{
                        echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
                    }

                }
            }
        }
    }else{
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

    }

?>