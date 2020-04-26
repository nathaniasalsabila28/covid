<?php
include '../koneksi.php';
$sql = "SELECT * FROM data ORDER BY nama";

$res = mysqli_query($kon, $sql);

$index = array();

while($data = mysqli_fetch_assoc($res)){
  $index[] = $data;
}
include '../aset/header.php'; 
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-edit"></i>Data ODP</h2>
  </div>
  <div class="card-body">
    <a href="tambahdata.php" class="badge badge-info" style="width: 125px">Tambah Data</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Suhu</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>

  <tbody>
    <?php  
      $id=1;
      foreach($index as $p){?>
        <tr>
          <th scope=""><?= $id ?></th>
          <td><?= $p['nama']?></th>
          <td><?= $p['umur']?></th>
          <td><?= $p['suhu']?></th>
          <td><?= $p['alamat']?></td>
          <td>
            <a href="detail.php?id_data=<?= $p['id_data'];?>" class="badge badge-success">Detail</a>
            <a href="edit.php?id_data=<?= $p['id_data'];?>" class="badge badge-warning">Edit</a>
            <a href="hapus.php?id_data=<?= $p['id_data'];?>" class="badge badge-danger">Hapus</a>
          </td>
        </tr>
      <?php
      $id++;  
      }
      ?>
  </tbody>
</table>
  </div>
</div>


<?php 
include '../aset/footer.php';
?>