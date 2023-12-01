<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	// if(isset($_POST['whats_id']) && $_POST['whats_id'] != ''){
	// 	if ($_FILES['what_file']['name'] == '') {
	// 		$sql = "select * from what_new where whats_id = '".$_POST['whats_id']."'";
	// 		$ret = pg_query($db, $sql); 
	// 		$data = pg_fetch_assoc($ret);
	// 		// var_dump($data);die;
	
	// 		$query = "UPDATE what_new SET whats_title='".$_POST['whats_title']."',whats_desc ='".$_POST['description']."',
	// 		whats_file='".$data['whats_file']."' WHERE whats_id='".$_POST['whats_id']."'";
	// 		$exc = pg_query($db,$query);
	// 		pg_close($db);
	// 	}else{
            if ($_FILES["rti_file"]["name"] !== '') {
                // var_dump($_FILES);die;
                $target_dir = "uploads/RTI/";
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $name =date('m-d-Y_');
                $target_file = $name.basename($_FILES["rti_file"]["name"]);
                $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // var_dump($imageFileType);die;
                
                // Check if image file is a actual image or fake image
                if (move_uploaded_file($_FILES["rti_file"]["tmp_name"], $target_dir.$name.$_FILES["rti_file"]["name"])) {
                    $query = "UPDATE mst_subs_rti SET file_type ='$FileType',
                    rti_upload ='$target_file' WHERE subs_rti_id = '".$_POST['rti_id']."'";
                    $ret = pg_query($db, $query);
                    echo 1;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    }
            }else{
                // var_dump($_POST);die;
                $FileType = 'Url';
                $query = "UPDATE mst_subs_rti SET file_type ='$FileType', rti_upload='".$_POST['rti_url']."' WHERE subs_rti_id = '".$_POST['rti_id']."'";
                $ret = pg_query($db, $query);
                // rti_url
                echo 1;
            }
				
			pg_close($db);
		// }
	// }else{
		// $target_dir = "uploads/tenders/";
        // if (!file_exists($target_dir)) {
        //     mkdir($target_dir, 0777, true);
        // }
		// $name =date('m-d-Y_');
		// $target_file = $name.basename($_FILES["tender_upload"]["name"]);
		// // var_dump($target_file);die;
		// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		// if (move_uploaded_file($_FILES["tender_upload"]["tmp_name"], $target_dir.$name.$_FILES["tender_upload"]["name"])) {
		// 		$sql = "INSERT INTO tenders(tender_title,date_of_announce,tenders_notice,tender_status)
		// 		VALUES
		// 		('".$_POST['tender_title']."', '".$_POST['data_announce']."', '$target_file', '".$_POST['tender_status']."')";
		// 		$ret = pg_query($db, $sql);
		// 		if(!$ret) {
		// 			echo pg_last_error($db);
		// 			exit;
		// 		}else{
		// 			echo 1;
		// 		}
		// 	} else {
		// 	echo "Sorry, there was an error uploading your file.";
		// 	}
		// pg_close($db);
	// }
?>