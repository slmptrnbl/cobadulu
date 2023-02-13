<?php
include ("koneksi.php");
if (isset($_GET['Id'])){
	$title ="Edit";
	$url ="proses_edit.php";
	$id = $_GET['Id'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM admin WHERE Id = $id";
	$query = mysqli_query ($koneksi,$sql);
	$admin = mysqli_fetch_assoc ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) <1){
		die("data tidak ditemukan...");}
		//url jika edit data
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>
	<html lang="en">
	<head><title> Formulir event</title></head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.bundle.min.css" rel="stylesheet"  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<body>
	<header><h3></h3></header>
	<form action ="proses_pendaftaran.php" method = "POST">
	<fieldset>
		<legend><h2>Form Pendaftaran</h2></legend>
		<div>
			<label for='Id'>Id :</label><br>
			<input type="text" name="Id" value="  <?php if (isset($_GET['Id']))
		{echo $admin['Id'];} ?> "/>
		</div>
	<div>
		<label for ='Nama'>Nama :</label><br>
		<input type ="text" name ="Nama" value =" <?php if (isset($_GET['Id']))
		{echo $admin['Nama'];} ?> "/>
	</div>
	<div>
	<label for ='Email'>Email :</label><br>
		<input type ="text" name ="Email" value =" <?php if (isset($_GET['Id'])) 
		{echo $admin['Email'];} ?> "/>
	</div>
	<div>
	<label for ='Tanggal_lahir'>Tanggal lahir :</label><br>
		<input type ="date" name ="Tanggal_lahir" value =" <?php if (isset($_GET['Id'])) 
		{echo $admin['Tanggal_lahir'];} ?> "/>
	</div>
	<div>
		<label for = 'Alamat'>Alamat: </label><br>
		<textarea name ="Alamat" row = "5"> <?php if (isset($_GET['Id']))
		{echo $admin['Alamat'];} ?> </textarea>
	</div>
	<hr>
	<div>
	<input type ="submit" value ="simpan" name = "simpan" name ="simpan"/>
	</div>
</fieldset>
</form>
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">

	</script>
</html>