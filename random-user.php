<?php 
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>co-saving-6</title>
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
		<div class="whole">
	<div class="space-to"></div>
	<div class="co-saving">
		<br><span>Lucky Wheel</span><br><br>
		<img src="img/logo-3.png" alt="logo" width="127" height="140"><br>
		<div class="select-co-saving">
	<?php 
		$win = "";
		if (isset($_POST['ok'])) {
		$random = rand(1,4);
		$bien = "name-".$random;
		$win = $_POST[$bien];
	}
	?>
	<form action="" method="POST" accept-charset="utf-8">
	This round's lucky Player: <?php echo $win; ?>
	<input type="text" name="name-1" value="Antti"><br>
	<input type="text" name="name-2" value="Saara"><br>
	<input type="text" name="name-3" value="Tall-Hai"><br>
	<input type="text" name="name-4" value="Hai"><br>
	<button class="select-co-saving-random-bt" type="submit" name="ok">Random <i class="fab fa-telegram-plane"></i></button>
</form>
</div>
		<?php menu_bottom(); ?>
	</div>
</div>
</body>
</html>