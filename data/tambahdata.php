<?php 

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($kon, "SELECT * FROM data");

?>


<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Tambah Data ODP</h2>
    </div>
    <div class="card-body">
         <form method="post" action="proses-tambah.php">
                <div class="form-group">
                 <label for="data">Nama</label>
                 <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                </div>

                <div class="form-group">
                 <label for="data">Umur</label>
                 <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
                </div>

                <div class="form-group">
                 <label for="data">Suhu</label>
                 <input type="text" class="form-control" name="suhu" id="suhu" placeholder="Masukkan ">
                </div>

                <div class="form-group">
                 <label for="data">Alamat</label>
                 <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                </div>

                 <div class="form-group">
                 <label for="data">Foto ODP:  </label>
                 <input type="file" name="foto" id="foto"> 
                 </div>

                 <div class="form-group">
                 <label for="data">Gejala pada ODP</label>
                 <textarea name="gejala" id="gejala" class="form-control"></textarea>
                 </div>

                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
         </form>        
    </div>
   </div>
  </div>
 </div>
</div>    






<?php

include '../aset/footer.php';

?>