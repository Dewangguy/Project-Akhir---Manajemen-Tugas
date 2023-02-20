@extends('layout.main')
@section('content')
      @include('layout.tambahKelas')
      
     <div class="row">
      @foreach($kelas as $k)
        <div class="col-lg-4">
          <div class="card mb-4" style="width: 20rem;">
            <img style="max-height: 200px; object-fit: cover;" src="{{$k->foto_kelas}}" class="card-img-top" alt="">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-10">
              <h5 class="card-title">{{$k->nama_kelas}}</h5>
              <a href="/mapel" class="btn btn-primary">Go somewhere</a></div>
              <div class="col-lg-2">
                <li class="nav-item dropdown no-arrow d-flex">
                 <a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fas fa-ellipsis-v"></i>
                   </a>
                   <!-- Dropdown - User Information -->
                   <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                       aria-labelledby="userDropdown">
                       {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#tambahkelas">
                           Edit
                       </a> --}}
                       <form action="{{route('kelas.delete', $k->id)}}" method="post">
                        @csrf
                         <button class="dropdown-item" type="submit">
                             Hapus
                         </button>
                       </form>
                   </div>
                 </li>
              </div>
              
              </div>
            </div>
          </div>
        </div> 
        @endforeach
     </div>
@endsection