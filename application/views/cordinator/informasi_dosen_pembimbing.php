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
                     <h2 class="pageheader-title">Data Dosen Pembimbing</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <?php


            $dos = "SELECT * FROM user JOIN admin
                ON user . dos_id  = admin . dos_id
                WHERE user . role_id = 2  ";
            $jadidos = $this->db->query($dos)->result_Array();
            // var_dump($mhs);
            // die;
            ?>
         <!-- ============================================================== -->
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-body">
                     <button type="button" class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Dosen</button>
                     <h4 class="card-title">Data Dosen Pembimbing</h4>
                     <br>
                     <?= $this->session->flashdata('message_cor_data_dosen'); ?>
                     <table class="table table-bordered" id="table">
                         <thead>
                             <tr class="text-center">
                                 <th scope="col-lg-2">No</th>
                                 <th scope="col">NIK</th>
                                 <th scope="col">Nama</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">No. Telpon</th>
                                 <th scope="col">Research Interest</th>
                                 <th scope="col">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 1; ?>
                             <?php foreach ($jadidos as  $dos) : ?>
                                 <tr class="text-center">
                                     <th scope="row"><?= $no++  ?></th>
                                     <td><?= $dos['NIK']; ?></td>
                                     <td><?= $dos['name']; ?></td>
                                     <td><?= $dos['email']; ?></td>
                                     <td><?= $dos['no_telpon']; ?></td>
                                     <td><?= $dos['research_interest']; ?></td>
                                     <td width="160">
                                         <a href="<?= base_url('cordinator/edit/') ?><?= $dos['dos_id'] ?>" class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal<?= $dos['dos_id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                                         <a href="<?= base_url('cordinator/hapus/') ?><?= $dos['dos_id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                     </td>
                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>

                 <!-- modal dambah -->
                 <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <form class="user" method="post" action="<?= base_url('cordinator/registration') ?>">
                                     <div class="form-group">
                                         <label for="NIK" class="col-form-label">NIK</label>
                                         <input type="text" name="NIK" class="form-control" id="NIK" placeholder="NIK">
                                     </div>
                                     <div class="form-group">
                                         <label for="name" class="col-form-label">Nama</label>
                                         <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                                     </div>
                                     <div class="form-group">
                                         <label for="email_ds" class="col-form-label">Email</label>
                                         <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <label for="no_telpon" class="col-form-label">No. Telpon</label>
                                         <input type="number" name="no_telpon" class="form-control" id="no_telpon" placeholder="08xxxxx">
                                     </div>
                                     <div class="form-group">
                                         <label for="research_interest" class="col-form-label">Research Interest</label>
                                         <input type="text" name="research_interest" class="form-control" id="research_interest" placeholder="Research Interest">
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input type="text" class="form-control form-control-user" name="user_id" id="user_id" placeholder="User ID">
                                         </div>
                                         <div class="col-sm-6">
                                             <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                         </div>
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

                     <div class="modal fade" id="editModal<?= $ts['dos_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Edit Data Dosen</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="user" method="post" action="<?= base_url('cordinator/edit/') ?><?= $ts['dos_id'] ?>">
                                         <div class="form-group">
                                             <label for="NIK" class="col-form-label">NIK</label>
                                             <input type="text" name="NIK" class="form-control" id="NIK" placeholder="NIK" value="<?= $ts['NIK']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="name_ds" class="col-form-label">Nama</label>
                                             <input type="text" name="name" class="form-control" id="name_ds" placeholder="Nama" value="<?= $ts['name']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="email_ds" class="col-form-label">Email</label>
                                             <input type="text" name="email" class="form-control" id="email_ds" placeholder="Email" value="<?= $ts['email']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="no_telpon" class="col-form-label">No. Telpon</label>
                                             <input type="number" name="no_telpon" class="form-control" id="no_telpon" placeholder="08xxxxx" value="<?= $ts['no_telpon']; ?>">
                                         </div>
                                         <div class="form-group">
                                             <label for="research_interest" class="col-form-label">Research Interest</label>
                                             <input type="text" name="research_interest" class="form-control" id="research_interest" placeholder="Research Interest">
                                         </div>
                                         <div class="form-group row">
                                             <div class="col-sm-6 mb-3 mb-sm-0">
                                                 <input type="text" class="form-control form-control-user" name="user_id" id="user_id" placeholder="User ID" value="<?= $ts['user_id']; ?>">
                                             </div>
                                             <div class="col-sm-6">
                                                 <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="masukan baru Password">
                                             </div>
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