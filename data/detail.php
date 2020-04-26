<?php 
include '../koneksi.php'; 
include '../aset/header.php'; 
$id = $_GET['id_data']; 
$query = mysqli_query($kon, "SELECT * FROM data WHERE data.id_data = '$id' ");
$data = mysqli_fetch_assoc($query); 
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Detail Data ODP</title>
</head>
<body>


 <div class="container"> 
    <div class="row mt-4"> 
        <div class="col-md"> 
        </div> 
    </div> 
</div> 

<div class="card"> 
    <div class="card-header"> 

    </div> 

    <div class="card-body"> 
        <table class="table"> 
             <tr>
                <td width="150px">FOTO</td>
                <td><img src= "<?= $data['foto']?>" height= '150' width='150'></td>
             </tr>     
            <tr> 
                <td>Nama ODP</td> 
                <td><?= $data['nama']?></td> 
            </tr> 
            <tr> 
                <td>Umur ODP </td> 
                <td><?= $data['umur']?></td> 
            </tr> 
            <tr> 
                <td>Alamat ODP</td> 
                <td><?= $data['alamat']?></td> 
            </tr> 
            <tr> 
                <td>Suhu ODP</td> 
                <td><?= $data['suhu']?></td> 
                </tr>
            <tr>
                <td>Gejala</td>
                <td><?= $data['gejala']?></td>
            </tr>
                     <tr>  
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id_data=<?= $data["id_data"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id_data=<?= $data["id_data"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                           <a href="data.php?id_data=<?= $data["id_data"];?>  " class="badge">kembali</a>
                        </td>
                     </tr>
            </tr> </table> </div> </div></body></html> <?php include '../aset/footer.php';?>