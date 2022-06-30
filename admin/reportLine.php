<?php
//integrasi koneksi
include 'db_connect.php';
//membuat variabel penampung data tabel
$produk = mysqli_query($conn, "SELECT * FROM tb_produk");
while ($row = mysqli_fetch_array($produk)) {
	$nama_produk[] = $row['nama_produk'];
	$harga[] = $row['harga'];
	$sql = mysqli_query($conn, "SELECT SUM(jumlah) AS jumlah FROM tb_penjualan2 WHERE id_produk='".$row['id_produk']."'");
	$row = $sql->fetch_array();
	$jumlah_produk[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Grafik Menggunakan Chart JS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<!-- Navbar Logo  -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ed8937;">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="laporan.php">
    		<img src="img/logo-navbar.png"
    		height="48">
    		</a>
		</div>
	</nav><br>

	<!-- Kelas Card Container Penampung Chart  -->
	<div class="container">
	<div class="card bg-light mb-3 ">
		<div class="card-header" style="background-color: #ed8937; color: white;">Grafik Line Penjualan Produk</div>
	<!--pengaturan tampilan bar dan pembuatan id chart-->
	<div style="width: 80%; position:relative; left:8%;">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		//deklarasi variabel tampilan chart
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart (ctx, {
			type: 'line',
			data: {
				//set data yang ingin ditampilkan oleh chart
				labels: <?php echo json_encode($nama_produk);?>, datasets: [{
					label: 'Grafik Penjualan',
					data: <?php echo json_encode($jumlah_produk); ?>,
					backgroundColor: 'rgba(219, 71, 2, 0.3)',
					borderColor: 'rgba(143, 46, 1, 1)',
					borderWidth: 1			
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</div>
</div>
</body>
</html>