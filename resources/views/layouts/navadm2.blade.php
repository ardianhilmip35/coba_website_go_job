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
        <script src="https://kit.fontawesome.com/a1124f2922.js" crossorigin="anonymous"></script>
        <!-- custom css  -->
        <link rel="stylesheet" href="/style.css">


        {{-- Calendar --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />



        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
<body style="background-color: #F1F1F1">
    
{{-- Awal Navbar --}}
<body>
<nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: #021668;">
    <div class="container-fluid">
    <img src="/img/LOGO 1.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-5 mb-lg-0 listmenu">
                <li class="nav-item">
                    <a class="nav-link d-grid gap-2 d-flex justify-content-center menu" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link d-grid gap-2 d-flex justify-content-center menu"  aria-current="page" href="#">Laporan Lowongan</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link d-grid gap-2 d-flex justify-content-center menu" aria-current="page" href="#">Iklan Lowongan</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle namaperusahaan" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->nama_admin }} 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="#">Profil Perusahaan</a></li>
                        <li>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Keluar</a>
                            <form id="logout-form"  action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form> 
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}

{{-- Awal content --}}
<div class="container-fluid">
    @yield('content')
</div>
{{-- Akhir content --}}

{{-- awal footer --}}
    @include('layouts.footer')
{{-- Akhir Footer --}}

</body>
</html>