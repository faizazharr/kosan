<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Pemilik</h1>
         </div>
         <!-- Content Row -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Keterangan Pemilik</h6>
           </div>
           <div class="card-body">
               <div class="row">
                   <div class="col col-md-3">
                       <img src="<?= base_url('asset_registrasi/upload_pemilik/'.$result->foto); ?>" alt="" width="100%">
                   </div>
                   <div class="col">
                       <div class="table-responsive">
                           <table class="table" width="100%" cellspacing="0">
                               <form class="form" action="<?= base_url('admin/update_pemilik'); ?>" method="post">
                                   <tr>
                                       <th width="20%">Kode Pemilik</th>
                                       <th>
                                           <?= $result->id_pemilik ?>
                                           <input type="hidden" name="id_pemilik" value="<?= $result->id_pemilik ?>">
                                       </th>
                                   </tr>
                                   <tr>
                                       <td>Nama</td>
                                       <td>
                                            <input class="form-control" type="text" name="nama_pemilik" value="<?= $result->nama_pemilik ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>No Ktp</td>
                                       <td>
                                           <?= $result->no_ktp ?>

                                            <!-- <input class="form-control" type="text" name="kategori" value="<?= $result->kategori_artikel ?>"> -->
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>No Telepon</td>
                                       <td>
                                            <input class="form-control" type="text" name="no_telp" value="<?= $result->no_telp ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Email</td>
                                       <td>
                                            <input class="form-control" type="text" name="email" value="<?= $result->email ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>No Rekening</td>
                                       <td>
                                            <input class="form-control" type="text" name="no_rek" value="<?= $result->no_rek ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Nama Rekening</td>
                                       <td>
                                            <input class="form-control" type="text" name="atas_nama_rek" value="<?= $result->atas_nama_rek ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Nama Bank</td>
                                       <td>
                                            <input class="form-control" type="text" name="bank" value="<?= $result->bank ?>">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Jenis Kelamin</td>
                                       <td>
                                            <input class="form-control" type="text" name="jenis_kelamin" value="<?= $result->jenis_kelamin ?>">
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
