<?php 
// koneksi ke database 
 $conn=mysqli_connect("localhost","root","","dbtiket_wisata");

// fungsu untuk query
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]= $row;
	}
	return $rows;
}

// fungsi untuk tambah data 
function tambah($data){
	global $conn;
	$nama_wisata=htmlspecialchars($data["nama_wisata"]);
		// upload gambar 
	$gambar_wisata= upload();
	if (!$gambar_wisata ){
		return false;
	}

	$caption_wisata = htmlspecialchars ($data["caption_wisata"]);
	$alamat_wisata = htmlspecialchars ($data["alamat_wisata"]);
	$tarif_wisata = htmlspecialchars ($data["tarif_wisata"]);
	$id_admin = htmlspecialchars($data["id_admin"]);

		// query untuk insert data 
		 $query = "INSERT INTO data_wisata VALUES
		 ('','$nama_wisata','$gambar_wisata','$caption_wisata','$alamat_wisata','$tarif_wisata','$id_admin ')";

		 mysqli_query($conn, $query);

		 return mysqli_affected_rows($conn);
}


 // fungsi untuk menghapus data 
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM data_wisata WHERE id =$id");

	 return mysqli_affected_rows($conn);
}	

	// fungsi untuk upload gambar 
function upload (){

	$namafile=$_FILES['gambar_wisata']['name'];
	$ukuranfile = $_FILES['gambar_wisata']['size'];
	$error = $_FILES['gambar_wisata']['error'];
	$tmpnama = $_FILES ['gambar_wisata']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload
	if($error === 4){
		echo "
			<script>
			alert('upload gambar dahulu');
			</script>";

		return false;
	}

	// cek yg di upload harus gambar 
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.',$namafile);
	$ekstensiGambar = strtolower (end($ekstensiGambar));

	if(!in_array($ekstensiGambar
		, $ekstensiGambarValid)){
		echo "
			<script>
			alert('gambar yang anda upload salah');
			</script>
		";
		return false;
	}

	// cek ukuran apabila terlalu besar 
	if ($ukuranfile > 1000000) {
		echo "
			<script>
			alert('Ukuran gambar anda terlalu besar');
			</script>
		";
		return false;
	}

	

	//membuat nama gambar baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;
//gambar siap di upload 
	move_uploaded_file($tmpnama,'img/'. $namafilebaru);

	return $namafilebaru;

}



// fungsi untuk mengubah data 
function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama_wisata =htmlspecialchars($data["nama_wisata"]);
	$gambarlama=htmlspecialchars ($data["gambarlama"]);
	// cek apakah ganti gambar atau tidak
	
	if($_FILES['gambar_wisata']['error'] === 4 ){
		$gambar_wisata = $gambarlama;
	} else {
		$gambar_wisata = upload();
	}
	$caption_wisata =htmlspecialchars ($data["caption_wisata"]);
	$alamat_wisata = htmlspecialchars ($data["alamat_wisata"]);
	$tarif_wisata = htmlspecialchars ($data["tarif_wisata"]);



		// query untuk insert data 
		 $query = "UPDATE data_wisata SET 
		 	nama_wisata = '$nama_wisata',
		 	gambar_wisata = '$gambar_wisata',
		 	caption_wisata = '$caption_wisata',
		 	alamat_wisata = '$alamat_wisata',
		 	tarif_wisata = '$tarif_wisata'

		 	WHERE id =$id		 	
		 ";

		 mysqli_query($conn, $query);

		 return mysqli_affected_rows($conn);
}

// fungsi cari
function  cari($keyword){
	$query =" SELECT * FROM data_wisata 
				WHERE  
				nama_wisata LIKE '%$keyword%' OR 
				caption_wisata LIKE '%$keyword%' OR
				alamat_wisata LIKE '%$keyword%' OR
				tarif_wisata LIKE '%$keyword%'
			";


		return query($query);
}


	// fungsi untuk registras 

function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$email = htmlspecialchars ($data["email"]);
	$notelp =htmlspecialchars ($data["notelp"]);
	$foto =htmlspecialchars ($data["foto"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 =mysqli_real_escape_string($conn, $data["password2"]);

	// cek email sudah ada atau belum 
	$result = mysqli_query($conn, "SELECT email FROM registrasi_user WHERE email = '$email'");

	if(mysqli_fetch_assoc ($result)){
		echo "
		<script>
			alert('email sudah ada');
		</script>
		";

		return false;
	}


	// cek kesamaan antara password dengan password 2 
	if ( $password !== $password2 ){
		echo "<script>
				alert('Pasword tidak sesuai');
			</script>";
			return false; 
	}	

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
// tambah user ke database
	mysqli_query($conn, "INSERT INTO registrasi_user VALUES('','$username','$email','$notelp','$foto','$password')");

	return mysqli_affected_rows($conn);
}


// fungsi tambah pesanan tiket 
function tiket($data){
	global $conn;
	$nama_pesan =htmlspecialchars($data["nama_pesan"]);
	$nik =htmlspecialchars ($data["nik"]);
	$email_pesan = htmlspecialchars ($data["email_pesan"]);
	$jml = htmlspecialchars ($data["jml"]);
	$objek_wisata = htmlspecialchars ($data["objek_wisata"]);


	// query untuk insert data 
		 $q = "INSERT INTO data_tiket VALUES 
		 ('','$nama_pesan','$nik','$email_pesan','$jml','$objek_wisata')";

		 mysqli_query($conn, $q);
		 return mysqli_affected_rows($conn);
}
 ?>