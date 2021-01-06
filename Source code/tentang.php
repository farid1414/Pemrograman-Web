<?php 
session_start();
if(!isset ($_SESSION["login"])){
	echo "
          <script> 
            alert('Silahkan login terlebih dahulu');
            document.location.href='login_user.php';
          </script>
        ";
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial -scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="tentang.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Anton&family=Bungee&family=Permanent+Marker&family=Russo+One&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="text/css" href="img/h.png">
	<title>TENTANG KAMI</title>
</head>
<body>
	<!-- Header  -->
		<div class="medsos">
			<div class="container">
				<ul>
					<li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
					<li><a href="https://youtu.be/UnNx4KoW4tY"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
				</ul>
			</div>
		</div>

	<header>	
		<div class="container">	
			<h1 class="art-headline" data-left="0%">
							<img width="100" height="50" alt="" src="img/h.png"></a> </h1>
				<h1 style="margin-left: -45px;"><a href="home.php" style="color: white;">HOLIDAY.COM</a></h1>
			<ul>
				<li><a href="home.php"><i class="fas fa-home"></i></a><p>Home</p></li>
				<li><a href="login_user.php"><i class="fa fa-user-plus"></i></a><p>Login</p></li>
				<li><a href="logout.php" class="logout_btn" ><i class="fas fa-power-off"></i></a><p>Logout</p></li>
			</ul>
		</div>	
	</header>

	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<div class="sidebar">
		<header>Menu</header>
		<ul>
			<li><a href="wisata.php"><i class="fas fa-ticket-alt" style="color: black"></i>Tiket Wisata</a></li>
			<li><a href="tips_wisata.php"><i class="fa fa-key" style="color: black;cursor: pointer;"></i>Tips wisata </a></li>
			<li><a href="tentang.php"><i class="fa fa-info-circle" style="color: black"></i>Tentang</a></li>
		</ul>
	</div>


		<div class="container">
			<div class="row">
			  <div class="column">
			    <div class="card">
			      <img src="img/jakfar.png"  style="width:100%">
			      <div class="container">
			        <h2>Ahmad Jafar Ali</h2>
			        <p style="color: white;" class="title">Editor </p>
			        <p>Jafarali@gmail.com</p>
			        <p><button class="button">Contact</button></p>
			      </div>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card">
			      <img src="img/cea.png" alt="Mike" style="width:100%">
			      <div class="container">
			        <h2>Che Anggi</h2>
			        <p style="color: white;" class="title">Desain </p>
			        <p>Chea Anggi@gmail.com</p>
			        <p><button class="button">Contact</button></p>
			      </div>
			    </div>
			  </div>

			  <div class="column">
			    <div class="card">
			      <img src="img/aku.png" alt="John" style="width:100%">
			      <div class="container">
			        <h2>M Faridz Dwi</h2>
			        <p style="color: white;" class="title">Web Dev</p>
			        <p>Faridputra@gmail.com</p>
			        <p><a href="https://api.whatsapp.com/send?phone=+6285806058767&text=Halo"><button class="button">Contact</button></a></p>
			      </div>
			    </div>
			  </div>
			</div>

			 <div class="column">
			    <div class="card">
			      <img src="img/bagus.png" alt="John" style="width:100%">
			      <div class="container">
			        <h2>Fajar Bagus</h2>
			        <p style="color: white;" class="title">Editor</p>
			        <p>fajarbagus@gamil.com</p>
			        <p><button class="button">Contact</button></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	



</body>
</html>
	