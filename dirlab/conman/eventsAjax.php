<?php
	include('inc/dbconnection.php');
    // var_dump(!empty($_POST['event_id']));die;
	if(isset($_POST['event_id']) && !empty($_POST['event_id'])){
        if($_POST['event_type'] == 'pdf'){
            if (isset($_FILES) && $_FILES['event_file']['name'] == '') {
                $sql = "select * from events where event_id = '".$_POST['event_id']."'";
                $ret = pg_query($db, $sql); 
                $data = pg_fetch_assoc($ret);
                // var_dump($data);die;
        
                $query = "UPDATE events SET event_title='".$_POST['event_title']."',event_desc ='".$_POST['event_desc']."',
                event_file='".$data['event_file']."' WHERE event_id='".$_POST['event_id']."'";
                $exc = pg_query($db,$query);
                if(!$exc) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
            }else{
            $target_dir = "uploads/events/";
            if(!is_dir($target_dir )) 
            {
                mkdir($target_dir, 0777, true);
            }
            $name =date('m-d-Y_');
            $target_file = $name.basename($_FILES["event_file"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (move_uploaded_file($_FILES["event_file"]["tmp_name"], $target_dir.$name.$_FILES["event_file"]["name"])) {
                $sql = "UPDATE events SET event_title = '".$_POST['event_title']."',
                event_desc ='".$_POST['event_desc']."',
                date_from = '".$_POST['date_from']."',
                date_to = '".$_POST['date_to']."',
                event_file = '$target_file',
                uploads_type = '$imageFileType' where event_id='".$_POST['event_id']."'";
                echo $sql;die;   
                $ret = pg_query($db, $sql);
                if(!$ret) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
            }

        } else{
            if ($_POST['event_url'] == '') {
                $sql = "select * from events where event_id = '".$_POST['event_id']."'";
                $ret = pg_query($db, $sql); 
                $data = pg_fetch_assoc($ret);
                // var_dump($data);die;
        
                $query = "UPDATE events SET event_title='".$_POST['event_title']."',event_desc ='".$_POST['event_desc']."',date_from = '".$_POST['date_from']."',
                date_to = '".$_POST['date_to']."',
                event_file='".$data['event_file']."' WHERE event_id='".$_POST['event_id']."'";
                $exc = pg_query($db,$query);
                if(!$exc) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
            }else{
                $Url = "Url";
                $query = "UPDATE events SET event_title='".$_POST['event_title']."',event_desc ='".$_POST['event_desc']."',date_from = '".$_POST['date_from']."',
                date_to = '".$_POST['date_to']."',
                event_file='".$_POST['event_url']."',uploads_type='$Url' WHERE event_id='".$_POST['event_id']."'";
                $exc = pg_query($db,$query);
                if(!$exc) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
            }
        }
	}elseif ($_POST['action'] == "EventDelete") {
        $query = "UPDATE events SET event_status='D' WHERE event_id='".$_POST['e_id']."'";
                $exc = pg_query($db,$query);
                if(!$exc) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
        
    }else{
        if ($_FILES["event_file"]["name"] == '' && $_POST['event_url'] == '') {
            $sql = "INSERT INTO events(event_title,event_desc,date_from,date_to,event_file)
            VALUES
            ('".$_POST['event_title']."','".$_POST['event_desc']."','".$_POST['date_from']."','".$_POST['date_to']."',
            '".$_POST['event_url']."')";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
                exit;
            }else{
                echo 1;
            }
            pg_close($db);
        }else{
            if(isset($_FILES) && $_FILES["event_file"]["name"] !== ''){
                $target_dir = "uploads/events/";
                if(!is_dir($target_dir )) 
                {
                    mkdir($target_dir, 0777, true);
                }
                $name =date('m-d-Y_');
                $target_file = $name.basename($_FILES["event_file"]["name"]);
                // var_dump($target_file);die;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
                // Check if image file is a actual image or fake image
                if (move_uploaded_file($_FILES["event_file"]["tmp_name"], $target_dir.$name.$_FILES["event_file"]["name"])) {
                    // echo 1;
                    } else {
                    echo "Sorry, there was an error uploading your file.";
                    }
                $sql = "INSERT INTO events(event_title,event_desc,date_from,date_to,event_file,uploads_type)
                VALUES
                ('".$_POST['event_title']."','".$_POST['event_desc']."','".$_POST['date_from']."','".$_POST['date_to']."',
                '$target_file','$imageFileType')";
                $ret = pg_query($db, $sql);
                if(!$ret) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
            }
            else{
                $url = 'Url';
                $sql = "INSERT INTO events(event_title,event_desc,date_from,date_to,event_file,uploads_type)
                VALUES
                ('".$_POST['event_title']."','".$_POST['event_desc']."','".$_POST['date_from']."','".$_POST['date_to']."',
                '".$_POST['event_url']."','$url')";
                $ret = pg_query($db, $sql);
                if(!$ret) {
                    echo pg_last_error($db);
                    exit;
                }else{
                    echo 1;
                }
                pg_close($db);
            }
        }
	}
?>