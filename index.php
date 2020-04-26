<?php  

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
			<hr class="bg-light">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="card bg-danger" style="width: 18rem;">
  			<div class="card-body text-white">
    		<h5 class="card-title">Data ODP</h5>
    		<p class="card-text" style="font-size: 60px"></p>
    		<a href="http://localhost/covid/data/data.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
  			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-warning" style="width: 18rem;">
  			<div class="card-body text-white">
    		<h5 class="card-title">Sekilas Tentang COVID-19</h5>
    		<p class="card-text" style="font-size: 60px"></p>
    		<a href="http://localhost/covid/covid.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
  			</div>
			</div>
		</div>
	</div>
</div>

<?php  
include 'aset/footer.php';
?>