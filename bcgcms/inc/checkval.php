<?php 
include('inc/Validation.php');


function checkString($data){
	// var_dump($data);die;
	$data = clean($data);
	if (!preg_match("/^[a-zA-Z-' ]*$/",$data)) {
        echo 3;
	}else {
	    return $data;
	}
}
function checkRichtext($data){
	$data = clean($data);
	$text = trim(strip_tags($data));
	if ($text == ''){
	   echo 5;
	}{
		return;
	}
}
function checktypeImage($data){
	$allowed_image_extension = array(
		"png",
		"jpg",
		"jpeg"
	);
	if (! in_array($FileType, $allowed_image_extension)) {
		echo 6;
	}else {
		return;
	}
}
function checkEmail($data){

	$email = clean($data);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_code['a'] = 10;
		return $error_code;
	}else {
		return;
	}

}
// function productName(){
// 	if (!preg_match("/^[A-Za-z\\- \']+$/",$name)) {
// 		echo "Invalid";
// 	  }
// 	  else {
// 		return;
// 	}
// }
function validate_mobile($mobile){
	$mobile = clean($mobile); 

	$mob = preg_replace('/[\@\-\.\;\(\)\" "]+/', '', $mobile);
	if(!preg_match('/^[0-9]{10}+$/', $mob)) {
		$error_code['a'] = 11;
		return $error_code;
	} else {
		return;
	}
}
function validate_url($data){
	$data = clean($data);

	if (!filter_var($data, FILTER_VALIDATE_URL)) {
		$error_code['a'] = 15;
		return $error_code;
	} else {
		return;
	}
}

?>