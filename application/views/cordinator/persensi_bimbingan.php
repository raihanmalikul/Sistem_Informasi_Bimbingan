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
                    <h2 class="pageheader-title">Presensi Bimbingan</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php

        $mhs2 = "SELECT * FROM user JOIN user_data 
         ON user . data_id  = user_data . data_id
         WHERE user . role_id = 3  ";

        $jadimhs = $this->db->query($mhs2)->result_Array();
        // echo '<pre>';
        // var_dump($jadimhs);
        // echo '</pre>';
        // die;
        // $role_id = $this->db->get('status_laporan_id')->result_Array();
        // $status = $this->db->get_where('status', ['id' => $role_id])->row_array();

        ?>
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tentukan Batas Waktu Bimbingan</button>
                    <h5 class="mb-0">Presensi Bimbingan</h5>
                    <br>
                    <?= $this->session->flashdata('message_batas_tanggal_bimbingan'); ?>
                    <br>
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <tbody>
                            <tr>
                                <td width="200px">Batas Waktu Bimbingan</td>
                                <td><?= $user_data['batas_tanggal_bimbingan']; ?></td>
                            </tr>

                    </table>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Nama Mahasiswa </th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col" width="200">Jumlah Bimbingan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <?php foreach ($jadimhs as $mhs2) : ?>
                                <?php
                                $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
                                    JOIN user ON bimbingan . mhs_id = user . mhs_id 
                                    JOIN admin ON bimbingan . dos_id = admin . dos_id 
                                    JOIN user_data ON user . data_id = user_data . data_id  
                                    JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id
                                    WHERE user . role_id = 3 AND user . user_id = '" . $mhs2['user_id'] . "' ";
                                $count = $this->db->query($mhs1)->num_rows();
                                ?>
                                <tbody>
                                    <tr class="text-center">
                                        <th rowspan="2"><?= $no++  ?></th>
                                        <td><?= $mhs2['name_mhs_1']; ?></td>
                                        <td><?= $mhs2['npm_mhs_1']; ?></td>
                                        <td><?= $mhs2['kelas_mhs_1']; ?></td>
                                        <?php if ($count == 1) : ?>
                                            <td rowspan="2">Belum Ada</td>
                                        <?php elseif ($count == 0) : ?>
                                            <td rowspan="2">Belum Ada</td>
                                        <?php else : ?>
                                            <td rowspan="2"><?= $count - 1;  ?></td>
                                        <?php endif; ?>
                                        <td width="100" rowspan="2">
                                            <a href="<?= base_url('cordinator/detailpresensi/') . $mhs2['user_id'] ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><?= $mhs2['name_mhs_2']; ?></td>
                                        <td><?= $mhs2['npm_mhs_2']; ?></td>
                                        <td><?= $mhs2['kelas_mhs_2']; ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Batas Presensi Bimbingan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user" method="post" action="<?= base_url('cordinator/persensi_bimbingan_tambah') ?>">
                                        <div class="form-group">
                                            <label for="batas_tanggal_bimbingan" class="col-form-label">Batas Waktu</label>
                                            <input type="date" name="batas_tanggal_bimbingan" class="form-control" id="batas_tanggal_bimbingan">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->