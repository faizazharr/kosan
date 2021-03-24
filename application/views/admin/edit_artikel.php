<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
         </div>
         <!-- Content Row -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Keterangan Artikel</h6>
           </div>
           <div class="card-body">
               <div class="row">
                   <div class="col col-md-3">
                       <img src="<?= base_url('asset_admin/artikel/'.$result->foto); ?>" alt="" width="100%">
                   </div>
                   <div class="col">
                       <div class="table-responsive">
                           <table class="table" width="100%" cellspacing="0">
                               <form class="form" action="<?= base_url('admin/update_artikel'); ?>" method="post">
                                   <tr>
                                       <th width="20%">Kode Kos</th>
                                       <th>
                                           <?= $result->id_artikel ?>
                                           <input type="hidden" name="id_artikel" value="<?= $result->id_artikel ?>">
                                       </th>
                                   </tr>
                                   <tr>
                                       <td>Judul</td>
                                       <td>
                                            <input class="form-control" type="text" name="judul" value="<?= $result->judul ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Kategori</td>
                                       <td>
                                            <input class="form-control" type="text" name="kategori" value="<?= $result->kategori_artikel ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Deskripsi</td>
                                       <td>
                                            <input class="form-control" type="text" name="deskripsi" value="<?= $result->deskripsi ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td></td>
                                       <td> <button type="submit" name="button" class="btn btn-primary">Update</button> </td>
                                   </tr>
                               </form>
                           </table>
                       </div>
                   </div>
               </div>
               <hr>
           </div>


       </div>
   </div>
