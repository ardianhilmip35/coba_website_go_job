<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <!-- custom css  -->
        <link rel="stylesheet" href="/style.css">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
<body style="background-color: #F1F1F1">

{{-- Awal Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #021668;">
    <div class="container-fluid">
    <img src="/img/LOGO 1.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 rounded text-center"  style="background-color: #D7E9F7; color:#000;" aria-current="page" href="#">Masuk</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="{{ route('login') }}" style="text-decoration: none">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #D7E9F7; color:#000;">Masuk</button>
                </a>
            </li>
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 rounded text-center btn-outline-success"  style="background-color: #C81F1F; color:#ffff" aria-current="page" href="#">Mendaftar</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="{{ route('register') }}" style="text-decoration: none">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #C81F1F; color:#ffff; ">Mendaftar</button>
                </a>
            </li>
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 text-center rounded"  style="background-color: #ffff; color:#000" aria-current="page" href="#">Untuk Kandidat</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="#" style="text-decoration: none">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #ffff; color:#000;">Untuk Kandidat</button>
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}

{{-- Awal content --}}
<div class="container-fluid mt-6" style=" margin-top: 90px; margin-bottom: 90px;">
    @yield('content')
</div>
{{-- Akhir content --}}

{{-- awal footer --}}
    @include('layouts.footer')
{{-- Akhir Footer --}}

</body>
</html>