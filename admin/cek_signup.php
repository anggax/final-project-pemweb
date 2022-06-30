<?php
// konfigurasi dengan koneksi database
include 'db_connect.php';

//menangkap data yang dikirim dari form
$vfirstnm=$_POST['first_name'];
$vlastnm=$_POST['last_name'];
$vemail=$_POST['email'];
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

//memasukkan data ke tabel setelah dilakukan tangkap data
$sql = "INSERT INTO tb_admin SET first_name='$vfirstnm',
last_name='$vlastnm',
email='$vemail', 
username='$vusername',
password='$vpassword'";

//pengecekkan
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:index.php");

?>