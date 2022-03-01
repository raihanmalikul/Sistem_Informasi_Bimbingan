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
                    <h2 class="pageheader-title">Detail Pengumpulan Rekap Proyek</h2>
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
                        <h5 class="mb-0">Detail Pengumpulan Rekap Proyek</h5>
                    </center>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <tbody>
                            <tr>
                                <td width="200px">Nama Mahasiswa</td>
                                <td><?= $mhs1['name_mhs_1']; ?></td>
                            </tr>
                            <tr>
                                <td>NPM</td>
                                <td><?= $mhs1['npm_mhs_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Mahasiswa</td>
                                <td><?= $mhs1['name_mhs_2']; ?></td>
                            </tr>
                            <tr>
                                <td>NPM</td>
                                <td><?= $mhs1['npm_mhs_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Judul Proyek</td>
                                <td><?= $mhs1['judul_proyek']; ?></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><?= $mhs1['keterangan_judul']; ?></td>
                            </tr>
                            <tr>
                                <td>File Proposal</td>
                                <td><a href="<?= base_url('assets/File/') . $mhs1['proposal_proyek'] ?>" class="fas fa-download"> <?= $mhs1['proposal_proyek'] ?> </a></td>
                            </tr>
                            <tr>
                                <td>File Laporan</td>
                                <td><a href="<?= base_url('assets/File/') . $mhs1['laporan_proyek'] ?>" class="fas fa-download"> <?= $mhs1['laporan_proyek'] ?> </a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
                                            <td><?= $mhs1['name_mhs_1']; ?></td>
                                            <td>/</td>
                                            <td><?= $mhs1['name_mhs_2']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>NPM 1/ NPM 2</td>
                                            <td> :</td>
                                            <td><?= $mhs1['npm_mhs_1']; ?></td>
                                            <td>/</td>
                                            <td><?= $mhs1['npm_mhs_2']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Judul Proyek</td>
                                            <td> :</td>
                                            <td colspan="3">
                                                <?php if (isset($mhs1['judul_proyek'])) {
                                                    echo $mhs1['judul_proyek'];;
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
                                    <p>Menyatakan bahwa mahasiswa tersebut telah menyelesaikan Alat/Proyek <?= $mhs1['persentase_apliksai']; ?>%. Adapun penulisan laporan proyek telah diselesaikan seluruhnya <?= $mhs1['persentase_laporan']; ?>%</p>
                                    <p>Dengan demikian saya mengajukan mahasiswa tersebut untuk mengikuti sidang Proyek. Apabila ternyata pernyataan saya tersebut tidak benar, maka saya menyetujui penundaan sidang termasuk pembatalan sidang Proyek untuk mahasiswa bimbingan saya tersebut sesuai aturan yang berlaku.</p>
                                </div>
                                <br>
                                <br>
                                <div class="tabel-mk signature-container">
                                    <span class="signature">Bandung, <?= $mhs1['tanggal_surat']; ?></span><br>
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
                                            <td style="vertical-align: bottom;"><img width="100px" src="<?= base_url('assets/File/Tanda_tangan_mhs/') . $mhs2['tanda_tanga_digital_mhs_1']; ?>"></td>
                                            <td rowspan="3" class="px-4"></td>
                                            <td style="vertical-align: bottom;"><img width="100px" src="<?= base_url('assets/File/Tanda_tangan_mhs/') . $mhs2['tanda_tanga_digital_mhs_2']; ?>"></td>
                                            <td rowspan="3" class="px-4"></td>
                                            <td><img width="100px" src="<?= base_url('assets/File/tandatangan_dosen/') . $mhs2['tanda_tangan']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>(<?= $mhs1['name_mhs_1']; ?>)</td>
                                            <td>(<?= $mhs1['name_mhs_2']; ?>)</td>
                                            <td>(<?php if (isset($mhs2['name'])) {
                                                        echo $mhs2['name'];;
                                                    } ?>)</td>
                                        </tr>
                                        <tr>
                                            <td>NPM : <?= $mhs1['npm_mhs_1']; ?></td>
                                            <td>NPM : <?= $mhs1['npm_mhs_2']; ?></td>
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
<!-- ============================================================== -->
<!-- end main wrapper -->