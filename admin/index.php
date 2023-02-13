<?php include('koneksi.php');?>
<!DOCTYPE html>
<html>
<head><title>Formulir Pendaftaran</title></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.bundle.min.css" rel="stylesheet"  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<center><h2>Data Event</h2></center>
<body>
	<center><nav><a href="v_form.php"><button>Tambah Baru</button>
	</a></nav></center>
		<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
	<br>
	<table class="table table-bordered table-striped table-hower">
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Tanggal lahir</th>
				<th>Alamat</th>
				<th>Tindakan</th>
			</tr>
			<?php
			$sql = "SELECT * FROM admin";
			$query = mysqli_query($koneksi, $sql);
			while ($admin = mysqli_fetch_array($query)) { 
				echo "<tr>";
			    echo "<td>".$admin ['Id']."</td>";
				echo "<td>".$admin['Nama']."</td>";
				echo "<td>".$admin['Email']."</td>";
				echo "<td>".$admin['Tanggal_lahir']."</td>";
				echo "<td>".$admin['Alamat']."</td>";
				echo "<td>";
				echo "<a href = 'edit.php?Id=".$admin['Id']."'>Edit</a>|";
				echo "<a href = 'hapus.php?Id=".$admin['Id']."'>Hapus</a>|";
              }
			?>
		</body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
<br>
<center><nav><a href="logout.php"><button>Logout</button></nav></center>
</p>
</body>
</html>
