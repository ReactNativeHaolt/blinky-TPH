<?php 
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HOME</title>
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
		<div class="whole">
	<div class="space-to"></div>
	<div class="main">
		<div class="search">
			<input type="text" name="" required><label><i class="fas fa-search"></i> Search</label>
		</div>
		<div class="menu-to">
			<div class="next-left"><i class="fas fa-angle-left"></i></i></div>
			<a href="user.php"><div class="menu-to1">
				<div class="menu-to1-trong">
					<div class="text-con">
					<span>Goal Name</span>
					</div>
					<div class="text-con1">
					<span>Saved 600/3200 $</span>
					</div>
					<div class="text-con2">
					<hr>
					</div>
					<div class="text-con3">
					<hr>
					</div>
				</div>
			</div></a>
			<div class="next-right"><i class="fas fa-angle-right"></i></div>
		</div>
		<div class="muc-tieu">
			<h3>Goal</h3>
			<?php 
				for ($i=1; $i <= 5 ; $i++) { 
					echo "
			<div class='muc-tieu-con'>
				<div class='logo-con'>
					<img src='https://picsum.photos/55' alt=''>
				</div>
				<div class='dia-diem'>
					Da Nang: 600$<br><span style='font-size: 14px;color: #000;'>Goal end mm/dd/yyyy</span>
				</div>
				<div class='tien-da-tiet-kiem'>
					1000$<br><span style='font-size: 14px;color: #000;'>Saved</span>
				</div>
			</div>
					";
				}
			?>
		</div>
		<?php menu_bottom(); ?>
	</div>
</div>
</body>
</html>