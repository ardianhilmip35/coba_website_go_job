<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  {{-- Bootstrap css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  {{-- Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  
  {{-- Custom CSS  --}}
  <link rel="stylesheet" href="/style.css">
  <style>
      body {
          font-family: 'Poppins', sans-serif;
      }
  </style>

  {{-- Owl Carousel --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" />
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" />
    </head>
<body style="background-color: #F1F1F1">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #021668;">
  <div class="container-fluid">
  <img src="/img/LOGO 1.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white"  href="/beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"  href="#">Profil Perusahaan</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white"  href="/">Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"  href="/register">Mendaftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  style="background-color: #ffff; color:#1a202c"  href="/admin/login">Untuk Perusahaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- akhir navbar -->

{{-- Awal content --}}
<div class="container-fluid mt-2">
    @yield('content')
</div>
{{-- Akhir content --}}

<script src="/js/bootstrap.js"></script>
{{-- Awal footer --}}
    @include('navfoot.footer')
{{-- Akhir Footer --}}
