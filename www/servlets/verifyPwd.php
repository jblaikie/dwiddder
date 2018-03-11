<?php
	include_once("common.php");
	//DEBUG USE
/*
	$_POST["uname"] = "xfu";
	$_POST["pwd"] = "abc";
*/
	//------ COMMENT OUT LATER


	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];
	if(verifyPwd($uname, $pwd)){
		echo "ok";
		session_start();
		$_SESSION["uname"] = $uname;
	}else{
		echo "nok for uname: $uname, pwd: $pwd";
	}
	
?>
