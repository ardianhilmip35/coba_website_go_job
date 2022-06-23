@extends('layouts.navadm')

@section('title', 'Landing Page | Go Job')

@section('content')
    <!-- Home -->
    <section class="jumbotron text-center text-light text-center">
      <div class="row" style="background-image: url(img/bg1.jpg); background-size: 100% 100%; background-repeat: no-repeat; 
      padding-top: 6rem; padding-bottom:100px;">
        <h1 class="display-2 fw-bold">Selamat Datang di Go Job</h1>
          <p class="lead">
              Go Job adalah aplikasi yang menyediakan lowongan pekerjaan dan pelamar yang berkualitas.
          </p>
          <p>
              <a href="{{ route('login') }}" class="btn btn-success my-2 mx-2 fw-bold fs-5">Masuk</a>
              <a href="{{ route('register') }}" class="btn btn-secondary my-2 mx-2 fw-bold fs-5">Daftar</a>
          </p>
      </div>
    </section>
    <!-- Akhir Home -->

    <!-- ABOUT -->
    <section class="about section-padding pb-0 text-center" id="about" style="padding-top: 5rem;">
      <div class="container">
          <div class="row">
                <div class="row">
                    <div class="col-lg-12 col-md-10 col-12">
                          <h2 class="mb-4" data-aos="fade-up"> Best <strong style="color:#021668; ">Website For Searching Job</strong> in Jember</h2>
                          <p class="mb-0 lh-lg fs-5" data-aos="fade-up">Sebuah aplikasi tentang aplikasi pencarian lowongan pekerjaan yang berbasis mobile maupun website. Pada website go job, nanti akan digunakan admin untuk melayangkan sebuah iklan lowongan pekerjaan pada aplikasi GO JOB ini. Dalam websitenya juga bisa digunakan user/client yang nantinya akan mencari sebuah lowongan pekerjaan dari perusahaan - perusahaan yang sudah bergabung pada aplikasi ini. 
                          <br><br>
                          <p class="mb-0 lh-lg fs-5" data-aos="fade-up">
                          Untuk aplikasi berbasis mobilenya hampir sama seperti website yang digunakan untuk usernya, yaitu berfungsi dalam mencari sebuah lowongan pekerjaan yang ada.</p>
                          <p>
                      </div>


                    <div class="col-lg-7 mx-auto col-md-10 col-12" style="margin-top: -43px">
                      <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                        <img src="img/office.png" class="img-fluid" alt="office">
                      </div>
                    </div>
                </div>
          </div>
      </div>
</section>


  <!-- PROJECT -->
        {{-- <div class="row project" id="project">

              <div class="col-lg-12 col-12">

                  <h2 class="mb-5 text-center" data-aos="fade-up">
                      Perusahaan Yang Bekerja Sama
                      <strong style="color:#021668; ">Dengan Kami</strong>
                  </h2>

              </div>
              <div class="row justify-content-center ps-4">
                <div class="col-md-4 mb-3">
                  <div class="card" >
                    <img src="img/linked.jpg" class="img-fluid" alt="perusahaan5">
                    <div class="card-body">
                      <h3 class="card-text text-center pb-3"><strong>LINKEDIN</strong></>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card" >
                    <img src="img/alfamart.jpg" class="img-fluid" alt="perusahaan2">
                    <div class="card-body">
                      <h3 class="card-text text-center"><strong>PT Sumber Alfaria Trijaya Tbk</strong></>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card" >
                    <img src="img/hebros.jpg" class="img-fluid" alt="perusahaan3">
                    <div class="card-body">
                      <h3 class="card-text text-center"><strong>PT. HEBROS</strong></>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card" >
                    <img src="img/gojek.png" class="img-fluid"alt="perusahaan1">
                    <div class="card-body">
                      <h3 class="card-text text-center"><strong>PT. GO-JEK Indonesia</strong></>
                    </div>
                  </div>
                </div>
                  <div class="col-md-4 mb-3">
                    <div class="card" >
                      <img src="img/jac.jpg" class="img-fluid" alt="perusahaan4">
                      <div class="card-body">
                        <h4 class="card-text text-center"><strong>PT. JAC INDONESIA</strong></>
                      </div>
                    </div>
                  </div>
              </div>
        </div> --}}
  <!-- Akhir Project -->

  <!--Slider-->
  <!-- PROJECT -->
  <section class="project section-padding" id="project">
    <div class="container-fluid">
         <div class="row">

              <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                      Perusahaan Yang Bekerja Sama
                      <strong style="color:#021668; ">Dengan Kami</strong>
                  </h2>

                   <div class="owl-carousel owl-theme" id="project-slide">
                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                             <img src="img/alfamart.jpg" class="img-fluid" alt="perusahaan1">

                             <div class="project-info">
                                  <small>Company</small>

                                  <h3>
                                       <a href="">
                                            <h3 class="card-text"><strong>PT Sumber Alfaria Trijaya Tbk</strong></>
                                       </a>
                                  </h3>
                             </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                             <img src="img/linked.jpg" class="img-fluid" alt="perusahaan2">

                             <div class="project-info">
                                  <small>Company</small>

                                  <h3>
                                       <a href="">
                                            <h3 class="card-text]"><strong>LINKEDIN</strong></>
                                       </a>
                                  </h3>
                             </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                             <img src="img/jac1.jpg" class="img-fluid" alt="perusahaan3">

                             <div class="project-info">
                                  <small>Company</small>

                                  <h3>
                                       <a href="">
                                            <h3 class="card-text"><strong>PT. JAC INDONESIA</strong></>>
                                       </a>
                                  </h3>
                             </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                             <img src="img/hebros.jpg" class="img-fluid" alt="perusahaan4">

                             <div class="project-info">
                                  <small>Company</small>

                                  <h3>
                                       <a href="">
                                            <h3 class="card-text"><strong>PT. HEBROS</strong></>
                                       </a>
                                  </h3>
                             </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                             <img src="img/gojek.png" class="img-fluid" alt="perusahaan5">

                             <div class="project-info">
                                  <small>Company</small>

                                  <h3>
                                       <a href="">
                                            <h3 class="card-text"><strong>PT. GO-JEK Indonesia</strong></>
                                       </a>
                                  </h3>
                             </div>
                        </div>
                   </div>
              </div>

         </div>
    </div>
</section>
  <!-- Akhir Slider-->



  <!-- Awal Testi -->
  <section  id="testi" class="testi">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-12">
    
          <h2 class="mb-5 text-center" data-aos="fade-up">
              <Strong style="color:#021668; ">Testimonials</Strong>
          </h2>
    
        </div>
        <div class="col-lg-6 col-md-5 col-12" >
            <div class="rounded contact-image" data-aos="fade-up" data-aos-delay="300">
    
              <img src="img/avatar.png" class="img-fluid" alt="website" style="width: 500px;">
            </div>
        </div>
    
        <div class="col-lg-6 col-md-7 col-12">
          <h4 class="my-5 pt-3 text-secondary" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>
    
          <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>
    
          <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Aplikasi ini sangat bagus untuk Mahasiswa untuk mencaari kerja setelah lulus.</h3>
    
          <p data-aos="fade-up" data-aos-delay="400">
            <strong class="text-warning">Ardian Hilmi P</strong>
    
            <span class="mx-1">/</span>
    
            <small>Jaya Makmur (CEO)</small>
          </p>
        </div>
    
      </div>
    </div>
  </section>
  
  <!-- Akhir Contact-->

  
@endsection

