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
    <!-- <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 mt-5  mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="container" style="padding: 15px;" id="invoice">
                        <div class="header" style="text-align: center;">
                            <h2><u>SURAT PERSETUJUAN DOSEN WALI</u></h2>
                        </div>
                        <div class="name">
                            <p>Dengan ini saya :</p>
                            <table style="margin-left: -5px;margin-top: -15px;">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>Muhammad Ilham</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td>1.19.30.19</td>
                                </tr>
                                <tr>
                                    <td>Nama Perguruan Tinggi</td>
                                    <td>:</td>
                                    <td>Politeknik Pos Indonesia</td>
                                </tr>
                            </table>
                            <br>
                            <p>menerangkan bahwa saya adalah Dosen Wali dari :</p>
                            <table style="margin-left: -5px; margin-top: -15px;">
                                <tr>
                                    <td>Nama Mahasiswa</td>
                                    <td>:</td>
                                    <td>Muhammad Raihan Nur Azmii</td>
                                </tr>
                                <tr>
                                    <td>NIM/NPM</td>
                                    <td>:</td>
                                    <td>1.19.30.20</td>
                                </tr>
                                <tr>
                                    <td>Nama Perguruan Tinggi</td>
                                    <td>:</td>
                                    <td>Politeknik Pos Indonesia</td>
                                </tr>
                            </table>
                            <br>
                            <p>sekaligus memberikan izin kepada yang bersangkutan untuk mengambil MK melalui Program
                                Pertukaran Mahasiswa dengan daftar sebagai berikut :</p>
                        </div>
                        <div class="tabel-mk">
                            <table>
                                <thead>
                                    <th>No</th>
                                    <th>Nama MK</th>
                                    <th>Jumlah SKS*</th>
                                    <th>Nama Program Studi</th>
                                    <th>Nama Perguruan Tinggi</th>
                                    <th>Izinkan?**</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sistem Tersebar</td>
                                        <td>3</td>
                                        <td>Teknik Informatika</td>
                                        <td>Politeknik Pos Indonesia</td>
                                        <td>Ya/Tidak</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sistem Tersebar</td>
                                        <td>3</td>
                                        <td>Teknik Informatika</td>
                                        <td>Politeknik Pos Indonesia</td>
                                        <td>Ya/Tidak</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sistem Tersebar</td>
                                        <td>3</td>
                                        <td>Teknik Informatika</td>
                                        <td>Politeknik Pos Indonesia</td>
                                        <td>Ya/Tidak</td>
                                    </tr>
                                    <tr class="footer-table">
                                        <th colspan="2">Total Jumlah SKS</th>
                                        <th>9</th>
                                        <th colspan="3"></th>
                                    </tr>
                                </tbody>
                            </table>
                            <span>* : Tidak boleh melebihi 12 SKS</span>
                            <br>
                            <span>** : Coret pada bagian tidak perlu</span>
                            <p>daftar tersebut akan menambah daftar MK Aplikasi Pertukaran Mahasiswa yang sebelumnya
                                telah saya setujui pada semester yang sama, yaitu :</p>
                            <div class="tabel-sks">
                                <table>
                                    <thead>
                                        <th>No</th>
                                        <th>Nama MK***</th>
                                        <th>Jumlah SKS*</th>
                                        <th>Nama Program Studi</th>
                                        <th>Nama Perguruan Tinggi</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        <tr class="footer-table">
                                            <th colspan="2">Total Jumlah SKS</th>
                                            <th>0</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <span>*** : Isi jika sebelumnya telah mengambil MK pada semester yang sama</span>
                            </div>
                            <p>Demikian surat persetujuan ini dibuat untuk digunakan sebagaimana mestinya.</p>
                        </div>
                        <div class="signature-container">
                            <span class="signature">..................., 14 Januari 2022</span><br>
                            <span>.............................................</span><br>
                            <span>NIP: .....................................</span>
                        </div>
                        <div class="signature2-container">
                            <span>.............................................</span><br>
                            <span>NIP: .....................................</span>
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
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                })
        }
    </script> -->