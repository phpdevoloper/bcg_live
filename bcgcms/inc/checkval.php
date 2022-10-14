<?php 
include('inc/Validation.php');


function checkString($data){
	$data = clean($data);
	if (!preg_match("/^[A-Za-z0-9_-]*$/",$data)) {
        return 2;
	}else {
	    return;
	}
}
function checkProduct($data){
	$data = clean($data);
	if (!preg_match("/^[a-zA-Z]*$/",$data)) {
        echo 3;
	}else {
	    return $data;
	}
}
function checktypeImage($data){
	$allowed_image_extension = array(
		"png",
		"jpg",
		"jpeg"
	);
	if (! in_array($data, $allowed_image_extension)) {
		return 2;
	}else {
		return;
	}
}

function checktypeFile($data){
	$allowed_image_extension = array("pdf");
	if (! in_array($FileType, $allowed_image_extension)) {
		return 2;
	}else {
		return;
	}
}
function checkEmail($data){

	$email = clean($data);

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return 2;
	}else {
		return $email;
	}
}

function validate_mobile($mobile){
	$mobile = clean($mobile); 

	$mob = preg_replace('/[\@\-\.\;\(\)\" "]+/', '', $mobile);
	if(!preg_match('/^[0-9]{10}+$/', $mob)) {
		return 2;
	} else {
		return $mob;
	}
	
}
function validate_url($data){
	$data = clean($data);
	if (!filter_var($data, FILTER_VALIDATE_URL)) {
		return 2;
	} else {
		return $data;
	}
}

function check_numeric($data){
    $data = clean($data);
    if (!is_numeric($data)) {
		$code = 2;
        return $code."D";
    }else {
		return $data;
	}

}
function check_empty($data){
    $data = clean($data);
    if(empty($data)) {
        return 2;
    }else {
		return $data;
	}

}

?>