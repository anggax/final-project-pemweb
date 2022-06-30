<?php
//konfigurasi ke database
include 'db_connect.php';

//menangkap data yang dikirim dari form
$vnamaproduk=$_POST['nama_produk'];
$vgambar=$_POST['gambar'];
$vharga=$_POST['harga'];

//memasukkan data ke tabel setelah dilakukan tangkap data
$sql = "INSERT INTO tb_produk SET 
nama_produk='$vnamaproduk',
gambar='$vgambar',
harga='$vharga'";

//proses pengecekkan
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:produk.php");

?>