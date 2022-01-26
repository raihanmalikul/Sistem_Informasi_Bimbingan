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
                     <h2 class="pageheader-title">Presensi Bimbingan Proyek</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-header">
                     <center>
                         <h5 class="mb-0">Bimbingan Kegiatan Proyek</h5>
                     </center>
                 </div>
                 <div class="card-body">
                     <table id="example2" class="table table-striped table-bordered" style="width:100%">
                         <tbody>
                             <tr>
                                 <td width="200px">Nama Mahasiswa</td>
                                 <td><?= $mhs['name_mhs_1']; ?></td>
                             </tr>
                             <tr>
                                 <td>NPM</td>
                                 <td><?= $mhs['npm_mhs_1']; ?></td>
                             </tr>
                             <tr>
                                 <td>Nama Mahasiswa</td>
                                 <td><?= $mhs['name_mhs_2']; ?></td>
                             </tr>
                             <tr>
                                 <td>NPM</td>
                                 <td><?= $mhs['npm_mhs_2']; ?></td>
                             </tr>
                             <tr>
                                 <td>Judul Proyek</td>
                                 <td><?= $mhs['judul_proyek']; ?></td>
                             </tr>
                     </table>
                     <div class="card-body">
                         <a type="button" class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i>Tambah Bukti Bimbingan</a>
                         <h4 class="card-title">Presensi Bimbingan</h4>
                         <br>
                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th scope="col-lg-2">No</th>
                                     <th scope="col">Tanggal Bimbingan</th>
                                     <th scope="col">Catatan Kemajuan Materi</th>
                                     <th scope="col">Paraf Dosen Pembimbing</th>
                                     <th scope="col">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1; ?>
                                 <?php foreach ($mhs1 as $tes) : ?>
                                     <tr>
                                         <th scope="row"><?= $no++  ?></th>
                                         <td><?= $tes['tanggal']; ?></td>
                                         <td><?= $tes['materi']; ?></td>
                                         <td><img width="10%" src="<?= base_url('assets/File/tandatangan_dosen/') . $tes['paraf_dosen'];  ?>"></td>
                                         <td width="160">
                                             <a href="<?= base_url('dosen/detail_Persensi_bimbingan_edit/'); ?><?= $tes['id']; ?>" type="button" class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal<?= $tes['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?= base_url('dosen/detail_Persensi_bimbingan_hapus/'); ?><?= $tes['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Tambah Bukti Bimbingan</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <form class="user" method="post" action="<?= base_url('dosen/detail_Persensi_bimbingan_tambah/') . $mhs['user_id'] ?>">
                                     <input type="hidden" name="berkas_bimbingan_id" value="<?= $mhs['berkas_bimbingan_id']; ?>">
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Tanggal Bimbingan</label>
                                         <input type="date" name="tanggal" class="form-control" id="recipient-name">
                                     </div>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Catatan Kemajuan Materi</label>
                                         <input type="text" name="materi" class="form-control" id="recipient-name">
                                     </div>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Paraf Dosen Pembimbing</label>
                                         <input type="text" name="paraf_dosen" readonly value="<?= $mhs['tanda_tangan_digital']; ?>" class="form-control" id="recipient-name">
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

                 <!-- MODAL EDIT -->

                 <?php foreach ($mhs1 as $ts) : ?>
                     <div class="modal fade" id="editModal<?= $ts['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Edit Bukti Bimbingan</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="user" method="post" action="<?= base_url('dosen/detail_Persensi_bimbingan_edit/') ?><?= $ts['id']; ?>">
                                         <input type="hidden" name="berkas_bimbingan_id" value="<?= $ts['berkas_bimbingan_id']; ?>">
                                         <div class="form-group">
                                             <label for="recipient-name" class="col-form-label">Tanggal Bimbingan</label>
                                             <input type="text" class="form-control" name="tanggal" id="recipient-name" value="<?= $ts['tanggal']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="recipient-name" class="col-form-label">Catatan Kemajuan Materi</label>
                                             <input type="text" class="form-control" name="materi" id="recipient-name" value="<?= $ts['materi']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="recipient-name" class="col-form-label">Paraf Dosen Pembimbing</label>
                                             <input type="text" class="form-control" name="paraf_dosen" id="recipient-name" value="<?= $ts['paraf_dosen']; ?>">
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
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
     <!-- ============================================================== -->
     <!-- end main wrapper -->