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

                // var_dump($mhs);
                // die;
                ?>
                <!-- ============================================================== -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h2>
                                    Selamat datang Mahasiswa di Sistem Informasi Bimbingan Proyek
                                </h2>
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
                                    <h2>
                                        <?= $user_data['judul_proyek']; ?>
                                    </h2>
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
                                    <h2>
                                        <?= $mhs['tanggal_pengumpulan_proposal']; ?>
                                    </h2>
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
                                    <h2>
                                        <?= $mhs['tanggal_pengumpulan_laporan']; ?>
                                    </h2>
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
                                    <h2>
                                    </h2>
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
                                    <h2>
                                    </h2>
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