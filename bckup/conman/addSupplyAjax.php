<?php
	include('inc/dbconnection.php');
	// include('inc/Validation.php');

    // var_dump($_POST,$_FILES);die;
	if(isset($_POST['rec_id']) && $_POST['rec_id'] != ''){
		if ($_FILES['rec_file']['name'] == '') {
			$sql = "select * from recruitment where rec_id = '".$_POST['rec_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
			$rec_tile = $Validation->clean($_POST['rec_title']);
	
			$query = "UPDATE recruitment SET rect_title='".$Validation->clean($_POST['rec_title'])."',advt_no ='".$Validation->clean($_POST['advt_no'])."',
			date_of_announce ='".$Validation->clean($_POST['date_of_announe'])."',last_date_to_apply ='".$Validation->clean($_POST['last_date_apply'])."',
			upload_advt = '".$Validation->clean($data['upload_advt'])."',file_size='".$Validation->clean($data['file_size'])."',
			rec_status='".$Validation->clean($_POST['rec_status'])."' WHERE rec_id='".$Validation->clean($_POST['rec_id'])."'";
			$exc = pg_query($db,$query);
			if(!$exc) {
				echo pg_last_error($db);
				exit;
			}else{
				echo 1;
			}
			pg_close($db);
		}else{
			$target_dir = "uploads/recruitment/";
			$name =date('m-d-Y_');
			$target_file = $name.basename($Validation->clean($_FILES["rec_file"]["name"]));
			$file_size = $Validation->clean($_FILES["rec_file"]["size"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			$extensions= array("pdf");
			
			if(in_array($imageFileType,$extensions)=== false){
				$errors['extension']="extension not allowed, please choose a PDF file.";
			}
			// Check if image file is a actual image or fake image
			if(empty($errors) == true) {
				if (move_uploaded_file($Validation->clean($_FILES["rec_file"]["tmp_name"]), $target_dir.$name.$Validation->clean($_FILES["rec_file"]["name"]))) {
					$query = "UPDATE recruitment SET rect_title='".$Validation->clean($_POST['rec_title'])."',advt_no ='".$Validation->clean($_POST['advt_no'])."',
					date_of_announce ='".$Validation->clean($_POST['date_of_announe'])."',last_date_to_apply ='".$Validation->clean($_POST['last_date_apply'])."',
					upload_advt = '$target_file',file_size='$file_size',rec_status='".$Validation->clean($_POST['rec_status'])."' WHERE rec_id='".$Validation->clean($_POST['rec_id'])."'";
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
			}
		}
	}else{
        // var_dump($_POST,$_FILES);die;
		$target_dir = "uploads/BCG_Supply/";
		$target_file = basename($_FILES["supply_report"]["name"]);
		$file_size = $_FILES["supply_report"]["size"];
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$extensions= array("jpg,png,jpeg,gif");

        // Check if upload folder already exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
      

         // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $errors["msg"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
		

		// Check if image file is a actual image or fake image
		if(empty($errors) == true) {
			if (move_uploaded_file($_FILES["supply_report"]["tmp_name"], $target_dir.$_FILES["supply_report"]["name"])) {
				$sql = "INSERT INTO supply_of_bcg(year_of_supply,supply_report)
				VALUES
				('".$_POST['year_of_report']."','$target_file')";
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