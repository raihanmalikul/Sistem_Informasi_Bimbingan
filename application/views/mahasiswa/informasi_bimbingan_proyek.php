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
                     <h2 class="pageheader-title">Informasi Dosen Pembimbing</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <?php
            $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
         JOIN user ON bimbingan . mhs_id = user . mhs_id 
         JOIN admin ON bimbingan . dos_id = admin . dos_id 
         JOIN user_data ON user . data_id = user_data . data_id 
         JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id WHERE user . mhs_id = " . $user['mhs_id'] . " ";
            $tes = $this->db->query($bimbingan)->row_array();
            ?>
         <!-- ============================================================== -->
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-header">
                     <center>
                         <h5 class="mb-0"> Pembimbing Proyek 2 Program Studi D3 Teknik Informatika Tahun Ajaran 2021-2022</h5>
                     </center>
                 </div>
                 <div class="card-body">
                     <table id="example2" class="table table-striped table-bordered" style="width: 100%;">
                         <tbody>
                             <tr>
                             <tr>
                                 <td width="200px">Nama Mahasiswa 1</td>
                                 <td><?= $user['name_mhs_1']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">NPM</td>
                                 <td><?= $user['npm_mhs_1']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">Nama Mahasiswa 2</td>
                                 <td><?= $user['name_mhs_2']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">NPM</td>
                                 <td><?= $user['npm_mhs_2']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">Kelas</td>
                                 <td><?= $user['kelas']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">Judul</td>
                                 <td><?= $user_data['judul_proyek']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">Dosen Pembimbing</td>
                                 <td><?= isset($tes['name']); ?></td>
                             </tr>
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