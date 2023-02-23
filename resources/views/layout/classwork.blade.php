@extends('layout.main')
@section('content')

    <div class="card">
      <ul class="nav justify-content-center mb-2 mt-2">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('kelas.show', $kelas->id)}}">Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('class.work', $kelas->id)}}">Classwork</a>
        </li>
      </ul>
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          @foreach ($kelas->tugas as $k)
            <button class="btn btn-block text-left text-dark" type="" data-toggle="collapse" data-target="#collapseOne-{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                <div class="row">
                  <div class="col-10">
                        <span class="mr-3" style="font-size: 38px; color:black;"><i class="fas fa-file-alt"></i></span><span style="color:black; font-weight:500">{{$k->nama_tugas}}</span> 
                        <br>
                      </div>
                      <div class="col pt-2">
                        <li class="nav-item dropdown no-arrow d-flex">
                          <span class="mt-2">{{$k->due_date}}</span><a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                          aria-labelledby="userDropdown">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#tambahkelas">
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#joinkelas">
                                    Hapus
                                  </a>
                                </div>
                              </li>
                            </div>
                          </div>
                          <span class="ml-5">{!!$k->deskripsi_tugas!!}</span>
                </button>
                @endforeach
  </div>
</div>

  
@endsection