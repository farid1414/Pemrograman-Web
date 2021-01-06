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
    <link rel="stylesheet" type="text/css" href="data_pengunjung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="shortcut icon" type="text/css" href="img/data_icon.png">
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
        <a href="#" class="logout_btn"><i class="fas fa-power-off"></i></a>
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
        <a href="admin.html"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="data_pengunjung.html"><i class="fas fa-database"></i><span>Data Pengunjung login</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tabel daftar wisata</span></a>
	   <a href="#"><i class="fas fa-info-circle"></i><span>Tentang</span></a>
     
      </div>
    </div>
    <!--Navigasi setalah mulai awal ketika berbentuk pc-->
    <!--sidebar -->
    <div class="sidebar">
      <div class="profile_info">
        <img src="#" class="profile_image" alt="">
        <h4>Jessica</h4>
      </div>
       <a href="admin.html"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="data_pengunjung.html"><i class="fas fa-database"></i><span>Data Pengunjung login</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tabel daftar wisata</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>Tentang</span></a>
    </div>

        <div class="content">
          <a href="?pagetambah" class="btn1 "> <i class="nav-icon fa fa-plus"></i>Tambah</a>
          <table border="2">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Gambar Wisata</th>
                <th>Alamat wisata</th>
                <th>Tarif wisata</th>
                <th>Status wisata</th>
                <th>Edit</th>
              </tr>
            </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Surabaya banjir</td>
                  <td> 
                      <img src="img/fb.png" width="60px">
                  </td>
                  <td>Jl Proklamasi no 45 gresik</td>
                  <td>Rp 40.000</td>
                  <td>Buka</td>
                  <td>
                    <a href="" class="btn"> <i class="nav-icon fas fa-edit"></i></a>
                    <a href="" class="btn"> <i class="nav-icon fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              </tbody>
          </table>
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