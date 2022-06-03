@extends('layouts.main2')

@section('title', 'Profil Perusahaan')
@section('content')
    <section id="form">
        <div class="container-fluid" style="margin-top: 100px; margin-bottom:50px;">
            <h5 class="fw-bold pb-1">Riwayat Kunjungan Pencarian</h5>
            <div class="row mb-4">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card border-0 shadow text-white p-2" style="background-color: #021668;">
                                <img src="/img/alfa.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <p class="fw-bold" style="margin-bottom: -50px; margin-top:-3px; font-size:12px">PT. ALFAMART ALFARIA TRIJAYA, Tbk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="item">
                            <div class="card border-0 shadow text-white p-2" style="background-color: #021668;">
                                <img src="/img/jac.png" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <p class="fw-bold" style="margin-bottom: -50px; margin-top:-3px; font-size:12px">PT JAC Consulting</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="border-top border-4 pt-3 ms-start" style="margin-top: 30px">
                <h5 class="fw-bold" >Riwayat Kunjungan Pencarian</h5>
            </div>
            <div class="row">
                <div class="col-md-16">

                    <div class="card-group">
                        <div class="card border-0 shadow text-white p-2 m-3 rounded-2" style="background-color: #021668;">
                            <img src="/img/alfa.jpg" alt="" class="card-img-top" width="220" height="220">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p class="fw-bold fs-6" style="margin-bottom: -25px; margin-top:-3px;">PT. ALFAMART ALFARIA TRIJAYA, Tbk</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow text-white p-2 m-3 rounded-2" style="background-color: #021668;">
                            <img src="/img/jac.png" alt="" class="card-img-top" width="220" height="220">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p class="fw-bold fs-6" style="margin-bottom: -25px; margin-top:-3px;">PT. JAC Consulting</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow text-white p-2 m-3 rounded-2" style="background-color: #021668;">
                            <img src="/img/hebros.jpg" alt="" class="card-img-top" width="220" height="220">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p class="fw-bold fs-6" style="margin-bottom: -25px; margin-top:-3px;">PT. Hebros</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-16">
                    
                    <div class="card-group">
                        <div class="card border-0 shadow text-white p-2 m-3 rounded-2" style="background-color: #021668;">
                            <img src="/img/alfa.jpg" alt="" class="card-img-top" width="220" height="220">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p class="fw-bold fs-6" style="margin-bottom: -25px; margin-top:-3px;">PT. ALFAMART ALFARIA TRIJAYA, Tbk</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow text-white p-2 m-3 rounded-2" style="background-color: #021668;">
                            <img src="/img/jac.png" alt="" class="card-img-top" width="220" height="220">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p class="fw-bold fs-6" style="margin-bottom: -25px; margin-top:-3px;">PT. JAC Consulting</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow text-white p-2 m-3 rounded-2" style="background-color: #021668;">
                            <img src="/img/hebros.jpg" alt="" class="card-img-top" width="220" height="220">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p class="fw-bold fs-6" style="margin-bottom: -25px; margin-top:-3px;">PT. Hebros</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection
</body>
</html>