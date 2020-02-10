    <nav class="navbar navbar-expand-md navbar-inverse navbar-light shadow-sm sticky-top bg-white rounded">
        <div class="container">
            <a class="navbar-brand" href"#" >
                <img src="<?= base_url(); ?>vendor\img\logo.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive"
                style="width: 100%; background-color:#FFFFFF; margin: 0 -20px;">
                <ul class="navbar-nav ml-auto" style="font-size: 14px; padding: 6px;">
                    <li class="nav-item">
                        <a class="nav-link font-weight-500" href="<?= base_url(); ?>welcome">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded js-scroll-trigger font-weight-500" href="<?= base_url(); ?>welcome#lowongan">LOWONGAN TERSEDIA</a>
                    </li>
                    <?php if($user['email']): ?>
                    <li class="nav-item">
                        <a class="nav-link font-weight-500"
                            href="<?= base_url('user'); ?>/formKandidat">FORM KANDIDAT</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"
                            class="nav-link font-weight-500">
                            PEMBERITAHUAN<span class="badge badge-danger font-weight-500">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#" class="nav-link font-weight-500 dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user['nama_lengkap']; ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('user'); ?>">Profil</a>
                                <a class="dropdown-item" href="<?= base_url('auth'); ?>/logout">Logout</a>
                            </div>
                        </div>
                    </li>
                    <?php else: ?>
                    <li class="nav-item  ">
                        <a class="nav-link font-weight-500"
                            href="<?= base_url('auth'); ?>">MASUK</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('auth/reg'); ?>"
                            class="nav-link font-weight-500">
                            DAFTAR
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
