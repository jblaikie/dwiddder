<?php
	include_once("common.php");
//	$author = $_POST['author'];
//	$message = $_POST['message'];
//	$ts = $_POST['ts'];
	//error_log("getPost servlet!");
	$arr = getPosts();
	$s1 = json_encode($arr);
	print($s1);
?>
