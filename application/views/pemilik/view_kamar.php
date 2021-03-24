<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Kamar</h1>
           <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kamar</a>
         </div>
         <!-- Content Row -->
         <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title">Tambah Kamar</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="<?= base_url()?>pemilik/tambah_kamar" method="post" enctype="multipart/form-data">
                 <div class="modal-body">
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Kode Kamar</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Kode Kamar" name="kode_kamar" aria-label="kodeKamar" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Harga</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" name="harga" aria-label="harga" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Deskripsi</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Deskripsi" name="deskripsi" aria-label="deskripsi" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Foto</label>
                           <input type="file" class="form-control bg-light border-1 small" placeholder="Foto" name="foto" aria-label="foto" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Status</label>
                           <select name="status">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Sedang Terisi">Sedang Terisi</option>
                      </select>
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Tanggal Tersedia</label>
                           <input type="date" class="form-control bg-light border-1 small" placeholder="Tanggal Tersedia" name="tgl_tersedia" aria-label="tanggalTersedia" aria-describedby="basic-addon2">
                       </div>

                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Save changes</button>
                 </div>
               </form>
               </div>
             </div>
         </div>
         <!-- Content Row -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Keterangan Kamar <?= $kamar->kode_kamar ?></h6>
           </div>
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table" width="100%" cellspacing="0">
                     <form class="" action="<?= base_url('pemilik/update_kamar') ?>" method="post">
                         <tr>
                             <th width="20%">Kode Kamar</th>
                             <th><input class="form-control bg-light border-1 small" type="hidden" name="id_kamar" value="<?= $kamar->id_kamar ?>"><?= $kamar->kode_kamar ?></th>
                         </tr>
                         <tr>
                             <td>Harga</td>
                             <th><input class="form-control bg-light border-1 small" type="text" name="harga" value="<?= $kamar->harga ?>"></th>
                         </tr>
                         <tr>
                             <td>Deskripsi</td>
                             <th><input class="form-control bg-light border-1 small" type="text" name="deskripsi" value="<?= $kamar->deskripsi ?>"></th>
                         </tr>
                         <tr>
                             <td>Status</td>
                             <th><select name="status">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Sedang Terisi">Sedang Terisi</option>
                      </select></th>
                         </tr>
                         <tr>
                             <td>Tanggal Tersedia</td>
                             <th><input class="form-control bg-light border-1 small" type="date" name="tgl_tersedia" value="<?= $kamar->tgl_tersedia ?>"></th>
                         </tr>
                         <tr>
                             <td>
                                 <button class="btn btn-primary" type="submit" name="button">Update</button>
                                 <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal" data-target="#myModal2"><i class="fas fa-pen fa-sm text-white-50"></i> Edit Kos</a> -->
                             </td>
                         </tr>
                     </form>
                 </table>
               </div>
               <hr>
           </div>

       </div>
       <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->

   </div>
   <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->
