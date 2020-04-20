<!DOCTYPE html>
<html>

<head>
	<title>Sistem Informasi Pendataan Penduduk - Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/jquery-3.4.1.js"></script>
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<div class="container-fluid">
		<h1 class="text-center mt-5">Sistem Informasi Pendataan Penduduk</h1>
		<h2 class="text-center">Halaman Login</h2>

		<div class="row">

			<div class="col-md-4 mx-auto">

				<div class="card mt-3">

					<div class="card-body">
						<br>
						<center>
							<span class="text-house text-primary">
								<i class="fa fa-users fa-4x"></i>
							</span>
						</center>
						<br>

						<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal") {
				echo "<div class='alert alert-danger'>maaf, username dan password salah</div>";
			}
			else if ($_GET['pesan']=="logout") {
				echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
			}
			else if($_GET['pesan']=="belumlogin"){
				echo "<div class='alert alert-warning'>Anda harus login terlebih dahulu</div>";
			}
		}
	?>

						<form action="login_act.php" method="POST">

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" required="required" class="form-control"
									placeholder="Masukkan Username">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" required="required" class="form-control"
									placeholder="Masukkan Password">
							</div>

							<input type="submit" class="btn btn-primary btn-block mb-3" name="submit" value="Login">
						</form>

					</div>

				</div>


			</div>

		</div>

	</div>

</body>

</html>