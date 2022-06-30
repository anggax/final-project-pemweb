<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print Pesanan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tgl Pesan</th>
                <th>Nama Pemesan</t>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Nomer Meja</th>
            </tr>
        </thead>
        <tbody>
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
    </tr>

    <div class="p-5 text-center bg-white tex">
      <h4 class="mb-3 fw-bold">Terima Kasih Telah Memesan di Satu Lokasi</h4>
      <h6 class="mb-3">Serahkan struk ini ke kasir</h6>
    </div>
 
    <?php
        }?> 
        </tbody>
    </table>
    <script>
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
    
