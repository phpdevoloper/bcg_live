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
function checkEmail($data){
	$data = clean($data);
	if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
		echo 10;
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

?>