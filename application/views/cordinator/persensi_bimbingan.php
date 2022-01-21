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
        <?php $mhs = $this->db->get_where('user', ['role_id' => 3])->result_Array();

        // var_dump($mhs);
        // die;
        ?>
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <center>
                <h5 class="card-header">Daftar Mahasiswa Proyek</h5>
                </center>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="50">No</th>
                                <th scope="col">Nama Mahasiswa 1</th>
                                <th scope="col">NPM 1</th>
                                <th scope="col">Nama Mahasiswa 2</th>
                                <th scope="col">NPM 2</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" width="200">Status Pengumpulan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($mhs as $mhs) : ?>
                            <tbody>
                                <tr>
                                    <th><?= $no++  ?></th>
                                    <td><?= $mhs['name_mhs_1']; ?></td>
                                    <td><?= $mhs['npm_mhs_1']; ?></td>
                                    <td><?= $mhs['name_mhs_2']; ?></td>
                                    <td><?= $mhs['npm_mhs_2']; ?></td>
                                    <td><?= $mhs['kelas']; ?></td>
                                    <td></td>
                                    <td width="100">
                                        <a href="<?= base_url('cordinator/detailpresensi') ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
                                    </td>
                                <?php endforeach; ?>
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