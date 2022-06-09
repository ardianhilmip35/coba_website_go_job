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
                        @php $no = 1; @endphp
                        @foreach ($dtLaporan as $index => $item)
                        @if ($item->lowongan->users_id == Auth::user()->id)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item->pelamar->nama_pelamar }}</td>
                            <td>{{ $item->lowongan->namalowongan }}</td>
                            <td>{{ $item->lowongan->spesialis }}</td>
                            <td>{{ $item->lowongan->tingkatjabatan }}</td>
                            <td>{{ $item->pelamar->email }}</td>
                            <td>{{ $item->created_at }}</td>
                          <td><a href="{{$item->portofolio_pelamar }}"><button type="button" class="btn btn-primary btn-sm">Lihat</button></a></td>
                          </tr>
                        @endif
                        @endforeach
                      </tbody>
                </table>
                {{ $dtLaporan->links() }}
          </div>
    </section>
@endsection