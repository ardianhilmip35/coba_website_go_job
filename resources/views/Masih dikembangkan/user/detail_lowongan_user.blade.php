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
                    <label style="font-size: 20px;"><b>Web Development Staff</b></label><br>
                    <label class="mt-4" style="font-size: 15px;">PT Patma Tirta Jaya</label><br>
                    <label class="mt-1" style="font-size: 15px;">Surabaya, Jawa Timur</label>
                        <a href=""><i class="far fa-bookmark fa-2x" style="margin-top: 0%; margin-left: 70%; color: black; margin-top: -8px" ></i></a>
                        <button type="button" value="" class="btn btn-primary" style="width: 13%; margin-left: 2%; background-color: #1E3163;  color: white;">
                        <b>Lamar Sekarang</b></button>
                </div>
            </div>
          </div>
       </div>
      <!-- Akhir Tentang Anda -->
                
       <div class="container">
             <div class="row" style="margin-top: 5%; height: 50%">
                <div class="container-fluid p-6 shadow" style="background-color:#ffff; width: 100%; margin-top: -30px">
                    <label class="mt-0" style="font-size: 18px; color: #021668;"><b>Deskripsi Pekerjaan</b></label><br>
                    <label class="mt-1" style="font-size: 15px; color: #021668;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum.</label><br>
                    <label class="mt-4" style="font-size: 18px; color: #021668;"><b>Kualifikasi Pekerjaan</b></label><br>
                    <label class="mt-1" style="font-size: 15px; color: #021668;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum.</label><br>
                </div>
            </div>
       </div>
      </form>
    </section>
@endsection

</body>
</html>