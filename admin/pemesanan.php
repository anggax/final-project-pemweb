<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
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
  
  <!--Kelas tabel penampung data pesan-->
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <!--Header tabel-->
      <th>No</th>
      <th>Tanggal Pesan</th>
      <th>Pemesan</th>
      <th>Menu</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Meja</th>
      <th>Actions</th>
    </tr>
  </thead>
  <!--Konfigurasi ke database dan seleksi pada data tabel-->
    <?php
        include 'db_connect.php';
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM tb_pemesanan");
        while ($cont= mysqli_fetch_array($data)) {
          $vidpsn =$cont['id_pesan'];
          $vtgl =$cont['tgl_pesan'];
          $vnama= $cont['nama'];
          $vjumlah = $cont['jumlah'];
          $vnomej = $cont['no_meja'];
          $row = mysqli_query($conn, "SELECT nama_produk, harga FROM tb_produk WHERE id_produk='".$cont['id_produk']."'");
          $cont = $row->fetch_array();
    ?>
  <tbody>
    <!--Row tabel-->
    <tr class="mb-1">
      <!--Kolom Nomor-->
      <td> <?php echo $no++; ?> </td>
      <!--Kolom Tanggal Pesan-->
      <td><?php echo $vtgl ?></td>
      <!--Kolom Nama Pemesan-->
      <td> <?php echo $vnama ?> </td>
      <!--Kolom Nama Produk-->
      <td> <?php echo $cont['nama_produk']; ?></td>
      <!--Kolom Jumlah Produk Dipesan-->
      <td> <?php echo $vjumlah ?></td>
      <!--Kolom Harga Produk-->
      <td> <?php echo $cont['harga']; ?> </td>
      <!--Kolom Nomor Meja Pemesan-->
      <td> <?php echo  $vnomej ?></td>

      <td>
        <!--Tombol Konfirmasi Pesanan-->       
        <button class="btn btn-outline-dark"><a class="text-decoration-none text-reset" href="konfirmasi_act.php?id_pesan=<?php echo $vidpsn ?>">Confirm</a></button>
        <!--Tombol Menolak Pesanan--> 
        <button class="btn btn-outline-dark"><a class="text-decoration-none text-reset" href="tolak_act.php?id_pesan=<?php echo $vidpsn ?>">Cancel</a></button>
        <button class="btn btn-outline-dark"><a class="text-decoration-none text-reset" href="reportPdf.php?id_pesan=<?php echo $vidpsn ?>">Cetak</a></button>

      </td>
    </tr>
 
    <?php
        }?> 
  </tbody>
</table>
</body>
</html>