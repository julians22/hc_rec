<div class="container-fluid">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>vendor\img\hero2.png" class="d-block w-100" width="40" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>vendor\img\hero1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>vendor\img\hero3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mt-3 mb-5">
    <h4 class="text-center">Lowongan Tersedia</h4>
    <hr>
    <div data-accordion-group id="lowongan">
        <div class="accordion" data-accordion>
            <div data-control class="pointer"><span class="badge badge-info text-uppercase">Magang/Paruh Waktu</span>
            </div>
            <div data-content>
                <div>
                    <h6><a href="">Programmer Intern</a></h6>
                    <p>Membuat aplikasi / memperbaharui sistem yang dibutuhkan oleh perusahaan</p>
                </div>
                <div>
                    <h6><a href="">Teknisi</a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, blanditiis.</p>
                </div>
            </div>
        </div>
        <!-- <div class="accordion" data-accordion>
            <div data-control>Control</div>
            <div data-content>
                <div>Row</div>
                <div>Row</div>
                <div>Row</div>
            </div>
        </div> -->
    </div>
</div>
