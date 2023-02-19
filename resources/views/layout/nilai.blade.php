@extends('layout.main')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Daftar Murid</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <form action="" method="post">
                                        @csrf
                                        <td><input class="form-control" placeholder="0/100" min="0" max="100" type="number" name="nilai" id="nilai"></td>
                                        <td><button class="btn btn-primary" type="submit">Submit</button></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection