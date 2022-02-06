    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="container" style="margin-top: 230px;">
    	<div class="row justify-content-center">
    		<div class="col-7">
    			<div class="card">
    				<div class="card-header text-center">
    					<h3 class="mb-1">Form Registrasi</h3>
    					<p>Silahkan Masukan Data Dengan Benar!</p>
    				</div>
    				<form class="user" method="post" action="<?= base_url('auth/registration') ?>">
    					<div class="card-body">
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" name="name_mhs_1" value="<?= set_value('name_mhs_1') ?>" placeholder="Nama Mahasiswa 1" autocomplete="off">
    							<?= form_error('name_mhs_1', '<small class="text-danger pl-3">', '</small>'); ?>

    						</div>
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" name="npm_mhs_1" value="<?= set_value('npm_mhs_1') ?>" placeholder="NPM Mahasiswa 1" autocomplete="off">
    							<?= form_error('npm_mhs_1', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<div class="form-group">
    							<select class="form-control" value="<?= set_value('kelas_mhs_1') ?>" id="kelas_mhs_1" name="kelas_mhs_1">
    								<option disabled selected value>Kelas</option>
    								<option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
    								<option value="D3 Teknik Informatika 2B">D3 Teknik Informatika 2B</option>
    								<option value="D3 Teknik Informatika 3A">D3 Teknik Informatika 3A</option>
    							</select>
    							<?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<hr>
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" name="name_mhs_2" value="<?= set_value('name_mhs_2') ?>" placeholder="Nama Mahasiswa 2" autocomplete="off">
    							<?= form_error('name_mhs_2', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" name="npm_mhs_2" value="<?= set_value('npm_mhs_2') ?>" placeholder="NPM Mahasiswa 2" autocomplete="off">
    							<?= form_error('npm_mhs_2', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<div class="form-group">
    							<select class="form-control" value="<?= set_value('kelas_mhs_2') ?>" id="kelas_mhs_2" name="kelas_mhs_2">
    								<option disabled selected value>Kelas</option>
    								<option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
    								<option value="D3 Teknik Informatika 2B">D3 Teknik Informatika 2B</option>
    								<option value="D3 Teknik Informatika 3A">D3 Teknik Informatika 3A</option>
    							</select>
    							<?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<hr>
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" readonly name="katagori_proyek" value="Proyek 2" placeholder="katagori proyek" autocomplete="off">
    							<!-- <select class="form-control" id="katagori_proyek" name="katagori_proyek">
                                <option disabled selected value>Kategori Proyek</option>
                                <option value="Proyek 2">Proyek 2</option>
                            </select> -->
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
    							<button class="btn btn-block btn-primary" type="submit">Register Account</button>
    						</div>
    					</div>
    				</form>
    				<div class="card-footer bg-white text-center">
    					<p>Sudah Memiliki Akun? <a href="<?= base_url('auth') ?>" class="text-secondary">Login
    							Disini!</a></p>
    					<p><a href="<?= base_url('') ?>" class="text-secondary">Kembali Ke Halaman Utama</a></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>