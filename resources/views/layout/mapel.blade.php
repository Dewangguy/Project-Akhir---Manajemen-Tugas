@extends('layout.main')
@section('content')

<div class="card mb-3" >
    <img style="max-height: 200px; object-fit: cover;" src="https://img.freepik.com/free-vector/abstract-low-poly-orange-yellow-background_1017-32111.jpg?w=2000" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title text-dark">{{$kelas->nama_kelas}}</h4>
      <h3 class="card-text text-dark">{{$kelas->code_kelas}}</h3>
    </div>
  </div>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            @foreach ($kelas->tugas as $k)
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
                              <!-- Dropdown - User Information -->
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
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Collapsible Group Item #2
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Some placeholder content for the second accordion panel. This panel is hidden by default.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Collapsible Group Item #3
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
        </div>
      </div>
    </div>
  </div>

@endsection