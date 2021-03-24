<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Kost</h1>
         </div>
         <!-- Content Row -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Keterangan Kos</h6>
           </div>
           <div class="card-body">
               <div class="row">
                   <div class="col col-md-3">
                       <img src="<?= base_url('asset_admin/upload_kos/'.$kos->foto); ?>" alt="" width="100%">
                   </div>
                   <div class="col">
                       <div class="table-responsive">
                           <table class="table" width="100%" cellspacing="0">
                               <form class="form" action="<?= base_url('admin/update_kos'); ?>" method="post">
                                   <tr>
                                       <th width="20%">Kode Kos</th>
                                       <th>
                                           <?= $kos->kode_kos ?>
                                           <input type="hidden" name="kode_kos" value="<?= $kos->kode_kos ?>">
                                       </th>
                                   </tr>
                                   <tr>
                                       <td>Nama Kos</td>
                                       <td>
                                            <input class="form-control" type="text" name="nama_kos" value="<?= $kos->nama_kos ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Alamat</td>
                                       <td>
                                           <input class="form-control" type="text" name="alamat" value="<?= $kos->alamat ?>">
                                        </td>
                                   </tr>
                                   <tr>
                                       <td>Deskripsi</td>
                                       <td>
                                           <input class="form-control" type="text" name="deskripsi" value="<?= $kos->deskripsi ?>">
                                        </td>
                                   </tr>
                                   <tr>
                                       <td>Jenis Kosan</td>
                                       <td><?= $kos->jenis_kosan ?></td>
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
