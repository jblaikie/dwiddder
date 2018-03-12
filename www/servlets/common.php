<?php
	include_once("db.php");

	
	function insertPost($author, $post){
		$author = secure($author);
		$post = secure($post);

		$q = "INSERT INTO tbl_posts(author, post) VALUES ('$author', '$post')";
		executeSQL($q);
	
	}	

	function verifyPwd($uname, $pwd){
		$uname = secure($uname);
		$pwd = secure(checksum($pwd));
		$q = "SELECT * FROM tbl_users WHERE uname='$uname' AND pwd_hash='$pwd'";
		$arr = executeSQL($q);
		return count($arr)>0;
		
	}

	function getPosts()
	{
		$query = "SELECT * FROM tbl_posts";
                $arr = executeSQL($query);
                error_log("getPosts function in common.php! ");
                return count($arr) > 0;

	/*	$.post("servlets/getPost.php",
		{
			op: "getPost"
		},
		function ($data){
			$arrPosts = JSON.parse($data);
			displayPosts($arrPosts);
		}); */
	}

?>
