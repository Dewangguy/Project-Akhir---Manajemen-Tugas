<div class="modal fade" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to change?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('profile.update', auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="name" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{auth()->user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto Pengguna</label>
                        <input type="file" class="form-control" name="user_profile" id="foto">
                    </div>
                </div>
                <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="editpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to change?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pass.update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="pass" class="form-label">Password Lama</label>
                            <input type="password" class="form-control" name="old_pass" id="pass">
                        </div>
                        <div class="form-group">
                            <label for="pass2" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" name="password" id="pass2">
                        </div>
                </div>
                <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>