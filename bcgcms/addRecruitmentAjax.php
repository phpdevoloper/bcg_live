<?php
	include('inc/dbconnection.php');
	include('inc/Validation.php');

	$Validation = new Validation();
    // var_dump($_POST,$_FILES);die;
	if(isset($_POST['rec_id']) && $_POST['rec_id'] != ''){
		if ($_FILES['rec_file']['name'] == '') {
			$sql = "select * from recruitment where rec_id = '".$_POST['rec_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
			$rec_tile = $Validation->clean($_POST['rec_title']);
			var_dump($rec_tile);die;
	
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
		$target_dir = "uploads/recruitment/";
		$name = date('m-d-Y_');
		$target_file = $name.basename($_FILES["advt_notifi"]["name"]);
		$file_size = $_FILES["advt_notifi"]["size"];
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
			if (move_uploaded_file($_FILES["advt_notifi"]["tmp_name"], $target_dir.$name.$_FILES["advt_notifi"]["name"])) {
				$sql = "INSERT INTO recruitment(rect_title,advt_no,date_of_announce,last_date_to_apply,upload_advt,file_size,rec_status)
				VALUES
				('".$_POST['rect_title']."', '".$_POST['advt_no']."', '".$_POST['data_announce']."', '".$_POST['last_date_to']."','$target_file',
				'$file_size','".$_POST['rec_status']."')";
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