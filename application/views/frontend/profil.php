<div class="session" data-alert="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="container">
    <h6 class="h4 text-black-50 mt-3 ml-2"><i class="fas fa-user mr-2"></i><?= $title; ?></h6>
    <hr class="my-2">
    <div class="row">
        <div class="col-lg">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-profil-tab" data-toggle="tab" href="#nav-profil" role="tab"
                        aria-controls="nav-profil" aria-selected="false">Profil Saya</a>
                    <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab"
                        aria-controls="nav-status" aria-selected="false">Status Lamaran</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab">
                <div class="card mt-1">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td>: <?= $user['nama_lengkap']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">No. KTP(NIK)</th>
                                    <td>: <?= $user['nik'] ? $user['nik'] : "<span class='badge badge-warning'>Belum Lengkap</span>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">No. Handphone</th>
                                    <td>: <?= $user['phone'] ? $user['phone'] : "<span class='badge badge-warning'>Belum Lengkap</span>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td>: <?= $user['jenis_kelamin'] ? $user['jenis_kelamin'] : "<span class='badge badge-warning'>Belum Lengkap</span>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>: <?= $user['email']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Tempat Tinggal</th>
                                    <td>: <?= $user['alamat'] ? $user['alamat'] : "<span class='badge badge-warning'>Belum Lengkap</span>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat & Tanggal Lahir</th>
                                    <td>: <?= $user['tempat_lahir'] && $user['tanggal_lahir'] ? $user['tempat_lahir']. ', ' .$user['tanggal_lahir'] : "<span class='badge badge-warning'>Belum Lengkap</span>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Umur</th>
                                    <td>:
                                    <?php 
                                        $tgl_lahir = $user['tanggal_lahir'];
                                        if (!$tgl_lahir) {
                                            echo "<span class='badge badge-warning'>Tanggal lahir tidak diketahui</span>";
                                        }else {
                                            $lahir = new DateTime($user['tanggal_lahir']);
                                            $tanggal = new DateTime();
                                            $umur = $tanggal->diff($lahir);
                                            echo $umur->y . " Tahun";
                                        }
                                    ?>
                                    </td>
                                </tr>

                            </table>
                            <button class="btn btn-sm btn-success ml-2 font-weight-bold" data-toggle="modal" data-target="#editProfil" id="btnEdit" data-email="<?= $user['email']; ?>"><span><i class="fas fa-pen fa-fw mr-1"></i>Ubah Profil</span></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                    <div class="card mt-1">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aperiam, nisi molestias quae ad sed minus alias? Dolor odit quo doloremque possimus nihil error, eius necessitatibus voluptatibus nesciunt eum iusto?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
