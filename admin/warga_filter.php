<?php
include 'header.php';
?>


<div class="container">
  <div class="card">
    <div class="card-body">
        <h3>Warga</h3>
        <p class="tetx-muted">Semua Data Warga</p>
        <hr>

        <div class="row">
        	<div class="col-md-6 mx-auto">
        		<div class="card bg-info ">
        			<div class="card-body">
        				<form action="warga_filter.php" method="GET">
        	<div class="form-group">
				<label>Filter Desa</label>
				<?php $id_desa=$_GET['desa']; ?>
				<select name="desa" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<?php
					$dusun = mysqli_query($koneksi,"SELECT * FROM desa");
					while ($dus=mysqli_fetch_array($dusun)) { 
						?>
					<option <?php if ($dus['desa_id']==$id_desa) {
						echo "Selected='selected'";
					} ?> value="<?php echo $dus['desa_id'];?>"><?php echo $dus['desa_nama'];?></option>
					<?php	
					}
					?>
				</select>
				<input type="submit" name="submit" value="Tampilkan Data" class="btn-btn-secondary btn-sm">
			</div>
        </form>
        			</div>
        		</div>
        	</div>
        </div>

		<a href="warga_tambah.php" class="btn btn-primary btn-sm mb-3">+ Tambah Warga</a>

			<a href="warga_cetak_filter.php?id=<?php echo $id_desa; ?>" class="btn btn-danger btn-sm mb-3 float-right text-white" target="_blank">Cetak</a>
		
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
				<th>Opsi</th>
			</tr>
			</thead>

			<tbody>
			
			<?php
			$no=1;
			$desa=$_GET['desa'];
			$warga=mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=desa_id AND warga_dusun=dusun_id and warga_desa=$desa ORDER BY warga_id ASC");
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
				<td>
					<a href="warga_edit.php?id=<?php echo $w['warga_id']; ?>" class="btn btn-warning text-white">Edit</a>
					<a href="warga_hapus.php?id=<?php echo $w['warga_id']; ?>" class="btn btn-danger text-white">Hapus</a>
				</td>
				</tr>
			</tbody>
			<?php
			}
			?>

		</table>


    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

