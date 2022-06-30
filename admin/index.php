<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 9%;
            padding-left: 26%;
            background-image: linear-gradient(to right, #9e4f0e,#ed8937, #eba063);
        }
        
    </style>
</head>
    
<body>
    <!--Pengaturan Form-->
    <div class="card col-md-8 py-4" style="border-radius: 1.5rem;">   
        <div class="aler alert-primary text-center mt-3">
            <h3 style="font-weight: bold;">Login</h3>
        </div>
        <div class="card-body">
            <!--Pengecekan Validasi Login-->
            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<center>Login gagal! Periksa kembali username atau password anda</center>";
                    echo "<br>";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>

            <!--Pengaturan Kolom Username dan Password-->
            <form method="post" action="cek_login.php">
                <div class="row justify-content-center align-items-center">
                    <div class="form-group col-md-7">
                        <label class="form-label" for="form2Example28">Username</label>
                        <input required type="text" name="username" class="form-control" id="username">
                    </div> 
                </div><br>

                <div class="row justify-content-center align-items-center">
                    <div class="form-group col-md-7">
                        <label class="form-label" for="form2Example28">Password</label>
                        <input required type="password" name="password" class="form-control" id="password">
                    </div>
                </div><br>

                <!--Pengaturan Button Login-->
                <div class="row justify-content-center align-items-center mt-2">
                    <div class="form-group col-md-7">
                        <button type="submit" name="masuk" class="btn btn-primary" style="background-color: #a34c05; position: relative; width: 100%; border-style: none;">Login now</button> <br><br>
                    </div>
                </div>

                <!--Permalink ke form signup untuk admin yang belum memiliki akun-->
                <div class="text-center mb-3">
                <p style="font-size: 14px;">Don't have an account yet? <a href="signup.php" class="text-blue-50 fw-bold text-decoration-none">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>