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
$user = query ("SELECT * FROM registrasi_user");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel User</title>
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
        <img src="#" class="mobile_profile_image" alt="">
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
          <br><br>
          <table border="2">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email Pengguna</th>
                <th>No Telepon</th>
                <th>Foto</th>
              </tr>
            </thead>
            <?php $i=1; ?>
            <!-- memanggil hasil query -->
            <?php foreach ($user as $usr) : ?>
              <tbody>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $usr["username"]?></td>
                  <td><?= $usr["email"] ?></td>
                  <td><?= $usr["no_telp"] ?></td>
                  <td> 
                      <img src="img/<?= $usr["foto"];?>" width="60px">
                  </td>
                </tr>
              <?php $i++; ?>     
              <?php endforeach ?>
              </tbody>
          </table>
        </div>  

</body>
</html>