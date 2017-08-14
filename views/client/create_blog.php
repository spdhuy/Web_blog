<html>
<head>
    <title>Sample CKEditor Site</title>
    <script type="text/javascript" src="ckeditor-4/ckeditor.js"></script>
</head>
<body>
<form method="post" action="?page=post_blog" enctype="multipart/form-data">
    <p>
        <?php session_start() ?>
        <input type="text" name="id_blog">
        <input type="text" name="id_category">
        <input type="text" readonly="true" name="username" value="<?= $_SESSION['user'] ?>">
        <input type="text" name="title" >
        <input type="file" name="feature_image">
        My Editor:<br />
        <textarea id="editor1" name="content">&lt;p&gt;Write your story&lt;/p&gt;</textarea>
        <script type="text/javascript">
            CKEDITOR.replace( 'editor1' );
        </script>
    </p>
    <p>
        <input type="submit" value="Post"/>
    </p>
</form>
</body>
</html>