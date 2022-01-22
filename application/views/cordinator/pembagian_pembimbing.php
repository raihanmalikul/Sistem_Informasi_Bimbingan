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
                    <h2 class="pageheader-title">Pembagian Pembimbing</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php $mhs = $this->db->get_where('user', ['role_id' => 3])->result_Array();

        $mhs2 = "SELECT * FROM user JOIN user_data 
                        ON user . data_id  = user_data . data_id
                        WHERE user . role_id = 3  ";

        $jadimhs = $this->db->query($mhs2)->result_Array();


        // var_dump($mhs);
        // die;
        ?>
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <center>
                    <h5 class="card-header">Daftar Pembagian Mahasiswa dan Dosen Pembimbing Proyek</h5>
                </center>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mahasiswa 1</th>
                                <th scope="col">NPM 1</th>
                                <th scope="col">Nama Mahasiswa 2</th>
                                <th scope="col">NPM 2</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Judul Proyek</th>
                                <th scope="col">Dosen Pembimbing</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($jadimhs as $mhs2) : ?>
                            <tbody>
                                <tr>
                                    <th><?= $no++  ?></th>
                                    <td><?= $mhs2['name_mhs_1']; ?></td>
                                    <td><?= $mhs2['npm_mhs_1']; ?></td>
                                    <td><?= $mhs2['name_mhs_2']; ?></td>
                                    <td><?= $mhs2['npm_mhs_2']; ?></td>
                                    <td><?= $mhs2['kelas']; ?></td>
                                    <td><?= $mhs2['judul_proyek']; ?></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" id="kelas">
                                                <option disabled selected value>Pilih Opsi</option>
                                                <option>Dini Hamidin</option>
                                                <option>Widya Resdiana</option>
                                            </select>
                                        </div>
                                    <?php endforeach; ?>


                </div>
                </td>
                </tr>
                </tbody>
                </table>
                <br>
                <button type="button" class="btn btn-primary btn-xs text-white "><i class="fas fa-save"></i> Simpan</button>
                <button type="button" class="btn btn-success btn-xs text-white "><i class="fas fa-edit"></i> Edit</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->