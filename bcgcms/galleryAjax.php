<?php 
session_start();
include('inc/dbconnection.php');
include('inc/checkval.php');

// var_dump($_POST);

$cate_id = check_numeric($_POST['cate_id']);
$_SESSION['cate_id'] = $cate_id;

?>