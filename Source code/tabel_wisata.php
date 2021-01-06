<?php 
session_start();
if(!isset ($_SESSION["loginadmin"])){
  echo "
          <script> 
            alert('Silahkan login terlebih dahulu');
            document.location.href='login_admin.php';
          </script>
        ";
  exit;
}

  require'function.php';
 // ambil data mahasiswa
$wisata = query ("SELECT * FROM data_wisata");


// cek apakah tombol submit sudah ditekaan 
 if(isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan
    if(tambah($_POST) > 0 ) {
        echo "
          <script> 
            alert('data berhasil ditambahkan');
            document.location.href='tabel_wisata.php';
          </script>
        ";
    }
    else {
      echo "
      <script>
        alert('Data gagal ditambahkan');
 
      </script>
      ";
    }

 }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel_wisata</title>
    <style>
	@import url('https://fonts.googleapis.com/css2?family=Bungee&family=Merriweather:ital@1&display=swap');
	</style>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" type="text/css" href="tabel_wisata.css">
    <link rel="stylesheet" type="text/css" href="wisata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="shortcut icon" type="text/css" href="img/data_icon.png">
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header -->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>HOLIDAY<span>.com</span></h3>
      </div>
      <div class="right_area">
        <a href="logout_admin.php" class="logout_btn"><i class="fas fa-power-off"></i></a>
      </div>
    </header>
    <!--Navigasi awal sebelum start ketika berbentuk mobile-->
    	<!-- navbar ketika bentuk mobile -->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="tabel_user.php"><i class="fas fa-database"></i><span>Data Pengunjung login</span></a>
        <a href="tabel_wisata.php"><i class="fas fa-table"></i><span>Tabel daftar wisata</span></a>
        <a href="tabel_tiket.php"><i class="fas fa-table"></i><span>Tabel Pemesan Tiket</span></a>     
      </div>
    </div>
    <!--Navigasi setalah mulai awal ketika berbentuk pc-->
    <!--sidebar -->
    <div class="sidebar">
      <div class="profile_info">
        <img src="img/fotoadmin.png" class="profile_image" alt="">
        <h4>....</h4>
      </div>
              <a href="admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="tabel_user.php"><i class="fas fa-database"></i><span>Data Pengunjung login</span></a>
        <a href="tabel_wisata.php"><i class="fas fa-table"></i><span>Tabel daftar wisata</span></a>
        <a href="tabel_tiket.php"><i class="fas fa-table"></i><span>Tabel Pemesan Tiket</span></a>
    </div>

        <div class="content">
          <button id="myBtn">Tambah</button>
          <br><br>
          <table border="2">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Gambar Wisata</th>
                <th>caption wisata</th>
                <th>Alamat wisata</th>
                <th>Tarif wisata</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <?php $i=1; ?>
            <!-- memanggil hasil query -->
            <?php foreach ($wisata as $row) : ?>
              <tbody>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row["nama_wisata"]?></td>
                  <td> 
                      <img src="img/<?= $row["gambar_wisata"];?>" width="60px">
                  </td>
                  <td><?= $row["caption_wisata"] ?></td>
                  <td><?= $row["alamat_wisata"] ?></td>
                  <td><?= $row["tarif_wisata"] ?></td>
                  <td>
                    <a href="edit.php?id=<?= $row["id"]; ?>" class="btn"> <i class="nav-icon fas fa-edit"></i></a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn"> <i class="nav-icon fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php $i++; ?>     
              <?php endforeach ?>
              </tbody>
          </table>
        </div>  

          <!-- Modal atau Popup untuk tambah data -->
     <div id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span onclick="document.getElementById('myModal')" class="close">&times;</span>
          <h2>Form Tambah data daftar wisata</h2>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <label for="nama_wisata">Nama wisata </label>
              <input type="text" required  name="nama_wisata" id="nama_wisata" >
        </div>

        <div class="modal-body">
          <label for="gambar_wisata">Gambar wisata</label>
              <input type="file" name="gambar_wisata" required id="gambar_wisata">
        </div>

        <div class="modal-body">
          <label for="caption_wisata">Caption wisata</label>
              <input type="text" required  name="caption_wisata" id="caption_wisata">
        </div>


        <div class="modal-body">
          <label for="alamat_wisata">Alamat wisata</label>
              <input type="text" required  name="alamat_wisata" id="alamat_wisata">
        </div>

        <div class="modal-body">
          <label for="tarif_wisata">Tarif wisata</label>
              <input type="text" required  name="tarif_wisata" id="tarif_wisata">
        </div>

        <div class="modal-body">
          <label for="id_admin">Id Admin</label>
              <input type="Number" required  name="id_admin" id="id_admin">
        </div>
          <button type="submit" name="submit">Tambahkan</button>
      </div>
      </form>
  </div> 

<script src="wisata.js"></script>

  </body>
</html>