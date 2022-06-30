<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MENU USER</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <!--Navbar Logo-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ed8937;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo-navbar.png"
      height="48">
    </a>

    <!--Navbar Menu User-->
    <div class="navbar navbar-collapse d-none d-sm-block ms-1" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berandauser.php">Pesan Yuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Container produk yang ditampilkan-->
 <div class="container">
    <?php
        include 'db_connect.php'; //memasukkan koneksi ke database          
    ?>
    <!--Jumbotron untuk menu minuman-->
    <div class="p-4 text-center bg-light">
      <h1 class="fw-bold mb-3">NGUNJUK RUMIYIN</h1>
    </div>
    <div class="row">
    <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/red-velvet.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=1");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=1" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

    <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/cappucino.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=2");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=2" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/vanilla-latte.jpg" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=3");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=3" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>
    </div>
<br>
    <div class="row">
    <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/milo-dino.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=4");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=4" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/matcha.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=5");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=5" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/vietnam-drip.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=6");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=6" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>
    </div>

<br>
    <section> 
    <div class="container">
    <!--Jumbotron untuk menu minuman-->
    <div class="p-4 text-center bg-light">
      <h1 class="fw-bold mb-3">DAHAR RUMIYIN</h1>
    </div>

    <div class="row">
    <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/bakso.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=7");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=7" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/friend chicken-souce chile.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=8");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=8" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/kentang goreng.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=9");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=9" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>
    </div>
<br>
    <div class="row">
    <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/mie gila.jpg" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=10");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=10" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/pecel.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=11");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=11" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-md">
          <!--Card penampung gambar, nama, dan harga produk atau menu-->
          <div class="card">
          <img src="img/nasi-goreng.jfif" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <!--Pemanggilan data di database-->
            <?php
              $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=12");
              $cont= mysqli_fetch_array($data) 
            ?>
            <h5 class="card-title"><?php echo $cont['nama_produk'];?></h5>
            <p class="card-text">Rp<?php echo $cont['harga'];?>,00</p>
            <a href="formOrder.php?id=12" class="btn btn-primary" style="width: 24%;">Beli</a>
          </div>
        </div>
      </div>
    </div>
    </section>
 </div>
</body>
</html>