<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <h3 style="font-weight: bold;">Sign Up</h3>
        </div>
            <div class="card-body">
                <form method="post" action="cek_signup.php">
                    <!--Class Inputan Nama-->
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">First name</label>
                                <input required type="text" name="first_name" id="first_name" class="form-control">     
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example2">Last name</label>
                                <input required type="text" name="last_name" id="last_name" class="form-control">      
                            </div>
                        </div>
                    </div>

                    <!--Class Inputan Email-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Email</label>
                                <input required type="text" name="email" id="email" class="form-control">
                            </div>   
                        </div>  
                    </div>

                    <!--Class Inputan Username-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Username</label>
                                <input required type="text" name="username" id="username" class="form-control">
                            </div>   
                        </div>  
                    </div>
                        
                    <!--Class Inputan Password-->
                    <div class="row justify-content-center align-items-center">
                        <div class="form-group col-md-8 mb-3">
                            <div>
                                <label class="form-label" for="form3Example2">Password</label>
                                <input required type="password" name="password" id="password" class="form-control">
                            </div>   
                        </div>  
                    </div>

                    <!--Class Tombol Signup-->
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="form-group col-md-8">
                            <button type="submit" name="masuk" class="btn btn-primary" style="background-color: #a34c05; position: relative; width: 100%; border-style: none;">Signup now</button> <br><br>
                        </div>
                    </div>
                    </form>
                </div>
    </div>

</body>

</html>