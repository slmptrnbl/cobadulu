<?php

  //panggil koneksi Database
include "koneksi.php";

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
      <div class="mt-3 ">
      <h3 class="text-center">Data Pendaftaran</h3>
    </div>
  <div class="card mt-3 bg-primary text-white">
  <div class="card-header">
    Data Peserta
  </div>
</div>
  <div class="card-body">

<div class="mt-3">
     <!-- Button trigger modal -->
    <button type="button" class="btn btn-success mb-3" data-bs-toggle=" modal" data-bs-target="#modalTambah">
     Tambah baru
</button>
</div>
    <table class="table table-bordered table-striped table-hover">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Tindakan</th>
      </tr>


      <?php

      //persiapan menampilkan data
      $id = 1;
      $tampil = mysqli_query($koneksi, "SELECT * FROM admin ORDER BY Id DESC");
      while ($data = mysqli_fetch_array($tampil)) :
      ?>

      <tr>
        <td><?= $id++ ?></td> 
        <td><?=$data['Nama']?></td>
        <td><?=$data['Email']?></td>
        <td><?=$data['Tanggal_lahir']?></td>
        <td><?=$data['Alamat']?></td>
        <td>
          <a href="#" class="btn btn-warning" data-bs-toggle=" modal" data-bs-target="#modalEdit<?= $Id ?>" >Ubah</a>
          <a href="#" class="btn btn-danger">Keluar</a>
        </td>
      </tr>

     <!-- awal Modal -->
     <div class="modal fade" id="modal Ubah<?= $Id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">from pendaftaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form method="POST" action="aksi_crud.php">
      <div class="modal-body">
 
  
         <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="Nama" 
              value="<?$data['Nama']?>" placeholder="Masukkan Nama Anda">
        </div>
        <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="Email"   value="<?$data['Email']?>"  placeholder="Masukkan Email Anda">
        </div>
         <div class="mb-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type=date class="form-control" name="Tanggal_lahir"   value="<?$data['Tanggal_lahir']?>" placeholder="masukkan Tanggal Lahir anda">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
          <textarea class="form-control" name="Alamat" rows="3"><?=$data['Alamat'] ?></textarea>
        </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="Ubah">Simpan</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  </div>
</div>
   <!-- akhir Modal -->
    <?php  endwhile; ?>
    </table>


<!-- awal Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">from pendaftaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form method="POST" action="aksi_crud.php">
      <div class="modal-body">
 
  
         <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama Anda">
        </div>
        <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="Email" placeholder="Masukkan Email Anda">
        </div>
         <div class="mb-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type=date class="form-control" name="Tanggal_lahir" placeholder="masukkan Tanggal Lahir anda">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
          <textarea class="form-control" name="Alamat" rows="3"></textarea>
        </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
    </div>
  </div>
</div>
  </div>
</div>
   <!-- akhir Modal -->
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </table>
  </body>
</html>