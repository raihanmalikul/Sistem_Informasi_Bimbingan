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
                     <h2 class="pageheader-title">Detail Pengumpulan</h2>
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
                         <h5 class="mb-0">Detail Pengumpulan Proposal Proyek</h5>
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
                             <tr>
                                 <td>Keterangan</td>
                                 <td><?= $mhs['keterangan_judul']; ?></td>
                             </tr>
                             <tr>
                                 <td>File</td>
                                 <td>-</td>
                             </tr>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <!-- ============================================================== -->
     <!-- end main wrapper -->