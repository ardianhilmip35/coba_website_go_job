@extends('navfoot.navadm2')

@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form">

    <h2 class="pb-2" style="font-size: 30px; margin-top: 100px; color: #021668;"><b>Profil Perusahan</b></h2>
        <ul class="d-flex list-unstyled">
          <li>
            <a class="nav-link"  style="color: #021668;" aria-current="page" href="#"><b>Informasi Perusahaan</b></a>
          </li>
          <li>
            <a class="nav-link"  style="color: #021668;" aria-current="page" href="#">Informasi Tambahan Perusahaan</a>
          </li>
        </ul>
     <div class="container mt-2 shadow-sm p-4 border rounded-2" style="background-color:#ffff; width: 100%; margin-bottom:80px">
          <div class="row">
            <div class="col-lg-5 d-flex justify-content-center" style="color: #021668;">
                <img src="/img/alfa.jpg" alt="" class="img-fluid mb-2 mt-2"><br>
            </div>
            <div class="col-lg-6" style="color: #000;">
              <label class="mt-1 fw-bold fs-6">Nama Perusahaan</label><br>
              <label class="mt-1 fs-6" >PT. ALFAMART ALFARIA TRIJAYA, Tbk</label><br>
              <label class="mt-3 fw-bold fs-6">Kantor Pusat</label><br>
              <label class="mt-1 fs-6" >Jalan MH. Thamrin No. 9, Cikokol, Tangerang, Banten, Indonesia 15117</label><br>
              <label class="mt-3 fw-bold fs-6">Website Perusahaan</label><br>
              <a class="mt-1 text-decoration-none fs-6" href="https://alfamart.co.id/">https://alfamart.co.id/</a><br>
              <label class="mt-3 fw-bold fs-6">Email Perusahaan</label><br>
              <label class="mt-1 fs-6" >-tidak ada-</label><br>
              <label class="mt-3 fw-bold fs-6">Telepon Perusahaan</label><br>
              <label class="mt-1 fs-6" href="https://api.whatsapp.com/send?phone=628111500959">+6281-1150-0959</label><br>
            </div>
          </div>
          <label class="mt-3 fs-6 fw-bold">Tentang Perusahaan</label><br>
          <p class="mt-1  lh-base pb-4" style="text-align: justify; text-justify: newspaper;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa porro incidunt, reprehenderit beatae animi alias deleniti error molestiae asperiores suscipit, officiis ipsam quisquam dicta nihil quis at minus nesciunt id consequuntur temporibus. Dolorum, maiores sint repellat repellendus, voluptate, aliquam provident at quis quia ex neque? Laborum rem odio eius aliquam quisquam. Sit fugit blanditiis, rerum aspernatur illo repellat at vero saepe voluptates praesentium voluptatum nemo, necessitatibus tempore exercitationem perspiciatis. Quisquam ad quasi eum quo excepturi voluptatum repellendus libero, temporibus eius animi, nemo error enim magni et laborum expedita recusandae laboriosam dolor, dolorem quis deserunt? Maxime rerum sint minus rem saepe soluta molestias beatae! Porro magni expedita accusantium perspiciatis beatae, illo distinctio eum nulla earum veniam accusamus nostrum provident. Necessitatibus, non!
          </p>
        </div>
  {{-- <div class="container" style="width: 160%;">
      <div class="row" style="margin-top: -2%;">
          <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 110%; height: 450px; margin-bottom: 30px">
            <div style="color: #021668;">
                <ul class="d-flex list-unstyled">
                <li><label style="font-size: 15px;"><b>Nama Profil</b></label><br></li>
                <li style="margin-left: 90%"><a href="#"><i class="fas fa-edit fa-2x"></i></a><br></li>
                </ul>
                <label class="" style="font-size: 15px; margin-top: -23px">Dibuat : </label><br>
                <label class="mt-4" style="font-size: 15px;"><b>Nama Perusahaan</b></label><br>
                <label class="mt-1" style="font-size: 15px;">Go Job </label><br>
                <label class="mt-4" style="font-size: 15px;"><b>Tentang Perusahaan</b></label><br>
                <label class="mt-1" style="font-size: 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
                versions of Lorem Ipsum.</label>
            </div>
        </div>
      </div>
   </div> --}}
</section>
@endsection