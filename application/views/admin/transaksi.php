 <?php error_reporting(0);?>
 <?php if($_GET['print']==2){ echo "<script>print();</script>";}?>
 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive"> <?php if($_GET['print']==1){ ?>
			  <a target="_BLANK" href="<?=base_url('admin/transaksi');?>/print?print=2" class="btn btn-lg btn-warning">Cetak</a>
			  <br>
			  <br>
			  <?php } ?>
			  
					   <?php if($_GET['print']==2){ ?>
                      Print date : <?=date('d/m/Y');?>
					   <?php } ?>
                <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Transaksi</th>
                      <th>Kode Kamar</th>
                      <th>ID Pencari</th>
                      <th>Total Bayar</th>
                      <th>Tanggal Bayar</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Keluar</th>
                      <th>Sisa Pembayaran</th>
					   <?php if($_GET['print']!=2){ ?>
                      <!--<th>Aksi</th>-->
					   <?php } ?>

                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($result as $r): ?>
                          <tr>
                              <td><?= $r->id_transaksi ?></td>
                              <td><?= $r->kode_kamar ?></td>
                              <td><?= $r->id_pencari ?></td>
                              <td><?= $r->total_bayar ?></td>
                              <td><?= $r->tgl_bayar ?></td>
                              <td><?= $r->tgl_masuk ?></td>
                              <td><?= $r->tgl_keluar ?></td>
                              <td><?= $r->sisa_pembayaran ?></td>
                              <?php if($_GET['print']!=2){ ?>
							 <!-- <td>
                                  <!--<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?= $r->id_transaksi ?>">Edit</a>-->
                                  <!--<a href="<?php echo base_url("admin/hapus_transaksi/$r->id_transaksi") ?>" class="btn btn-danger">Hapus</a>-->
                             <!-- </td>-->
							  <?php } ?>
                              <!--<div class="modal fade" id="myModal<?= $r->id_transaksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Transaksi</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" action="<?= base_url("admin/edit_transaksi") ?>" method="post">
                                            <div class="form-group">
                                                <input type="hidden" name="id_transaksi" value="<?= $r->id_transaksi ?>">
                                              <label for="exampleInputEmail1">Total Bayar</label>
                                              <input type="text" class="form-control"  placeholder="" name="total_bayar" value="<?= $r->total_bayar ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Tanggal Bayar</label>
                                              <input type="date" class="form-control"  placeholder="" name="tgl_bayar" value="<?= $r->tgl_bayar ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Tanggal Masuk</label>
                                              <input type="date" class="form-control"  placeholder="" name="tgl_masuk" value="<?= $r->tgl_masuk ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Tanggal Keluar</label>
                                              <input type="date" class="form-control"  placeholder="" name="tgl_keluar" value="<?= $r->tgl_keluar ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Sisa Pembayaran</label>
                                              <input type="text" class="form-control"  placeholder="" name="sisa_pembayaran" value="<?= $r->sisa_pembayaran ?>">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <button class="btn btn-primary" type="submit">Update</button>
                                      </form>
                                    </div>-->
                                  </div>
                                </div>
                              </div>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
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
