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
            <div class="col-md-12">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td><button type="button" class="btn btn-primary btn-sm">Lihat</button></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@fat</td>
                          <td><button type="button" class="btn btn-primary btn-sm">Lihat</button></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@fat</td>
                          <td><button type="button" class="btn btn-primary btn-sm">Lihat</button></td>
                        </tr>
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