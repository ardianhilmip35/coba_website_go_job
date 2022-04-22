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
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
<body style="background-color: #F1F1F1">

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #021668;">
    <div class="container-fluid">
    <img src="/img/LOGO 1.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 rounded text-center"  style="background-color: #D7E9F7; color:#000;" aria-current="page" href="#">Masuk</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="#">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #D7E9F7; color:#000;">Masuk</button>
                </a>
            </li>
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 rounded text-center btn-outline-success"  style="background-color: #C81F1F; color:#ffff" aria-current="page" href="#">Mendaftar</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="#">
                    <button class="btn me-md-2 fw-bold m-1" type="button" style="background-color: #C81F1F; color:#ffff;">Mendaftar</button>
                </a>
            </li>
            <li class="nav-item">
            {{-- <a class="nav-link active fw-bold m-1 text-center rounded"  style="background-color: #ffff; color:#000" aria-current="page" href="#">Untuk Kandidat</a> --}}
                <a class="d-grid gap-2 d-md-flex justify-content-md-end" href="#">
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

{{-- Footer --}}
    <div class="container-fluid" style="background-color: #021668">
        <footer class="py-5">
            <div class="row">
              <div class="col-3 justify-content-start">
                <img src="/img/Logo.png" alt="" width="160px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
              </div>
        
              <div class="col-3 d-flex justify-content-end ms-auto me-2">
                <form>
                  <h5 class="text-light fw-bold">Kunjungi Media Sosial Kami Di</h5>
                  <ul class="list-unstyled d-flex">
                    <li ><a href="#"><img src="/img/ig.png" alt="" width="50px" class="d-inline-block align-text-top mb-1 mt-1"/></a></li>
                    <li class="ms-1"><a href="#"><img src="/img/twitter.png" alt="" width="60px" class="d-inline-block align-text-top mb-2" /></a></li>
                    <li class=""><a href="#"><img src="/img/youtube.png" alt="" width="60px" class="d-inline-block align-text-top" /></a></li>
                    <li class=""><a href="#"><img src="/img/linkedin.png" alt="" width="60px" class="d-inline-block align-text-top" /></a></li>
                  </ul>
                </form>
              </div>
            </div>
        
            <div class="d-flex justify-content-between py-4 my-4 border-top">
              <p>&copy; 2021 Company, Inc. All rights reserved.</p>
              
            </div>
          </footer>
    </div>
    {{-- Akhir Footer --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>