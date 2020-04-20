<?php

include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);
$submit	= $_POST['submit'];	

$cek= mysqli_query($koneksi,"SELECT * from admin WHERE username ='$username' and password='$password'");	

$jumlah = mysqli_num_rows($cek);

if ($jumlah > 0) {
	//jika login berhasil
	$_SESSION['status']="berhasil"; //buat session
	header("location:admin/index.php");

} else{
	header("location:index.php?pesan=gagal");
}

// echo $username;
// echo $password;	

?>
