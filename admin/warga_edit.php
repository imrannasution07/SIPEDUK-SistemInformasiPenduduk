<?php
include 'header.php';
?>


<div class="container">
  <div class="card mb-5">
    <div class="card-body">
        <h3>Edit Warga</h3>
        <p class="tetx-muted">Edit Data Warga</p>
        <hr>

		<a href="warga.php" class="btn btn-primary btn-sm mb-5">Kembali</a>

		<?php
		$id=$_GET['id'];
		$warga=mysqli_query($koneksi,"SELECT * FROM warga WHERE warga_id='$id'");
		while ($w=mysqli_fetch_array($warga)) {?>

		<form action="warga_update.php" method="POST">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" required="required" value="<?php echo $w['warga_nama']; ?>">
				<input type="hidden" name="id" class="form-control" value="<?php echo $w['warga_id']; ?>">
			</div>
			<div class="form-group">
				<label>NIK</label>
				<input type="text" name="nik" class="form-control" required="required" maxlength="12" value="<?php echo $w['warga_ktp']; ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jk" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option <?php if($w['warga_jk']=="Laki-laki"){echo "Selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
					<option <?php if($w['warga_jk']=="Perempuan"){echo "Selected='selected'";} ?> value="Perempuan">Perempuan</option>
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
					<option <?php if($w['warga_desa']==$dus['desa_id']){echo "selected='selected'";} ?> value="<?php echo $dus['desa_id'];?>"><?php echo $dus['desa_nama'];?></option>
					<?php	
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Dusun</label>
				<select name="dusun" class="form-control" required="required">
					<option value="Laki-laki"> -Pilih- </option>
					<?php
					$desa = mysqli_query($koneksi,"SELECT * FROM dusun");
					while ($d=mysqli_fetch_array($desa)) { 
						?>
					<option <?php if($w['warga_dusun']==$d['dusun_id']){echo "selected='selected'";} ?> value="<?php echo $d['dusun_id'];?>"><?php echo $d['dusun_nama'];?></option>
					<?php	
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>RT</label>
				<input type="text" name="rt" class="form-control" required="required" value="<?php echo $w['warga_rt']; ?>">
			</div>
			<div class="form-group">
				<label>RW</label>
				<input type="text" name="rw" class="form-control" required="required" value="<?php echo $w['warga_rw']; ?>">
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option <?php if($w['warga_status']=="Menikah"){echo "Selected='selected'";} ?> value="Menikah">Menikah</option>
					<option <?php if($w['warga_status']=="Belum Menikah"){echo "Selected='selected'";} ?> value="Belum Menikah">Belum Menikah</option>
				</select>
			</div>
			<div class="form-group">
				<label>Pendidikan Terakhir</label>
				<select name="pendidikan" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option <?php if($w['warga_pendidikan']=="Tidak Sekolah"){echo "Selected='selected'";} ?> value="Tidak Sekolah">Tidak Sekolah</option>
					<option <?php if($w['warga_pendidikan']=="SD/MI"){echo "Selected='selected'";} ?> value="SD/MI">SD/MI</option>
					<option <?php if($w['warga_pendidikan']=="SMP/MTs"){echo "Selected='selected'";} ?> value="SMP/MTs">SMP/MTs</option>
					<option <?php if($w['warga_pendidikan']=="SMA/SMK/MA"){echo "Selected='selected'";} ?> value="SMA/SMK/MA">SMA/SMK/MA</option>
					<option <?php if($w['warga_pendidikan']=="D1"){echo "Selected='selected'";} ?> value="D1">D1</option>
					<option <?php if($w['warga_pendidikan']=="D2"){echo "Selected='selected'";} ?> value="D2">D2</option>
					<option <?php if($w['warga_pendidikan']=="D3"){echo "Selected='selected'";} ?> value="D3">D3</option>
					<option <?php if($w['warga_pendidikan']=="D4/S1"){echo "Selected='selected'";} ?> value="D4/S1">D4/S1</option>
					<option <?php if($w['warga_pendidikan']=="S2"){echo "Selected='selected'";} ?> value="D4/S1">S2</option>
					<option <?php if($w['warga_pendidikan']=="S3"){echo "Selected='selected'";} ?> value="S3">S3</option>
				</select>
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select name="agama" class="form-control" required="required">
					<option value=""> -Pilih- </option>
					<option <?php if($w['warga_agama']=="Islam"){echo "Selected='selected'";} ?> value="Islam">Islam</option>
					<option <?php if($w['warga_agama']=="Katholik"){echo "Selected='selected'";} ?> value="Protestan">Protestan</option>
					<option <?php if($w['warga_agama']=="Protestan"){echo "Selected='selected'";} ?> value="Katholik">Katholik</option>
					<option <?php if($w['warga_agama']=="Hindu"){echo "Selected='selected'";} ?> value="Hindu">Hindu</option>
					<option <?php if($w['warga_agama']=="Budha"){echo "Selected='selected'";} ?> value="Budha">Budha</option>
					<option <?php if($w['warga_agama']=="Konghucu"){echo "Selected='selected'";} ?> value="Konghucu">Konghucu</option>
					<option <?php if($w['warga_agama']=="Aliran Kepercayaan"){echo "Selected='selected'";} ?> value="Aliran Kepercayaan">Aliran Kepercayaan</option>
				</select>
			</div>
			
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">

		</form>
		<?php	
		}
		?>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

