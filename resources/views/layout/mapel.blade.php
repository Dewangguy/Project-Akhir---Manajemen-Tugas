@extends('layout.main')
@section('content')
<div class="row">
  <div class="col-lg-11">
      <div class="card card-rounded bg-danger">
        <div class="card-body">
          <div class="d-sm-flex justify-content-between align-items-start">
            <div>
              <h4 class="card-title card-title-dash">Mengerjakan LKS</h4>
              <h5 class="card-subtitle card-subtitle-dash">Pendidikan Agama Islam</h5>
            </div>
            <div>
            </div>
          </div>
          <div>
            <canvas>
            </canvas>
          </div>
          <table class="table table-responsive">
            <tr>
              <td><h4>{{ date('d M Y') }}</h4></td>
          </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection