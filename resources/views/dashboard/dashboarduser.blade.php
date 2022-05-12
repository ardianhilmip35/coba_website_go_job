@extends('layouts.main2')
@section('title', 'Dashboard')
<div class="container-fluid" id="container-search">
	<div>
		<h2 style="margin-top:20px">SELAMAT DATANG TOM HANKS,</h2>
		<h6>YUK, CARI LOWONGAN KERJA UNTUKMU</h6>
	</div>
		<div class="row d-flex justify-content-start" style="margin-top: 20px;">			
			<div class="col-md-16">
				<input type="text" id="txtsearch" class="me-4" placeholder="Nama Jabatan atau Nama Perusahaan">	
				<input type="text" id="txtpin" class="me-4" placeholder="Daerah atau Tempat Perusahaan">
				<select name="case" id="txtcase" class="me-4">
					<option value="pekerjaan">Semua Jenis Pekerjaan</option>
					<option value="pekerjaan">Semua Jenis Pekerjaan</option>
					<option value="pekerjaan">Semua Jenis Pekerjaan</option>
					<option value="pekerjaan">Semua Jenis Pekerjaan</option>
				</select>	
				<button type="button" class="btn btn-primary"
				style="background-color: #021668; border-radius: 0px; width:100px;"
				id="btnsearch">CARI</button>			
			</div>
	</div>
</div> 	
@section('content')
<section>	
<div class="container-fluid" style="margin-top: 2rem; margin-bottom: 5rem;">
<h5 class="fw-bold pb-1">Rekomendasi Berdasarkan Minatmu</h5>
            <div class="row mb-4">
                <div class="col-12 m-auto">					
                    <div class="owl-carousel owl-theme">
					<div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style=" background-image: url('/img/alfamart.jpg'); width:400px;" id="card-item">
                        <div class="d-flex flex-column h-20 p-2 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav ">
                            <li>
                              <img src="/img/alfa.jpg" alt="logo" style="width:120px; height:70px;">
							  <button class="bookmarkbtn ">
							  <img src="img/bookmark.png"  class="bookmark" width="30px" height="30px">
							  </button>					
                            </li>
                          </ul>
                          <label style="margin-top: 10px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
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
					  <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style=" background-image: url('/img/jac1.jpg'); width:400px; " id="card-item">
                        <div class="d-flex flex-column h-20 p-2 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav ">
                            <li>
                              <img src="/img/jac.png" alt="logo" style="width:120px; height:70px;">
							  <button class="bookmarkbtn ">
							  <img src="img/bookmark.png"  class="bookmark" width="30px" height="30px">
							  </button>					
                            </li>
                          </ul>
                          <label style="margin-top: 10px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
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
					  <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style=" background-image: url('/img/alfamart.jpg'); width:400px;" id="card-item">
                        <div class="d-flex flex-column h-20 p-2 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav ">
                            <li>
                              <img src="/img/alfa.jpg" alt="logo" style="width:120px; height:70px;">
							  <button class="bookmarkbtn ">
							  <img src="img/bookmark.png"  class="bookmark" width="30px" height="30px">
							  </button>					
                            </li>
                          </ul>
                          <label style="margin-top: 10px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
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
					  <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style=" background-image: url('/img/alfamart.jpg'); width:400px;" id="card-item">
                        <div class="d-flex flex-column h-20 p-2 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav ">
                            <li>
                              <img src="/img/alfa.jpg" alt="logo" style="width:120px; height:70px;">
							  <button class="bookmarkbtn ">
							  <img src="img/bookmark.png"  class="bookmark" width="30px" height="30px">
							  </button>					
                            </li>
                          </ul>
                          <label style="margin-top: 10px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
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
					  <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style=" background-image: url('/img/jac1.jpg'); width:400px; " id="card-item">
                        <div class="d-flex flex-column h-20 p-2 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav ">
                            <li>
                              <img src="/img/jac.png" alt="logo" style="width:120px; height:70px;">
							  <button class="bookmarkbtn ">
							  <img src="img/bookmark.png"  class="bookmark" width="30px" height="30px">
							  </button>					
                            </li>
                          </ul>
                          <label style="margin-top: 10px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
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
                </div>
            </div>
		

	<h5 class="fw-bold pb-1">Semua Perusahaan Ternama</h5>
            <div class="row mb-4">
                <div class="col-12 m-auto">					
                    <div class="owl-carousel owl-theme">

						<div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width:400px; ">
							<div class="card border-0 shadow text-white p-2" style="background-color: #021668;">
                            	<img src="/img/alfa.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <p class="fw-bold" style="margin-bottom: -50px; margin-top:-3px; font-size:12px">PT. ALFAMART ALFARIA TRIJAYA, Tbk</p>
                                    </div>
                                </div>
                        	</div>
                        </div> 
						
						<div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width:400px; ">
							<div class="card border-0 shadow text-white p-2" style="background-color: #021668;">
                            	<img src="/img/jac.png" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <p class="fw-bold" style="margin-bottom: -50px; margin-top:-3px; font-size:12px">PT. ALFAMART ALFARIA TRIJAYA, Tbk</p>
                                    </div>
                                </div>
                        	</div>
                        </div> 

                    </div>
                </div>
            </div>
			<h5 class="fw-bold pb-1">Pekerjaan Yang Tersimpan</h5>
            <div class="row mb-4">
                <div class="col-12 m-auto">					
                    <div class="owl-carousel owl-theme">				
					  <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style=" background-image: url('/img/alfamart.jpg'); width:400px;" id="card-item">
                        <div class="d-flex flex-column h-20 p-2 pb-2 pt-3 ps-3 text-white text-shadow-1">
                          <ul  class="navbar-nav ">
                            <li>
                              <img src="/img/alfa.jpg" alt="logo" style="width:120px; height:70px;">
							  <button class="bookmarkbtn ">
							  <img src="img/bookmark.png"  class="bookmark" width="30px" height="30px">
							  </button>					
                            </li>
                          </ul>
                          <label style="margin-top: 10px; font-size: 19px"><b>Crew Store (Pramuniaga/Kasir)</b></label>
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
		margin: 400,
		nav: true,
		stagepadding: 56,
		autowidth: true,
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

