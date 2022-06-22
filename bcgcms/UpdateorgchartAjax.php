<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	if($_POST['org_id'] != ''){
		if ($_FILES['org_file']['name'] == '') {
			$sql = "select * from organisation_chart where org_id = '".$_POST['org_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
			// var_dump($data);die;
	
			$query = "UPDATE organisation_chart SET org_pic = '".$data['org_pic']."' WHERE org_id='".$_POST['org_id']."'";
			$exc = pg_query($db,$query);
			pg_close($db);
		}else{
			$target_dir = "uploads/oganisation/";
			$target_file = $target_dir.basename($_FILES["org_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["org_file"]["tmp_name"], $target_dir.$_FILES["org_file"]["name"])) {
				// echo 1;
			} else {
				echo "Sorry, there was an error uploading your file.";
				}
				
			$query = "UPDATE organisation_chart SET org_pic ='$target_file' WHERE org_id='".$_POST['org_id']."'";

			$ret = pg_query($db, $query);
			pg_close($db);
		}
	}else{
		$target_dir = "uploads/oganisation/";
		$target_file = $target_dir.basename($_FILES["org_file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (move_uploaded_file($_FILES["org_file"]["tmp_name"], $target_dir.$_FILES["org_file"]["name"])) {
			// echo 1;
			} else {
			echo "Sorry, there was an error uploading your file.";
			}
		$sql = "INSERT INTO organisation_chart(org_pic)	VALUES ('$target_file')";
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