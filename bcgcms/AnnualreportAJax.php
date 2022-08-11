<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	if(isset($_POST['report_id']) && ($_POST['report_id'] != '')){
        if ($_FILES['report_file']['name'] == '') {
            // var_dump($_POST);die;	
			$sql = "select * from documents_bcg where doc_id = '".$_POST['report_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
	
			$query = "UPDATE documents_bcg SET doc_title='".$_POST['report_title']."',doc_attachment ='".$data['doc_attachment']."',
			doc_description ='".$_POST['r_description']."',doc_cate ='".$_POST['report_id']."'  WHERE doc_id='".$_POST['report_id']."'";
			$exc = pg_query($db,$query);
            echo 1;
			pg_close($db);
		}else{
			$target_dir = "uploads/Documents/";
            if(!is_dir($target_dir)) 
            {
                mkdir($target_dir, 0777, true);
            }
			$name =date('m-d-Y_');
			$target_file = $name.basename($_FILES["report_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["report_file"]["tmp_name"], $target_dir.$name.$_FILES["report_file"]["name"])) {
				echo 1;
                $query = "UPDATE documents_bcg SET doc_title='".$_POST['report_title']."',doc_attachment ='$target_file',
                doc_description ='".$_POST['r_description']."',doc_cate ='".$_POST['report_id']."'  WHERE doc_id='".$_POST['report_id']."'";
                $ret = pg_query($db, $query);
                pg_close($db);
			} else {
				echo "Sorry, there was an error uploading your file.";
            }
		}
	}else{
		// var_dump($_POST,$_FILES);die;
		$target_dir = "uploads/Documents/";
        if(!is_dir($target_dir)) 
        {
            mkdir($target_dir, 0777, true);
        }
		$name =date('m-d-Y_');
		$target_file = $name.basename($_FILES["report_file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (move_uploaded_file($_FILES["report_file"]["tmp_name"], $target_dir.$name.$_FILES["report_file"]["name"])) {
			// echo 1;
            $sql = "INSERT INTO documents_bcg(doc_title,doc_attachment,doc_description,doc_cate)
		    VALUES
            ('".$_POST['report_title']."','$target_file','".$_POST['r_description']."','".$_POST['report_cate']."')";
            // echo $sql;exit;  
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
?>