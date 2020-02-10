<!-- Modal -->
<div class="modal fade" id="editProfil" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('user'); ?>/editprofil" method="post">
                <input type="email" name="email" value="<?= $user['email']; ?>" hidden>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm form-control-feedback" name="nama" id="nama">
                            <small class="font-italic form-text text-muted">Masukkan nama lengkap sesuai KTP</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control form-control-sm" name="jk" id="jk">
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nik">No. KTP (NIK)</label>
                            <input type="text" class="form-control form-control-sm" name="nik" id="nik">
                            <small class="font-italic form-text text-muted">masukkan 16 digit no KTP</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="no_hp">No. Handphone</label>
                            <input type="text" class="form-control form-control-sm" name="no_hp" id="no_hp">
                            <small class="font-italic form-text text-muted">cth: 08123456789</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tmpt_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input readonly type="text" class="form-control" name="tgl_lahir" id="tgl_lahir">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="alamat">Alamat Tempat Tinggal</label>
                            <textarea class="form-control form-control-sm" name="alamat" id="alamat" rows="3"></textarea>
                            <small class="font-italic form-text text-muted">Masukkan alamat tempat tinggal anda saat ini</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary font-weight-bold" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-sm btn-info font-weight-bold">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>