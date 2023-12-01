<?php
	include('inc/dbconnection.php');
	// include('../Upload.php');
    // var_dump($_POST);die;
    if ($_POST['div_id']) {
       $check_id = "SELECT * FROM division where div_name='".$_POST['div_id']."'";
       $res = pg_query($db,$check_id);
       $result = pg_fetch_all($res);
       if(empty($result)){
           
         $sql = "INSERT INTO division(div_name,div_content,content_updated_by)VALUES 
         ('".$_POST['div_id']."','".$_POST['content_desc']."','".$_POST['updated_by']."')";
        //  echo $sql;exit; 
        $ret = pg_query($db, $sql);
        if(!$ret) {
            echo pg_last_error($db);
            exit;
        }else{
            echo 1;
        } 
       }
       else {
            $sql = "UPDATE division SET div_content ='".$_POST['content_desc']."',
            content_updated_by='".$_POST['updated_by']."' WHERE 
            div_name ='".$_POST['div_id']."'";
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