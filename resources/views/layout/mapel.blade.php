@extends('layout.main')
@section('content')



<div class="card mb-3" >
  <ul class="nav justify-content-center mb-2 mt-2">
    <li class="nav-item">
      <a class="nav-link active" href="{{route('kelas.show', $k->id)}}">Appointment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('class.work', $k->id)}}">Classwork</a>
    </li>
  </ul>
    <img style="max-height: 200px; object-fit: cover;" src="{{$k->foto_kelas}}" class="card-img-top" alt="...">
    
    <div class="row">
      <div class="col-11">
        <div class="card-body">
        <h4 class="card-title text-dark">{{$k->nama_kelas}}</h4>
        @if ($k->user_id == auth()->user()->id)
        <h3 class="card-text text-dark">{{$k->code_kelas}}</h3>
        @endif
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
            <a class="dropdown-item" href="/assignment/{{$k->id}}">
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
                <div id="collapseOne-{{$loop->iteration}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <form action="{{route('kirim.tugas')}}" method="post">
                  <div class="card-body">
                    <div class="input-group mb-3">
                        @csrf
                        <input type="hidden" value="{{$k->id}}" name="tugas">
                        <input type="text" class="form-control" placeholder="Link" name="link" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="submit" id="button-addon2">Submit</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                @endforeach
        </h2>
      </div>
    </div>
    </div>
    
@endsection