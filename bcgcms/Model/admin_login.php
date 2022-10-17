<?php session_start();
	  include('../inc/dbconnection.php');
	  if($_SERVER["REQUEST_METHOD"]=="POST"){
		if($_SESSION["captcha"]     ==   $_POST["captcha_code"]){
			$user_name = $_POST['user_name'];
			$verify = hash('sha512', $_POST['user_pass']);
			$sql    = "SELECT * FROM user_info WHERE uname='$user_name' AND upass='$verify'";
			$ret    = pg_query($db, $sql);
			$result = pg_fetch_assoc($ret);
			$res 	= pg_num_rows($ret);
			if($res>0){
				$_SESSION["user"] 	   = $result;
				echo 1;
			}else{
				echo 3;
			}
		}else{
			$t = 2;
			echo json_encode($t);
		}
		
	}
?>