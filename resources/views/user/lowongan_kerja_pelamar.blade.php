@extends('navbar.main')

    <!-- Tentang Anda -->
    @section('content')

    <section id="form">
      <form method="POST" action="">
        <div class="container mt-6">
          <div class="row">
              <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 100%; height: 150px">
                <div>
                    <label style="font-size: 20px;"><b>Tentang Anda</b></label><br>
                    <label class="mt-4" style="font-size: 15px;">Dibuat : </label><br>
                    <label class="mt-1" style="font-size: 15px;">Terakhir Di Perbarui : </label>
                        <button type="button" value="" class="btn btn-primary" style="width: 6%; margin-left: 82%; margin-buttom: 2%; background-color: #1E3163;  color: white;">
                        <b>Ubah</b></button>
                </div>
                
                {{-- Card Lowongan --}}
                <div class="container px-4 py-5" id="custom-cards">
                  <h2 class="pb-2 border-bottom" style="font-size: 15px; align: center"><b>Lowongan Yang Sesuai Dengan Anda</b></h2>
                  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col">
                      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/img/alfa.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                          <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                              <img src="/img/alfa.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                              <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                              <small>3d</small>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                          <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                              <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                              <small>Pakistan</small>
                            </li>
                            <li class="d-flex align-items-center">
                              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                              <small>4d</small>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                          <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                              <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                              <small>California</small>
                            </li>
                            <li class="d-flex align-items-center">
                              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                              <small>5d</small>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="row">
                  <div class="card" style="width: 18rem; margin-top: 30px">
                    <img src="/img/alfa.jpg" class="card-img-top" alt="Not Found">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem; margin-top: 30px">
                    <img src="/img/hebros.jpg" class="card-img-top" alt="Not Found">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem; margin-top: 30px">
                    <img src="/img/jac.png" class="card-img-top" alt="Not Found">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div> --}}
                {{-- Akhir card --}}

              </div>
            </div>
          </div>
       </div>
    </form>
    </section>
    @endsection
    <!-- Akhir Tentang Anda -->

</body>
</html>