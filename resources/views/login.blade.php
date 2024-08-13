<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <title>Halaman Login</title>
</head>

<body>


    <div class="wrap-login">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="wrap-bg">

                    </div>
                </div>
                <div class="col-6">
                    <div class="masuk">
                        <h4>Masuk</h4>
                        <p>(Pengguna dapat masuk dengan kredensial aplikasi KFCKU)</p>
                    </div>
                    <!-- Tampilkan pesan kesalahan jika ada -->
                    @if ($errors->has('login_error'))
                        <div class="alert alert-danger mt-3">
                            {{ $errors->first('login_error') }}
                        </div>
                    @endif
                    <form action="" method="POST">
                        @csrf
                        <div class="wrap-input">
                            <input type="text" class="w-100" name="username" placeholder="Masukan Username">
                        </div>
                        <div class="wrap-input ">
                            <input type="password" class="w-100" name="password" placeholder="Masukan Password">
                        </div>
                        <div class="register mt-3 text-end">
                            <p>Belum punya akun? <a href="" class="text-dark fw-bold">Daftar</a></p>

                        </div>
                        <div class="login">
                            <button class=" btn-primary w-100">Masuk Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
