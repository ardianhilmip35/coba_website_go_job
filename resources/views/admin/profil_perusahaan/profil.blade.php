@extends('navfoot.navadm2')
@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form">
    <h2 class="pb-2 border-bottom" style="font-size: 30px; margin-top: 100px; color: #021668;"><b>Profil Perusahan</b></h2>
        <a class="nav-link"  style="color: #021668;" aria-current="page" href="#"><b>Informasi Perusahaan</b></a>
     
    <div class="container" style="width: 160%;">
        <div class="row" style="margin-top: -2%;">
            <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 110%; height: 450px; margin-bottom: 30px">
                <div style="color: #021668;">
                    <ul class="d-flex list-unstyled" style="margin-left: 10px">
                        <li><label style="font-size: 15px; margin-top: 10px"><b>Nama Profil</b></label><br></li>
                        <li style="margin-left: 85%; margin-top: 10px"><a href="#"><i class="fas fa-edit fa-2x"></i></a><br></li>
                    </ul>
                        <label class="" style="font-size: 15px; margin-top: -30px; margin-left: 10px">Dibuat : </label><br>
                        <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Nama Perusahaan</b></label><br>
                        <label class="mt-1" style="font-size: 15px; margin-left: 10px;" >Go Job </label><br>
                        <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Tentang Perusahaan</b></label><br>
                        <label class="mt-1" style="font-size: 15px; margin-left: 10px" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
                        versions of Lorem Ipsum.</label>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection