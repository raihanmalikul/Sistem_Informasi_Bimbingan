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
                 <center>
                     <h5 class="card-header">Form Presensi Bimbingan</h5>
                 </center>
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
                                 <?php if ($count_mhs1 == 1) : ?>
                                     <tr>
                                         <th style="text-align: center;" colspan="6" scope="row">No Data Available</th>
                                     </tr>
                                 <?php else : ?>
                                     <?php if ($tes['materi'] == "") : ?>
                                     <?php else : ?>
                                         <tr>
                                             <th scope="row"><?= $no++  ?></th>
                                             <td><?= $tes['tanggal']; ?></td>
                                             <td><?= $tes['materi']; ?></td>
                                             <td width="200px"><img style="width: 100px;" src="<?= base_url('assets/File/tandatangan_dosen/') . $tes['paraf_dosen'];  ?>"></td>

                                         </tr>
                                     <?php endif; ?>
                                 <?php endif; ?>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ============================================================== -->
 <!-- end main wrapper -->