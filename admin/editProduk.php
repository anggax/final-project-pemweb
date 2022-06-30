<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Pengaturan Style Body-->
    <style>
        body {
            padding-top: 3%;
            padding-left: 25%;
            background-image: linear-gradient(to right, #9e4f0e,#ed8937, #eba063);
        }
    </style>
</head>

<body>
    <!--Pengaturan Tampilan dan Inputisasi Form-->
    <div class="card col-md-8 py-4" style="border-radius: 1.5rem;">
        <div class="aler alert-primary text-center mt-3">
            <h3 style="font-weight: bold;">Edit Produk</h3>
        </div>
            <div class="card-body">
                <!--Memasukkan koneksi dan select data pada tabel-->
                    <?php
                        include 'db_connect.php';
                        $vidpro = $_GET['id_produk'];
                        $data = mysqli_query($conn,"SELECT * FROM tb_produk WHERE id_produk ='$vidpro'");
                        WHILE ($cont = mysqli_fetch_array($data)){
                    ?>
                <form method="post" action="editProduk_act.php">
                    <!--Class Id Produk-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <input required type="hidden" name="id_produk" id="id_produk" value="<?php echo $cont['id_produk'];?>" class="form-control">
                            </div>   
                        </div>  
                    </div>

                    <!--Class Inputan Nama Produk-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Nama</label>
                                <input required type="text" name="nama_produk" id="nama_produk" value="<?php echo $cont['nama_produk'];?>" class="form-control">
                            </div>   
                        </div>  
                    </div>
                        
                    <!--Class Inputan Harga Jual-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Harga</label>
                                <input required type="text" name="harga" id="harga" value="<?php echo $cont['harga'];?>" class="form-control">
                            </div>   
                        </div>  
                    </div> <br>

                    <!--Class Tombol untuk melakukan reset pada inputan-->
                    <div class="row justify-content-center align-items-center mt-0">
                        <div class="form-group col-md-8">
                            <button type="reset" name="reset" class="btn btn-primary btn-rounded" style="background-color: black; position: relative; width: 100%; border-style: none;">Reset input</button>
                        </div>                  
                    </div>

                    <!--Class Tombol untuk menyimpan perubahan yang dilakukan-->
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="form-group col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary btn-rounded" style="background-color: #a34c05; position: relative; width: 100%; border-style: none;">Save here</button>
                        </div>                  
                    </div>

                    </div>
                    </form>
                    <?php } ?>
                </div>
    </div>

</body>

</html>