
<body>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
<form method="POST" >
    <div class="container">
        <div class='row'>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                </div>
                <input type="text" name="title" class="form-control" aria-label="Title" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Content</span>
                </div>
                <textarea name="content" class="form-control"  aria-label="With textarea"></textarea>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary  btn-block" name="submitPost"  data-toggle="tooltip" data-placement="top" <?php
                if(!isset($_SESSION['login']))
                {
                    echo 'disabled=disabled data-toggle=tooltip" data-placement="bottom" title="Only registered users can submit."';
                } else echo 'title="Submit post!" ';
            ?>>Submit</button>
        </div>
</form>

    <?php
        
    ?>
    <br>
    <br>
</body>