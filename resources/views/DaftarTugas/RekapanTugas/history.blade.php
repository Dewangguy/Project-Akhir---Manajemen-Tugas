@extends('layout.main')
@section('content')
    <div class="containere">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        History Tugas
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <td>#</td>
                                <td>Mapel</td>
                                <td>Tanggal</td>
                                <td>Action</td>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Agama</td>
                                <td>12 Januri 2022</td>
                                <td><a href="/" class="btn btn-primary text-light">Sudah</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bahasa Indonesia</td>
                                <td>1 Januri 2022</td>
                                <td><a href="/" class="btn btn-danger text-light">Belum</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection