<?php
	include('inc/dbconnection.php');
    if ($_POST['content_id']) {
       $check_id = "SELECT * FROM about_us where content_id='".$_POST['content_id']."'";
       $res = pg_query($db,$check_id);
       $result = pg_fetch_all($res);
       if(empty($result)){
         $sql = "INSERT INTO about_us(content_id,content_description,content_updated_by)VALUES 
         ('".$_POST['content_id']."','".$_POST['content_desc']."','".$_POST['updated_by']."')";
        $ret = pg_query($db, $sql);
        if(!$ret) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        } 
       }
       else {
            $sql = "UPDATE about_us SET content_description ='".$_POST['content_desc']."',
            content_updated_by='".$_POST['updated_by']."' WHERE 
            content_id ='".$_POST['content_id']."'";
            $ret = pg_query($db, $sql);
            if(!$ret) {
                echo pg_last_error($db);
                exit;
            }else{
                echo 1;
            } 
        }
        pg_close($db);
    }

	
		

?>