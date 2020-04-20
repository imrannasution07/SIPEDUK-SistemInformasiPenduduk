<?php
include 'header.php';
?>

<div class="container">
	<div class="card">
		<div class="card-body">
			<h3>Dashboard</h3>
			<p class="tetx-muted">Halaman Dashboard Admin</p>
			<hr>

			<div class="row">
				<div class="col-md-4">
					<div class="card bg-danger text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-users fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Warga</h4>
									<?php $warga=mysqli_query($koneksi,"SELECT count(*) as jumlah FROM warga");
									$jlh_warga=mysqli_fetch_array($warga);
								 ?>
									<p><?php echo $jlh_warga['jumlah']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-warning text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-briefcase fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Desa</h4>
									<?php $desa=mysqli_query($koneksi,"SELECT count(*) as jumlah FROM desa");
									$jlh_desa=mysqli_fetch_array($desa);
								 ?>
									<p><?php echo $jlh_desa['jumlah']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-success text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-briefcase fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Dusun</h4>
									<?php $dusun=mysqli_query($koneksi,"SELECT count(*) as jumlah FROM dusun");
									$jlh_dusun=mysqli_fetch_array($dusun);
								 ?>
									<p><?php echo $jlh_dusun['jumlah']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<br><br>
				<h3 class="text-center">Grafik Warga</h3>
				<p class="text-muted text-center"> Jumlah Data Warga Berdasarkan Desa</p>
				<div style="width: 100%;height: 700px">
					<canvas id="myChart"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>