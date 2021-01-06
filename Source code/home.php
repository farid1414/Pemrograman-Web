<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial -scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Anton&family=Bungee&family=Permanent+Marker&family=Russo+One&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="text/css" href="img/h.png">
	<title>HOME</title>
</head>
<body>
	<!-- Header  -->
		<div class="medsos">
			<div class="container">
				<ul>
					<li><a href="https://youtu.be/UnNx4KoW4tY"><i class="fab fa-youtube"></i></a></li>
					<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
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
	
	<!-- Slider -->
	<div id="slider">
		<figure>
			<img src="img/raja.png">
			<img src="img/ampat.png">
		</figure>
	</div>

			<div class="main">

			<h4>HOLIDAY.COM</h4>
			<hr>
			<h2>Solusi untuk Pesan tiket dan lihat destinasi wisata yang buka hanya di HOLIDAY.COM</h2>
			<!-- Portfolio Gallery Grid -->
			<div class="row">
			  <div class="column">
			    <div class="content">
			      <img src="img/candi.jpg"  style="width:200px;">
			      <h3>Candi Borobudur </h3>
			      <p>Candi Borobudur sudah sangat terkenal di dunia.</p>
			      <button onclick="document.getElementById('id01').style.display='block'">Lanjut baca</button>
			    </div>
			  </div>

				<div id="id01" class="modal">
					  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <form class="modal-content" action=" ">
					    <div class="container">
					      <h5>Candi Borobudur</h5>
					      <p> Candi ini masuk kedalam daftar Warisan Dunia UNESCO. Candi ini merupakan Candi Budha terbesar dan terlengkap di dunia. Dilihat dari atas, bentuk Candi Borobudur menyerupai bunga teratai, yang akan sangat indah bila dilihat pada saat matahari terbit atau terbenam. Candi Borobudur sebetulnya masuk dalam wilayah Magelang, Jawa Tengah. Tapi, wisatawan yang liburan ke Jogja sering sekali memasukan candi Borobudur sebagai salah satu tempat yang akan dikunjungi. Itu sebabnya saya masukan juga ke dalam list tempat wisata di Jogja.</p>

					      <div class="clearfix">
					        <a href="wisata.php"><button type="button" class="kunjungbtn"> Kunjungi</button></a>
					      </div>
					    </div>
					  </form>
					</div>

			  <div class="column">
			    <div class="content">
			      <img src="img/komodo.jpg"  style="width:180px;">
			      <h3>Pulau Komodo</h3>
			      <p>Kepuluan Flores yang menjadi habitat asli hewan komodo</p>
			      <button onclick="document.getElementById('id02').style.display='block'">Lanjut baca</button>
			    </div>
			  </div>

			  <div id="id02" class="modal">
					  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <form class="modal-content" action=" ">
					    <div class="container">
					      <h5>Pulau Komodo</h5>
					      <p>Banyak orang berbondong-bondong mendatangi kepulauan ini hanya untuk melihat secara langsung tingkah laku hewan yang mulai punah ini. Selain karena keindahannya yang diakui dunia karena berhasil menyandang predikat ”New 7 Wonders of Nature” berjajar dengan tempat-tempat cantik lainnya di seluruh dunia. Pulau ini juga merupakan bagian dari situs warisan dunia UNESCO, karena termasuk ke dalam kawasan Taman Nasional Komodo bersamaan dengan Pulau Komodo, Pulau Padar dan Gili Motang.</p>
					      <div class="clearfix">
					        <a href="wisata.php"><button type="button" class="kunjungbtn"> Kunjungi</button></a>
					      </div>
					    </div>
					  </form>
					</div>

			  <div class="column">
			    <div class="content">
			      <img src="img/kuta.jpg"  style="width:200px;">
			      <h3>Pantai Kuta</h3>
			      <p>Siapa yang tidak mengenal Pantai Kuta? pantai yang dikenal dengan pemandangan sunset terbaiknya </p>
			    	<button onclick="document.getElementById('id03').style.display='block'">Lanjut baca</button>
			    </div>
			  </div>

			  	<div id="id03" class="modal">
					  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <form class="modal-content" action=" ">
					    <div class="container">
					      <h5>Pantai Kuta</h5>
					      <p> Wisata pantai ini rasanya menjadi salah satu ikon wisata Pulau Dewata. Pesona dan keeksotisan di Pantai Kuta benar-benar tak bisa diragukan lagi. Sehingga tak heran jika setiap harinya pantai Kuta dipenuhi dengan wisatawan lokal maupun asing</p>

					      <div class="clearfix">
					        <a href="wisata.php"><button type="button" class="kunjungbtn"> Kunjungi</button></a>
					      </div>
					    </div>
					  </form>
					</div>


			  <div class="column">
			    <div class="content">
			      <img src="img/ijen.jpg"  style="width:190px;">
			      <h3>Kawah Ijen</h3>
			      <p>Kawah Ijen merupakan tempat wisata terpopuler yang ada di Banyuwangi </p>
			      <button onclick="document.getElementById('id04').style.display='block'">Lanjut baca</button>
			    </div>
			  </div>
			</div>
			
			<div id="id04" class="modal">
					  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <form class="modal-content" action=" ">
					    <div class="container">
					      <h5>Kawah Ijen</h5>
					      <p>Kawah Ijen terkenal bukan saja karena kawah hijaunya yang menawarkan panorama indah, tapi juga pertambangan belerangnya yang ikonik.Kawah Ijen juga memiliki fenomena unik Blue Fire atau api biru. Api biru ini adalah hasil dari terbakarnya gas sulfur yang muncul dari retakan Gunung Api Ijen yang memiliki temperatur hingga 600 derajat celcius. Api biru di Ijen ini adalah yang terbesar di dunia, dan satu lokasi lainnya di dunia yang memiliki fenomena ini hanyalah di Gunung Dallol di Ethiopia.</p>

					      <div class="clearfix">
					        <a href="wisata.html"><button type="button" class="kunjungbtn"> Kunjungi</button></a>
					      </div>
					    </div>
					  </form>
					</div>


			<div class="content">
			  <img src="img/misol.jpg"  style="width:975px; height: 445px;%"  >
			  <h3 style="text-align: center;">Raja Ampat Surganya Idonesia </h3>
			  <p style="text-align: center;">Bagi para diver dan penggemar aktivitas snorkeling, Raja Ampat adalah surga.</p>
			  <button style="align-items: center;float:center; width: 140px;" onclick="document.getElementById('id05').style.display='block'">Lanjut baca</button>
			</div>

			<div id="id05" class="modal">
					  <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <form class="modal-content" action=" ">
					    <div class="container">
					      <h5>Raja Ampat</h5>
					      <p> Keindahan alam bawah lautnya luar biasa bahkan seluruh dunia mengakui hal itu. Tidak salah jika banyak orang ingin menjadi saksi langsung keindahan tersebut meski akses transportasi untuk bisa menikmati destinasi wisata di Raja Ampat masih sangat terbatas, dan harganya cukup menguras kantong. Namun, jika kamu termasuk salah satu traveller yang membulatkan tekad, mengencangkan ikat pinggang dan siap menghabiskan tabungan untuk bisa menikmati pesona Raja Ampat, maka kamu harus tahu bahwa bukan alam bawah airnya saja yang istimewa. Tidak sedikit wisata menarik di permukaan yang wajib kamu kunjungi.</p>

					      <div class="clearfix">
					        <a href="wisata.php"><button type="button" class="kunjungbtn"> Kunjungi</button></a>
					      </div>
					    </div>
					  </form>
					</div>

			<!-- END MAIN -->
			</div>


	<!-- -======== footer atau bagian bawah web =========== -->
	<footer class="footer">
		<div class="footer-left">
			<br>
			<p>Sebuah website untuk mempermudah dalam pemesanan dan pembelian tiket wisata dalam 
			masa pandemi seperti saat ini, Holiday anda aman kesehatan anda terjaga</p>
		</div>
		<ul class="footer-right">
			<li>
				<h2>Kelompok</h2>
				<ul class="box">
					<li><a href="">M Faridz Dwi</a></li>
					<li><a href="">Ahmad Jafar Ali</a></li>
					<li><a href="">Chea Anggi</a></li>
					<li><a href="">Fajar Bagus</a></li>
				</ul>
			</li>
		</ul>
		<ul class="footer-right">
			<li>
				<h2>Contact Kami</h2>
				<ul class="box">
					<li><a href="">Wa. 081349876345</a></li>
					<li><a href="">Jafarali@gmail.com</a></li>
					<li><a href="">Gedung A10 Teknik Informatika</a></li>
				</ul>
			</li>
		</ul>
			<div class="footer-bottom">
				<p>Created web by M Faridz Dwi &copy;2020</p>
			</div>
	</footer>

	<script>
// Variabel untuk modal jav script 
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
var modal3 = document.getElementById('id04');
var modal4 = document.getElementById('id05');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  else if (event.target == modal1){
  	modal.style.display - "none";
  }
  else if (event.target == modal2){
  	modal.style.display - "none";
  }
  else if (event.target == modal3){
  	modal.style.display - "none";
  }
  else if (event.target == modal4){
  	modal.style.display - "none";
  }
}
</script>
</body>
</html>