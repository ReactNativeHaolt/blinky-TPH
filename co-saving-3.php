<?php 
	include 'menu.php';
	$n="";
	if(isset($_POST['ok'])){
		$n=$_POST['n'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>3/4</title>
		<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
	<body>
			<div class="whole">
	<div class="space-to"></div>
		<div class="co-saving">
			<br><span>Step 3/5</span><br><br>
			<img src="img/logo-3.png" alt="logo" width="127" height="140"><br>
			<div class="select-co-saving">
				<form action="" method="post" accept-charset="utf-8">
		<label>Number of people
			<input style="width: 70px;" type="number" name="n" value="<?php echo $n; ?>">
		</label>
		<button class="select-co-saving-random-bt" type="submit" name="ok">Next</button><br>
<?php 
if (isset($_POST['ok'])) {
	$n = $_POST['n'];
	$t = 0;
	echo "<div class='cost-split-3'><table border='none'>
		<tr>
			<th>Id</th>
			<th>Name</th>
		</tr>";
	for ($i=1; $i <= $n ; $i++) { 
		echo "<tr>
			<td>".$i."</td>
			<td><input type='text' name='name-".$i."'></td>
		</tr>";
	}
	echo "</table><button class='select-co-saving-random-bt'type='submit'name='ok1'>Next</button></div><br>";
}
if (isset($_POST['ok1'])) {
	header('location: co-saving-4.php');
}
		?>
			</div>
		<?php menu_bottom(); ?>
			</div>
		</div>
		</body>
	</html>