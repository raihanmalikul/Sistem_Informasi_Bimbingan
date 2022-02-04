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
 					<h2 class="pageheader-title">Data Mahasiswa</h2>
 					<hr>
 				</div>
 			</div>
 		</div>
 		<!-- ============================================================== -->
 		<!-- end pageheader -->
 		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 			<div class="card">
 				<div class="card-body">
 					<button type="button" class="btn btn-primary text-white float-right" data-toggle="modal"
 						data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Mahasiswa</button>
 					<h4 class="card-title">Data Mahasiswa</h4>
 					<br>
 					<table class="table table-bordered">
 						<thead>
 							<tr class="text-center">
 								<th scope="col-lg-2">No</th>
 								<th scope="col">Nama</th>
 								<th scope="col">NPM</th>
 								<th scope="col">Kelas</th>
 								<th scope="col">No. Telpon</th>
 								<th scope="col">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr class="text-center">
 								<th rowspan="2">1</th>
 								<td>Aldo Dwie Rizky</td>
 								<td>1193005</td>
 								<td>D3 Teknik Informatika 3A</td>
 								<td>08xxxxx</td>
 								<td width="160" rowspan="2">
 									<a href="" class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit</a>
 									<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
 								</td>
 							</tr>
 							<tr class="text-center">
 								<td>Raihan Malikul Mulki</td>
 								<td>1193025</td>
 								<td>D3 Teknik Informatika 3A</td>
 								<td>08xxxxx</td>
 							</tr>
 						</tbody>
 					</table>
 				</div>

 				<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 					<div class="modal-dialog">
 						<div class="modal-content">
 							<div class="modal-header">
 								<h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<div class="modal-body">
 								<form class="user" method="post" action="">
 									<div class="form-group">
 										<input class="form-control form-control-lg" type="text" name="name_mhs_1"
 											value="" placeholder="Nama Mahasiswa 1"
 											autocomplete="off">
 									
 									</div>
 									<div class="form-group">
 										<input class="form-control form-control-lg" type="text" name="npm_mhs_1"
 											value="" placeholder="NPM Mahasiswa 1"
 											autocomplete="off">
 									
 									</div>
 									<div class="form-group">
 										<select class="form-control" value="" id="kelas"
 											name="kelas">
 											<option disabled selected value>Kelas</option>
 											<option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
 											<option value="D3 Teknik Informatika 2B">D3 Teknik Informatika 2B</option>
 											<option value="D3 Teknik Informatika 3A">D3 Teknik Informatika 3A</option>
 										</select>
 										
 									</div>
 									<hr>
 									<div class="form-group">
 										<input class="form-control form-control-lg" type="text" name="name_mhs_2"
 											value="" placeholder="Nama Mahasiswa 2"
 											autocomplete="off">
 									
 									</div>
 									<div class="form-group">
 										<input class="form-control form-control-lg" type="text" name="npm_mhs_2"
 											value="" placeholder="NPM Mahasiswa 2"
 											autocomplete="off">
 									
 									</div>
 									<div class="form-group">
 										<select class="form-control" value="" id="kelas"
 											name="kelas">
 											<option disabled selected value>Kelas</option>
 											<option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
 											<option value="D3 Teknik Informatika 2B">D3 Teknik Informatika 2B</option>
 											<option value="D3 Teknik Informatika 3A">D3 Teknik Informatika 3A</option>
 										</select>
 										
 									</div>
 									<hr>
 									<div class="form-group row">
 										<div class="col-sm-6 mb-3 mb-sm-0">
 											<input type="text" class="form-control form-control-user"
 												id="exampleInputId_User" placeholder="User ID" name="user_id">
 											
 										</div>
 										<div class="col-sm-6">
 											<input type="password" class="form-control form-control-user"
 												id="exampleRepeatPassword" placeholder="Password" name="password">
 										
 										</div>
 									</div>
 									<div class="modal-footer">
 										<button type="button" class="btn btn-secondary"
 											data-dismiss="modal">Tutup</button>
 										<button type="submit" class="btn btn-primary">Simpan</button>
 									</div>
 								</form>
 							</div>
 						</div>
 					</div>

					 
				</div>
			</div>
			<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form class="user" method="post"
								action=" ">
							<div class="form-group">
								<input class="form-control form-control-lg" type="text" name="name_mhs_1"
									value="" placeholder="Nama Mahasiswa 1"
									autocomplete="off">
								
							</div>
							<div class="form-group">
								<input class="form-control form-control-lg" type="text" name="npm_mhs_1"
									value="" placeholder="NPM Mahasiswa 1"
									autocomplete="off">
								
							</div>
							<div class="form-group">
								<select class="form-control" value="" id="kelas"
									name="kelas">
									<option disabled selected value>Kelas</option>
									<option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
									<option value="D3 Teknik Informatika 2B">D3 Teknik Informatika 2B</option>
									<option value="D3 Teknik Informatika 3A">D3 Teknik Informatika 3A</option>
								</select>
								
							</div>
							<hr>
							<div class="form-group">
								<input class="form-control form-control-lg" type="text" name="name_mhs_2"
									value="" placeholder="Nama Mahasiswa 2"
									autocomplete="off">
								
							</div>
							<div class="form-group">
								<input class="form-control form-control-lg" type="text" name="npm_mhs_2"
									value="" placeholder="NPM Mahasiswa 2"
									autocomplete="off">
								
							</div>
							<div class="form-group">
								<select class="form-control" value="" id="kelas"
									name="kelas">
									<option disabled selected value>Kelas</option>
									<option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
									<option value="D3 Teknik Informatika 2B">D3 Teknik Informatika 2B</option>
									<option value="D3 Teknik Informatika 3A">D3 Teknik Informatika 3A</option>
								</select>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
						</form>
					</div>
				</div>
			</div>
