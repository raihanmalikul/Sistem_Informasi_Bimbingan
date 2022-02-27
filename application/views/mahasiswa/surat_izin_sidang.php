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
                     <h2 class="pageheader-title">Surat Izin Sidang</h2>
                     <hr>
                     <?= $this->session->flashdata('message_mhs_tandatangan'); ?>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
         <style>
             .card {
                 margin: 0;
                 font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                 font-size: .8125rem;
                 font-weight: 400;
                 line-height: 1.5385;
                 color: #333;
                 text-align: left;
                 /* background-color: #eee */
             }
         </style>

         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-body">
                     <button class="btn btn-primary text-white" id="download"><i class="fas fa-download"></i> Download PDF</button>
                     <button class="btn btn-primary text-white" data-toggle="modal" data-target="#TandatanganDigitalMahasiswa1"><i class="fas fa-download"></i> Upload Tandatangan Digital Mahasiswa 1</button>
                     <button class="btn btn-primary text-white" data-toggle="modal" data-target="#TandatanganDigitalMahasiswa2"><i class="fas fa-download"></i> Upload Tandatangan Digital Mahasiswa 2</button>
                     <!-- <h4 class="card-title">Surat Persetujuan dan Permohonan Sidang</h4> -->
                     <br>
                     <hr>


                     <div class="row justify-content-center mt-50 mb-50">
                         <div class="col-md-8">
                             <div class="border">
                                 <div class="container" style="padding: 15px;" id="invoice">
                                     <div class="header" style="text-align: center;">
                                         <h3>PERSETUJUAN DAN PERMOHONAN SIDANG PROYEK</h3>
                                     </div>
                                     <br>
                                     <div class="name">
                                         <p>Saya sebagai Pembimbing mahasiswa tersebut dibawah ini:</p>
                                         <table style="margin-left: 10px;margin-top: -15px;">
                                             <tr>
                                                 <td width='250px'>Nama Mahasiswa 1/Mahasiswa 2</td>
                                                 <td>:</td>
                                                 <td><?= $user['name_mhs_1']; ?></td>
                                                 <td>/</td>
                                                 <td><?= $user['name_mhs_2']; ?></td>
                                             </tr>
                                             <tr>
                                                 <td>NPM 1/ NPM 2</td>
                                                 <td> :</td>
                                                 <td><?= $user['npm_mhs_1']; ?></td>
                                                 <td>/</td>
                                                 <td><?= $user['npm_mhs_2']; ?></td>
                                             </tr>
                                             <tr>
                                                 <td>Judul Proyek</td>
                                                 <td> :</td>
                                                 <td colspan="3">
                                                     <?php if (isset($user_data['judul_proyek'])) {
                                                            echo $user_data['judul_proyek'];;
                                                        } ?>
                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>Nama Pembimbing</td>
                                                 <td> :</td>
                                                 <td colspan="3">
                                                     <?php if (isset($mhs2['name'])) {
                                                            echo $mhs2['name'];;
                                                        } ?>
                                                 </td>
                                             </tr>
                                         </table>
                                         <br>
                                         <p>Menyatakan bahwa mahasiswa tersebut telah menyelesaikan Alat/Proyek <?= $user['persentase_apliksai']; ?>%. Adapun penulisan laporan proyek telah diselesaikan seluruhnya <?= $user['persentase_laporan']; ?>%</p>
                                         <p>Dengan demikian saya mengajukan mahasiswa tersebut untuk mengikuti sidang Proyek. Apabila ternyata pernyataan saya tersebut tidak benar, maka saya menyetujui penundaan sidang termasuk pembatalan sidang Proyek untuk mahasiswa bimbingan saya tersebut sesuai aturan yang berlaku.</p>
                                     </div>
                                     <br>
                                     <br>
                                     <div class="tabel-mk signature-container">
                                         <span class="signature">Bandung, <?= date('d F Y'); ?></span><br>
                                         <br>
                                         <br>
                                     </div>
                                     <br>
                                     <br>
                                     <br>
                                     <div class="row justify-content-center">
                                         <table style="margin-top: -15px; margin-left: 10px;">
                                         </table>
                                         <br>
                                         <br>
                                         <br>

                                         <table class="text-center">
                                             <tr>
                                                 <td style="vertical-align: bottom;"><img width="100px" src="<?= base_url('assets/File/Tanda_tangan_mhs/') . $user['tanda_tanga_digital_mhs_1']; ?>"></td>
                                                 <td rowspan="3" class="px-4"></td>
                                                 <td style="vertical-align: bottom;"><img width="100px" src="<?= base_url('assets/File/Tanda_tangan_mhs/') . $user['tanda_tanga_digital_mhs_2']; ?>"></td>
                                                 <td rowspan="3" class="px-4"></td>
                                                 <td><img width="100px" src="<?= base_url('assets/File/tandatangan_dosen/') . $user['tanda_tangan']; ?>"></td>
                                             </tr>
                                             <tr>
                                                 <td>(<?= $user['name_mhs_1']; ?>)</td>
                                                 <td>(<?= $user['name_mhs_2']; ?>)</td>
                                                 <td>(<?php if (isset($mhs2['name'])) {
                                                            echo $mhs2['name'];;
                                                        } ?>)</td>
                                             </tr>
                                             <tr>
                                                 <td>NPM : <?= $user['npm_mhs_1']; ?></td>
                                                 <td>NPM : <?= $user['npm_mhs_2']; ?></td>
                                                 <td>NIK :
                                                     <?php if (isset($mhs2['NIK'])) {
                                                            echo $mhs2['NIK'];;
                                                        } ?>
                                                 </td>
                                             </tr>

                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script>
         window.onload = function() {
             document.getElementById("download")
                 .addEventListener("click", () => {
                     const invoice = this.document.getElementById("invoice");
                     console.log(invoice);
                     console.log(window);
                     var opt = {
                         margin: 1,
                         filename: 'myfile.pdf',
                         image: {
                             type: 'jpeg',
                             quality: 0.98
                         },
                         html2canvas: {
                             scale: 2
                         },
                         jsPDF: {
                             unit: 'in',
                             format: 'a4',
                             orientation: 'portrait'
                         }
                     };
                     html2pdf().from(invoice).set(opt).save();
                 })
         }
     </script>
     <div class="modal fade" id="TandatanganDigitalMahasiswa1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Upload Tandatangan Digital Mahasiswa 1</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <?php echo form_open_multipart('mahasiswa/upload_tandatangan_1'); ?>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="tanda_tanga_digital_mhs_1" class="form-label"><?= $user['tanda_tanga_digital_mhs_1']; ?></label>
                         <input type="file" name="tanda_tanga_digital_mhs_1" class="form-control" id="tanda_tanga_digital_mhs_1">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                 </div>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>
 <div class="modal fade" id="TandatanganDigitalMahasiswa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Upload Tandatangan Digital Mahasiswa 2</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <?php echo form_open_multipart('mahasiswa/upload_tandatangan_2'); ?>
             <div class="modal-body">
                 <div class="form-group">
                     <label for="tanda_tanga_digital_mhs_2" class="form-label"><?= $user['tanda_tanga_digital_mhs_2']; ?></label>
                     <input type="file" name="tanda_tanga_digital_mhs_2" class="form-control" id="tanda_tanga_digital_mhs_2">
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             <?= form_close(); ?>
         </div>
     </div>
 </div>
 </div>