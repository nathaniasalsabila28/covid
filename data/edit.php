<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_data=$_GET["id_data"];
$query=mysqli_query($kon, "SELECT * FROM data WHERE id_data=$id_data");
$data=mysqli_fetch_assoc($query);
 ?>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 				<div class="card" style="width: 100%">
 					<div class="card header" style="width: 100%">
 						<h2 class="card-title"><i class="fas fas fa-book"></i> Edit Data ODP</h2>
 					</div>
 					<div class="card-body">
 						<form action="editproses.php" method="post">
 							<table class="table">
 								<input type="hidden" name="id_data" value="<?= $data['id_data']; ?>">
 								<tr>
 									<td>Nama ODP</td>
 									<td><input style="width: 100%" type="text" name="nama" value="<?= $data['nama']?>" required></td>
 								</tr>
 								<tr>
 									<td>Umur ODP</td>
 									<td><input style="width: 100%" type="number" name="umur" value="<?= $data['umur']?>" required></td>
 								</tr>
 								<tr>
 									<td>Suhu tubuh</td>
 									<td><input style="width: 100%" type="text" name="suhu" value="<?= $data['suhu']?>" required></td>
 								</tr>
 								<tr>
 									<td>Alamat ODP</td>
 									<td><input style="width: 100%" type="text" name="alamat" value="<?= $data['alamat']?>" required></td>
 								</tr>
 								<tr>
 									<td>Gejala</td>
 									<td style=""><textarea style="width: 100%; height: 100%;" value="<?= $data['gejala']; ?>" type="textarea" name="gejala" required><?= $data['gejala']; ?></textarea></td>
 								
 								</tr>
 								<input style="width: 100%" type="hidden" name="foto" value="<?= $data['foto']?>">
 									<th></th>
 									<th><button style="width: 100%; height: 70%" type="submit" class="btn btn-primary" name="simpan">EDIT</button></th>
 								</tr>
 							</table>
 						</form>
 					</div>
 				</div>
 		</div>
 	</div>
 </div>
 <?php  
 include '../aset/footer.php';
 ?>
 