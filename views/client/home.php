<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 header">
            <div class="metabar-inner">
                <div class="col-md-9 metabar-block-left">
                    <img src="img/lodo.png" alt="logo">
                </div>
                <div class="col-md-3 metabar-block-right">
                    <a href="#">Write a story</a>
                    <a href="?page=sign_in" style="color: black">Sign in/ Sign up</a>
                    <span class="glyphicon glyphicon-search"></span>
                </div>
            </div>
            <div class=" metabar-inner">
                <div class=" metabar-block">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Popular on medium</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="#">Member only</a></li>
                        <li><a href="#">Handpicked by Medium staff</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Creativity</a></li>
                        <li><a href="#">Entrepreneurship</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Self</a></li>
                        <li><a href="#">Politic</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 content">
            <div>
            <?php foreach($blogs as $blog){?>
                <div class="col-md-6 content-item">
                <a href="detail.php">
                    <img src="img/<?= $blog->getFeatureImage() ?>"/></a>
                <div class="content-item-right">
                    <div class="content-item-right-top">
                        <a href="?page=detail_blog&id_blog=<?= $blog->getIdBlog() ?>"> <h3><?= $blog->getTitle() ?></h3></a>
                        <a href="#"><h4><?= $blog->getDescription() ?></h4></a>
                    </div>
                    <div class="content-item-right-bottom">
                        <a href="#"><img src="img/<?= $blog->getAccount()->getAvatar() ?>" height="40" width="40"/></a>
                        <a href="#"><span class="glyphicon glyphicon-heart-empty"></span></a>
                        <a href="#"><?= $blog->getAccount()->getFullname() ?></br></a>
                    </div>
                </div>
                </div>
            <?php } ?>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 fooder">
            <div>
                <ul>
                    <li><a href="#">Getting started</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
</body>
</html>