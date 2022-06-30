<?php
//konfigurasi ke database
include 'db_connect.php';

//menangkap id produk dari variabel tampungan vid
$vidpsn = $_GET['id_pesan'];
//pembuatan variabel data untuk menampung data tabel pemesanan
$data = mysqli_query($conn,"SELECT * FROM tb_pemesanan WHERE id_pesan ='$vidpsn'");
WHILE ($cont = mysqli_fetch_array($data)){

//menangkap data yang dikirim dari form
$vidpro=$cont['id_produk'];
$vnomej=$cont['no_meja'];
$vnama=$cont['nama'];
$vtgl=$cont['tgl_pesan'];
$vjumlah=$cont['jumlah'];
}

//memasukkan data dari tabel pemesanan ke tabel penjualan
$sql = "INSERT INTO tb_penjualan2 SET 
id_produk='$vidpro',
no_meja='$vnomej',
nama='$vnama',
tgl_pesan='$vtgl',
jumlah='$vjumlah'";

//query hapus data dari tabel pemesanan menggunakan id
mysqli_query($conn, "DELETE FROM tb_pemesanan WHERE id_pesan = '$vidpsn'");

//proses pengecekkan
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:pemesanan.php");

?>