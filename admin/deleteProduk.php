<?php
//intgrasi koneksi database
include 'db_connect.php';

//menangkap id produk dari variabel tampungan vid
$vid = $_GET['id_produk'];

//proses hapus data menurut id pada tabel
mysqli_query($conn, "DELETE FROM tb_produk WHERE id_produk = '$vid'");

header("location: produk.php");
?>