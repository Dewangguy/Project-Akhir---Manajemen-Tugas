
@extends('layout.main')
@section('content')
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                  <div class="form-group">
                    <label for="judul" class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control" name="nama_tugas" id="judul">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi Tugas</label>
                    <textarea name="deskripsi_tugas" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" name="kelas_id" id="kelas">
                          <option selected>Pilih Kelas</option>
                          @foreach ($kelas as $k)
                          <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="col">
                      <label for="tanggal" class="form-label">Due Date</label>
                        <input class="form-control" type="date" name="tanggal" id="tanggal">
                    </div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-dark float-end" value="submit">Submit</button>
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