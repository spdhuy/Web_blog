<?php require 'header.php'?>
<script type="text/javascript" src="ckeditor-4/ckeditor.js"></script>
<div class="row">
    <form method="post" action="?page=edit_own_blog" enctype="multipart/form-data" class="editor-blog-box">
        <p>
        <div class="box-header">New Story</div>
        <br>
        <input type="hidden" name="username" value="<?= $_SESSION['user'] ?>">
        <input type="hidden" name="id_blog" value="<?= $blog->getIdBlog() ?>">
        <input type="hidden" name="id_category" value="<?= $blog->getIdCategory()  ?>">
        <label>Title</label><br>
        <input type="text" name="title" value="<?= $blog->getTitle() ?>" style="width: 80%;">
        <br>
        <label>Feature Image</label>  <br>
        <input type="file" name="feature_image" onchange="readURL(this);" value="<?= $blog->getFeatureImage() ?>">
        <img id="feature-image" src="img/<?= $blog->getFeatureImage() ?>" alt="Your blog feature image" style="width:30%;height:auto;" />
        <br>
        <label>Your editor</label> <br>
        <textarea id="editor1" name="content"><?= $blog->getContent()?></textarea>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#feature-image')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            CKEDITOR.replace( 'editor1' );
        </script>
        </p>
        <p>
            <button>Post</button>
        </p>
    </form>
</div>
</body>
</html>