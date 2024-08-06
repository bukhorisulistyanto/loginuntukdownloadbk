
<html>
	<head>
		<title> Belajar Membuat Form  Login //Bukhori</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		</head>
		<br>Write and edit by Bukhori Sulistyanto
		<h6> Silahkan Isikan Username dan Password untuk Login</h6>
	<body>
		<div class="col-md-6 col-md-offset-3">
			<form action="" method="POST">
				<div class="form-group">
					<label> Username </label>
					<input type="text"  name="username" class="form-control">
				</div>
				<div class="form-group">
					<label> Password </label>
					<input type="password"  name="password" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" value="Login" name="login"/>
 			</form>
		</div>
		
	</body>
	
</html>
<?php
include " ";
IF(ISSET($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$cek = mysql_num_rows(mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'"));
	$data = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'"));
	IF($cek > 0)
	{
		
		session_start();
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama'] = $data['nama'];
		echo "<script language=\"javascript\">alert(\"Selamat Datang\");document.location.href='index.php';</script>";
	}else{
		echo "<script language=\"javascript\">alert(\"Password atau Username Salah !!!\");document.location.href='login.php';</script>";
	}
}

?>
