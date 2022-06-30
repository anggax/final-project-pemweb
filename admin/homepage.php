<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <!--Navbar Logo-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ed8937;">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage.php">
    	<img src="img/logo-navbar.png"
    	height="48">
    </a>

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

<!--Kelas penampung tampilan beranda-->
<div class="container mt-5">  	
    	<div class="row">
        <!--Pengaturan gambar biar kiyowo-->
    		<div class="col">
    			<img src="img/homepage-kopi.png" width="86%" style="position: relative; right: 10%;">
    		</div>
        <!--Pengaturan teks pada beranda-->
    		<div class="col">
    			<h1 class="display-4 fw-bold" style="font-family: trueno;">Satu Lokasi</h1>
    			<p class="fs-6 lh-lg">SATLOK, begitu para pemuda menyebutnya.
                Merupakan kafe baru yang berlokasi di bilangan Tuban. Dengan motto kami "Cafe & Space" yang mana SATLOK hadir tidak hanya sebagai tempat untuk sekadar menuntaskan dahaga dan ketenangan semata. Tetapi juga tempat untuk berbagi cerita yang nyaman jauh dari hiruk-pikuk kota penuh distrubsi.</p>
    			<br>

          <!--Tombol narahubung-->
    			<div class="btn btn-outline-dark rounded-pill">
            	<a class="text-decoration-none text-reset" href="https://instagram.com/satlok.id">Contact Us</a>           
        	</div>
          <!--Link lokasi kafe-->
        	<div class="mt-5">
        			<a class="text-decoration-none text-reset fw-bold" href="https://goo.gl/maps/WyDR797VdNMvEeQM6">Find Us Here</a>
        	</div>
    		</div>
		</div>
  </div>
</body>
</html>