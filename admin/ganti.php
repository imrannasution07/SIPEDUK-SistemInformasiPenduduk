<?php
include 'header.php';
?>


<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card">
				<div class="card-body">
					<?php
					if (isset($_GET['pesan'])) {
						if ($_GET['pesan']=="berhasil") {
							echo "<alert class='alert alert-success'>Password Telah Diganti</alert>";
						}
					}
					?>
					<h3>Ganti Password</h3>
					<p class="tetx-muted">Ganti Password Admin</p>
					<hr>
					<form action="ganti_act.php" method="POST">

						<div class="form-group">
							<label>Masukkan Password Baru</label>
							<input type="password" name="password" required="required" class="form-control">
						</div>

						<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>