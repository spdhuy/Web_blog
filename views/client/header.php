<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Codepress</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 header">
            <div class="metabar-inner">
                <div class="col-md-9 metabar-block-left">
                    <a href="?"><img id="logo" src="img/lodo.png" alt="logo"></a>
                </div>
                <div class="col-md-3 metabar-block-right">
                    <div class="metabar-block-right-inner">
                        <?php session_start(); ?>
                        <?php if(isset($_SESSION['user'])){ ?><a href="?page=view_create_blog" style="color: black">Create a blog!<img class="log_out" src="img/create-blog-logo.png"></a>
                            <a href="?page=log_out" class="metabar-block-right-account">Log out<img class="to_create_blog" src="img/log-out-logo.ico"></a>
                        <?php } else {?>
                            <a href="?page=sign_in" >Sign in/ Sign up<img class="to_login" src="img/login-icon.png"></a>
                        <?php }?>
                        <a href="?page=to_edit_account_page"><span class="glyphicon glyphicon-edit"></span></a>
                    </div>
                </div>
            </div>
            <div class=" metabar-inner">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Category</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Technology</a>
                        <a href="#">Creativity</a>
                        <a href="#">Entrepreneurship</a>
                        <a href="#">Culture</a>
                    </div>
                </div>
                <div class=" metabar-block">
                    <ul>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Creativity</a></li>
                        <li><a href="#">Entrepreneurship</a></li>
                        <li><a href="#">Culture</a></li>
                    </ul>
                </div>
            </div>
            <script>
                /* When the user clicks on the button,
                 toggle between hiding and showing the dropdown content */
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {

                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
        </div>
    </div>