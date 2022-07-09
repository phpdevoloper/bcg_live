<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	if(isset($_POST['whats_id']) && $_POST['whats_id'] != ''){
		if ($_FILES['what_file']['name'] == '') {
			$sql = "select * from what_new where whats_id = '".$_POST['whats_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
			// var_dump($data);die;
	
			$query = "UPDATE what_new SET whats_title='".$_POST['whats_title']."',whats_desc ='".$_POST['description']."',
			whats_file='".$data['whats_file']."' WHERE whats_id='".$_POST['whats_id']."'";
			$exc = pg_query($db,$query);
			pg_close($db);
		}else{
			$target_dir = "uploads/whatsNew/";
			$name =date('m-d-Y_');
			$target_file = $name.basename($_FILES["what_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["what_file"]["tmp_name"], $target_dir.$name.$_FILES["what_file"]["name"])) {
				$query = "UPDATE what_new SET whats_title='".$_POST['whats_title']."',whats_desc ='".$_POST['description']."',
				whats_file='$target_file' WHERE whats_id='".$_POST['whats_id']."'";
				$ret = pg_query($db, $query);
				echo 1;
			} else {
				echo "Sorry, there was an error uploading your file.";
				}
				
			pg_close($db);
		}
	}else{
		$target_dir = "uploads/recruitment/";
		$name =date('m-d-Y_');
		$target_file = $name.basename($_FILES["advt_notifi"]["name"]);
		// var_dump($target_file);die;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (move_uploaded_file($_FILES["advt_notifi"]["tmp_name"], $target_dir.$name.$_FILES["advt_notifi"]["name"])) {
				$sql = "INSERT INTO recruitment(rect_title,advt_no,date_of_announce,last_date_to_apply,upload_advt)
				VALUES
				('".$_POST['rect_title']."', '".$_POST['advt_no']."', '".$_POST['data_announce']."', '".$_POST['last_date_to']."','$target_file')";
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
	}
?>