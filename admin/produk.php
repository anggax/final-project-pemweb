<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Produk</title>
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
  <!--Jumbotron yang memuat teks keterangan dan tombol tambah produk-->
  <div class="p-5 text-center bg-white tex">
      <h4 class="mb-3">Anda dapat melakukan penambahan data menu di sini</h4>
      <a class="btn btn-outline-dark text-decoration-none " href="addProduk.php" role="button">Add Product</a>
  </div>

  <!--Kelas tabel penampung data produk-->
	<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <!--Header tabel-->
      <th>No</th>
      <th>Product</th>
      <th>Name</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <!--Konfigurasi ke database dan seleksi pada data tabel-->
  <?php
        include 'db_connect.php';
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM tb_produk");
        while ($cont= mysqli_fetch_array($data)) {      
    ?>
  <tbody>
    <!--Row tabel-->
    <tr class="mb-1">
      <!--Kolom Nomor-->
      <td> <?php echo $no++; ?> </td>
      <!--Kolom Gambar Produk-->
      <td>
        <img
              src="<?php echo $cont['gambar']; ?>"
              style="width: 120px;"
              class="rounded-rectangle"
              />
      </td>
      <!--Kolom Nama Produk-->
      <td> <?php echo $cont['nama_produk']; ?> </td>
      <!--Kolom Harga Produk-->
      <td> Rp<?php echo $cont['harga']; ?>,00 </td>

      <!--Pengaturan Tombol Edit dan Hapus produk-->
      <td>
      	<button class="btn btn-outline-dark"><a class="text-decoration-none text-reset" href="editProduk.php?id_produk=<?php echo $cont['id_produk']; ?>">Edit</a></button>

      	<button class="btn btn-outline-dark"><a class="text-decoration-none text-reset" href="deleteProduk.php?id_produk=<?php echo $cont['id_produk']; ?>">Delete</a></button>
      </td>
      <?php
        }?>
    </tr>  
  </tbody>
</table>
</body>
</html>