<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])){
	$id_data	= $_POST['id_data'];
	$nama 		= $_POST['nama'];
	$umur   	= $_POST['umur'];
	$suhu     	= $_POST['suhu'];
	$alamat 	= $_POST['alamat'];
	$gejala 	= $_POST['gejala'];

	$sql = "UPDATE data SET nama='$nama', umur='$umur', suhu='$suhu', alamat='$alamat', gejala='$gejala' WHERE id_data='$id_data' ";

	$res = mysqli_query($kon, $sql);
	$count = mysqli_affected_rows($kon);

	if($res>0){
		echo "
		<script>
			alert('Data Berhasil Diubah!');
			document.location.href = 'data.php';
		</script>
		";
	}
 }
 include '../aset/footer.php';
 ?>