<?php
//konfigurasi ke database
$host		="localhost";
$username	="root";
$password	="";
$database	="db_kafe";

//integrasi koneksi
include 'db_connect.php';

//membuat tabel pemesanan pelanggan
$sql= "CREATE TABLE tb_pemesanan(
id_pesan INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
no_meja INT(11) NOT NULL,
nama VARCHAR(50) NOT NULL,
tgl_pesan DATE NOT NULL,
jumlah INT(11) NOT NULL,
id_produk INT(40) NOT NULL
)";

//pengecekkan
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>