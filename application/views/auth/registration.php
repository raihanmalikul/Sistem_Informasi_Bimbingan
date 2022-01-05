    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="mb-1">Form Registrasi</h3>
                <p>Silahkan Masukan Data Dengan Benar!</p>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="name_mhs_1" placeholder="Nama Mahasiswa 1" autocomplete="off">
                        <?= form_error('name_mhs_1', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="npm_mhs_1" placeholder="NPM Mahasiswa 1" autocomplete="off">
                        <?= form_error('npm_mhs_1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <hr>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="name_mhs_2" placeholder="Nama Mahasiswa 2" autocomplete="off">
                        <?= form_error('name_mhs_2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="npm_mhs_2" placeholder="NPM Mahasiswa 2" autocomplete="off">
                        <?= form_error('npm_mhs_2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <hr>
                    <div class="form-group">
                        <select class="form-control" id="kelas" name="kelas">
                            <option disabled selected value>Kelas</option>
                            <option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
                            <option value="D3 Teknik Informatika 2b">D3 Teknik Informatika 2B</option>
                            <option value="D3 Teknik Informatika 2c">D3 Teknik Informatika 3A</option>
                        </select>
                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <hr>
                    <div class="form-group">
                        <select class="form-control" id="katagori_proyek" name="katagori_proyek">
                            <option disabled selected value>Kategori Proyek</option>
                            <option value="Proyek 1">Proyek 1</option>
                            <option value="Proyek 2">Proyek 2</option>
                        </select>
                        <?= form_error('katagori_proyek', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleInputId_User" placeholder="User ID" name="user_id">
                            <?= form_error('user_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Password" name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                    </div>
                </div>
            </form>
            <div class="card-footer bg-white text-center">
                <p>Sudah Memiliki Akun? <a href="<?= base_url('auth') ?>" class="text-secondary">Login Disini!</a></p>
            </div>
        </div>
    </div>