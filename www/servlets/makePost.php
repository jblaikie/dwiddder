<?php
	include_once("common.php");
	//DEBUG USE

	//$_POST["uname"] = "xfu";
	//$_POST["post"] = "abc";

	//------ COMMENT OUT LATER


	$uname = $_POST["uname"];
	$post = $_POST["post"];
	insertPost($uname,$post);
	//error_log("FUCK")
	/*if(verifyPwd($uname, $pwd)){
		echo "ok";
		session_start();
		$_SESSION["uname"] = $uname;
	}else{
		echo "nok for uname: $uname, pwd: $pwd";
	}*/
	
?>
