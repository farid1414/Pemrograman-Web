<?php 
require 'function.php';

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

// cek apakah tombol pesan sudah ditekaan 
 if(isset($_POST["pesan"])) {

    // cek apakah data berhasil ditambahkan
    if (tiket($_POST) > 0 ) {
        echo "
          <script> 
            alert('Anda berhasil beli tiket');
            document.location.href='tiket.php';
          </script>
        ";
    }
    else {
      echo "
      <script>
        alert('Silahkan isi dengan benar datanya');
      </script>
      ";
    }

 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Regis pesan</title>
	<link rel="stylesheet" type="text/css" href="regis_pesan.css">
	 <meta charset="utf-8">
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="card">
			<h1>Validasi Pesanan Tiket <?= $_GET["nama"]; ?></h1>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="container">
				    <hr>
				    <label for="nama_pesan"><i class="fa fa-user"></i>Masukkan Nama</label>
				    <input type="text"  name="nama_pesan" id="nama_pesan" required>
	
					<label for="nik"><i class="fa fa-user-circle"></i>Masukkan NIK</label>
				    <input type="text"  name="nik" id="nik" required>

				    <label for="email_pesan" ><i class="fa fa-envelope-open"></i>Masukkan Email</label>
				    <input type="email" placeholder="Jafar@gmail.com" name="email_pesan" id="email_pesan" required>

				    <label for="jml"><i class="	fa fa-tags"></i>Masukkan Jumlah Pesanan Tiket</label>
				    <input type="Number" name="jml" id="jml" required>

					<label for="objek_wisata"><i class="fa fa-tags"></i>Masukkan objek wisata</label>
				    <input type="text" name="objek_wisata" placeholder="isikan sesuai dengan yang ada di judul" id="objek_wisata" required>				    

				  <button type="submit" name="pesan" class="registerbtn">Pesan</button>	
				</div>
			</form>
		</div>
</body>
</html>