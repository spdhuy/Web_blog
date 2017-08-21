<?php require 'header.php'?>
    <div class="row">
        <div class="col-md-12 content">
            <div>
            <?php foreach($blogs as $blog){?>
                <div class="col-md-6 content-item">
                    <div class="content-item-left">
                <a href="?page=detail_blog&id_blog=<?= $blog->getIdBlog() ?>">
                    <img src="img/<?= $blog->getFeatureImage() ?>"/></a>
                    </div>
                <div class="content-item-right">
                    <div class="content-item-right-top">
                        <a href="?page=detail_blog&id_blog=<?= $blog->getIdBlog() ?>"> <h3><?= $blog->getTitle() ?></h3></a>
                        <a href="#"><h4><?= $blog->getDescription() ?></h4></a>
                    </div>
                    <div class="content-item-right-bottom">
                        <a href="#"><img src="img/<?= $blog->getAccount()->getAvatar() ?>" style="height:40px; width: 40px;"/></a>
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