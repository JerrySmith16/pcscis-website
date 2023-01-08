<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
	header('location:login_page.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Senior Citizen Information System</title>
	<link rel="stylesheet" type="text/css" href="home_page.css">
</head>
<body>
	<div class="container">
		<div class ="main"> 
			<div class= "logo"> 
				<img src="logo.png">
                <div class="content">
					<ul>
						<li><a href="login_page.php" class = "btn">	Login </a> </li>
						<li><a href="register_page.php" class = "btn"> Register </a></li>
					</ul>
				</div>
			</div>
			<ul>
				<li class="active"><a href="home">HOME</a></li>
				<li><a href="home">SEARCH</a></li>
				<li><a href="home">ABOUT</a></li>
				<li><a href="home">CONTACT</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Camachile Subdivision Senior Citizen Information System</h1>
		</div>
		<div class="button">
			<a href="#" class="btn">WATCH VIDEO</a>
			<a href="#" class="btn">LEARN MORE</a>
		</div>
		<div class="events">
			<h2>EVENTS</h2>
			<p>
				adfasdjfhlkasdhflkasjdfhlkjsadhflkj <br>
				adfasdjfhlkasdhflkasjdfhlkjsadhflkj <br>
				adfasdjfhlkasdhflkasjdfhlkjsadhflkj <br>
				adfasdjfhlkasdhflkasjdfhlkjsadhflkj <br>
				adfasdjfhlkasdhflkasjdfhlkjsadhflkj <br>
				adfasdjfhlkasdhflkasjdfhlkjsadhflkj <br>
			</p>
		</div>

	</div>
	
</body>
</html>