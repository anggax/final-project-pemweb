<?php
//konfigurasi ke database
$host		="localhost";
$username	="root";
$password	="";
$database	="db_kafe";

//integrasi koneksi
include 'db_connect.php';

//membuat tabel admin
$sql= "CREATE TABLE tb_admin(
id_admin INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(100) NOT NULL,
last_name VARCHAR(100) NOT NULL,
email VARCHAR(50) NOT NULL,
username VARCHAR(50) NOT NULL,
password VARCHAR(40) NOT NULL
)";

//pengecekkan
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>