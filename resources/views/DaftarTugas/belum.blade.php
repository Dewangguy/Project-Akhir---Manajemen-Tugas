@extends('layout.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                   Submited 
                </div>
                <div class="card-body text-center">
                                  <table class="table table-responsive table-striped">
                                    <thead>
                                        <td>#</td>
                                        <td>Mapel</td>
                                        <td>action</td>
                                    </thead>
                                    
                                    <tr>
                                        <td>1</td>
                                        <td>Agama</td>
                                        <td> <a href="/mapel" class="btn btn-primary text-light">done</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>pkn</td>
                                        <td> <a href="/mapel" class="btn btn-primary text-light">done</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>indo</td>
                                        <td> <a href="/mapel" class="btn btn-primary text-light">done</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
    </div>
                </div>

@endsection