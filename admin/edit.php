<?php 
include ('koneksi.php');
if (isset($_GET['Id'])) {
	$title ="Edit";
	$url ="proses_edit.php";
	$id = $_GET['Id'];
	//buat query untuk ambil data dari database
	$sql ="SELECT * FROM admin WHERE Id = $id";
	$query = mysqli_query($koneksi,$sql);
	$admin = mysqli_fetch_assoc ($query);
	//jika data yang di edit tidak di temukan
	if (mysqli_num_rows($query) <1) {
		die ("data tidak di temukan...");}
		//url jika edit data
	 }else{
	 	$title ="Add";
	 	//url jika tambah data
	 	$url = 'proses_pendaftaran.php';
	 }
	?>
	<html>
	<head><title>Formulir Edit</title></head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<form action="proses_edit.php" method="POST">
			<fieldset>
				<legend><h2>Form Edit</h2></legend>
				<div>
					<label for='Id'>Id: </label><br>
					<input type="text" name="Id" value="<?php if (isset($_GET['Id']))
					{echo $admin['Id'];}?>"/>
				</div><div>
					<label for='nama'>Nama: </label><br>
					<input type="text" name="Nama" value="<?php if (isset($_GET['Id']))
					{echo $admin['Nama'];}?>"/>
				</div><div>
					<label for='email'>Email: </label><br>
					<input type="text" name="Email" value="<?php if (isset($_GET['Id']))
					{echo $admin['Email'];}?>"/>
				</div><div>
					<label for='tanggal_lahir'>Tanggal Lahir: </label><br>
					<input type="date" name="Tanggal_lahir" value="<?php if (isset($_GET['Id']))
					{echo $admin['Tanggal_lahir'];}?>"/>
				</div><div>
					<label for='alamat'>Alamat: </label><br>
					<input type="text" name="Alamat" value="<?php if (isset($_GET['Id']))
					{echo $admin['Alamat'];}?>"/>
			</div>
			<hr>
			<div>
				<input type="submit" value="simpan" name="simpan"/>
			</div>
		</fieldset>
	</form>
</body>
<script type="text/javascript" src="js/bootstrap.js">
	</script>
</html>
