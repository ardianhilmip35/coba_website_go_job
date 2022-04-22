<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <!-- custom css  -->
        <link rel="stylesheet" href="/style.css">
    </head>
<body style="background-color: #F1F1F1">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #021668;">
    <div class="container-fluid">
    <img src="/img/LOGO 1.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 rounded text-center"  style="background-color: #D7E9F7; color:#000;" aria-current="page" href="#">Masuk</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="/admin/login" style="text-decoration: none">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #D7E9F7; color:#000;">Masuk</button>
                </a>
            </li>
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 rounded text-center btn-outline-success"  style="background-color: #C81F1F; color:#ffff" aria-current="page" href="#">Mendaftar</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="/admin/register" style="text-decoration: none">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #C81F1F; color:#ffff; ">Mendaftar</button>
                </a>
            </li>
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 text-center rounded"  style="background-color: #ffff; color:#000" aria-current="page" href="#">Untuk Kandidat</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="/" style="text-decoration: none">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #ffff; color:#000;">Untuk Kandidat</button>
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container mt-6">
    @yield('content')
</div>


{{-- awal footer --}}
<footer class="text-white pt-5 pb-4" style="background-color: #021668;">
  <div class="container text-center text-md-left">

  <div class="row text-center text-md-left">

  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
    <img src="/img/Logo.png" alt="logo">
  </div>
  <div class="col-md-4 col-lg-4 col-xl-4 mx-auto">
  </div>
       
        <div class="col-md-5 col-lg-5 col-xl-5 mx-auto text-end">
        <h6 class="text-uppercase mb-1 fw-bold text-warning">Kunjungi Media Sosial Kami</h6>
        <a href=""><img src="/img/ig.png" width="50px" alt="ig"></a>
        <a href=""><img src="/img/twitter.png" width="60px" alt="twitter"></a>
        <a href=""><img src="/img/linkedin.png" width="46px" alt="ig"></a>
        <a href=""><img src="/img/youtube.png" width="60px" alt="ig"></a>
        <p class="mt-2">
          <strong>Perlu Bantuan?</strong> Kunjungi Online Help Central Kami
        </p>
        </div>

        <hr class="mb-4">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 col-lg-8 ">
            <p>Produced by Newbie Team. Since @2022
              <a href="#" style="text-decoration: none;"></a>
            </p>

          </div>
         
        </div>
  </div>
  </div>

</footer>
    {{-- Akhir Footer --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>