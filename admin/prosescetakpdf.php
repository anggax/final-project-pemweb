<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body style="padding: 0 20;">
    <div>
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
      <section class="content">
        <div class="row">
            <div>
                <div class="span12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><h2><strong>No </strong>#<?php echo $data['id_produk']; ?> </h2></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Tgl Pesan</th>
                <th>Nama Pelanggan</t>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Nomer Meja</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
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
                    </tr>
                </tbody>
            </table>
          </div>
      </section>
    </div>
  </body>
  </html>