<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	if(isset($_POST['whats_id']) && ($_POST['whats_id'] != '')){
		// var_dump($_FILES);die;	
		if ($_FILES['what_file']['name'] == '') {
			$sql = "select * from what_new where whats_id = '".$_POST['whats_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
	
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
				// echo 1;
			} else {
				echo "Sorry, there was an error uploading your file.";
				
				}
				
			$query = "UPDATE what_new SET whats_title='".$_POST['whats_title']."',whats_desc ='".$_POST['description']."',
			whats_file='$target_file' WHERE whats_id='".$_POST['whats_id']."'";

			// $sql = "INSERT INTO what_new(whats_title,whats_desc,whats_file)
			// VALUES
			// ('".$_POST['whats_title']."','".$_POST['description']."','$target_file')";
			$ret = pg_query($db, $query);
			pg_close($db);
		}
	}else{
		$target_dir = "uploads/whatsNew/";
		$name =date('m-d-Y_');
		$target_file = $name.basename($_FILES["what_file"]["name"]);
		// var_dump($target_file);die;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (move_uploaded_file($_FILES["what_file"]["tmp_name"], $target_dir.$name.$_FILES["what_file"]["name"])) {
			// echo 1;
			} else {
			echo "Sorry, there was an error uploading your file.";
			}
		$sql = "INSERT INTO what_new(whats_title,whats_desc,whats_file)
		VALUES
		('".$_POST['whats_title']."','".$_POST['description']."','$target_file')";
		$ret = pg_query($db, $sql);
		if(!$ret) {
			echo pg_last_error($db);
			exit;
		}else{
			echo 1;
		}
		pg_close($db);
	}
?>