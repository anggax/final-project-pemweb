<?php
//konfigurasi ke database
$host		="localhost";
$username	="root";
$password	="";
$database	="db_kafe";

//integrasi koneksi
include 'db_connect.php';

//membuat tabel produk atau menu
$sql= "CREATE TABLE tb_produk(
id_produk INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama_produk VARCHAR(200) NOT NULL,
gambar VARCHAR(200) NOT NULL,
harga INT(100) NOT NULL
)";

//pengecekkan
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>