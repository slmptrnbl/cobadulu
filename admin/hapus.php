<?php 
include("koneksi.php");
if (isset($_GET['Id'])) {
	//ambil nis dari query string
	$Id = $_GET['Id'];
	//buat query hapus
	$sql = "DELETE FROM admin WHERE Id=$Id";
	$query = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	//apakah query update berhasil?
	if ($query) {
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
		header('location: index.php?status=sukses');
	}else{
		//kalau gagal, alihkan ke halaman index.php dengan status=gagal
		header('location: index.php?status=gagal');
	}
	}else{
		die("Akses dilarang...");
	}

?>