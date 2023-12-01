<?php
	include('inc/dbconnection.php');
    // var_dump($_POST);die;

	if(isset($_POST['report_id']) && ($_POST['report_id'] != '')){
        if ($_FILES['report_file']['name'] == '') {
			$sql = "select * from documents_bcg where doc_id = '".$_POST['report_id']."'";
			$ret = pg_query($db, $sql); 
			$data = pg_fetch_assoc($ret);
	
			$query = "UPDATE documents_bcg SET doc_title='".$_POST['report_title']."',doc_attachment ='".$data['doc_attachment']."',
			doc_description ='".$_POST['r_description']."',year_of_report='".$_POST['year_of_report']."'  WHERE doc_id='".$_POST['report_id']."'";
			$exc = pg_query($db,$query);
			if(!$exc) {
				echo pg_last_error($db);
				exit;
			}else{
				echo 1;
			}
            
			pg_close($db);
		}else {
			$target_dir = "uploads/Documents/";
            if(!is_dir($target_dir)) 
            {
                mkdir($target_dir, 0777, true);
            }
			$name =date('m-d-Y_');
			$target_file = $name.basename($_FILES["report_file"]["name"]);
			$file_size = $_FILES["report_file"]["size"];
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			$extensions= array("pdf");
      
			if(in_array($imageFileType,$extensions)=== false){
				$errors['extension']="extension not allowed, please choose a JPEG or PNG file.";
			}
			
			// if($file_size > 2097152){
			// 	$errors['extension']='File size must be excately 2 MB';
			// }
			
			// Check if image file is a actual image or fake image
			if(empty($errors) == true) {
				if (move_uploaded_file($_FILES["report_file"]["tmp_name"], $target_dir.$name.$_FILES["report_file"]["name"])) {
					$query = "UPDATE documents_bcg SET doc_title='".$_POST['report_title']."',doc_attachment ='$target_file',
					doc_description ='".$_POST['r_description']."',file_size = '$file_size',year_of_report='".$_POST['year_of_report']."'  WHERE doc_id='".$_POST['report_id']."'";
					$ret = pg_query($db, $query);
					if(!$ret) {
						echo pg_last_error($db);
						exit;
					}else{
						echo 1;
					}
					pg_close($db);
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
            }else {
				// print_r($errors);
				echo json_encode($errors);
			 }
		}
	}elseif ($_POST['action'] == "AnnualDelete") {
		$query = "UPDATE documents_bcg SET report_status='D' WHERE doc_id ='".$_POST['a_id']."'";
        $exc = pg_query($db,$query);
        if(!$exc) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        }
        pg_close($db);
	}
	else{
		$target_dir = "uploads/Documents/";
        if(!is_dir($target_dir)) 
        {
            mkdir($target_dir, 0777, true);
        }
		$name =date('m-d-Y_');
		$target_file = $name.basename($_FILES["report_file"]["name"]);
		$file_size = $_FILES["report_file"]["size"];
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// $file_ext=strtolower(end(explode('.',$_FILES['report_file']['name'])));
		
		$extensions= array("pdf");
      
		if(in_array($imageFileType,$extensions) == false){
			$errors['extension']="extension not allowed, please choose a PDF file.";
			// echo json_encode($errors);
		}
		
		// if($file_size > 2097152){
		// 	$errors['size']='File size must be excately 2 MB';
		// 	// echo json_encode($errors);
		// }

		// Check if image file is a actual image or fake image
		if(empty($errors) == true) {
			if (move_uploaded_file($_FILES["report_file"]["tmp_name"], $target_dir.$name.$_FILES["report_file"]["name"])) {
				$sql = "INSERT INTO documents_bcg(doc_title,doc_attachment,doc_description,doc_cate,file_size,year_of_report)
				VALUES
				('".$_POST['report_title']."','$target_file','".$_POST['r_description']."','".$_POST['report_cate']."','$file_size','".$_POST['year_of_report']."')";
				// echo $sql;exit;  
				$ret = pg_query($db, $sql);
				if(!$ret) {
					echo pg_last_error($db);
					exit;
				}else{
					echo 1;
				}
				pg_close($db);
			} else {
			echo "Sorry, there was an error uploading your file.";
			}
		} else {
			// print_r($errors);
			echo json_encode($errors);
		 }
		
	}
?>