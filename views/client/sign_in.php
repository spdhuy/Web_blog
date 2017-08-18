<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/sign_style.css">

</head>

<body>
	<div class="container">
		<div class="top">
            <a href="?"><h1 id="title" class="hidden"><span id="logo">Code<span>press</span></span></h1></a>
		</div>
		<form class="login-box animated fadeInUp" action="" method="get">
            <input type="hidden"  name="page" value="login">
			<div class="box-header" >
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			<a href="?page=sign_up"><p class="small">Don't have an account ?</p></a>
		</form>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/sign.js"></script>
</body>


</html>