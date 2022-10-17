<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
		$target_dir = "uploads/tenders/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
		$name =date('m-d-Y_');
		$target_file = $name.basename($_FILES["tender_upload"]["name"]);
		// var_dump($target_file);die;
		$file_size = $_FILES["tender_upload"]["size"];
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$extensions= array("pdf");
      
		
		if(in_array($imageFileType,$extensions)=== false){
			$errors['extension']="extension not allowed, please choose a PDF file.";
		}
		
		if($file_size > 2097152){
			$errors['size']='File size must be excately 2 MB';
		}

		// Check if image file is a actual image or fake image
		if(empty($errors) == true) {
			if (move_uploaded_file($_FILES["tender_upload"]["tmp_name"], $target_dir.$name.$_FILES["tender_upload"]["name"])) {	
				$sql = "INSERT INTO tenders(tender_title,advertise_no,date_of_announce,date_of_closed,tenders_notice,file_size,tender_status)
				VALUES
				('".$_POST['tender_title']."','".$_POST['advt_no']."','".$_POST['data_announce']."', '".$_POST['closed_date']."','$target_file','$file_size','".$_POST['tender_status']."')";
				$ret = pg_query($db, $sql);
				if(!$ret) {
					echo pg_last_error($db);
					exit;
				}else{
					echo 1;
				}
			} else {
			echo "Sorry, there was an error uploading your file.";
			}
			pg_close($db);
		}else {
			echo json_encode($errors);
		 }
?>