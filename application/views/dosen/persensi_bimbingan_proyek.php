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
                    <h2 class="pageheader-title">Presensi Kegiatan Bimbingan</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Daftar Mahasiswa Proyek</h5>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="50">No</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" width="150">Jumlah Bimbingan</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Surat Izin Sidang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td width="100">
                                    <a href=" <?= base_url('dosen/detail_Persensi_bimbingan') ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
                                </td>
                                <td width="150">
                                    <label class="be-checkbox custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Izinkan</span>
                                    </label>
                                </td>
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