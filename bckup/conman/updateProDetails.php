<?php
	include('inc/dbconnection.php');
	// var_dump($_FILES);die;
		if($_FILES['short_pro']['name'] ==''){
			$sql = "SELECT * FROM director_desk WHERE dir_desk_id='".$_POST['director_id']."'";
			$res = pg_query($db,$sql);
			$result = pg_fetch_assoc($res);
			$target_file = $result['short_profile'];
		}else{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["short_pro"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["short_pro"]["tmp_name"], $target_file)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["short_pro"]["name"])). " has been uploaded.";
				} else {
				echo "Sorry, there was an error uploading your file.";
				}
		}

		if($_FILES['detail_pro']['name'] ==''){
			$sql = "SELECT * FROM director_desk WHERE dir_desk_id='".$_POST['director_id']."'";
			$res = pg_query($db,$sql);
			$result = pg_fetch_assoc($res);
			$target_file_t = $result['detail_profile'];
		}
		else{
			$target_dir = "uploads/";
			$target_file_t = $target_dir . basename($_FILES["detail_pro"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file_t,PATHINFO_EXTENSION));
	
			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["detail_pro"]["tmp_name"], $target_file_t)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["detail_pro"]["name"])). " has been uploaded.";
				}else {
				echo "Sorry, there was an error uploading your file.";
			}
		}

		$sql = "UPDATE director_desk SET
		short_profile ='$target_file',detail_profile = '$target_file_t'
        WHERE dir_desk_id = '".$_POST['director_id']."'";
		$ret = pg_query($db, $sql);
		if(!$ret) {
			echo pg_last_error($db);
			exit;
		} 
		echo 1;
		pg_close($db);
?>