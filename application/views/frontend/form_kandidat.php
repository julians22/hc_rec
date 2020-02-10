<div class="container">
    <h6 class="h4 text-black-50 mt-3 ml-2"><i class="far fa-file-alt mr-2"></i><?= $title; ?></h6>
    <hr class="my-2">
    <div class="card">
        <div class="card-body">
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <hr class="my-2">
            <form>
                <div class="container">
                    <div class="row" id="form1">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-sm" name="nama" id="nama" value="<?= $user['nama_lengkap']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="t_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control form-control-sm" name="t_lahir" id="t_lahir" value="<?= $user['tempat_lahir']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="text" class="form-control form-control-sm" name="tgl_lahir" id="tgl_lahir" value="<?= $user['tanggal_lahir']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nik">Nomor KTP</label>
                                <input type="text" class="form-control form-control-sm" name="nik" id="nik" value="<?= $user['nik']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat_1">Alamat Tempat Tinggal</label>
                                <textarea class="form-control form-control-sm" name="alamat_1" id="alamat_1" rows="3"><?= $user['alamat']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="alamat_2">Alamat Sesuai KTP</label>
                                <textarea class="form-control form-control-sm" name="alamat_2" id="alamat_2" rows="3"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select class="form-control form-control-sm" id="agama">
                                            <option selected disabled>Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status_nikah">Status Pernikahan</label>
                                        <select class="form-control form-control-sm" id="status_nikah">
                                            <option selected disabled>Pilih Status Pernikahan</option>
                                            <option value="menikah">Menikah</option>
                                            <option value="belum menikah">Belum Menikah</option>
                                            <option value="cerai">Cerai(Duda/Janda)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control form-control-sm" name="gender" id="gender" aria-selected="<?= $user['jenis_kelamin']; ?>">
                                            <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="goldar">Golongan Darah</label>
                                    <br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="goldar" id="goldar1"
                                            value="A">
                                        <label class="custom-control-label" for="goldar1">A</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="goldar" id="goldar2"
                                            value="B">
                                        <label class="custom-control-label" for="goldar2">B</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="goldar" id="goldar3"
                                            value="AB">
                                        <label class="custom-control-label" for="goldar3">AB</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="goldar" id="goldar4"
                                            value="O">
                                        <label class="custom-control-label" for="goldar4">O</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No. Telp. Rumah</label>
                                <input type="text" class="form-control form-control-sm" name="no_telp" id="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="no_hand">No. Handphone</label>
                                <input type="text" class="form-control form-control-sm" name="no_hand" id="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="npwp">Nomor NPWP</label>
                                <input type="text" class="form-control form-control-sm" name="npwp" id="npwp">
                            </div>
							<label>Sosial Media</label>
                            <div class="row">
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fab fa-facebook-f text-primary"></i></div>
										</div>
										<input type="text" name="facebook" class="form-control"	placeholder="Facebook">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fab fa-instagram text-primary"></i></div>
										</div>
										<input type="text" name="instagram" class="form-control" placeholder="Instagram">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fab fa-twitter text-primary"></i></div>
										</div>
										<input type="text" name="twitter" class="form-control" placeholder="Twitter">
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary" id="next">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
