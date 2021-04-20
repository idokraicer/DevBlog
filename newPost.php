
	<?php include 'header.php'; ?>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://cdn.tiny.cloud/1/rnq52piv67i4u4kgl3o4p8iy04ljmgj8pgjh7esvt8oxvou9/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
			tinymce.init({
				selector: '#editor'
			});

			function sendPostForm() {
            var form = document.createElement("form");
            var title = document.createElement("input");
            var content = document.createElement("input");
            var submitPost = document.createElement("input");

            form.action = 'includes/sendPost.inc.php';
            form.method = "POST";

            title.value = $("#title").val();
            title.name = "title";
            form.appendChild(title);

            content.value = tinymce.get("editor").getContent();
            content.name = "content";
            form.appendChild(content);

            submitPost.value = "1";
            submitPost.name = "submitPost";
            form.appendChild(submitPost);

            document.body.appendChild(form);

            form.submit();

        	} 

			function checkTxt(){
				alert(tinymce.get("editor").getContent());
			}
		</script>
	</head>
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2">New Post</h2>
			    </header>
			    
			    <form method="post">
					<label for="title">Enter title</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control" id="title" name="title" placeholder="Title goes here..." aria-describedby="basic-addon3">
					</div>
					<textarea id="editor" name="editor">
					
					</textarea>
					<input class="btn btn-primary" type="button" value="Submit" id="submitPost" name="submitPost" href="#" onclick="sendPostForm()" >

				</form>
				
		    </div><!--//container-->
	    </article>
	    
	</div>
	</section>
		<?php include 'footer.php'; ?>

