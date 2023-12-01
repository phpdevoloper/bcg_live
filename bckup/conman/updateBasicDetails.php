<?php
	include('inc/dbconnection.php');
	include('inc/checkval.php');
	if(isset($_POST['director_id']) && $_POST['director_id'] != ''){
		$director_id = $_POST['director_id'];
		$director_name = $_POST['director_name'];
		$director_position = $_POST['director_position'];
		$position_held =  htmlentities($_POST['position_held'], ENT_QUOTES, "UTF-8");
		$director_qualification = $_POST['director_qualification'];

		if ($_FILES['director_photo']['name'] == '') {
			$sql = "select * from director_desk where dir_desk_id = '$director_id'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);

			
			$query = "UPDATE director_desk SET director_name='$director_name',director_position ='$director_position',
			director_qualification ='$director_qualification',position_held='$position_held',
			director_photo='".$data['director_photo']."'";
			$exc = pg_query($db,$query);
			if(!$exc) {
				echo pg_last_error($db);
				exit;
			}else{
				echo json_encode(["code"=>206,"msg"=>'Updated Successfully']);
			}
		}else {
			$director_id = $_POST['director_id'];
			$director_name = $_POST['director_name'];
			$director_position = $_POST['director_position'];
			$position_held =  htmlentities($_POST['position_held'], ENT_QUOTES, "UTF-8");
			$director_qualification = $_POST['director_qualification'];
			
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["director_photo"]["name"]);
			$imageFileType = checktypeImage(strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));

            if ($imageFileType == 2) {
				$errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid File Format</li>";
			}
			if (empty($errorMSG)) {
				// Check if image file is a actual image or fake image
				if (move_uploaded_file($_FILES["director_photo"]["tmp_name"], $target_file)) {
					// echo "The file ". htmlspecialchars( basename( $_FILES["director_photo"]["name"])). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
				$sql = "select * from director_desk where dir_desk_id = '$director_id'";
				$ret = pg_query($db, $sql); 
				$data = pg_fetch_assoc($ret);
		
				$query = "UPDATE director_desk SET director_name='$director_name',director_position ='$director_position',
				director_qualification='$director_qualification',position_held='$position_held',
				director_photo='$target_file'";
				$exc = pg_query($db,$query);
				if(!$exc) {
					echo pg_last_error($db);
					exit;
				}else{
					echo json_encode(["code"=>200,"msg"=>"Updated Successfully"]);
				}
			}else {
				echo json_encode(["code"=>404,"msg"=>$errorMSG]);
			}
				
		}
	}
	else{
		$director_name = $_POST['director_name'];
		$director_position = $_POST['director_position'];
		$position_held =  htmlentities($_POST['position_held'], ENT_QUOTES, "UTF-8");
		$director_qualification = $_POST['director_qualification'];


		$target_dir = "assets/uploads/";
		$target_file = $target_dir . basename($_FILES["director_photo"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if ($imageFileType == 2) {
			$errorMSG .= "<li><i class='fa fa-exclamation-circle'></i>Invalid File Format</li>";
		}

		if (empty($errorMSG)) {
			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["director_photo"]["tmp_name"], $target_file)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["director_photo"]["name"])). " has been uploaded.";
				} else {
				echo "Sorry, there was an error uploading your file.";
				}
			echo $sql = "INSERT INTO director_desk (director_name,director_position,director_qualification,position_held,director_photo)
			VALUES
			('$director_name','$director_position','$director_qualification','$position_held',
			'$target_file')";
			$ret = pg_query($db, $sql);
			if(!$ret) {
				echo pg_last_error($db);
				exit;
			}else{
				echo json_encode(["code"=>200,"msg"=>"Inserted Successfully"]);
			}
			// echo json_encode($result);
			pg_close($db);
		}else {
			echo json_encode(["code"=>404,"msg"=>$errorMSG]);
		}

	}
	
	
	
	

?>