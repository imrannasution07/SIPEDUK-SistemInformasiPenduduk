<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jk = $_POST['jk'];
$desa = $_POST['desa'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];

mysqli_query($koneksi,"INSERT INTO warga (warga_nama, warga_ktp, warga_jk, warga_desa, warga_dusun, warga_rt, warga_rw, warga_status, warga_pendidikan, warga_agama) VALUES ('$nama', '$nik', '$jk', '$desa', '$dusun', '$rt', '$rw', '$status', '$pendidikan', '$agama')");

header("location:warga.php");

?>