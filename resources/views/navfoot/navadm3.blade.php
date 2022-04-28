@include('layouts.header')
    
{{-- Awal Navbar --}}
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #021668;">
    <div class="container-fluid">
    <img src="/img/LOGO 1.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-5 mb-lg-0 listmenu">
                <li class="nav-item menu">
                    <a class="nav-link d-grid gap-2 d-flex justify-content-center"  style="text-decoration: none" aria-current="page" href="#">Pencarian Talent</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link d-grid gap-2 d-flex justify-content-center"  style="text-decoration: none"  aria-current="page" href="#">Laporan Lowongan</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link d-grid gap-2 d-flex justify-content-center"  style="text-decoration: none" aria-current="page" href="#">Iklan Lowongan</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle namaperusahaan" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nama Perusahaan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/admin/profil">Profil Perusahaan</a></li>
                        <li><a class="dropdown-item" href="#">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}

{{-- Awal content --}}
<div class="container mt-6">
    @yield('content')
</div>
{{-- Akhir content --}}

{{-- awal footer --}}
    @include('navfoot.footer')
{{-- Akhir Footer --}}