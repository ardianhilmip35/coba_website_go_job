@extends('navfoot.main2')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid container-search">
	<div>
		<h2 style="margin-top:20px">SELAMAT DATANG TOM HANKS,</h2>
		<h6>YUK, CARI LOWONGAN KERJA UNTUKMU</h6>
	</div>
		<div class="row d-flex justify-content-start" style="margin-top: 20px;">	
				
			<div class="col-md-16">
				<input type="text" id="txtsearch" style="margin-right:30px; margin-bottom: 20px;" placeholder="Nama Jabatan atau Nama Perusahaan">	
				<input type="text" id="txtpin" style="margin-right:30px" placeholder="Daerah atau Tempat Perusahaan">
				<select name="case" style="margin-right:30px" id="txtcase">
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
<section>	
<div class="container-dashboard" style="margin-top: 2rem; margin-bottom: 5rem;"> 
	<h1 class="header" style="font-style: bold;
	text-align: start;
	font-size: large;">Rekomendasi Berdasarkan Minatmu</h1>
	<div class="wrapper">
        <div class="card bg-dark text-white">
			<img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/alafamart.jpg" class="card-img" alt="...">
			<div class="card-img-overlay">
				<img src="https://alfamart.co.id/storage/page/September2020/k16dR7o7h6ReVRRdSBiu.jpg" class="logo-img" alt="">
				<button class="bookmarkbtn">
					<img src="img/bookmark.png" style="position: absolute;"  class="bookmark" width="30px" height="30px" alt="">
				</button>
				<p class="job-position" style=" font-size: 20px; font-weight: bold;margin-top: -140px;">Crew Store</p>
				<p class="perusahaan" style="font-size: 15px;
				margin-top: -145px;">  PT Alfamart</p>
				<p class="alamat" style="font-size: 15px;
				margin-top: -115px;">Jember, Kabupaten Jember, Jawa Timur</p>
				<p class="gaji" style="font-size: 15px;
				margin-top: -145px;">1 Juta - 5 Juta per bulan</p>
				<p class="time" style="font-size: 15px;
				margin-top: -125px;
				text-align: end;">5 hari yang lalu</p>
		  </div>
		</div>
		<div class="card bg-dark text-white">
			<img src="data:image/jpeg;base64,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" class="card-img" alt="...">
			<div class="card-img-overlay">
				<img src="https://cdn.krjogja.com/wp-content/uploads/2021/08/A-Shopee.jpg" class="logo-img" alt="">
                <button class="bookmarkbtn">
					<img src="img/bookmark.png" style="position: absolute;"  class="bookmark" width="30px" height="30px" alt="">
				</button>
				<p class="job-position" style=" font-size: 20px; font-weight: bold;margin-top: -140px;">Admin Hub Shopee Express</p>
				<p class="perusahaan" style="font-size: 15px;
				margin-top: -145px;">  Shopee Internasional Indonesia</p>
				<p class="alamat" style="font-size: 15px;
				margin-top: -115px;">Surabaya, Kota SBY, Jawa Timur</p>
				<p class="gaji" style="font-size: 15px;
				margin-top: -145px;">5 Juta per bulan</p>
				<p class="time" style="font-size: 15px;
				margin-top: -125px;
				text-align: end;">Kemarin</p>
		  </div>
		</div>   
		<div class="card bg-dark text-white">
			<img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/alafamart.jpg" class="card-img" alt="...">
			<div class="card-img-overlay">
				<img src="https://alfamart.co.id/storage/page/September2020/k16dR7o7h6ReVRRdSBiu.jpg" class="logo-img" alt="">
                <button class="bookmarkbtn">
					<img src="img/bookmark.png" style="position: absolute;"  class="bookmark" width="30px" height="30px" alt="">
				</button>
				<p class="job-position" style=" font-size: 20px; font-weight: bold;margin-top: -140px;">Crew Store</p>
				<p class="perusahaan" style="font-size: 15px;
				margin-top: -145px;">  PT Alfamart</p>
				<p class="alamat" style="font-size: 15px;
				margin-top: -115px;">Jember, Kabupaten Jember, Jawa Timur</p>
				<p class="gaji" style="font-size: 15px;
				margin-top: -145px;">1 Juta - 5 Juta per bulan</p>
				<p class="time" style="font-size: 15px;
				margin-top: -125px;
				text-align: end;">5 hari yang lalu</p>
		  </div>
		</div>   
		<div class="card bg-dark text-white">
			<img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/alafamart.jpg" class="card-img" alt="...">
			<div class="card-img-overlay">
            <img src="https://alfamart.co.id/storage/page/September2020/k16dR7o7h6ReVRRdSBiu.jpg" class="logo-img" alt="">
                <button class="bookmarkbtn">
					<img src="img/bookmark.png" style="position: absolute;"  class="bookmark" width="30px" height="30px" alt="">
				</button>
				<p class="job-position" style=" font-size: 20px; font-weight: bold;margin-top: -140px;">Crew Store</p>
				<p class="perusahaan" style="font-size: 15px;
				margin-top: -145px;">  PT Alfamart</p>
				<p class="alamat" style="font-size: 15px;
				margin-top: -115px;">Jember, Kabupaten Jember, Jawa Timur</p>
				<p class="gaji" style="font-size: 15px;
				margin-top: -145px;">1 Juta - 5 Juta per bulan</p>
				<p class="time" style="font-size: 15px;
				margin-top: -125px;
				text-align: end;">5 hari yang lalu</p>
		  </div>
		</div>
    </div>

	<h1 class="header" style="font-style: bold;
	text-align: start;
	font-size: large;">Semua Perusahaan Ternama</h1>
	<div class="wrapper">
        <div class="card text-white">
			<img src="https://cdn.krjogja.com/wp-content/uploads/2021/08/A-Shopee.jpg" class="img-perusahaan" alt="...">
			<p class="namaperusahaan" style="font-style: bold;
			margin-top: -60px;
			text-align: center;">SHOPEE INTERNATIONAL INDONESIA</p>
			<div class="card-img-overlay">
		  </div>
		</div>
		<div class="card text-white">
			<img src="https://alfamart.co.id/storage/page/September2020/k16dR7o7h6ReVRRdSBiu.jpg" class="img-perusahaan" alt="...">
			<p class="namaperusahaan" style="font-style: bold;
			margin-top: -60px;
			text-align: center;">PT AlFAMART</p>
			<div class="card-img-overlay">
		  </div>
		</div>
    </div>

	<h1 class="header" style="font-style: bold;
	text-align: start;
	font-size: large;">Pekerjaan Yang Tersimpan</h1>
	<div class="wrapper">
        <div class="card bg-dark text-white">
			<img src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/alafamart.jpg" class="card-img" alt="...">
			<div class="card-img-overlay">
				<img src="https://alfamart.co.id/storage/page/September2020/k16dR7o7h6ReVRRdSBiu.jpg" class="logo-img" alt="">
                <button class="bookmarkbtn">
					<img src="img/bookmark.png" style="position: absolute;"  class="bookmark" width="30px" height="30px" alt="">
				</button>
				<p class="job-position" style=" font-size: 20px; font-weight: bold;margin-top: -140px;">Crew Store</p>
				<p class="perusahaan" style="font-size: 15px;
				margin-top: -145px;">  PT Alfamart</p>
				<p class="alamat" style="font-size: 15px;
				margin-top: -115px;">Jember, Kabupaten Jember, Jawa Timur</p>
				<p class="gaji" style="font-size: 15px;
				margin-top: -145px;">1 Juta - 5 Juta per bulan</p>
				<p class="time" style="font-size: 15px;
				margin-top: -125px;
				text-align: end;">5 hari yang lalu</p>
		  </div>
		</div>
	</div>
</div>
</section>
@endsection
