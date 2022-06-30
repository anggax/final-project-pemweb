<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
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
            <h3 style="font-weight: bold;">Pemesanan</h3>
        </div>
            <div class="card-body">
                <?php
                    $id = $_GET['id']; //menangkap id produk dari database
                ?>
                <form method="post" action="formOrder_act.php">
                    <!--Menginputkan Id secara otomatis-->
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Id Produk</label>
                                <input required type="text" name="id_produk" id="id_produk" value="<?php echo $id?>" class="form-control">     
                            </div>
                        </div>
                        <!--Input tanggal pemesanan-->
                        <div class="col-md-4 mb-3">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example2">Tanggal</label>
                                <input required type="date" name="tgl_pesan" id="tgl_pesan" class="form-control">      
                            </div>
                        </div>
                    </div>

                    <!--Input nama pemesan-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Atas Nama</label>
                                <input required type="text" name="nama" id="nama" class="form-control">
                            </div>   
                        </div>  
                    </div>
                        
                    <!--Input nomer meja-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Nomor Meja</label>
                                <select required type="text" name="no_meja" id="no_meja" value="<?php echo $no_meja; ?>" class="form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                </select>
                            </div>   
                        </div>  
                    </div>

					  <!--Input jumlah produk yang dipesan-->
					  <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Jumlah</label>
                                <input required type="text" name="jumlah" id="jumlah" class="form-control">
                            </div>   
                        </div>  
                    </div>

                    <!--Tombol untuk mereset inputan pesan-->
                    <div class="row justify-content-center align-items-center mt-0">
                        <div class="form-group col-md-8">
                            <button type="reset" name="reset" class="btn btn-primary" style="background-color: black; position: relative; width: 100%; border-style: none; border-color:#a34c05;">Reset input</button>
                        </div>                  
                    </div>

                    <!--Tombol untuk submit pemesanan-->
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="form-group col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary" style="background-color: #a34c05; position: relative; width: 100%; border-style: none;">Order here</button>
                        </div>                  
                    </div>

                    </div>
                    </form>
                </div>
    </div>

</body>

</html>