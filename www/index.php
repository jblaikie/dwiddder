 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function verifypwd(){
			var uname = $("#txtUname").val();
			var pwd = $("#txtPwd").val();
			alert("verifypwd v2, uname: " + uname + 
				"pwd: " + pwd);
			    $.post("servlets/verifyPwd.php",
			    {
				uname: uname,
				pwd: pwd 
			    },
			    function(data, status){
				if(data=="ok"){
					window.location = "inbox.php";
				}else{
					alert("ERROR!");
				}
			    });
		}
	</script>
</head>
<body>

<div class="container">
	<input type="text" id="txtUname"> <br />
	<input type="password" id="txtPwd"> <br />
	<button id="btnSubmit" onclick="verifypwd()">Login</button>

</div>

</body>
</html> 
