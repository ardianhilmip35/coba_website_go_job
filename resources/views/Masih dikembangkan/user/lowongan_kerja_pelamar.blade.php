@extends('layouts.main2')

    <!-- Tentang Anda -->
    @section('title', 'Lowongan Kerja Pelamar')
    @section('content')

    <section id="form">
      <form method="POST" action="">
        <div class="container">
          <div class="row" style="margin-top: 5%">
              <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 100%; height: 150px">
                <div style="color: #021668;">
                    <label style="font-size: 20px;"><b>Tentang Anda</b></label><br>
                    <label class="mt-4" style="font-size: 15px;">Dibuat : </label><br>
                    <label class="mt-1" style="font-size: 15px;">Terakhir Di Perbarui : </label>
                        <button type="button" value="" class="btn btn-primary" style="width: 6%; margin-left: 82%; margin-buttom: 2%; background-color: #1E3163;  color: white;">
                        <b>Ubah</b></button>
                </div>
            </div>
          </div>
       </div>
      <!-- Akhir Tentang Anda -->
                
        <h2 class="pb-2 border-bottom text-center" style="font-size: 20px; margin-top: 40px; color: #021668;"><b>Lowongan Yang Sesuai Dengan Anda</b></h2>
          {{-- Card Lowongan --}}
            <div class="container-fluid" id="custom-cards">
                  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-3 py-4">
                    <a href="#">
                    <div class="col">
                      <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width: 100%; background-image: url('/img/alfamart.jpg');">
                        <div class="d-flex flex-column h-20 p-5 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav">
                            <li>
                              <img src="/img/alfa.jpg" alt="logo" width="130" height="80">
                              <i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 189px; color: black;" ></i>
                            </li>
                          </ul>
                          <label style="margin-top: 20px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
                          <label style="margin-top: 2px; font-size: 15px">PT Alfaria Trijaya, Tbk</label>
                            <label class="me-3" style="margin-top: 30px">
                              <small>Mangli, Kabupaten Jember</small>
                            </label>
                            <label>
                              <small>3 juta - 5 juta per bulan</small>
                            </label>
                            <label class="ms-auto">
                              <small>7 hari yang lalu</small>
                            </label>
                        </div>
                      </div>
                    </div>
                    </a>

                    <div class="col">
                      <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width: 100%; background-image: url('/img/jac1.jpg');">
                        <div class="d-flex flex-column h-20 pb-2 pt-3 ps-3 text-white text-shadow-1">
                            <ul  class="navbar-nav">
                            <li>
                              <img src="/img/jac.png" alt="logo" width="130" height="80">
                              <i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 200px; color: black;" ></i>
                            </li>
                          </ul>
                          <label style="margin-top: 20px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
                          <label style="margin-top: 2px; font-size: 15px">PT Alfaria Trijaya, Tbk</label>
                            <label class="me-3" style="margin-top: 30px">
                              <small>Mangli, Kabupaten Jember</small>
                            </label>
                            <label>
                              <small>3 juta - 5 juta per bulan</small>
                            </label>
                            <label class="ms-auto" style="margin-right: 20px">
                              <small>5 hari yang lalu</small>
                            </label>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width: 100%; background-image: url('/img/linked.jpg');">
                        <div class="d-flex flex-column h-20 pb-2 pt-3 ps-3 text-white text-shadow-1">
                            <ul  class="navbar-nav">
                              <li>
                                <img src="/img/linkedin.png" alt="logo" width="90" height="80">
                                <i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 260px; color: black;" ></i>
                              </li>
                            </ul>
                          <label style="margin-top: 20px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
                          <label style="margin-top: 2px; font-size: 15px">PT Alfaria Trijaya, Tbk</label>
                            <label class="me-3" style="margin-top: 30px">
                              <small>Mangli, Kabupaten Jember</small>
                            </label>
                            <label>
                              <small>3 juta - 5 juta per bulan</small>
                            </label>
                            <label class="ms-auto" style="margin-right: 20px">
                              <small>5 hari yang lalu</small>
                            </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container-fluid" id="custom-cards">
                  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch">
                    <div class="col">
                      <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width: 100%; background-image: url('/img/alfamart.jpg');">
                        <div class="d-flex flex-column h-20 p-5 pb-2 pt-3 ps-3 text-white text-shadow-1">
                            <ul  class="navbar-nav">
                              <li>
                                <img src="/img/alfa.jpg" alt="logo" width="130" height="80">
                                <i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 183px; color: black;" ></i>
                              </li>
                            </ul>
                          <label style="margin-top: 20px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
                          <label style="margin-top: 2px; font-size: 15px">PT Alfaria Trijaya, Tbk</label>
                            <label class="me-3" style="margin-top: 30px">
                              <small>Mangli, Kabupaten Jember</small>
                            </label>
                            <label>
                              <small>3 juta - 5 juta per bulan</small>
                            </label>
                            <label class="ms-auto">
                              <small>5 hari yang lalu</small>
                            </label>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width: 100%; background-image: url('/img/jac1.jpg');">
                        <div class="d-flex flex-column h-20 pb-2 pt-3 ps-3 text-white text-shadow-1">
                            <ul  class="navbar-nav">
                            <ul  class="navbar-nav">
                            <li>
                              <img src="/img/jac.png" alt="logo" width="130" height="80">
                              <i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 200px; color: black;" ></i>
                            </li>
                          </ul>
                           </ul>
                          <label style="margin-top: 20px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
                          <label style="margin-top: 2px; font-size: 15px">PT Alfaria Trijaya, Tbk</label>
                            <label class="me-3" style="margin-top: 30px">
                              <small>Mangli, Kabupaten Jember</small>
                            </label>
                            <label>
                              <small>3 juta - 5 juta per bulan</small>
                            </label>
                            <label class="ms-auto" style="margin-right: 20px">
                              <small>5 hari yang lalu</small>
                            </label>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width: 100%; background-image: url('/img/linked.jpg');">
                        <div class="d-flex flex-column h-20 pb-2 pt-3 ps-3 text-white text-shadow-1">
                            <ul  class="navbar-nav">
                              <li>
                                <img src="/img/linkedin.png" alt="logo" width="90" height="80">
                                <i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 250px; color: black;" ></i>
                              </li>
                            </ul>
                          <label style="margin-top: 20px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
                          <label style="margin-top: 2px; font-size: 15px">PT Alfaria Trijaya, Tbk</label>
                            <label class="me-3" style="margin-top: 30px">
                              <small>Mangli, Kabupaten Jember</small>
                            </label>
                            <label>
                              <small>3 juta - 5 juta per bulan</small>
                            </label>
                            <label class="ms-auto" style="margin-right: 20px">
                              <small>5 hari yang lalu</small>
                            </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Akhir card --}}
              </div>
      </form>
    </section>
@endsection

</body>
</html>