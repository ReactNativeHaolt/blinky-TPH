<?php 
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cost Split</title>
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
		<div class="whole">
	<div class="space-to"></div>
	<div class="co-saving">
		<br><span>Cost Split</span><br><br>
		<img src="img/logo-3.png" alt="logo" width="127" height="140"><br>
	<?php 
		if (isset($_POST['ok'])||isset($_POST['ok1'])) {
			$n = $_POST['n'];
			
	}
	?>
	<div class="cost-split-1">
	<form action="" method="post" accept-charset="utf-8">
		<label>Number of people
			<input style="width: 70px;" type="number" name="n" value="<?php echo $n; ?>">
		</label>
		
		<button type="submit" name="ok">Next</button><br>
<?php 
if (isset($_POST['ok'])) {
	$n = $_POST['n'];
	$t = 0;
	echo "Name and amount of money";
	echo "<div class='cost-split-2'><table border='none'>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Money</th>
		</tr>";
	for ($i=1; $i <= $n ; $i++) { 
		echo "<tr>
			<td>".$i."</td>
			<td><input type='text' name='name-".$i."'></td>
			<td><input type='number' name='nguoi-".$i."'></td>
		</tr>";
	}
	echo "</table><button type='submit' name='ok1'>Split</button></div><br>";
}
if (isset($_POST['ok1'])) {
	$t = 0;
	for ($i=1; $i <= $n; $i++) {
		$bien0 = "nguoi-".$i;
		$t += (int)$_POST[$bien0];
	}
	$n = $_POST['n'];
	$tb = $t/$n;
	$random = rand(1,$n);
	for ($i=1; $i <= $n ; $i++) { 
		$bien = "nguoi-".$i;
		$nguoi = "name-".$i;
		$ab = $_POST[$bien];
		$ab1 = $_POST[$bien];
		$nguoi = $_POST[$nguoi];
		$nguoi_nhan = "name-".$random;
		$nguoi_nhan1 = $_POST[$nguoi_nhan];
		if ($tb>$ab) {
			$hieu = (int)$tb-(int)$ab;
			echo $nguoi." has to pay ".$nguoi_nhan1." ➔ ".$hieu."$ <br>";
		} else if ($tb==$ab) {
			echo $nguoi." paid enough <br>";
		}
		else if ($tb<$ab) {
			$hieu1 =0 - ($tb - $ab);
			echo $nguoi_nhan1." has to pay ".$nguoi." ➔ ".$hieu1."$<br>";
		}
	}
	echo "Amount of money each person has to pay ➔ ".$tb."$";
}
?>
</form>
</div>
<?php menu_bottom(); ?>
	</div>
</div>
</body>
</html>