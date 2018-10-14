<?php 
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>4/4</title>
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<div class="whole">
	<div class="space-to"></div>
	<div class="co-saving">
		<br><span>Step 4/4</span><br><br>
		<span style="font-size: 18px;">Set time and money for each round</span><br>
		<img style="margin-top: 44px;" src="img/logo-3.png" alt="logo" width="127" height="140">
		<div class="select-co-saving-4">
		<div class="coin">	
			<form method="post">
				<input type="number" name="" placeholder="Duration" required="">
			<select name="">
				<option value="">Weeks</option>
				<option value="">Months</option>
			</select>
		</div>
		<div class="coin">		
			<input type="number" name="" placeholder="Amont of money" required="">
		</div>
		<button type="submit" name="ok">Done <i class="fab fa-telegram-plane"></i></button>
		</form>
		<?php 
			if (isset($_POST['ok'])) {
				header('location: home.php');
			}
		?>
		</div>
		<?php menu_bottom(); ?>
	</div>
</div>
</body>
</html>