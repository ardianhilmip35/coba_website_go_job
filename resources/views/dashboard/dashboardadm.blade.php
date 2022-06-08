@extends('layouts.navadm2')
@section('title', 'Dashboard Admin | Go Job')
@section('content')
    <section style=" margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 80px;">
        
        {{-- Tulisan Dashboard --}}
        <div class="row-md-2">
            <p class="h5 fw-bold ps-3 shadow text-light" style="background-color: #021668; border-radius: 5px; padding-top: 12px; padding-bottom: 12px;">Dashboard Admin</p>
        </div>

        {{-- Card --}}
        <div class="row d-flex" style="margin-top: 40px;">

                        {{-- Card 1 --}}
                        <div class="col-sm-4">
                            <div class="card mb-3 shadow">
                                <div class="card-header bg-success">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h4 class="card-title text-light">Iklan</h4>
                                        </div>

                                        <div class="col-auto shadow-lg p-2 body rounded me-2 bg-light">
                                                <img src="img/iklan.png" alt="" width="40" >
                                        </div>
                                    </div>
                                    <h1 class="mb-3 fw-bold text-light" style="margin-top: -10px">{{ $jumlah_lowongan }}</h1>
                                    <div class="mb-0">
                                        <span class="text-light">Lowongan Sudah Diiklankan</span>
                                    </div>
                                </div>
                                <div class="card-body mb-0" style="background-color: #fff">
                                    <a href="{{ url('lowongan') }}" style="font-size: 20px; text-decoration:none;">More Info <i class="fa-solid fa-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        {{-- Card 2 --}}
                        <div class="col-sm-4">
                            <div class="card mb-3 shadow">
                                <div class="card-header bg-danger">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h4 class="card-title text-light">Pendaftar</h4>
                                        </div>

                                        <div class="col-auto shadow-lg p-2 body rounded me-2 bg-light">
                                                <img src="img/employee.png" alt="" width="40" >
                                        </div>
                                    </div>
                                    <h1 class="mb-3 fw-bold text-light" style="margin-top: -10px">{{ $jumlah_lamarkerja }}</h1>
                                    <div class="mb-0">
                                        <span class="text-light">Orang yang Terdaftar</span>
                                    </div>
                                </div>
                                <div class="card-body mb-0" style="background-color: #fff">
                                    <a href="{{ url('laporan') }}" style="font-size: 20px; text-decoration:none;">More Info <i class="fa-solid fa-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    
        </div>

        <div class="row d-flex" style="margin-top: 30px;">
            <div class="col-sm-4 col-sm-8  mb-3">
                <div class="card flex-fill w-100 shadow">
                    <div class="card-header bg-primary">
                        <h5 class="card-title mb-0 fw-bold text-light">Jumlah Pendaftar</h5>
                    </div>
                    <div class="card-body py-3">
                        <div id="grafik"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="card flex-fill shadow">
                    <div class="card-header bg-primary">
                        <h5 class="card-title fw-bold text-light">Calendar</h5>
                    </div>
                    <div class="card-body" >
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script src="/dashboard.js"></script>
        <script src="/calender.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <Script type="text/javascript">
        var jumlah = <?php echo json_encode($total_pelamar) ?>;
        var bulan = <?php echo json_encode($bulan) ?>;
        Highcharts.chart('grafik', {
            title: {
                text: 'Grafik Pendaftar Bulanan'
            },
            xAxis: {
                categories: bulan
            },
            yAxis: {
                title: {
                    text: 'Jumlah Pendaftar Bulanan'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [
                {
                name: 'Jumlah Pendaftar',
                data: jumlah

            }
        ]
        });
        </Script>
    </section>
@endsection