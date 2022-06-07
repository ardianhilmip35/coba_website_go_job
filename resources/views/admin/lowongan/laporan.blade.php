@extends('layouts.navadm2')

@section('title', 'Laporan Lowongan')
@section('content')
    <section style="margin-bottom: 50px;">
        <div class="row" style="background-color: #D7E9F7; height:280px;">
        </div>
        <div class="row pt-4 px-4">
            <div class="col-md-12">
                <h4 class="fw-bold d-flex justify-content-between">LAPORAN PELAMAR YANG TERDAFTAR</h4>
            </div>
            <div class="col-md-12 pt-3">
                <table class="table table-striped text-center">
                    <thead class="bg-success">
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama Pelamar</th>
                          <th scope="col">Lowongan</th>
                          <th scope="col">Spesialis</th>
                          <th scope="col">Tingkat Jabatan</th>
                          <th scope="col">Email</th>
                          <th scope="col">Terdaftar</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dtLaporan as $item)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->pelamar->nama_pelamar }}</td>
                            <td>{{ $item->lowongan->namalowongan }}</td>
                            <td>{{ $item->lowongan->spesialis }}</td>
                            <td>{{ $item->lowongan->tingkatjabatan }}</td>
                            <td>{{ $item->pelamar->email }}</td>
                            <td>{{ $item->created_at }}</td>
                          <td><a href="img/uploads/lamaran/{{ $item->portofolio_pelamar }}"><button type="button" class="btn btn-primary btn-sm">Lihat</button></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
            <div class="col-md-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </section>
@endsection