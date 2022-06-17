<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	// if($_POST['director_id'] != ''){
	// 	if ($_FILES['director_photo']['name'] == '') {
	// 		$sql = "select * from director_desk where dir_desk_id = '".$_POST['director_id']."'";
	// 		$ret = pg_query($db, $sql); 
	// 		$data = pg_fetch_assoc($ret);
	
	// 		$query = "UPDATE director_desk SET director_name='".$_POST['director_name']."',director_position ='".$_POST['director_position']."',
	// 		director_qualification='".$_POST['director_qualification']."',position_held='".$_POST['position_held']."',
	// 		director_photo='".$data['director_photo']."'";
	// 		$exc = pg_query($db,$query);
	// 		if(!$exc) {
	// 			echo pg_last_error($db);
	// 			exit;
	// 		}else{
	// 			echo 1;
	// 		}
	// 	}else{


			// $target_dir = "assets/uploads/";
			// $target_file = $target_dir . basename($_FILES["director_photo"]["name"]);
			// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// // Check if image file is a actual image or fake image
			// if (move_uploaded_file($_FILES["director_photo"]["tmp_name"], $target_file)) {
			// 	// echo "The file ". htmlspecialchars( basename( $_FILES["director_photo"]["name"])). " has been uploaded.";
			// } else {
			// 	echo "Sorry, there was an error uploading your file.";
			// }
			// $sql = "select * from director_desk where dir_desk_id = '".$_POST['director_id']."'";
			// $ret = pg_query($db, $sql); 
			// $data = pg_fetch_assoc($ret);
	
			// $query = "UPDATE director_desk SET director_name='".$_POST['director_name']."',director_position ='".$_POST['director_position']."',
			// director_qualification='".$_POST['director_qualification']."',position_held='".$_POST['position_held']."',
			// director_photo='$target_file'";
			// $exc = pg_query($db,$query);
			// if(!$exc) {
			// 	echo pg_last_error($db);
			// 	exit;
			// }else{
			// 	echo 1;
			// }
	// 	}
	// }
	// else{
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
	// }
	
	
	
	

?>