<form action="<?= base_url(); ?>auth/reg" method="post" class="form-signin">
    <div class="text-center">
        <img class="mb-2" src="<?= base_url(); ?>vendor\img\logo.png" alt="" height="80">
        <h1 class="h5 mb-2">Centratama Group E-Recruitment</h1>
        <div class="alert alert-primary" role="alert">
            Silahkan isi data dengan benar
        </div>
    </div>

    <div class="form-label-group">
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Alamat email">
        <label for="inputEmail">Alamat email</label>
        <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
    </div>

    <div class="form-label-group">
        <input type="text" name="nama" id="inputName" class="form-control" placeholder="Nama lengkap">
        <label for="inputName">Nama lengkap</label>
        <?= form_error('nama', '<p class="text-danger">', '</p>'); ?>
    </div>

    <div class="form-label-group">
        <input type="password" name="password1" id="inputPassword" class="form-control" placeholder="Password">
        <label for="inputPassword">Password</label>
        <?= form_error('password1', '<p class="text-danger">', '</p>'); ?>
    </div>

    <div class="form-label-group">
        <input type="password" name="password2" id="inputPassword2" class="form-control" placeholder="Ulang Password">
        <label for="inputPassword2">Ulang password</label>
        <?= form_error('password2', '<p class="text-danger">', '</p>'); ?>
    </div>
    <button class="btn btn-lg btn-info btn-block mb-2" type="submit">Sign up</button>
    <a href="<?= base_url(); ?>auth">Login disini jika sudah mempunyai akun!</a><br>
    <a href="#">Lupa password?</a>
</form>