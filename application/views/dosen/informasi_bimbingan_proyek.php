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
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($tes as $tes) : ?>
                            <tbody>
                                <tr>
                                    <th rowspan="2"><?= $no++  ?></th>
                                    <td width="200px" class="text-center"><?= $tes['name_mhs_1']; ?></td>
                                    <td class="text-center"><?= $tes['npm_mhs_1']; ?></td>
                                    <td width="200px" class="text-center"><?= $tes['kelas']; ?></td>
                                    <td>08xxxxx</td>
                                    <td rowspan="2"><?= $tes['judul_proyek']; ?></td>
                                </tr>
                                <tr>
                                <td width="200px" class="text-center"><?= $tes['name_mhs_2']; ?></td>
                                    <td class="text-center"><?= $tes['npm_mhs_2']; ?></td>
                                    <td width="200px" class="text-center"><?= $tes['kelas']; ?></td>
                                    <td>08xxxxx</td>
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