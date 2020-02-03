    <!-- Image and text -->
    <!-- <nav class="navbar navbar-expand bg-white navbar-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>vendor\img\logo.png" height="40" class="d-inline-block align-top" alt="">
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lihat Lowongan</a>
            </li> -->
    <!-- Dropdown -->
    <!-- <?php if($email):?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Home</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <button class="btn btn-primary" href="#">Login</button>
                </li>
            <?php endif; ?>
        </ul>
    </nav> -->
    <nav class="navbar navbar-expand-md bg-white shadow-lg sticky-top bg-white rounded">
        <div class="container">
            <a class="navbar-brand" href"#" >
                <img src="<?= base_url(); ?>vendor\img\logo.png" height="40">
            </a>
            <button class="navbar-toggler" type="button" style="border-color:#000; margin-top: -7px;"
                data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive"
                style="width: 100%; background-color:#FFFFFF; margin: 0 -20px;">
                <ul class="navbar-nav ml-auto" style="font-size: 14px; padding: 6px;">
                    <li class="nav-item  active">
                        <a class="nav-link font-weight-500" href="#">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded js-scroll-trigger font-weight-500" href="#">LOWONGAN TERSEDIA</a>
                    </li>
                    <?php if($email): ?>
                    <li class="nav-item">
                        <a class="nav-link font-weight-500"
                            href="#">FORM KANDIDAT</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"
                            class="nav-link font-weight-500">
                            PEMBERITAHUAN<span class="badge badge-danger font-weight-500">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  font-weight-500" href="#" id="link_logout">KELUAR</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item  ">
                        <a class="nav-link font-weight-500"
                            href="#">MASUK</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"
                            class="nav-link font-weight-500">
                            DAFTAR<span class="badge badge-danger font-weight-500">0</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>