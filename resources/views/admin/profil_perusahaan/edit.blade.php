@extends('navfoot.navadm2')

@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form" style=" margin-top: 130px; margin-bottom: 120px; margin-left: 50px; margin-right: 50px;">
    <h2 class="pb-2 border-bottom" style="font-size: 30px; margin-top: 100px; color: #021668;"><b>Edit Profil Perusahaan</b></h2>
        <a class="nav-link"  style="color: #021668;" aria-current="page" href="#"><b>Informasi Perusahaan</b></a>
     
    <div class="container" style="width: 160%;">
        <div class="row" style="margin-top: -2%;">
            <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 110%; height: 450px; margin-bottom: 30px">
                <div style="color: #021668;">
                    <label style="font-size: 15px; margin-top: 10px; margin-left: 10px"><b>Apa nama profil Anda?</b></label><br>
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Admin" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                    <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Apa nama perusahaan anda?</b></label><br>
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="PT Alfaria Trijaya Tbk." style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                    <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Apa industri perusahaan Anda?</b></label><br>
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Toko" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                    <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Tentang Perusahan</b></label><br>
                        <textarea class="form-control" rows="4" style="font-size: 15px; margin-left: 10px; width: 90%" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."></textarea>
                </div>
            </div>
        </div>
        <button type="button" value="" class="btn btn-primary" style="width: 10%; margin-left: 78%; background-color: #1E3163;  color: white; margin-bottom: 10px; margin-top: -15px">
            <b>Simpan</b></button>
        <button type="button" value="" class="btn btn-primary" style="width: 10%; margin-left: 90%; background-color: #1E3163;  color: white; margin-bottom: 10px; margin-top: -78px">
            <b>Batal</b></button>
    </div>
</section>
@endsection