 <!-- wrapper  -->
 <!-- ============================================================== -->
 <div class="dashboard-wrapper">
     <div class="container-fluid dashboard-content">
         <!-- ============================================================== -->
         <!-- pageheader -->
         <?php
            $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
         JOIN user ON bimbingan . mhs_id = user . mhs_id 
         JOIN admin ON bimbingan . dos_id = admin . dos_id 
         JOIN user_data ON user . data_id = user_data . data_id 
         JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id WHERE user . mhs_id = " . $user['mhs_id'] . " ";
            $tes = $this->db->query($bimbingan)->result_Array();
            ?>
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
                 <h5 class="card-header">Pelaksanaan Bimbingan</h5>
                 <div class="card-body">
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th scope="col-lg-2">No</th>
                                 <th scope="col">Tanggal Bimbingan</th>
                                 <th scope="col">Catatan Kemajuan Materi</th>
                                 <th scope="col">Paraf Dosen Pembimbing</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 1; ?>
                             <?php foreach ($tes as $tes) : ?>
                                 <tr>
                                     <th scope="row"><?= $no++  ?></th>
                                     <td><?= $tes['tanggal']; ?></td>
                                     <td><?= $tes['materi']; ?></td>
                                     <td> <img width="10%" src="<?= base_url('assets/File/tandatangan_dosen/') . $tes['paraf_dosen'];  ?>" alt=""></td>
                                 </tr>
                             <?php endforeach; ?>
                             <tr>
                                 <th scope="row" colspan="3">Total Bimbingan</th>
                                 <td colspan="2">-</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ============================================================== -->
 <!-- end main wrapper -->