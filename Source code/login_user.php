<?php 
session_start();

// cek apabila sudah login tapi mau masuk login lagi 
if(isset($_SESSION["login"])){
	header("location:home.php");
	exit;
}

require'function.php';

// apakah tombol login sudah ditekan
	if( isset($_POST["login"]) ){

		$email = $_POST["email"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM registrasi_user WHERE email ='$email'");



		// cek username
		if(mysqli_num_rows($result) === 1 ) {

			// cek password 
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){

				// set session 
				$_SESSION["login"] = true;
				header("location:home.php ");
				exit;
			}
		}

		$error = true;

	}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login Holiday.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial -scale=1.0">
	<link rel="stylesheet" type="text/css" href="login_user.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Neuton:wght@300&family=Viga&display=swap" rel="stylesheet">
</head>
<body>
		<div id="card">
			<form action="" method="post">
				<div class="container">
				    <h1>Login</h1>
				    <?php if(isset($error)) :?>
				    	<p style="color: red; font-style: italic;">email / password salah</p>
				    <?php endif; ?>	
				    <hr>
				    <label for="email"><b>Email</b></label>
				    <input type="email" placeholder="Masukkan Username" name="email" id="email" required>

				    <label for="password"><b>Password</b></label>
				    <input type="password" placeholder="Masukkan password " name="password" id="password" required>

				    <span>Anda belum punya akun ?<a href="registrasi.php">Registrasi</a></span> <br>
				  <button name="login" type="submit" class="registerbtn">Login</button>	
				</div>
			</form>
		</div>
</body>
</html>