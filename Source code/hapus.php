<?php 
	 require 'function.php';
 $id = $_GET["id"];

if (hapus ($id) > 0 ){

	echo "
	  <script> 
            alert('data berhasil hapus');
            document.location.href='tabel_wisata.php';
          </script>
	";
} else {
	echo "
	  <script> 
            alert('data tidak berhasil dihapus');
            document.location.href='tabel_wisata.php';
          </script>
          ";
}

 ?>