<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <!-- <?php print_r($result) ?> -->
                 <thead>
                   <tr>
                     <th>Kamar</th>
                     <!--<th>Sisa Pembayaran</th>-->
                     <th>Total Bayar</th>
                     <th>Status</th>
                     <!-- <th>Sisa Pembayaran</th> -->
                   </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($result as $r): ?>
                     <tr>
                         <td><?= $r->kode_kamar ?></td>
                         <!--<td><?= $r->sisa_pembayaran ?></td>-->
                         <td><?= $r->total_bayar ?></td>
                         <td>
                             <?php if ($r->status_transaksi == 0): ?>
                                 <button type="anchor" class="btn btn-warning" disabled>
                                     Belum diproses Pemilik Kos
                                 </button>
                             <?php elseif ($r->status_transaksi == 1): ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $r->id_transaksi; ?>">
                                 Pembayaran
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $r->id_transaksi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>
                                     <div class="modal-body">
                                        Nomor Rekening :
                                            <?= $r->no_rek; ?>
                                       <form id="bukti" class="form" action="<?= base_url('pencari/simpan_bukti') ?>" method="post" enctype="multipart/form-data">
                                           <label for="bukti">Masukan bukti pembayaran</label>
                                           <input class="form-control" type="file" name="foto" value="">
                                           <input type="hidden" name="id_transaksi" value="<?= $r->id_transaksi ?>">
                                       </form>
                                     </div>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-primary" onclick="document.getElementById('bukti').submit();">Upload</button>
                                     </div>
                                   </div>
                                 </div>
                                </div>
                            <?php elseif ($r->status_transaksi == 2): ?>
                                 <button type="anchor" class="btn btn-success" disabled>
                                     Lunas
                                 </button>
                                 <button class="btn btn-warning" ><a href="<?php echo base_url('pencari/mailbox') ?>?from=<?=$r->id_pemilik?>&msg=Kode kos <?=$r->kode_kos?>
                  , Nama Kos <?=$r->nama_kos?>" class="btn btn-warning">
                  <i class="fa fa-comments"></i>
                  </a></button>
                             <?php else: ?>
                                 Maaf Hubungi Pemilik atau Admin
                             <?php endif; ?>
                         </td>
                     </tr>
                   <?php endforeach; ?>
                 </tbody>
                 <tfoot>
               </table>
             </div>
           </div>
         </div>

       </div>
       <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->

   </div>
   <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->
