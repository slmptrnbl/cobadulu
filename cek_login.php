<?php
session_start();
include 'config.php';

$username =$_POST['username'];
$password =$_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if ($data['level']=="user") {
		//buat session login dan username
		//$_SESSION['username']= $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "user";
		//alihkan ke halaman dashboard user
		header("location:home.php");
	}elseif ($data['level']== "admin") {
		//buat session login dan username
		//$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level']= "user";
		//alihkan ke halaman dashbord user
		header("location:home.php");
	}else{
		header("location:index.php");
	}
}
?>