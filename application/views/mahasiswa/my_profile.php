 <!-- wrapper  -->
 <!-- ============================================================== -->
 <div class="dashboard-wrapper">
 	<div class="container-fluid dashboard-content">
 		<!-- ============================================================== -->
 		<!-- pageheader -->
 		<!-- ============================================================== -->
 		<div class="row">
 			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 				<div class="page-header">
 					<h2 class="pageheader-title">My Profile</h2>
 					<hr>
 				</div>
 			</div>
 		</div>
 		<!-- ============================================================== -->
 		<!-- end pageheader -->
 		<!-- ============================================================== -->
 		<div class="row">
 			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
 				<div class="card">
 					<h5 class="card-header">Data Mahasiswa 1</h5>
 					<div class="card-body">
 						<?= $this->session->flashdata('message_mhs_edit_my_profile'); ?>
 						<form action="#" id="basicform" data-parsley-validate="">
 							<div class="form-group">
 								<label for="inputUserName">Nama Mahasiswa </label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-user"></i>
 									</span>
 									<input type="text" data-parsley-trigger="change" name="" required="" autocomplete="off" class="form-control" readonly value="<?= $user['name_mhs_1']; ?>">
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="inputNPM">NPM</label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-id-badge"></i>
 									</span>
 									<input type="text" data-parsley-trigger="change" name="" required="" autocomplete="off" class="form-control" readonly value="<?= $user['npm_mhs_1']; ?>">
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="inputKelas">Kelas</label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-id-card"></i>
 									</span>
 									<input type="text" data-parsley-trigger="change" name="" required="" autocomplete="off" class="form-control" readonly value="<?= $user['kelas_mhs_1']; ?>">
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="inputNoTelpon">No. Telpon</label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-phone"></i>
 									</span>
 									<input type="number" data-parsley-trigger="change" name="" required="" autocomplete="off" class="form-control" readonly value="<?= $user['no_telpon_mhs_1']; ?>">
 								</div>
 							</div>
 							<div class="row">
 								<div class="col-sm-6 pl-0">
 									<p class="text-center">
 										<button type="button" class="btn btn-space btn-primary" data-toggle="modal" data-target="#tambahModal1">Ubah Profil</button>
 									</p>
 								</div>
 							</div>
 						</form>
 					</div>
 				</div>
 				<div class="modal fade" id="tambahModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 					<div class="modal-dialog">
 						<div class="modal-content">
 							<div class="modal-header">
 								<h5 class="modal-title" id="exampleModalLabel">Edit Profil Mahasiswa 1</h5>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<form class="user" method="post" action="<?= base_url('mahasiswa/edit_my_profile') ?>">
 								<div class="modal-body">
 									<div class="form-group">
 										<label for="inputUserName">Nama Mahasiswa </label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-user"></i>
 											</span>
 											<input type="text" name="name_mhs_1" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?= $user['name_mhs_1']; ?>">
 											<input type="hidden" name="name_mhs_2" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?= $user['name_mhs_2']; ?>">
 										</div>
 									</div>
 									<div class=" form-group">
 										<label for="inputNPM">NPM</label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-id-badge"></i>
 											</span>
 											<input type="text" name="npm_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['npm_mhs_1']; ?>">
 											<input type="hidden" name="npm_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['npm_mhs_2']; ?>">
 										</div>
 									</div>
 									<div class=" form-group">
 										<label for="inputKelas">Kelas</label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-id-card"></i>
 											</span>
 											<input type="text" name="kelas_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['kelas_mhs_1']; ?>">
 											<input type="hidden" name="kelas_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['kelas_mhs_2']; ?>">
 										</div>
 									</div>
 									<div class="form-group">
 										<label for="inputNoTelpon">No.Telpon</label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-phone"></i>
 											</span>
 											<input type="number" name="no_telpon_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['no_telpon_mhs_1']; ?>">
 											<input type="hidden" name="no_telpon_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['no_telpon_mhs_2']; ?>">
 										</div>
 									</div>
 								</div>
 								<div class=" modal-footer">
 									<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
 									<button type="submit" class="btn btn-primary">Simpan</button>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>

 			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
 				<div class="card">
 					<h5 class="card-header">Data Mahasiswa 2</h5>
 					<div class="card-body">
 						<?= $this->session->flashdata('message_mhs_edit_my_profile'); ?>
 						<form action="#" id="basicform" data-parsley-validate="">
 							<div class="form-group">
 								<label for="inputUserName">Nama Mahasiswa </label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-user"></i>
 									</span>
 									<input type="text" data-parsley-trigger="change" name="" required="" autocomplete="off" class="form-control" readonly value="<?= $user['name_mhs_2']; ?>">
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="inputNPM">NPM</label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-id-badge"></i>
 									</span>
 									<input type="text" data-parsley-trigger="change" name="" required="" autocomplete="off" class="form-control" readonly value="<?= $user['npm_mhs_2']; ?>">
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="inputKelas">Kelas</label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-id-card"></i>
 									</span>
 									<input type="text" data-parsley-trigger="change" name="kelas_mhs_2" required="" autocomplete="off" class="form-control" readonly value="<?= $user['kelas_mhs_2']; ?>">
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="inputNoTelpon">No. Telpon</label>
 								<div class="input-group-prepend">
 									<span class="input-group-text" id="inputGroupPrepend">
 										<i class="fas fa-fw fa-phone"></i>
 									</span>
 									<input type="number" data-parsley-trigger="change" name="no_telpon_mhs_2" required="" autocomplete="off" class="form-control" readonly value="<?= $user['no_telpon_mhs_2']; ?>">
 								</div>
 							</div>
 							<div class="row">
 								<div class="col-sm-6 pl-0">
 									<p class="text-center">
 										<button type="button" class="btn btn-space btn-primary" data-toggle="modal" data-target="#tambahModal2">Ubah Profil</button>
 									</p>
 								</div>
 							</div>
 						</form>
 					</div>
 				</div>
 				<div class="modal fade" id="tambahModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 					<div class="modal-dialog">
 						<div class="modal-content">
 							<div class="modal-header">
 								<h5 class="modal-title" id="exampleModalLabel">Edit Profil Mahasiswa 2</h5>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<form class="user" method="post" action="<?= base_url('mahasiswa/edit_my_profile') ?>">
 								<div class="modal-body">
 									<div class=" form-group">
 										<label for="inputUserName">Nama Mahasiswa </label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-user"></i>
 											</span>
 											<input type="text" name="name_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['name_mhs_2']; ?>">
 											<input type="hidden" name="name_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['name_mhs_1']; ?>">
 										</div>
 									</div>
 									<div class=" form-group">
 										<label for="inputNPM">NPM</label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-id-badge"></i>
 											</span>
 											<input type="text" name="npm_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['npm_mhs_2']; ?>">
 											<input type="hidden" name="npm_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['npm_mhs_1']; ?>">
 										</div>
 									</div>
 									<div class=" form-group">
 										<label for="inputKelas">Kelas</label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-id-card"></i>
 											</span>
 											<input type="text" name="kelas_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['kelas_mhs_2']; ?>">
 											<input type="hidden" name="kelas_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['kelas_mhs_1']; ?>">
 										</div>
 									</div>
 									<div class="form-group">
 										<label for="inputNoTelpon">No.Telpon</label>
 										<div class="input-group-prepend">
 											<span class="input-group-text" id="inputGroupPrepend">
 												<i class="fas fa-fw fa-phone"></i>
 											</span>
 											<input type="number" name="no_telpon_mhs_2" required="" autocomplete="off" class="form-control" value="<?= $user['no_telpon_mhs_2']; ?>">
 											<input type="hidden" name="no_telpon_mhs_1" required="" autocomplete="off" class="form-control" value="<?= $user['no_telpon_mhs_1']; ?>">
 										</div>
 									</div>
 								</div>
 								<div class=" modal-footer">
 									<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
 									<button type="submit" class="btn btn-primary">Simpan</button>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 </div>
 <!-- ============================================================== -->
 <!-- end main wrapper -->