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
                     <h2 class="pageheader-title">Data Dosen Pembimbing</h2>
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
                     <button type="button" class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i>Tambah Dosen</button>
                     <h4 class="card-title">Data Dosen Pembimbing</h4>
                     <br>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th scope="col-lg-2">No</th>
                                 <th scope="col">NIK</th>
                                 <th scope="col">Nama</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <th scope="row"></th>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td width="160">
                                     <button class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit</button>
                                     <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <form>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">NIK</label>
                                         <input type="text" class="form-control" id="recipient-name" placeholder="NIK">
                                     </div>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Nama</label>
                                         <input type="text" class="form-control" id="recipient-name" placeholder="Nama">
                                     </div>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Email</label>
                                         <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input type="text" class="form-control form-control-user" id="exampleInputId_User" placeholder="User ID">
                                         </div>
                                         <div class="col-sm-6">
                                             <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Password">
                                         </div>
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
                                 <h5 class="modal-title" id="exampleModalLabel">Edit Data Dosen</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <form>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">NIK</label>
                                         <input type="text" class="form-control" id="recipient-name" placeholder="NIK">
                                     </div>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Nama</label>
                                         <input type="text" class="form-control" id="recipient-name" placeholder="Nama">
                                     </div>
                                     <div class="form-group">
                                         <label for="recipient-name" class="col-form-label">Email</label>
                                         <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input type="text" class="form-control form-control-user" id="exampleInputId_User" placeholder="User ID">
                                         </div>
                                         <div class="col-sm-6">
                                             <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Password">
                                         </div>
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
         </div>
         <!-- ============================================================== -->
         <!-- end main wrapper -->