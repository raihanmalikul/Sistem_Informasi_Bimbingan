<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center fa-5x"><i class="fas fa-user-circle"></i><span class="splash-description">Selamat Datang, Silahkan Login!</span>
        </div>

        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                    <input class="form-control form-control-lg" name="user_id" id="user_id" type="text" placeholder="User ID" autocomplete="off">
                    <?= form_error('user_id', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button class="btn btn-block btn-primary" type="submit">Login</button>
            </form>
        </div>
        <div class="card-footer bg-white text-center">
            <p>Belum Memiliki Akun? <a href="<?= base_url('auth/registration') ?>" class="text-secondary">Register Disini!</a></p>
        </div>
    </div>
</div>