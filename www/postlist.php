<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<script>
        function genPost(author, message, ts){
                var newPost = $('<div class="col-sm-1"><div class="thumbnail"><img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></div><!-- /thumbnail --></div><!-- /col-sm-1 --><div class="col-sm-5"><div class="panel panel-default"><div class="panel-heading"><span id="author"><strong></strong></span> <span class="text-muted" id="ts"></span></div><div class="panel-body"><span id="message"></span></div><!-- /panel-body --></div><!-- /panel panel-default --></div><!-- /col-sm-5 -->');
                newPost.find('#author').html(author);
                newPost.find('#ts').html(ts);
                newPost.find('#message').html(message);
		log("new post");
                return newPost;
        }
        function displayPosts(arrPosts){
                for(var i = 0; i < arrPosts.length; i++){
                        var post = arrPosts[i];
                        var author = post['author'];
                        var message = post['message'];
                        var ts = post['ts'];
                        var newPost = genPost(author, message, ts);
			log("display posts");
                        $('#container').append(newPost);
                }
        }

        function retrievePosts(){
                $.post('servlets/getPost.php',
                { },
                function(data, status){
                        var arrPosts = JSON.parse(data);
                        displayPosts(arrPosts);
                });
		alert($_POST);
		log("retrieve posts");
        }
</script>

<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Reports</h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->

<div class="row" id="container">
		

</div><!-- /row -->

</div><!-- /container -->
</body>
</html>
