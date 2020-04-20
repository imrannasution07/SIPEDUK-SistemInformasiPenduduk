<?php

include '../koneksi.php';

$nama = $_POST['nama'];

mysqli_query($koneksi,"INSERT INTO desa VALUES (NULL, '$nama')");

// echo $nama;

header("location:desa.php");

?>