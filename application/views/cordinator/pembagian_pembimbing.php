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


        // var_dump($jadidos);
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
                        <form class="user" method="post" action="<?= base_url('cordinator/pembagian_pembimbing_tambah') ?>">
                            <?php $no = 1; ?>
                            <?php foreach ($jadimhs as $mhs2) : ?>


                                <tr>
                                    <th><?= $no++  ?></th>
                                    <td><?= $mhs2['name_mhs_1']; ?></td>
                                    <td><?= $mhs2['npm_mhs_1']; ?></td>
                                    <td><?= $mhs2['name_mhs_2']; ?></td>
                                    <td><?= $mhs2['npm_mhs_2']; ?></td>
                                    <td><?= $mhs2['kelas']; ?></td>
                                    <td><?= $mhs2['judul_proyek']; ?></td>
                                    <input type="hidden" name="mhs_id[]" value="<?= $mhs2['mhs_id']; ?>">
                                    <td>
                                        <div class="form-group">
                                            <?php
                                            $dos2 = "SELECT * FROM user JOIN admin
                                            ON user . dos_id  = admin . dos_id
                                            WHERE user . role_id = 2  ";

                                            $dosid = "SELECT * FROM bimbingan
                                            WHERE mhs_id =" . $mhs2['mhs_id'] . "";
                                            $iddos = $this->db->query($dosid)->row_Array();
                                            $jadidos = $this->db->query($dos2)->result_Array();
                                            ?>

                                            <select class="form-control" name="dos_id[]" id="kelas">
                                                <?php if (isset($iddos['dos_id'])) : ?>
                                                    <?php $dosen = $this->db->get_where('admin', ['dos_id' => $iddos['dos_id']])->row_array(); ?>
                                                    <option value="<?= $iddos['dos_id']; ?>"><?= $dosen['name']; ?></option>
                                                <?php else : ?>
                                                    <option disabled selected value>Pilih Opsi</option>
                                                <?php endif; ?>
                                                <?php foreach ($jadidos as $dos2) : ?>
                                                    <option value="<?= $dos2['dos_id']; ?>"><?= $dos2['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    <?php endforeach; ?>




                </div>
                </td>
                </tr>
                </tbody>
                </table>
                <br>
                <button type="submit" class="btn btn-primary btn-xs text-white"><i class="fas fa-save"></i> Simpan</button>
                <!-- <button type="button" class="btn btn-success btn-xs text-white"><i class="fas fa-edit"></i> Edit</button> -->
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->