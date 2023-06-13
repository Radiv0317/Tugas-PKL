<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        #page1{
            background-color: rgba(255, 217, 0, 0.867);
            min-height: 43rem
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(255, 217, 0, 0.867);">
        <div class="container">
          <img src="assets/images/dot.png" alt="" width="80px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto mx-5">
              <a class="nav-link" href="#">Beranda</a>
              <a class="nav-link" href="#">Tentang GAS</a> 
              <a class="nav-link" href="#">Fitur</a>
              <a class="nav-link" href="#">Daftar</a>
              <a class="nav-link" href="#">Karir</a>
            </div>
            <div class="navbar-nav" style="float: right">
                <a type="button" href="{{ route('register') }}" class="btn btn-outline-light" style="color: black">SignUp</a>
                <a type="button" class="btn" style="margin-left: 10px; background-color: orange;">Akun toko</a>
            </div>
          </div>
        </div>
      </nav>

    <section id="page1">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 150px">
                    <h1 style="color: rgb(2, 10, 84)">Bergabung <br> dengan GAS</h1>
                    <p>Aplikasi GAS akan membantumu dalam memantau stok <br> produk tokomu dan menjangkau customer yang lebih luas</p>
                    <p class="mt-5">Download Sekarang Juga!!!</p>
                    <a href=""><img src="assets/images/playstore.png" alt="" width="100px" style="margin-bottom: 150px"></a>
                    <br>
                    <a href=""><i class="bi bi-instagram" style="font-size: 30px; color: black"></i></a>
                    <a href=""><i class="bi bi-facebook" style="font-size: 30px; color: black; margin-left: 15px"></i></a>
                </div>
                <div class="col-md-6" style="margin-top: 100px">
                    <img src="assets/images/market.png" alt="" width="500px" style="margin-left: 100px">
                </div>
            </div>
        </div>
    </section>
    <section id="fitur">
        <div class="container mt-5">
            <div class="row">
                <h1 class="text-center">Popular Fitur</h1>
                <p class="text-center">Nikmati berbagai fitur menarik yang kami berikam</p>
                <div class="col-md">

                </div>
                <div class="col-md">
                    
                </div>
                <div class="col-md">
                    
                </div>
                <div class="col-md">
                    
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>