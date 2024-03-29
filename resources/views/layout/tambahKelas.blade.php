<div class="modal fade" id="tambahkelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to create?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('kelas.store')}}">
                    <div class="form-group">
                        <label for="kelas" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama_kelas" id="kelas">
                      </div>
                </div>
                <div class="modal-footer">
                      @csrf
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="joinkelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to join?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('kelas.join')}}">
                    @csrf
                      <div class="form-group">
                        <label for="kode" class="form-label">Kode Kelas</label>
                        <input type="text" class="form-control" name="code" id="kode">
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