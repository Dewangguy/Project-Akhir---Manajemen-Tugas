@extends('layout.main')
@section('content')


<div class="card mb-3" >
    <img style="max-height: 200px; object-fit: cover;" src="https://img.freepik.com/free-vector/abstract-low-poly-orange-yellow-background_1017-32111.jpg?w=2000" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title text-dark">{{$k->nama_kelas}}</h4>
      <p class="card-text">{{$k->code_kelas}}</p>
    
      <div class="accordion" id="accordionExample">

        @foreach ($k->tugas as $t)
            
        <div class="card mt-3">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-{{$t->id}}" aria-expanded="false" aria-controls="collapseTwo">
                {{$t->nama_tugas}}
              </button>
            </h2>
          </div>
          <div id="collapseTwo-{{$t->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              {!!$t->deskripsi_tugas !!}
            </div>
          </div>
        </div>
    
        @endforeach
    
    </div>
  </div>

  </div>

@endsection