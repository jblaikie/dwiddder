<?php
	include_once("db.php");

	//common utility
	function checksum($txt){
		return md5($txt);
	}
	function insertPost($author, $post){
		$author = secure($author);
		$post = secure($post);

		$q = "INSERT INTO tbl_posts(author, post) VALUES ('$author', '$post')";
		executeSQL($q);
		//error_log("well were here now");
	}	

	function verifyPwd($uname, $pwd){
		$uname = secure($uname);
		$pwd = secure(checksum($pwd));
		$q = "SELECT * FROM tbl_users WHERE uname='$uname' AND pwd_hash='$pwd'";
		$arr = executeSQL($q);
		return count($arr)>0;
		
	}

	/*function getPosts() //i'm actually not sure where this is supposed to live, file-wise? oops. also he referred to this as "retrievePosts" but fuck that
	{
		$.post("servlets/data_ops.php",
		{
			op: "getPosts"
		},
		function (data, status){
			var arrPosts = JSON.parse(data);
			displayPosts(arrPosts);
		});
	}*/

if(1==2){
	insertuser("m2", "abc123", "mini me");
	$a1 = verifyPwd("m2", "abc123");
	$a2 = verifyPwd("m2", "ccc123");
	print("a1 is $a1, a2 is $a2\n");
}
?>
