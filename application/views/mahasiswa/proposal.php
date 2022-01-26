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
                     <h2 class="pageheader-title">Form Pengumpulan Proposal</h2>
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
                     <h5 class="mb-0">Status Pengumpulan</h5>
                 </div>
                 <div class="card-body">
                     <?= $this->session->flashdata('message_mhs_upload_proposal'); ?>
                     <table id="example2" class="table table-striped table-bordered" style="width:100%">
                         <tbody>
                             <tr>
                                 <td>Status Pengumpulan</td>
                                 <td><?= $setatus['status']; ?></td>
                             </tr>
                             <tr>
                                 <td>Batas Waktu</td>
                                 <td><?= $mhs['tanggal_pengumpulan_proposal']; ?></td>
                             </tr>
                     </table>
                     <hr>
                     <?php echo form_open_multipart('mahasiswa/upload_proposal'); ?>
                     <div class="form-group row">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right">Judul Proyek</label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <input type="text" required="" name="judul_proyek" placeholder="" class="form-control" value="<?= $user_data['judul_proyek']; ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan</label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <textarea required="" placeholder="" name="keterangan_judul" class="form-control"><?= $user_data['keterangan_judul']; ?> </textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right"></label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <label for="proposal_proyek" class="form-label"><?= $user_data['proposal_proyek']; ?></label>
                             <input type="file" required="" name="proposal_proyek" class="form-control" id="proposal_proyek">
                         </div>
                     </div>
                     <button type="submit" class="btn btn-primary btn-xs text-white float-right margin-right"><i class="fas fa-save"></i> Upload</button>
                 </div>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>

 <!-- ============================================================== -->
 <!-- end main wrapper -->