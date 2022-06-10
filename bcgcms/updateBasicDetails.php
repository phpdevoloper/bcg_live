<?php
	include('../inc/dbconnection.php');
	if($_POST['director_id'] != ''){
		if ($_FILES['director_photo']['name'] == '') {
			$sql = "select * from director_desk where dir_desk_id = '".$_POST['director_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
	
			$query = "UPDATE director_desk SET director_name='".$_POST['director_name']."',director_position ='".$_POST['director_position']."',
			director_qualification='".$_POST['director_qualification']."',position_held='".$_POST['position_held']."',
			director_photo='".$data['director_photo']."'";
			$exc = pg_query($db,$query);
			if(!$exc) {
				echo pg_last_error($db);
				exit;
			}else{
				echo 1;
			}
		}else{
			$target_dir = "assets/uploads/";
			$target_file = $target_dir . basename($_FILES["director_photo"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["director_photo"]["tmp_name"], $target_file)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["director_photo"]["name"])). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
			$sql = "select * from director_desk where dir_desk_id = '".$_POST['director_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
	
			$query = "UPDATE director_desk SET director_name='".$_POST['director_name']."',director_position ='".$_POST['director_position']."',
			director_qualification='".$_POST['director_qualification']."',position_held='".$_POST['position_held']."',
			director_photo='$target_file'";
			$exc = pg_query($db,$query);
			if(!$exc) {
				echo pg_last_error($db);
				exit;
			}else{
				echo 1;
			}
		}
	}
	else{
		$target_dir = "assets/uploads/";
		$target_file = $target_dir . basename($_FILES["director_photo"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (move_uploaded_file($_FILES["director_photo"]["tmp_name"], $target_file)) {
			// echo "The file ". htmlspecialchars( basename( $_FILES["director_photo"]["name"])). " has been uploaded.";
			} else {
			echo "Sorry, there was an error uploading your file.";
			}
		echo $sql = "INSERT INTO director_desk (director_name,director_position,director_qualification,position_held,director_photo)
		VALUES
		('".$_POST['director_name']."','".$_POST['director_position']."',
		'".$_POST['director_qualification']."','".$_POST['position_held']."',
		'$target_file')";
		$ret = pg_query($db, $sql);
		if(!$ret) {
			echo pg_last_error($db);
			exit;
		}else{
			echo 1;
		}
		// echo json_encode($result);
		pg_close($db);
	}
	
	
	
	

?>