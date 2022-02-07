<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <?php
        $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.* FROM bimbingan 
         JOIN user ON bimbingan . mhs_id = user . mhs_id 
         JOIN admin ON bimbingan . dos_id = admin . dos_id 
         JOIN user_data ON user . data_id = user_data . data_id 
         WHERE admin . dos_id = " . $admin['dos_id'] . " ";
        $tes = $this->db->query($bimbingan)->result_Array();

        ?>

        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Presensi Kegiatan Bimbingan</h2>
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
                    <h5 class="card-header">Daftar Mahasiswa Proyek</h5>
                </center>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="50">No</th>
                                <th scope="col">Nama Mahasiswa </th>
                                <th scope="col">NPM </th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jumlah Bimbingan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($tes as $tes) : ?>
                            <?php
                            $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
                                    JOIN user ON bimbingan . mhs_id = user . mhs_id 
                                    JOIN admin ON bimbingan . dos_id = admin . dos_id 
                                    JOIN user_data ON user . data_id = user_data . data_id  
                                    JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id
                                    WHERE user . role_id = 3 AND user . user_id = '" . $tes['user_id'] . "' ";
                            $count = $this->db->query($mhs1)->num_rows();
                            ?>
                            <tbody>
                                <tr class="text-center">
                                    <th rowspan="2"><?= $no++  ?></th>
                                    <td><?= $tes['name_mhs_1']; ?></td>
                                    <td><?= $tes['npm_mhs_1']; ?></td>
                                    <td><?= $tes['kelas_mhs_1']; ?></td>
                                    <?php if ($count == 1) : ?>
                                        <td rowspan="2">Belum Ada</td>
                                    <?php else : ?>
                                        <td rowspan="2"><?= $count - 1; ?></td>
                                    <?php endif; ?>
                                    <td width="100" rowspan="2">
                                        <a href=" <?= base_url('dosen/detail_Persensi_bimbingan/') . $tes['user_id'] ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><?= $tes['name_mhs_2']; ?></td>
                                    <td><?= $tes['npm_mhs_1']; ?></td>
                                    <td><?= $tes['kelas_mhs_2']; ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->