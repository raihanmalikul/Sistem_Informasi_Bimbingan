        <!-- ============================================================== -->
        <!-- ============================================================== -->
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
                            <h2 class="pageheader-title">Dashboard</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <?php $mhs = $this->db->get_where('user_data', ['data_id' => 4])->row_array();
                $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
                JOIN user ON bimbingan . mhs_id = user . mhs_id 
                JOIN admin ON bimbingan . dos_id = admin . dos_id 
                JOIN user_data ON user . data_id = user_data . data_id 
                JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id WHERE user . mhs_id = " . $user['mhs_id'] . " ";
                $tes = $this->db->query($bimbingan)->row_array();

                // var_dump($tes);
                // die;
                ?>
                <!-- ============================================================== -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h3>
                                    Selamat datang Mahasiswa di Sistem Informasi Bimbingan Proyek
                                </h3>
                            </center>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Judul Proyek</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3>
                                        <?= $user_data['judul_proyek']; ?>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Batas Pengumpulan Proposal</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3>
                                        <?= $mhs['tanggal_pengumpulan_proposal']; ?>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Batas Pengumpulan Laporan</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3>
                                        <?= $mhs['tanggal_pengumpulan_laporan']; ?>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Total Bimbingan</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Dosen Pembimbing</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3>
                                        <?= $tes['name']; ?>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->