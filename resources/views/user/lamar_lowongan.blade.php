@extends('navfoot.main')

    @section('content')

    <section id="form">
      <form method="POST" action="" class="mt-4">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="container-fluid">
              
              <div class="card-header text-center" style="background-color: #021668; color:#fff">
                <img src="" alt="">
                PT Patma Tirta Jaya
              </div>

              <div class="card-body" style="background-color: #fff; color:#021668;border: 3px solid #021668;">
                <p class="card-text mb-2"><small>Web Development Staff</small></p>
                <p class="card-text mb-2"><small>Surabaya, Jawa Timur</small></p>
                <p class="text-muted mb-2"><small>5 Hari yang lalu</small></p>
              </div>
            </div>

              <div class="container-fluid mt-4">
              
              <div class="card-body" style="background-color: #021668; color:#fff">
                <p class="card-text mb-2"><small>Tanti Wulansari</small></p>
                <p class="card-text mb-2"><small>087784666329</small></p>
                <p class="card-text mb-2"><small>tantiwulansari2603@gmail.com</small></p>
                <p class="card-text mb-2"><small>10.000.000</small></p>

                <div class="d-flex justify-content-end">
                <a href="">
                  <button class="btn" style="background-color:#D7E9F7 ">Lihat</button>
                </a>
                </div>
                
              </div>
              </div>

            </div>
            <div class="col-lg-8">
              <div class="card-body" style="background-color: #fff;color:#021668;height:230px;border: 3px solid #021668;">
                <p class="text-muted mb-2"><small>Informasi Pengalaman Kerja Anda </small></p>
              </div>
              <div class="container p-2 mt-4" style="background-color:#021668;color:#fff">
                <label for="file">Curriculum Vitae</label>
                <div class="d-flex justify-content-end">
                  <input type="file" name="" id="">
                  </div>
              </div>
            </div>
          </div>
          
        </div>
          
    </form>
    </section>
    @endsection
    