        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <?php
                $num1 = "SELECT * FROM user JOIN user_data 
                  ON user . data_id  = user_data . data_id
                  WHERE user . role_id = 3 AND user_data . status_laporan_id = 2 ";
                $nummhs1 = $this->db->query($num1)->num_rows();

                $num2 = "SELECT * FROM user JOIN user_data 
                   ON user . data_id  = user_data . data_id
                   WHERE user . role_id = 3 AND user_data . status_proposal_id = 2 ";
                $nummhs2 = $this->db->query($num2)->num_rows();

                $num3 = "SELECT * FROM user 
                   WHERE user . role_id = 3 AND user . status_surat_id = 2 ";
                $nummhs3 = $this->db->query($num3)->num_rows();



                ?>
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
                <!-- ============================================================== -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h2>
                                    Selamat datang Cordinator di Sistem Informasi Bimbingan Proyek
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Mahasiswa yang terdaftar</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3><?= $num_mhs; ?></h3>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Jumlah Pengumpul Proposal</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3><?= $nummhs2; ?></h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Mahasiswa yang telah disetujui sidang</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3><?= $nummhs3; ?></h3>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Jumlah Pengumpul Laporan</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3><?= $nummhs1; ?></h3>
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