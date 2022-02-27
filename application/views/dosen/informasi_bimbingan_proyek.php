<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- $dos2 = "SELECT * FROM user JOIN user_data
        ON user . data_id = user_data . data_id
        WHERE user . role_id = 2 "; -->

        <?php

        // $bimbingan = "SELECT * FROM bimbingan JOIN admin USING (dos_id,mhs_id) JOIN user USING (mhs_id,dos_id)";
        // // $admin1[$admin = ['dos_id']];

        $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id 
         WHERE admin . dos_id = " . $admin['dos_id'] . " ";
        $tes = $this->db->query($bimbingan)->result_array();
        // var_dump($tes);
        // die;





        // $user = "SELECT * FROM user
        // JOIN user_data ON user . data_id = user_data . data_id
        // WHERE user . role_id

        // $jadibimbingan = $this->db->query($par2)->result_Array();
        ?>
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Informasi Mahasiswa Bimbingan</h2>
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
                                <th scope="col">No</th>
                                <th scope="col">Nama Mahasiswa </th>
                                <th scope="col">NPM </th>
                                <th scope="col">Kelas</th>
                                <th scope="col">No. Telpon</th>
                                <th scope="col">Judul Proyek</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($tes as $tes) : ?>
                            <tbody>
                                <tr>
                                    <th rowspan="2"><?= $no++  ?></th>
                                    <td width="200px" class="text-center"><?= $tes['name_mhs_1']; ?></td>
                                    <td class="text-center"><?= $tes['npm_mhs_1']; ?></td>
                                    <td width="200px" class="text-center"><?= $tes['kelas_mhs_1']; ?></td>
                                    <td><?= $tes['no_telpon_mhs_1']; ?></td>
                                    <td rowspan="2" class="text-center"><?= $tes['judul_proyek']; ?></td>
                                    <td rowspan="2" width="100"><button class="btn btn-primary text-white" data-toggle="modal" data-target="#TandatanganDigitalMahasiswa2">Persetujuan Judul</button></td>
                                </tr>
                                <tr>
                                    <td width="200px" class="text-center"><?= $tes['name_mhs_2']; ?></td>
                                    <td class="text-center"><?= $tes['npm_mhs_2']; ?></td>
                                    <td width="200px" class="text-center"><?= $tes['kelas_mhs_2']; ?></td>
                                    <td><?= $tes['no_telpon_mhs_2']; ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach ($tes1 as $ts) : ?>
    <div class="modal fade" id="tambahModal<?= $ts['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notice!</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form class="user" method="post" action="<?= base_url('dosen/surat_izin_sidang_tambah/') . $ts['user_id']; ?>">
                        <p>Masukan Persentase Penyelesaian Proyek Dengan Data Mahasiswa:
                            <br>
                            1. <?= $ts['name_mhs_1']; ?> (<?= $ts['npm_mhs_1']; ?>)
                            <br>
                            2. <?= $ts['name_mhs_2']; ?> (<?= $ts['npm_mhs_2']; ?>)
                        </p>
                        <div class="form-group">
                            <label for="tanggal_pengumpulan_laporan" class="col-form-label">Persentase Penyelesaian Laporan</label>
                            <input class="form-control form-control-lg" type="number" name="persentase_laporan" placeholder="%">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengumpulan_laporan" class="col-form-label">Persentasi Penyelesaian Aplikasi</label>
                            <input class="form-control form-control-lg" type="number" name="persentase_apliksai" placeholder="%">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengumpulan_laporan" class="col-form-label">Tanggan Persetujuan</label>
                            <input type="date" name="tanggal_pengumpulan_laporan" class="form-control" id="tanggal_pengumpulan_laporan">
                        </div>
                </div>
                <input type="hidden" name="tanda_tangan" value="<?= $ts['tanda_tangan_digital']; ?>">
                <div class="modal-footer">
                    <button type="submit" href="#" class="btn btn-primary"><i class="fas fa-check"></i> Setujui</button>
                    <a href="#" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</a>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->