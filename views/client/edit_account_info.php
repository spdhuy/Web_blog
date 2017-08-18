<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daily UI - Day 1 Sign In</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900'
          rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/sign_style.css">

</head>

<body>
<div class="container">
    <div class="top">
        <a href="?"><h1 id="title" class="hidden"><span id="logo">Code<span>press</span></span></h1></a>
    </div>
    <form class="login-box animated fadeInUp" action="?page=update_info" method="post" enctype="multipart/form-data">
        <div class="box-header">
            <h2>Log In</h2>
        </div>
        <label>Username</label>
        <br>
        <input type="text" readonly="true" name="username" value="<?= $account->getUsername() ?>"></td>
        <br>
        <label>Password</label>
        <br>
        <input type="password" name="password" value="<?= $account->getPassword() ?>">
        <br>
        <label>Fullname</label><br>
        <input type="text" name="fullname" value="<?= $account->getFullname() ?>">
        <br>
        <label>Email</label><br>
        <input type="text" name="email" value="<?= $account->getEmail() ?>">
        <br>
        <label>Phone</label><br>
        <input type="text" name="phone" value="<?= $account->getPhone() ?>">
        <br>
        <label>Address</label><br>
        <input type="text" name="address" value="<?= $account->getAddress() ?>">
        <br>
        <label>Age</label><br>
        <input type="text" name="age" value="<?= $account->getAge() ?>">
        <br>
        <label>Gender</label><br>
        <label>Male</label>
        <input type="radio" checked="<?= $account->getGender() == 'Male' ?>" name="gender" value="Male">
        <label>Female</label>
        <input type="radio" checked="<?= $account->getGender() == 'Female' ?>" name="gender" value="Female">
        <br>
        <label for="password">Description</label><br>
        <input type="text" name="description" value="<?= $account->getDescription() ?>"><br>
        <label>Avatar</label><br>
        <input type="file" name="avatar" onchange="readURL(this);"><br>
        <img id="avatar_image" src="img/<?= $account->getAvatar() ?>" alt="Your avatar"
             style="width: 80px; height: 80px; border-radius: 50%;"/><br>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#avatar_image')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80)
                            .css('border-radius', '50%');
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <button type="submit">Update Info</button>
        <br/>
        <a href="?page=to_edit_account_page"><p class="small">Reset </p></a>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/sign.js"></script>
</body>


</html>