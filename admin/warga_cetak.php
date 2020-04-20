<?php
include 'cek_login.php';
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Warga</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script type="text/javascript" src="../assets/jquery-3.4.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>  
</head>
<body>

		<h3 class="text-center mb-4">Laporan Data Warga</h3>
		<table class="table table-bordered table-hover table-striped tabelku">

			<thead>
				<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIK</th>
				<th>Jenis Kelamin</th>
				<th>Desa</th>
				<th>Dusun</th>
				<th>RT</th>
				<th>RW</th>
				<th>Status</th>
				<th>Pendidikan</th>
				<th>Agama</th>
			</tr>
			</thead>

			<tbody>
			
			<?php
			$no=1;
			$warga=mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=desa_id AND warga_dusun=dusun_id ORDER BY warga_id ASC");
			while($w=mysqli_fetch_array($warga)){ ?>
				<tr>
				<td><?php echo $no++; ?> </td>
				<td><?php echo $w['warga_nama']; ?></td>
				<td><?php echo $w['warga_ktp']; ?></td>
				<td><?php echo $w['warga_jk']; ?></td>
				<td><?php echo $w['desa_nama']; ?></td>
				<td><?php echo $w['dusun_nama']; ?></td>
				<td><?php echo $w['warga_rt']; ?></td>
				<td><?php echo $w['warga_rw']; ?></td>
				<td><?php echo $w['warga_status']; ?></td>
				<td><?php echo $w['warga_pendidikan']; ?></td>
				<td><?php echo $w['warga_agama']; ?> </td>
				</tr>
			</tbody>
			<?php
			}
			?>

		</table>

		<script type="text/javascript">
			window.print();
		</script>


    </div>
  </div>
</div>

</body>
</html>
 