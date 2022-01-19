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
                     <h2 class="pageheader-title">Nilai Bimbingan Proyek</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-body">
                     <button type="button" class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i>Tambah Nilai</button>
                     <h5 class="mb-0">Nilai Bimbingan Kegiatan Proyek</h5>
                     <br>
                     <br>
                     <table id="example2" class="table table-striped table-bordered" style="width:100%">
                         <tbody>
                             <tr>
                                 <td width="200px">Nama Mahasiswa</td>
                                 <td>-</td>
                             </tr>
                             <tr>
                                 <td>NPM</td>
                                 <td>-</td>
                             </tr>
                             <tr>
                                 <td>Nama Mahasiswa</td>
                                 <td>-</td>
                             </tr>
                             <tr>
                                 <td>NPM</td>
                                 <td>-</td>
                             </tr>
                             <tr>
                                 <td>Kelas</td>
                                 <td>-</td>
                             </tr>
                             <tr>
                                 <td>Judul Proyek</td>
                                 <td>-</td>
                             </tr>
                             <tr>
                                 <td>Nilai Pelaksanaan Bimbingan Proyek</td>
                                 <td></td>
                             </tr>
                     </table>
                     <br>
                     <button type="button" class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit</button>
                     <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                 </div>
             </div>
         </div>
         <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <form>
                             <div class="form-group">
                                 <label for="recipient-name" class="col-form-label">Nilai Bimbingan Proyek</label>
                                 <input type="number" class="form-control" id="recipient-name">
                             </div>
                         </form>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                         <button type="button" class="btn btn-primary">Simpan</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Edit Nilai</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <form>
                             <div class="form-group">
                                 <label for="recipient-name" class="col-form-label">Nilai Bimbingan Proyek</label>
                                 <input type="number" class="form-control" id="recipient-name">
                             </div>
                         </form>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                         <button type="button" class="btn btn-primary">Simpan</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- ============================================================== -->
     <!-- end main wrapper -->