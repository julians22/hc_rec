<div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
        <div class="row text-monospace">
            <div class="col-lg-4 col-xs-12 about-company">
                <img src="<?= base_url(); ?>/vendor/img/logo.png" alt="" class="ml-n2 mb-2" height="60">
                <br>
                <p class="pr-5">PT. Centratama Group, TBK <br>The country’s trusted telecommunications infrastructure
                    provider</p>
                <p>
                    <a href="#"><i class="fab fa-facebook-square fa-lg mr-1"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg mr-1"></i></a></a>
                    <a href="#"><i class="fab fa-instagram-square fa-lg mr-1"></i></a></a>
                    <a href="#"><i class="fab fa-youtube-square fa-lg"></i></a>
                </p>
            </div>
            
            <div class="col-lg-4 col-xs-12 location">
                <h4 class="mt-lg-0 mt-sm-4">Alamat</h4>
                <Jl.>TCC Batavia Tower One 16th & 19th Floor, <br>Jl. KH. Mas Mansyur Kav. 126, <br> Jakarta Pusat, DKI
                    Jakarta 10220, <br> Indonesia</p>
                    <p class="mb-0"><i class="fas fa-phone-square-alt fa-lg mr-3"></i>+62 21 2952 9404</p>
                    <p class="mb-0"><i class="fas fa-envelope fa-lg mr-3"></i>cti@centratamagroup.com</p>
                    <p class="mb-0"><i class="fas fa-headset fa-lg mr-3"></i>1500 251</p>
                    <p><i class="fas fa-question-circle fa-lg mr-3"></i>helpdesk@centratamagroup.com</p>
            </div>

            <div class="col-lg-4 col-xs-12">
                <iframe class="embed-responsive-item" width="360" height="240" src="https://www.youtube.com/embed/ry5HFIeQtjk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row mt-5 mb-n5">
            <div class="col copyright">
                <p class=""><small class="text-white-50">© 2020. Julian</small></p>
            </div>
        </div>
    </div>
</div>
<?php $this->uri->segment(2) == 'profil' ? $this->load->view('frontend/particles/modalOnprofil') : ''; ?>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="<?= base_url(); ?>vendor\twbs\bootstrap\dist\js\bootstrap.min.js"></script>
<script src="<?= base_url(); ?>vendor\jquery-confirm\dist\jquery-confirm.min.js"></script>
<script src="<?= base_url(); ?>vendor\js\alertScript.js"></script>
<script src="<?= base_url(); ?>vendor\js\jquery.accordion.js"></script>
<script src="<?= base_url(); ?>vendor\LineProgressbar\jquery.lineProgressbar.js"></script>
<script src="<?= base_url(); ?>vendor\js\progres.js"></script>
<script src="<?= base_url(); ?>vendor\datepicker\dist\datepicker.min.js"></script>
<script>
$(document).ready(function() {
    $('.accordion').accordion({
        transitionSpeed: 600,
        singleOpen: false
    });

    const d = new Date();
    $('#tgl_lahir').datepicker({
        date: '<?= date($user['tanggal_lahir']) ?>',
        format: 'yyyy-mm-dd',
        zIndex: 1151,
        offset: 1,
        startView: 2,
        endDate: d,
        autoHide: true
    });
});

const email = $('#btnEdit').data('email');
$('#editProfil').on('show.bs.modal', function () {
    $.ajax({
        url: '<?= base_url() ?>user/userByEmail',
        data: {email : email},
        method: 'get',
        dataType: 'json',
        success: function (data) {
            $('#nama').val(data.nama_lengkap);
            $('#jk').val(data.jenis_kelamin);
            $('#nik').val(data.nik);
            $('#no_hp').val(data.phone);
            $('#tmpt_lahir').val(data.tempat_lahir);
            $('#tgl_lahir').val(data.tanggal_lahir);
            $('#alamat').val(data.alamat);
        }
    }); 
});

</script>
</body>
</head>
