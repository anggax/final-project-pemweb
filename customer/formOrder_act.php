<?php
//memasukkan koneksi database
include 'db_connect.php';

//menangkap data yang dikirim dari form
$vtgl=$_POST['tgl_pesan'];
$vnomeja=$_POST['no_meja'];
$vnama=$_POST['nama'];
$vjumlah=$_POST['jumlah'];
$vidpro=$_POST['id_produk'];

//memasukkan data ke tabel setelah dilakukan tangkap data
$sql = "INSERT INTO tb_pemesanan SET id_pesan='$vidpesan',
no_meja='$vnomeja',
nama='$vnama',
tgl_pesan='$vtgl',
jumlah='$vjumlah',
id_produk='$vidpro'
";

//proses penyimpanan ke database
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:berandauser.php");

?>