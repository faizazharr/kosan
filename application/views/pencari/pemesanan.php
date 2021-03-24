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
                     <th>Tanggal Booking</th>
                     <th>Tanggal Masuk</th>
                     <th>Tanggal Keluar</th>
                     <th>Status Bayar</th>
                     <!-- <th>Sisa Pembayaran</th> -->
                   </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($result as $r): ?>
                     <tr>
                         <td><?= $r->kode_kamar ?></td>
                         <td><?= $r->tgl_bayar ?></td>
                         <td><?= $r->tgl_masuk ?></td>
                         <td><?= $r->tgl_keluar ?></td>
                         <td>
                            <?php if ($r->status_transaksi == 0): ?>
                                <button type="anchor" class="btn btn-warning" disabled>
                                    Belum diproses Pemilik Kos
                                </button>
                            <?php elseif ($r->status_transaksi == 1): ?>
                                <a href="<?= base_url('pencari/pembayaran'); ?>" class="btn btn-primary">
                                    Belum anda bayar
                                </a>
                            <?php elseif ($r->status_transaksi == 2): ?>
                                <button type="anchor" class="btn btn-success" disabled>
                                    Lunas
                                </button>
                                <button class="btn btn-warning" ><a href="<?php echo base_url('pencari/mailbox') ?>?from=<?=$r->id_pemilik?>&msg=Kode kos <?=$r->kode_kos?>
                  , Nama Kos <?=$r->nama_kos?>" class="btn btn-warning">
                  <i class="fa fa-comments"></i>
                  </a></button>
                            <?php else: ?>
                                <button type="anchor" class="btn btn-danger" disabled>
                                    Maaf Hubungi Pemilik atau Admin
                                </button>

                            <?php endif; ?>
                            <!-- <?= $r->status ?> -->
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
