<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){

	$nama 				= $_POST['nama'];
	$umur   	 		= $_POST['umur'];
	$suhu       		= $_POST['suhu'];
	$alamat     		= $_POST['alamat'];
	$foto  				= $_POST['foto'];
	$gejala				= $_POST['gejala'];
	

	$query = mysqli_query( $kon,"INSERT INTO data (nama,umur, suhu,alamat, foto, gejala)
			VALUES ('$nama','$umur','$suhu','$alamat','$foto', '$gejala')");

	if($query>0){
echo "<script>alert('data berhasil ditambahkan.');window.location='data.php';</script>";

	
	}
}
