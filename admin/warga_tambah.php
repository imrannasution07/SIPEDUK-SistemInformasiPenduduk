<?php
include 'header.php';
?>


<div class="container">
  <div class="card mb-5">
    <div class="card-body">
        <h3>Tambah Warga</h3>
        <p class="tetx-muted">Tambah Data Warga</p>
        <hr>

		<a href="warga.php" class="btn btn-primary btn-sm mb-5">Kembali</a>

		<form action="warga_tambah_act.php" method="POST">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" required="required">
			</div>
			<div class="form-group">
				<label>NIK</label>
				<input type="text" name="nik" class="form-control" required="required" maxlength="12">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jk" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label>Desa</label>
				<select name="desa" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<?php
					$dusun = mysqli_query($koneksi,"SELECT * FROM desa");
					while ($dus=mysqli_fetch_array($dusun)) { 
						?>
					<option value="<?php echo $dus['desa_id'];?>"><?php echo $dus['desa_nama'];?></option>
					<?php	
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Dusun</label>
				<select name="dusun" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<?php
					$desa = mysqli_query($koneksi,"SELECT * FROM dusun");
					while ($d=mysqli_fetch_array($desa)) { 
						?>
					<option value="<?php echo $d['dusun_id'];?>"><?php echo $d['dusun_nama'];?></option>
					<?php	
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>RT</label>
				<input type="text" name="rt" class="form-control" required="required">
			</div>
			<div class="form-group">
				<label>RW</label>
				<input type="text" name="rw" class="form-control" required="required">
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option value="Menikah">Menikah</option>
					<option value="Belum Menikah">Belum Menikah</option>
				</select>
			</div>
			<div class="form-group">
				<label>Pendidikan Terakhir</label>
				<select name="pendidikan" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option value="Tidak Sekolah">Tidak Sekolah</option>
					<option value="SD/MI">SD/MI</option>
					<option value="SMP/MTs">SMP/MTs</option>
					<option value="SMA/SMK/MA">SMA/SMK/MA</option>
					<option value="D1">D1</option>
					<option value="D2">D2</option>
					<option value="D3">D3</option>
					<option value="D4/S1">D4/S1</option>
					<option value="S2">S2</option>
					<option value="S3">S3</option>
				</select>
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select name="agama" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option value="Islam">Islam</option>
					<option value="Protestan">Protestan</option>
					<option value="Katholik">Katholik</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Konghucu">Konghucu</option>
					<option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
				</select>
			</div>
			
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">

		</form>

    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

