
@extends('layout.main')
@section('content')
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                <form action="{{route('assignment.store')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="judul" class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control" name="nama_tugas" id="judul">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi Tugas</label>
                    <textarea name="deskripsi_tugas" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                      <label for="tanggal" class="form-label">Due Date</label>
                        <input class="form-control" type="date" name="due_date" id="tanggal">
                  <br>
                  <input type="hidden" name="kelas_id" value="{{$id}}">
                  <button type="submit" class="btn btn-dark float-end">Submit</button>
                </form>
                  </div>
              </div>
          </div>
      </div>
@endsection
@section('js')
<script>
  $(document).ready(function() {
  $('#deskripsi').summernote({
    height: 300,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: true 
  });
});
</script>
@endsection