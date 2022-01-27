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
                     <h2 class="pageheader-title">Surat Izin Sidang proyek</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
         <style>
             table,
             tr,
             td {
                 border: 1px solid black;
             }
         </style>

         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-body">
                     <button class="btn btn-primary text-white" id="download"><i class="fas fa-download"></i> Download PDF</button>
                     <!-- <h4 class="card-title">Surat Persetujuan dan Permohonan Sidang</h4> -->
                     <br>
                     <hr>


                     <div class="row justify-content-center mt-50 mb-50">
                         <div class="col-md-15">
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
                                                 <td>Nama Mahasiswa 1/Mahasiswa 2:</td>
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
                                                 <td><?= $user_data['judul_proyek']; ?></td>
                                             </tr>
                                             <tr>
                                                 <td>Nama Pembimbing</td>
                                                 <td> :</td>
                                                 <td><?= $mhs2['name']; ?></td>
                                             </tr>
                                         </table>
                                         <br>
                                         <p>Menyatakan bahwa mahasiswa tersebut telah menyelesaikan Alat/Proyek 100%. Adapun penulisan laporan proyek telah diselesaikan seluruhnya 100%</p>
                                         <p>Dengan demikian saya mengajukan mahasiswa tersebut untuk mengikuti sidang Proyek. Apabila ternyata pernyataan saya tersebut tidak benar, maka saya menyetujui penundaan sidang termasuk pembatalan sidang Proyek untuk mahasiswa bimbingan saya tersebut sesuai aturan yang berlaku.</p>
                                     </div>
                                     <br>
                                     <br>
                                     <div class="tabel-mk signature-container">
                                         <span class="signature">Bandung, ........... 2022</span><br>
                                         <br>
                                         <br>
                                     </div>
                                     <br>
                                     <br>
                                     <br>
                                     <div class="row">
                                         <table style="margin-top: -15px;">
                                             <!-- ------------------------------------------------------ -->
                                             <!-- <tr>
                                        <td>Mahasiswa 1</td>
                                    </tr> -->
                                         </table>
                                         <br>
                                         <br>
                                         <br>
                                         <table>
                                             <tr>
                                                 <td>________________________</td>
                                             </tr>
                                             <tr>
                                                 <td>(<?= $user['name_mhs_1']; ?>)</td>
                                             </tr>
                                             <tr>
                                                 <td>NPM : <?= $user['npm_mhs_1']; ?></td>
                                             </tr>
                                         </table>
                                         <!-- ------------------------------------------------------ -->
                                         <table style="margin-left: 80px;">
                                             <!-- <tr>
                                        <td>Mahasiswa 2</td>
                                    </tr> -->
                                         </table>
                                         <br>
                                         <br>
                                         <br>
                                         <table>
                                             <tr>
                                                 <td>________________________</td>
                                             </tr>
                                             <tr>
                                                 <td>(<?= $user['name_mhs_2']; ?>)</td>
                                             </tr>
                                             <tr>
                                                 <td>NPM : <?= $user['npm_mhs_2']; ?></td>
                                             </tr>
                                         </table>
                                         <!-- ------------------------------------------------------ -->
                                         <table style="margin-left: 90px;">
                                             <!-- <tr>
                                        <td>Dosen Pembimbing</td>
                                    </tr> -->
                                         </table>
                                         <br>
                                         <br>
                                         <br>
                                         <table>
                                             <tr>
                                                 <td>
                                                     <center><img width="100px" src="<?= base_url('assets/File/tandatangan_dosen/') . $user['tanda_tangan']; ?>"></center>
                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>(<?= $mhs2['name']; ?>)</td>
                                             </tr>
                                             <tr>
                                                 <td>NIK : <?= $mhs2['NIK']; ?></td>
                                             </tr>
                                         </table>
                                         </row>
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