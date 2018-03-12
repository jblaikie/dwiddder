 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Create A Post</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel ="stylesheet" href="localhost/makepost.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function makepost(){
			var uname = $("#authorname").val();
			var post = $("#postbody").val();
		            alert("uname: " + $uname + "/npost: " + $post);    	
			    $.post("servlets/makePost.php",
			    {
				uname: uname,
				post: post 
			    }
			   /* function(data, status){
				if(data=="ok"){
					window.location = "inbox.php";
				}else{
					alert("ERROR!");
				}
			    }*/);
				window.location = "postlist.php";
		}
	</script>
</head>
<body>

<!--div class="container">
	<input type="text" id="txtUname"> <br />
	<input type="password" id="txtPwd"> <br />
	<button id="btnSubmit" onclick="verifypwd()">Login</button>

</div>
-->

 <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<div class="container">
	<div class="row">
		<h3>Status Upload Snipp</h3>
	</div>
    
    <div class="row">
    
    <div class="col-md-6">
    <div class="widget-area no-padding blank">
	<div class="status-upload">
	<form>
	<input type="text" id="authorname">
	<textarea placeholder="What are you doing right now?" id="postbody"></textarea>
				<ul>
	
										</ul>
										<button type="submit" class="btn btn-success green" onclick="makepost();"><i class="fa fa-share"></i> Share</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
</div>

</body>
</html> 
