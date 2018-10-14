<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign up</title>
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<div class="whole">
	<div class="space-to"></div>
	<div class="main">
		<br><span>Hi Blinkier</span><br><br>
		<img src="img/logo.png" alt="logo" width="90" height="90"><br>
		<div class="login">
			<form method="post">
			<input type="text" placeholder="Username" required><br>
			<input type="email" placeholder="Email address" required><br>
		<input type="password" placeholder="Password" required><br>
		<button type="submit" name="ok">Sign up</button><br>
		</form>
		<?php 
			if (isset($_POST['ok'])) {
				header('location: home.php');
			}
		?>
		<hr>
			<div class="mxh">
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-google-plus-g"></i>
			</div>
		</div>
		<p>Do you have an account ? <a href="sign-in.php">Sign in</a></p>
	</div>
	</div>
</body>
</html>