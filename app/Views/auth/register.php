<?= $this->extend('page_auth'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <h1>SIMPER <span class="no-bold">DSI</span></h1>
                        </a>
                    </div>
                    <div class="login-form">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <form action="<?= $action ?>" method="post">
                        <?= csrf_field() ?>
                            <div class="row form-group">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" id="USERNAME" name="USERNAME" placeholder="Username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group-btn">
                                        <select name="JABATAN" id="JABATAN" class="form-control w-100">
                                            <option value="0">Supervisor</option>
                                            <option value="1">Operator</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="password" id="PASSWORD" name="PASSWORD" placeholder="Password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="password" id="PASSWORD_CONF" name="PASSWORD_CONF" placeholder="Konfirmasi Password" class="form-control">
                                </div>
                            </div>
                            <!-- Fungsi Button -->
                            <button class="btn au-btn--block m-b-15 m-t-15 color-btn-start" type="submit">Daftar</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Sudah punya akun?
                                <a href="<?= base_url('masuk') ?>">Masuk!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>