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
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Holiday.com</title>
    <style>
	@import url('https://fonts.googleapis.com/css2?family=Bungee&family=Merriweather:ital@1&display=swap');
	</style>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="shortcut icon" type="text/css" href="img/admin_icon.png">
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header untuk awal -->
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
        <h4>Admin</h4>
      </div>
        <a href="admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="tabel_user.php"><i class="fas fa-database"></i><span>Data Pengunjung login</span></a>
        <a href="tabel_wisata.php"><i class="fas fa-table"></i><span>Tabel daftar wisata</span></a>
        <a href="tabel_tiket.php"><i class="fas fa-table"></i><span>Tabel Pemesan Tiket</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <p>Selamat datang anda sebagai admin layanan penyedia ticket wisata secara online, Bekerjalah dengan baik dan jujur layani para user apabila ada komplain dengan baik</p>
      </div>

      <div class="card">
        <p>Disini anda sebagai admin pemegang web penyedia layanan pembelian tiket secara online dengan berbagai fitur yang ada di admin, disini anda sebagai editor atau hapus data yang akan ditampilkan di user anda juga bisa melihat para user yang sudah login untuk mengakses HOLIDAY.COM sebagi layanan pembelian tiket untuk berwisata di masa pandemi ini.</p>
      </div>

    </div>
     
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>