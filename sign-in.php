<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign in</title>
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
			<input type="text" name="myusername" placeholder="Username" id="myusername" required><br>
			<input type="password" name="mypassword"  placeholder="Password" id="mypassword" required><br>
		<?php 
			if(isset($_POST["ok"])){
				$host="localhost";
				$username="root"; 
				$password=""; 
				$db_name="jsondtb";
				$tbl_name="data_person";
				 
				// kết nối cơ sở dữ liệu
				$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("Không thể kết nối");

				// username và password được gửi từ form đăng nhập
				$myusername=$_POST['myusername'];
				$mypassword=$_POST['mypassword'];
				 
				// Xử lý để tránh MySQL injection
				$myusername = stripslashes($myusername);
				$mypassword = stripslashes($mypassword);
				$myusername = mysqli_real_escape_string($con,$myusername);
				$mypassword = mysqli_real_escape_string($con,$mypassword);
				 
				$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);
				// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
				if($count==1){
				 
					// Lúc này nó sẽ tự động gửi đến trang thông báo đăng nhập thành công
					$_SESSION['myusername'] = $myusername;
					$_SESSION['mypassword'] = $mypassword;
					header('location: home.php');
				}
				else {
				echo "<font size=5>Invalid Account</font><br>";
				}
					}
				?>
		<button type="submit" name="ok">Sign in</button><br>
		</form>
		<div class="space"></div>
		
		<hr>
			<div class="mxh">
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-google-plus-g"></i>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>