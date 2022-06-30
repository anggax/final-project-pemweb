<?php
//intgrasi koneksi database
include 'db_connect.php';

//menangkap data yang dikirim dari form
$vidpro=$_POST['id_produk'];
$vnamaproduk=$_POST['nama_produk'];
$vharga=$_POST['harga'];

//memasukkan data yang di update ke tabel
$sql = "UPDATE tb_produk SET
nama_produk='$vnamaproduk',
harga='$vharga' WHERE id_produk='$vidpro'";

//proses pengecekkan
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:produk.php");

?>