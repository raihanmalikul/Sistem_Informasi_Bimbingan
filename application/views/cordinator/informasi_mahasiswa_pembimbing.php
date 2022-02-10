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
                     <h2 class="pageheader-title">Data Mahasiswa Pembimbing</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <?php


            $dos = "SELECT * FROM mhs_aktif";
            $jadidos = $this->db->query($dos)->result_Array();
            // var_dump($mhs);
            // die;
            ?>
         <!-- ============================================================== -->
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-body">
                     <button type="button" class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Dosen</button>
                     <h4 class="card-title">Data Mahasiswa Pembimbing</h4>
                     <br>
                     <?= $this->session->flashdata('message_cor_data_mhs'); ?>
                     <table class="table table-bordered">
                         <thead>
                             <tr class="text-center">
                                 <th scope="col-lg-2">No</th>
                                 <th scope="col">npm</th>
                                 <th scope="col">Nama</th>
                                 <th scope="col">kelas</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Aksi</th>
                             </tr>
                         </thead>
                         <?php $no = 1; ?>
                         <?php foreach ($jadidos as  $dos) : ?>
                             <tbody>
                                 <tr class="text-center">
                                     <th scope="row"><?= $no++  ?></th>
                                     <td><?= $dos['npm']; ?></td>
                                     <td><?= $dos['name']; ?></td>
                                     <td><?= $dos['kelas']; ?></td>
                                     <td><?= $dos['status']; ?></td>
                                     <td width="160">
                                         <a href="<?= base_url('cordinator/edit_mhs/') ?><?= $dos['id'] ?>" class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal<?= $dos['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                                         <a href="<?= base_url('cordinator/hapus_mhs/') ?><?= $dos['id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                     </td>
                                 </tr>
                             </tbody>
                         <?php endforeach; ?>
                     </table>
                 </div>

                 <!-- modal dambah -->
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
                                 <form class="user" method="post" action="<?= base_url('cordinator/registration_mhs') ?>">
                                     <div class="form-group">
                                         <label for="npm" class="col-form-label">Npm</label>
                                         <input type="number" name="npm" class="form-control" id="npm" placeholder="Npm">
                                     </div>
                                     <div class="form-group">
                                         <label for="name" class="col-form-label">Nama</label>
                                         <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                                     </div>
                                     <div class="form-group">
                                         <label for="kelas" class="col-form-label">Kelas</label>
                                         <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Kelas">
                                     </div>
                                     <div class="form-group">
                                         <label for="status" class="col-form-label">Status</label>
                                         <input type="text" name="status" class="form-control" id="status" placeholder="Status">
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

                 <!-- modal edit -->
                 <?php foreach ($jadidos as $ts) : ?>

                     <div class="modal fade" id="editModal<?= $ts['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Edit Data Dosen</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="user" method="post" action="<?= base_url('cordinator/edit_mhs/') ?><?= $ts['id'] ?>">
                                         <div class="form-group">
                                             <label for="npm" class="col-form-label">Npm</label>
                                             <input type="number" name="npm" class="form-control" id="npm" placeholder="Npm" value="<?= $ts['npm']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="name_ds" class="col-form-label">Nama</label>
                                             <input type="text" name="name" class="form-control" id="name_ds" placeholder="Nama" value="<?= $ts['name']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="kelas" class="col-form-label">Kelas</label>
                                             <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Kelas" value="<?= $ts['kelas']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="status" class="col-form-label">Status</label>
                                             <input type="text" name="status" class="form-control" id="status" placeholder="Status" value="<?= $ts['status']; ?>">
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
         <!-- ============================================================== -->
         <!-- end main wrapper -->