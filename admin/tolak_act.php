<?php
//konfigurasi ke database
include 'db_connect.php';

//menangkap id produk dari variabel tampungan vid
$vidpsn = $_GET['id_pesan'];

//proses hapus data menurut id pada tabel
mysqli_query($conn, "DELETE FROM tb_pemesanan WHERE id_pesan = '$vidpsn'");

header("location: pemesanan.php");
?>