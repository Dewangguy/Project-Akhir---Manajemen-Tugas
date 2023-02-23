@extends('layout.main')
@section('content')



<div class="card mb-3" >
    <img style="max-height: 200px; object-fit: cover;" src="https://img.freepik.com/free-vector/abstract-low-poly-orange-yellow-background_1017-32111.jpg?w=2000" class="card-img-top" alt="...">
    <div class="row">
      <div class="col-11">
        <div class="card-body">
        <h4 class="card-title text-dark">{{$k->nama_kelas}}</h4>
        <h3 class="card-text text-dark">{{$k->code_kelas}}</h3>
      </div>
  </div>
  <div class="col-1 mt-4">
    <li class="nav-item dropdown no-arrow d-flex">
      <span class="mt-2"></span><a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="/assignment/{{$k->  id}}">
                Tambah Tugas
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#joinkelas">
                Hapus
            </a>
        </div>
      </li>
  </div>
</div>
</div>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            @foreach ($k->tugas as $k)
            <button class="btn btn-block text-left text-dark" type="" data-toggle="collapse" data-target="#collapseOne-{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                <div class="row">
                    <div class="col-10">
                        <span class="mr-3" style="font-size: 38px;"><i class="fas fa-file-alt"></i></span><span></span> {{$k->nama_tugas}}
                    </div>
                    <div class="col pt-2">
                         <li class="nav-item dropdown no-arrow d-flex">
                            <span class="mt-2">{{$k->due_date}}</span><a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right shadow animated-grow-in"
                                  aria-labelledby="userDropdown">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edittugas">
                                      Edit
                                  </a>
                                  <a class="dropdown-item" href="{{route('tugas.hapus',$k->id)}}" >
                                      Hapus
                                  </a>
                              </div>
                            </li>
                    </div>
                  </div>
                </button>
                <div id="collapseOne-{{$loop->iteration}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                     Posted 20 Februari 
                  </div>
                </div>
                @endforeach
        </h2>
      </div>
    </div>
    </div>
    
@endsection