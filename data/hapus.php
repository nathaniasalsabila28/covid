<?php  
include '../koneksi.php';

$id_data = $_GET['id_data'];

$query = mysqli_query($kon, "DELETE FROM data WHERE id_data = '$id_data'");

if($query > 0){
	echo "
    		<script>
    			alert('Data Berhasil Dihapus');
    			document.location.href='data.php';
    		</script>
    	";
}
?>


