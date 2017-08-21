<?php require ('header.php'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2 author">
        <div class="col-md-12 content-right">
            <div class="col-md-12 author-content">
                <a href="?page=to_detail_account"><img src="img/<?= $blog->getAccount()->getAvatar() ?>" height="60" width="60"/></a>
                <div style="display: inline-block; width:60%;">
                    <a href="?page=to_detail_account" style="margin:5px 15px; width:100%;"><?= $blog->getAccount()->getFullname() ?></a>
                    <p style="margin:5px 15px; font-size:16px;"><?= $blog->getAccount()->getDescription() ?></p>
                </div>
            </div>
            <div class="col-md-12 transparent flex">
                <h2><?= $blog->getTitle()?></h2>
            </div>
            <div class="col-md-8 col-md-offset-2" style="margin-bottom :20px;">
                <img src="img/<?= $blog->getFeatureImage() ?>" alt="img" height="auto" width="100%">
            </div>
            <br>
                <div class="col-md-12">
                    <?= $blog->getContent() ?>
                </div>
            </div>
        </div>
<!--        <div class="col-md-3 content-left"></div>-->
<!--        <div class="col-md-9 content-comment">-->
<!--            <h3>Responses</h3>-->
<!--            <div class="comment">-->
<!--                write responses...-->
<!--            </div>-->
<!--        </div>-->
</div>
</div>
</div>
</body>
</html>




















































































































































































</div>
</body>
</html>