<?php
//integrasi koneksi
include 'db_connect.php';

//cek koneksi
if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

//input data penjualan ke tabel penjualan
$sql = "INSERT INTO tb_penjualan2 (id_produk, no_meja, nama, tgl_pesan, jumlah) VALUES
	(1, 3, 'Ucup', '2022-06-28', 10),
	(2, 2, 'Samsul', '2022-06-28', 35),
	(3, 1, 'Angga', '2022-06-28', 23),
	(4, 12, 'Suga', '2022-06-28', 21),
	(5, 4, 'Rama', '2022-06-28', 12),
	(6, 5, 'Ferdy', '2022-06-28', 9),
	(7, 8, 'Morales', '2022-06-28', 12),
	(8, 3, 'Arifin', '2022-06-28', 7),
	(9, 9, 'Kartonyono','2022-06-28', 8),
	(10, 5, 'Medot', '2022-06-28', 21),
	(11, 15, 'Janji', '2022-06-28', 12),
	(12, 11, 'Koruptor', '2022-06-28', 39)

";

//pengecekkan
if (mysqli_query($conn, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}
mysqli_close($conn); 
?>