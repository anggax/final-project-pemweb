<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <!--Navbar Logo--> 
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ed8937;">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage.php">
    	<img src="img/logo-navbar.png"
    	height="48">
    </a>
  </div>

  <!--Navbar Menu Admin-->
  <div class="navbar d-none d-sm-block ms-1" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pemesanan.php">Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item me-3 me-lg-2">
        <a class="nav-link d-sm-flex">
          <img
            src="img/i-profile.png"
            class="rounded-circle"
            height="30"
          />
          <!--Session untuk menampilkan username sesuai admin yang login-->
          <?php
    			session_start();
    				if($_SESSION['status']="login"){
        				echo '
          					<strong class="d-none d-sm-block ms-1">Hello,  </strong>';
          ?>
          	<?php
               	echo $_SESSION ['username'];
          	;}?>         	
        </a>
      </li>
      </ul>
    </div>
  </div>
</nav>

  <!--Jumbotron-->
  <div class="p-4 text-center bg-light">
    <h1 class="fw-bold mb-3">Laporan Penjualan</h1>
    <h6 class="mb-3">Berikut ini adalah laporan penjualan dari Kafe Satu Lokasi dalam beberapa bentuk.</h6>
  </div>

  <!--Tombols Mengarahkan ke File Report-->
  <div class="d-grid gap-2 col-6 mx-auto mt-5">
    <a class="btn btn-outline-dark rounded-pill" href="reportexcel/reportExcel.php">Excel Report</a>
    <a class="btn btn-outline-dark rounded-pill" href="reportBar.php">Bar Chart</a>
    <a class="btn btn-outline-dark rounded-pill" href="reportLine.php">Line Chart</a>
    <a class="btn btn-outline-dark rounded-pill" href="reportPie.php">Pie Chart</a>
    <a class="btn btn-outline-dark rounded-pill" href="reportDo.php">Doughnout Chart</a>
  </div>

</body>
</html>

