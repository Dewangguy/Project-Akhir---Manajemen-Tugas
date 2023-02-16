@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-2">
            <div class="card-body text-center">
                <img src="https://cdn.discordapp.com/attachments/835568551435829279/1062989914779684884/latest.png" width="300" class="rounded-circle img-thumbnail">
                <div class="mt-5"></div>
                <div class="form-group">
                    {{-- <label for="Nama">Foto Siswa</label><br> --}}
                    <input type="file" class="form-control-file" id="foto" name="foto">
                    <img src="" width="300" class="img-thumbnail" >
                </div>
                <h5>12 RPL</h5>
                <h5>Dewangga</h5>
                <h5>123421</h5>
            </div>
        </div>
        
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Change Password</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" fdprocessedid="ggadpl">
                </div>
                <div class="form-group">
                    <label for="Nama">Foto Siswa</label><br>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                    <img src="" width="300" class="img-thumbnail" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" fdprocessedid="wi84c">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" fdprocessedid="ykfm9f">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  <i class="input-helper"></i></label>
                </div>
                <button type="submit" class="btn btn-primary me-2" fdprocessedid="1u247ym">Submit</button>
                <button class="btn btn-light" fdprocessedid="62346">Cancel</button>
              </form>
            </div>
          </div>
    </div>
    
    
</div>
@endsection