<?php
	include('inc/dbconnection.php');
    // var_dump($_POST,$_FILES);die;
	if($_POST['pro_id'] != ''){
		if ($_FILES['pro_file']['name'] == '') {
			$sql = "select * from production where pro_id = '".$_POST['pro_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
			// var_dump($data);die;
	
			$query = "UPDATE production SET production_pic = '".$data['pro_pic']."' WHERE pro_id='".$_POST['pro_id']."'";
			$exc = pg_query($db,$query);
			pg_close($db);
		}else{
			$target_dir = "uploads/products/";
			$target_file = $target_dir.basename($_FILES["pro_file"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if image file is a actual image or fake image
			if (move_uploaded_file($_FILES["pro_file"]["tmp_name"], $target_dir.$_FILES["pro_file"]["name"])) {
				// echo 1;
			} else {
				echo "Sorry, there was an error uploading your file.";
				}
				
			$query = "UPDATE production SET production_pic ='$target_file' WHERE pro_id='".$_POST['pro_id']."'";

			$ret = pg_query($db, $query);
			pg_close($db);
		}
	}else{
		$target_dir = "uploads/products/";
		$target_file = $target_dir.basename($_FILES["pro_file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (move_uploaded_file($_FILES["pro_file"]["tmp_name"], $target_dir.$_FILES["pro_file"]["name"])) {
			// echo 1;
			} else {
			echo "Sorry, there was an error uploading your file.";
			}
			$sql = "INSERT INTO production(production_pic)	VALUES ('$target_file')";
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