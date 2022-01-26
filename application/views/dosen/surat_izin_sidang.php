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
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php
        $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.* FROM bimbingan 
         JOIN user ON bimbingan . mhs_id = user . mhs_id 
         JOIN admin ON bimbingan . dos_id = admin . dos_id 
         JOIN user_data ON user . data_id = user_data . data_id 
         WHERE admin . dos_id = " . $admin['dos_id'] . " ";
        $tes = $this->db->query($bimbingan)->result_Array();

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
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($tes as $tes) : ?>
                                <tr>
                                    <th><?= $no++  ?></th>
                                    <td><?= $tes['name_mhs_1']; ?></td>
                                    <td><?= $tes['npm_mhs_1']; ?></td>
                                    <td><?= $tes['name_mhs_2']; ?></td>
                                    <td><?= $tes['npm_mhs_2']; ?></td>
                                    <td><?= $tes['kelas']; ?></td>
                                    <td width="100">
                                        <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#tambahModal">Izinkan Sidang</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Notice!</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                        </div>
                        <div class="modal-body">
                            <p>Yakin ingin menyetujui Surat Izin Sidang untuk mahasiswa dengan Nama <?= $tes['name_mhs_1']; ?> (NPM <?= $tes['npm_mhs_1']; ?>) dan juga mahasiswa dengan Nama <?= $tes['name_mhs_2']; ?> (NPM <?= $tes['npm_mhs_2']; ?>) ?</p>
                        </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-primary"><i class="fas fa-check"></i> Iyaa</a>
                                <a href="#" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</a>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->