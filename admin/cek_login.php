<?php 
// konfigurasi dengan koneksi database
include 'db_connect.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");

// variabel cek untuk menampung data username/password
$cek = mysqli_num_rows($data);

//pengecekkan
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:homepage.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>