<?php
//integrasi koneksi
include 'db_connect.php';

//cek koneksi
if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

//input menu ke tabel data produk 
$sql = "INSERT INTO tb_produk (id_produk,nama_produk,gambar,harga) VALUES
(1,'Red Velvet','img/red-velvet.jfif',15000),
(2,'Cappucinno','img/cappucino.jfif',15000),
(3,'Vannila Latte','img/vanilla-latte.jpg',15000),
(4,'Milo Dino','img/milo-dino.jfif',10000),
(5,'Matcha','img/matcha.jfif',13000),
(6,'Vietnam Drip','img/vietnam-drip.jfif',10000),
(7,'Bakso','img/bakso.jfif',10000),
(8,'Ayam Pok-Pok','img/friend chicken-souce chile.jfif',20000),
(9,'Kentang Goreng','img/kentang goreng.jfif',10000),
(10,'Mie Gila','img/mie gila.jpg',13000),
(11,'Nasi Pecel','img/pecel.jfif',8000),
(12,'Nasi Goreng','img/nasi-goreng.jfif',15000)

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