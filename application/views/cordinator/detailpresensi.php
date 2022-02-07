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
                    <h2 class="pageheader-title">Detail Presensi Bimbingan</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php


        ?>
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h5 class="mb-0">Bimbingan Kegiatan Proyek</h5>
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
                                <td>Kelas</td>
                                <td><?= $mhs['kelas_mhs_1']; ?></td>
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
                                <td>Kelas</td>
                                <td><?= $mhs['kelas_mhs_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Judul Proyek</td>
                                <td><?= $mhs['judul_proyek']; ?></td>
                            </tr>
                    </table>
                    <div class="card-body">
                        <h4 class="card-title">Presensi Bimbingan</h4>
                        <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col-lg-2">No</th>
                                    <th scope="col">Tanggal Bimbingan</th>
                                    <th scope="col">Catatan Kemajuan Materi</th>
                                    <th scope="col">Paraf Dosen Pembimbing</th>
                                </tr>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($mhs1 as $tes) : ?>
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