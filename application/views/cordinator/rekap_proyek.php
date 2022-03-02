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
                    <h2 class="pageheader-title">Rekap Proyek</h2>
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

        $num = "SELECT * FROM user JOIN user_data 
         ON user . data_id  = user_data . data_id
         WHERE user . role_id = 3 AND user_data . status_laporan_id = 2 ";

        $jadimhs = $this->db->query($mhs2)->result_Array();
        $nummhs = $this->db->query($num)->num_rows();
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

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" width="50" rowspan="2" style="vertical-align: middle;">No</th>
                                    <th scope="col" rowspan="2" style="vertical-align: middle;">Nama Mahasiswa</th>
                                    <th scope="col" rowspan="2" style="vertical-align: middle;">NPM</th>
                                    <th scope="col" rowspan="2" style="vertical-align: middle;">Kelas</th>
                                    <th scope="col" colspan="3" style="vertical-align: middle;">Status</th>
                                    <th scope="col" rowspan="2" style="vertical-align: middle;">Aksi</th>
                                </tr>
                                <tr class="text-center">
                                    <th scope="col" width="200" style="vertical-align: middle;">Pengumpulan Proposal</th>
                                    <th scope="col" width="200" style="vertical-align: middle;">Pengumpulan Laporan</th>
                                    <th scope="col" width="200" style="vertical-align: middle;">Pengumpulan Surat Izin Sidang</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <?php foreach ($jadimhs as $mhs2) : ?>
                                <?php $setatus2 = $this->db->get_where('status', ['id' => $mhs2['status_laporan_id']])->row_array() ?>
                                <?php $setatus1 = $this->db->get_where('status_proposal', ['id' => $mhs2['status_proposal_id']])->row_array() ?>
                                <?php $setatus3 = $this->db->get_where('status_surat', ['id' => $mhs2['status_surat_id']])->row_array() ?>
                                <tbody>
                                    <tr class="text-center">
                                        <th rowspan="2"><?= $no++  ?></th>
                                        <td><?= $mhs2['name_mhs_1']; ?></td>
                                        <td><?= $mhs2['npm_mhs_1']; ?></td>
                                        <td><?= $mhs2['kelas_mhs_1']; ?></td>
                                        <td rowspan="2"><?= $setatus1['status']; ?></td>
                                        <td rowspan="2"><?= $setatus2['status']; ?></td>
                                        <td rowspan="2"><?= $setatus3['status']; ?></td>
                                        <td width="100" rowspan="2">
                                            <a href="<?= base_url('cordinator/detailrekap_proyek/') . $mhs2['user_id'] ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
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
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->