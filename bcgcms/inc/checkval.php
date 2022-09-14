<?php 


function checkempty(){
	if (empty($_POST["name"])) {  
		$errMsg = "Titlte Should be must";  
	    return $errMsg;  
	} else {  
		$name = $_POST["name"];  
	}  
}

?>