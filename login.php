<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login/Sign Up</title>
	<link rel="icon" type="image/x-icon" href="/Main_PHP Project/Images/ImperialIsle.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
		@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

		* {
			box-sizing: border-box;
		}

		body {
			background: #f6f5f7;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 50px;
		}

		h1 {
			font-weight: bold;
			margin: 0;
		}

		h2 {
			text-align: center;
		}

		p {
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		span {
			font-size: 12px;
		}

		a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0;
		}

		button {
			border-radius: 20px;
			border: 1px solid #d9d9d9;
			background-color: #d9d9d9;
			color: #FFFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
		}

		button:active {
			transform: scale(0.95);
		}

		button:focus {
			outline: none;
		}

		button.ghost {
			background-color: transparent;
			border-color: #FFFFFF;
		}

		form {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			text-align: center;
		}

		input {
			background-color: #eee;
			border: none;
			padding: 12px 15px;
			margin: 8px 0;
			width: 100%;
		}

		.container {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
				0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: hidden;
			width: 768px;
			max-width: 100%;
			min-height: 480px;
		}

		.form-container {
			position: absolute;
			top: 0;
			height: 100%;
			transition: all 0.6s ease-in-out;
		}

		.sign-in-container {
			left: 0;
			width: 50%;
			z-index: 2;
		}

		.container.right-panel-active .sign-in-container {
			transform: translateX(100%);
		}

		.sign-up-container {
			left: 0;
			width: 50%;
			opacity: 0;
			z-index: 1;
		}

		.container.right-panel-active .sign-up-container {
			transform: translateX(100%);
			opacity: 1;
			z-index: 5;
			animation: show 0.6s;
		}

		@keyframes show {

			0%,
			49.99% {
				opacity: 0;
				z-index: 1;
			}

			50%,
			100% {
				opacity: 1;
				z-index: 5;
			}
		}

		.overlay-container {
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
			overflow: hidden;
			transition: transform 0.6s ease-in-out;
			z-index: 100;
		}

		.container.right-panel-active .overlay-container {
			transform: translateX(-100%);
		}

		.overlay {
			background: #d9d9d9;
			background: -webkit-linear-gradient(to right, #d9d9d9, #b8b6b6);
			background: linear-gradient(to right, #d9d9d9, #b8b6b6);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			color: #FFFFFF;
			position: relative;
			left: -100%;
			height: 100%;
			width: 200%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.container.right-panel-active .overlay {
			transform: translateX(50%);
		}

		.overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 40px;
			text-align: center;
			top: 0;
			height: 100%;
			width: 50%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.overlay-left {
			transform: translateX(-20%);
		}

		.container.right-panel-active .overlay-left {
			transform: translateX(0);
		}

		.overlay-right {
			right: 0;
			transform: translateX(0);
		}

		.container.right-panel-active .overlay-right {
			transform: translateX(20%);
		}

		.social-container {
			margin: 20px 0;
		}

		.social-container a {
			border: 1px solid #DDDDDD;
			border-radius: 50%;
			display: inline-flex;
			justify-content: center;
			align-items: center;
			margin: 0 5px;
			height: 40px;
			width: 40px;
		}
	</style>
</head>

<body>
	<?php

	$conn = mysqli_connect("localhost", "root", "");
	$querry = "create database if not exists PHP_Mini_Project";
	mysqli_query($conn, $querry);
	mysqli_select_db($conn, "PHP_Mini_Project");
	$querry = "create table if not exists userlogin(username varchar(80),password varchar(80))";
	mysqli_query($conn, $querry);


	?>


	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="login.php" method="post">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span style="color:white">or use your email for registration</span>
				<input type="text" name="signup_name" placeholder="Name" />
				<input type="email" name="signup_username"  placeholder="Email" />
				<input type="password" name="signup_password" placeholder="Password" />
				<button type="submit" name="getUser" style="margin-top: 15px;">Sign Up</button>
			</form>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['getUser']) ) {
				// $username1 = mysqli_real_escape_string($conn, $_POST['signup_username']);
				$username1 = mysqli_real_escape_string($conn, $_POST['signup_username']);
				$password1 = mysqli_real_escape_string($conn, $_POST['signup_password']);
				$query = "INSERT INTO userlogin (username, password) VALUES ('$username1','$password1')";
				mysqli_query($conn, $query);
				$user = $_POST['signup_name'];
				echo "<script>alert('Welcome $user, Account Created Successfully');</script>";
			}
			?>

		</div>
		<div class="form-container sign-in-container">
			<form action="login.php" method="post">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa-brands fa-google"></i></a>
					<a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
				</div>
				<span style="color:white">or use your account</span>
				<input type="email" name="loginname" placeholder="Email" />
				<input type="password" name="loginpass" placeholder="Password" />
				<p></p>
				<button type="submit" name="signInVal">Sign In</button>
			</form>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signInVal'])) {
				$username = mysqli_real_escape_string($conn, $_POST['loginname']);
				$password = mysqli_real_escape_string($conn, $_POST['loginpass']);
				$query = "SELECT * FROM userlogin WHERE username='$username' AND password='$password'";
				$conn = mysqli_connect("localhost", "root", "", "PHP_MINI_Project");
				$result = mysqli_query($conn, $query);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
					echo "<script>alert('hello $username');
					
					window.location.href ='index.php';
					</script>";
					
					// exit();

				} 
				
				else {
					echo "<script>alert('Invalid Username or password')</script>";
				}
			}
			?>

		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1 style="font-family: 'Kaushan Script'; font-size: 45px; color: white;">ImperialIsle</h1>
					<p>Clothes shopping made effortless. Log in and unlock your style journey</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1 style="font-family: 'Kaushan Script'; font-size: 45px; color: white;">ImperialIsle</h1>
					<p>Clothes shopping made effortless. Log in and unlock your style journey</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>
</body>

</html>