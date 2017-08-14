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
<div>
    <div class="metabar-inner">
        <div class="col-md-9 metabar-block-left">
            <img src="img/lodo.png" alt="logo">
        </div>
        <div class="col-md-3 metabar-block-right">
            <a href="#">Write a story</a>
            <a href="#" style="color: black">Sign in/ Sign up</a>
            <span class="glyphicon glyphicon-search"></span>
        </div>
    </div>
    <div class="col-md-12 author">
        <div class="col-md-3 content-left">
            <img src="img/reversing.png" alt="img" width="150px" height="200px">
        </div>
        <div class="col-md-9 content-right">
            <div class="col-md-1 accentColor">
                Part 2
            </div>
            <div class="col-md-12 author-content">
                <a href="#"><img src="$blog->getAccount()->getAvatar() height="60" width="60"/></a>
                <div>
                    <a href="#"><?= $blog->getAccount()->getFullname() ?></br></a>
                    <div class="col-md-10">
                        <p>$blog->getAccoount()->getDescription()</p>
                        <time datetime="2017-07-13">July 7 . 6 min read</time>
                    </div>
                </div>
            </div>
            <div class="col-md-12 transparent">
                <div class="col-md-10 flex1">
                    <span class="col-md-2 glyphicon glyphicon-fire"></span>
                    <div class="col-md-10">Upgrade and become a member of Medium to listen to an
                        <b>audio version</b>
                        of this story.</div>
                </div>
                <a href="#"><input type="button" value="Learn more"></a>

            </div>
            <div class="col-md-12 img">
                <img src="img/leslie.jpeg" alt="img" height="auto" width="754">
                <h4>Reversing the Rivel</h4>
                <h1>The Chicago Bother</h1>
                <p>Chicago, Illinois</p>
                <div class="col-md-12 boxShadow">
                    <div class="box-item">
                        <div class="col-md-12 item-header">
                            <div class="col-md-5 header-boder"></div>
                            <span class="col-md-2 glyphicon glyphicon-fire"></span>
                            <div class="col-md-5 header-boder"></div>
                        </div>
                        <div class="box-content">
                            <h3>Become a Medium member to continue reading this exclusive story from Reversing the River by Leslie Pietrzyk </h3>
                            <p>As a member, you’ll unlock exclusive stories (like this one) from top writers and experts, audio versions of popular posts, and offline reading.</p>
                            <p>Through the support of members, we’re building a better place on the internet: an ad-free, open platform for writers and thinkers around the world.</p>

                        </div>
                    </div>
                    <div class="col-md-12 box-item1">
                        <div class="float-left">
                            <div class="left">
                                <a href="#"><img src="img/heart_small.png" alt="img" width="30px" height="auto"></a>
                                <a href="#">25</a>
                            </div>
                            <div class="left">
                                <a href="#"><img src="img/comment.png" alt="img" width="25px" height="auto"></a>
                                <a href="#">50</a>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="left"> <a href="#"><img src="img/twitter.png" alt="img" width="30px" height="auto"></a></div>
                            <div class="left"><a href="#"><img src="img/facebook.jpg" alt="img" width="25px" height="auto"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 content-left"></div>
        <div class="col-md-9 content-comment">
            <h3>Responses</h3>
            <div class="comment">
                write responses...
            </div>
        </div>
</div>
</body>
</html>




















































































































































































</div>
</body>
</html>