<?php session_start();

	include('../inc/dbconnection.php');

	  if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		if($_SESSION["captcha"]     ==   $_POST["captcha_code"]){
			
			#Database Connection
			
			// $user_name=mysqli_real_escape_string($con,$_POST["user_name"]);
			// $upass=mysqli_real_escape_string($con,$_POST["upass"]);
			$sql    = "SELECT * FROM user_info WHERE uname='".$_POST['user_name']."' AND upass='".$_POST['user_pass']."'";
			$ret    = pg_query($db, $sql);
			$result = pg_fetch_assoc($ret);
			$res 	= pg_num_rows($ret);
			// var_dump($result);
			
			// $sql="select * from users where user_name='{$user_name}'";
			// $res = $con->query($sql);
			
			if($res>0){
				// var_dump($result);die;
				$_SESSION["user"] 	   = $result;
				echo 1;
			}
		}else{
			// var_dump('sdfds');die;
			$t = 2;
			echo json_encode($t);
		}
		
	}




	// $sql = "SELECT * FROM user_info WHERE uname='".$_POST['user_name']."' AND upass='".$_POST['user_pass']."'";
	// $ret = pg_query($db, $sql);
	// if(!$ret) {
	// 	echo pg_last_error($db);
	// 	exit;
	// } 
	// while($row = pg_fetch_assoc($ret)) {
	// 	// Set session variables
	// 	session_start();
	// 	$_SESSION["user"] 	   = $row;
	// 	echo 1;
	// }
	// pg_close($db);
?>