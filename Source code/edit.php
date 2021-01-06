<?php 
	require'function.php';

	// ambil data dari tabel wisata 

	$id =$_GET["id"];

	// query data wisata berdasarkan id 
$wisata = query ("SELECT * FROM data_wisata WHERE id = $id")[0];



	// cek apakah tombol submit sudah ditekaan 
 if(isset($_POST["submit"])) {


 // cek apakah data berhasil ubah
    if (ubah($_POST) > 0 ) {
        echo "
          <script> 
            alert('data berhasil ubah');
            document.location.href='tabel_wisata.php';
          </script>
        ";
    }
    else {
      echo "
  			<script> 
            alert('data gagal ubah');
            document.location.href='tabel_wisata.php';
          </script>
      ";
    }

 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial -scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Anton&family=Bungee&family=Permanent+Marker&family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
 		
		<div id="card">
				<div class="container">
				    <h1>Edit Data </h1>
				    <hr>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $wisata["id"] ?>">
					<input type="hidden" name="gambarlama" value="<?= $wisata["gambar_wisata"] ?>">
					 <label for="nama_wisata">Nama wisata </label>
			              <input type="text" required  name="nama_wisata" id="nama_wisata" value=" <?= $wisata["nama_wisata"] ?>" >
			          <label for="gambar_wisata">Gambar wisata</label>
			          <img src=" img/<?= $wisata["gambar_wisata"] ?>" width="60px">
			              <input type="file" name="gambar_wisata"  id="gambar_wisata" >
			          <label for="caption_wisata">Caption wisata</label>
			              <input type="text" required  name="caption_wisata" id="caption_wisata" value=" <?= $wisata["caption_wisata"] ?>">        
			          <label for="alamat_wisata">Alamat wisata</label>
			              <input type="text" required  name="alamat_wisata" id="caption_wisata" value=" <?= $wisata["alamat_wisata"] ?>">
			          <label for="tarif_wisata">Tarif wisata</label>
			              <input type="text" required  name="tarif_wisata" id="tarif_wisata" value=" <?= $wisata["tarif_wisata"] ?>">
			<button type="submit" name="submit">Edit</button>
			    </form>
				</div>
		</div>
		

</body>
</html>