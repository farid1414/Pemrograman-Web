<?php 
	require 'function.php';

	// cek apakah tombol register sudah pernah ditekan atau belum
if(isset($_POST["register"])){

	if(registrasi($_POST) > 0 ){
		header("location:login_user.php");

} else {
	echo mysqli_error($conn);
}
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial -scale=1.0">
	<link rel="stylesheet" type="text/css" href="registrasi.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Neuton:wght@300&family=Viga&display=swap" rel="stylesheet">
	<title>Registrasi Holiday.com</title>
</head>
<body>

		<div id="card">
			<form action="" method="post">
			  <div class="container">
			    <h1>Registrasi</h1>
			    <p>Silahkan registrasi untuk membuat akun di Holiday.com</p>
			    <hr>

			    <label for="username"><b>Username</b></label>
			    <input type="text" placeholder="Masukkan Username" name="username" id="username" required>

			    <label for="email"><b>Email</b></label>
			    <input type="email" placeholder="Masukkan email " name="email" id="email" required>

			    <label for="notelp"><b>No Telepon</b></label>
			    <input type="text" placeholder="Masukkan nomor telepon " name="notelp" id="notelp" required>

			    <label for="foto"><b>Upload Foto</b></label><br>
			    <span>max 2mb</span>
			    <input type="file" placeholder="Masukkan email" name="foto" id="foto" required>

			    <label for="password"><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="password" id="password" required>

			    <label for="password2"><b>Ulangi Password</b></label>
			    <input type="password" placeholder="ulangi Password" name="password2" id="password2" required>

			    <button type="submit" name="register" class="registerbtn">Registrasi</button>	
			</div>
			</form>
		</div>	
</body>
</html>