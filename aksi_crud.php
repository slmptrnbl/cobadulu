<?php

//panggil koneksi database
include "koneksi.php";

//Uji jika tombol simpan di klik
if(isset($_POST['bsimpan'])) {

    //persiapan simpan data baru
     $simpan = mysqli_query($koneksi, "INSERT INTO admin (Nama, Email, Tanggal_lahir, Alamat)
 	                                     VALUES ('$_POST[Nama]',
                                               '$_POST[Email]',
                                               '$_POST[Tanggal_lahir]',
                                               '$_POST[Alamat]') ");
  //jika simpan sukses
  if($simpan){
  	echo "<script>
  	        alert('Simpan data Sukses!');
            document.location='index.php';
        </script>";
  } else {
  	echo "<script>
            alert('Simpan data Gagal!');
            document.location='index.php';
         </script>";
   }	
}