<form method="post" action="<?= base_url('auth'); ?>" class="form-signin">
    <div class="logo-bg text-center">
        <img class="mb-3" src="<?= base_url(); ?>vendor\img\logo.png" alt="" height="80">
        <h1 class="h5 mb-2">Centratama Group E-Recruitment</h1>
        <div class="alert alert-primary" role="alert">
            Silahkan login dengan email yang sudah anda daftarkan
        </div>
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="form-label-group">
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Alamat email" autofocus>
        <label for="inputEmail">Alamat Email</label>
        <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
    </div>

    <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Kata sandi">
        <label for="inputPassword">Kata sandi</label>
        <?= form_error('password', '<p class="text-danger">', '</p>'); ?>
    </div>
    <button class="btn btn-blue btn-block text-white mb-2" type="submit">Sign in</button>
    <a href="<?= base_url(); ?>auth/reg">Belum punya akun? Daftar disini!</a><br>
    <a href="#">Lupa password?</a>
</form>
