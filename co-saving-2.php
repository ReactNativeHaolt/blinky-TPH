<?php 
	include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>2/4</title>
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
		<div class="whole">
	<div class="space-to"></div>
	<div class="co-saving">
		<br><span>Step 2/5</span><br><br>
		<img src="img/logo-3.png" alt="logo" width="127" height="140"><br>
		<div class="select-co-saving">	
		<form method="POST">		
			<input type="text" name="" placeholder="Goal name" required><br>
			<button class="select-co-saving-random-bt" type="submit" name="ok">Next <i class="fab fa-telegram-plane"></i></button>
			<?php 
			if (isset($_POST['ok'])) {
				header('location: co-saving-3.php');
			}
		?>
			</form>
		</div>
		<?php menu_bottom(); ?>
	</div>
</div>
</body>
</html>