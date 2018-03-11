<?php
	include_once("db.php");

	//common utility
	function checksum($txt){
		return md5($txt);
	}
	function insertUser($uname, $pwd, $real_name){
		$uname = secure($uname);
		$pwd = secure(checksum($pwd));
		$real_name = secure($real_name);

		$q = "INSERT INTO tbl_users(uname, pwd_hash, real_name) VALUES ('$uname', '$pwd', '$real_name')";
		executeSQL($q);
	}	

	function verifyPwd($uname, $pwd){
		$uname = secure($uname);
		$pwd = secure(checksum($pwd));
		$q = "SELECT * FROM tbl_users WHERE uname='$uname' AND pwd_hash='$pwd'";
		$arr = executeSQL($q);
		return count($arr)>0;
		
	}

if(1==2){
	insertuser("m2", "abc123", "mini me");
	$a1 = verifyPwd("m2", "abc123");
	$a2 = verifyPwd("m2", "ccc123");
	print("a1 is $a1, a2 is $a2\n");
}
?>
