
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--<link href="assets/css/editor.css" type="text/css" rel="stylesheet" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
				$("#content").Editor(); // יוצר עורך
		});

        function viewText() {
                var text = $("#content").Editor("getText");
                var title = $("#title").val();

                alert(text + " " + title);
                 // מקבל טקסט
        }
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

            content.value = $("#content").Editor("getText");
            content.name = "content";
            form.appendChild(content);

            submitPost.value = "1";
            submitPost.name = "submitPost";
            form.appendChild(submitPost);

            document.body.appendChild(form);

            form.submit();

        } 
    </script>
    <form>
    <label for="title">Enter title</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="title" name="title" placeholder="Title goes here..." aria-describedby="basic-addon3">
    </div>
        <div class="form-group form-inline">
            <div class="col-lg-12 nopadding">
                <textarea id="content" name="content"></textarea>
            </div>
        </div>
        <div class="form-group">
                    <div class="col-lg-12 nopadding">
                        <input class="btn btn-primary" type="button" value="Submit" id="submitPost" name="submitPost" href="#" onclick="sendPostForm()" 
                        <?php if(!isset($_SESSION['login'])) : ?>
                            disabled
                        <?php endif?>
                        >
                        </a>
                    </div>
        </div>
    </form>
</body>

</html>