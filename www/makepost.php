 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
                function makepost(){
                        var uname = $("#authorname").val();
                        var post = $("#postbody").val();
                             $.post("servlets/makePost.php",
                            {
                                uname: uname,
                                post: post 
                            },				
			    	function(data, status){
					//alert(data);
					window.location =  "/postlist.php";
			    	}
			    );           
                }
                
        </script>
		
</head>
<body>
                
<div class="container">
<div class="form-group col-sm-7">
<label for="authorname">Name:</label>
  <input type="text" class="form-control" id="authorname">
  <label for="postbody">Report:</label>
  <textarea class="form-control" rows="5" id="postbody"></textarea>
<input type="submit" class="btn btn-success" value="Report" id="btnSubmit">
</div>
</div>
<script>
	$("#btnSubmit").click(function(){
		makepost();
	});
</script>

</body>
</html> 
