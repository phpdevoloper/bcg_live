<?php
	include('inc/dbconnection.php');
	if(isset($_POST['tender_id']) && $_POST['tender_id'] != ''){
		if ($_FILES['what_file']['name'] == '') {
			// var_dump($_POST);die();
			$sql = "SELECT * FROM tenders WHERE tender_id = '".$_POST['tender_id']."'";
				$ret = pg_query($db, $sql); 
				$data = pg_fetch_assoc($ret);
				$rec_files = $data['tenders_notice'];
				
			
				$query = "UPDATE tenders SET 
				tender_title='".$_POST['tender_title']."',
				advertise_no ='".$_POST['advt_no']."',
				date_of_announce ='".$_POST['data_announce']."',
				date_of_closed ='".$_POST['closed_date']."',
				tenders_notice = '$rec_files',
				file_size='".$data['file_size']."',
				tender_status ='".$_POST['tender_status']."' WHERE tender_id ='".$_POST['tender_id']."'";

				// echo $query;die;
				$exc = pg_query($db,$query);
				if(!$exc) {
					echo pg_last_error($db);
					exit;
				}else{
					echo 1;
				}
				pg_close($db);

		} else {

			
			$target_dir = "uploads/tenders/";
	        if (!file_exists($target_dir)) {
	            mkdir($target_dir, 0777, true);
	        }
			$name =date('m-d-Y_');
			$target_file = $name.basename($_FILES["what_file"]["name"]);
			// var_dump($target_file);die;
			$file_size = $_FILES["what_file"]["size"];
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
				if (move_uploaded_file($_FILES["what_file"]["tmp_name"], $target_dir.$name.$_FILES["what_file"]["name"])) {	

					$query = "UPDATE tenders SET 
					tender_title='".$_POST['tender_title']."',
					advertise_no ='".$_POST['advt_no']."',
					date_of_announce ='".$_POST['data_announce']."',
					date_of_closed ='".$_POST['closed_date']."',
					tenders_notice = '$target_file',
					file_size='$file_size',
					tender_status ='".$_POST['tender_status']."' WHERE tender_id ='".$_POST['tender_id']."'";

					$ret = pg_query($db, $query);
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

			}

	} else{
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
					('".$_POST['tender_title']."','".$_POST['advt_no']."','".$_POST['data_announce']."','".$_POST['closed_date']."','$target_file','$file_size','".$_POST['tender_status']."')";
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
	}
?>