<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.css">
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
    </div>
</nav>
{{-- Akhir Navbar --}}

{{-- Awal content --}}
<div class="container-fluid mt-6" style=" margin-top: 90px; margin-bottom: 50px;">
    @yield('content')
</div>
{{-- Akhir content --}}

{{-- awal footer --}}
    @include('layouts.footer')
{{-- Akhir Footer --}}

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script>
$(".show-hide").click(function () {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
</script>

</body>
</html>