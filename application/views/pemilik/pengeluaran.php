<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Pengeluaran</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Pengeluaran</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <form class="" action="<?=base_url('pemilik/tambah_pengeluaran'); ?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan Pengeluaran</label>
                    <input type="text" class="form-control"  placeholder="" name="keterangan_pengeluaran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control"  placeholder="" name="harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pengeluaran</label>
                    <input type="text" class="form-control"  placeholder="" name="jumlah">
                  </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengeluaran Kos</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Keterangan Pengeluaran</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 0;
                      $jumlah = 0;
                      foreach ($result as $r):
                          $no++?>
                          <tr>
                              <td><?= $no ?></td>
                              <td><?= $r->keterangan_pengeluaran ?></td>
                              <td><?= $r->harga ?></td>
                              <td><?= $r->jumlah ?></td>
                              <?php
                              $jumlah = $r->harga*$r->jumlah;
                               ?>
                              <td><?= $jumlah ?></td>
                              <td>
                                  <button name="button" type="button" data-toggle="modal" data-target="#modal<?= $r->kode_pengeluaran ?>" class="btn btn-primary">Edit</button>
                                  <div class="modal fade" id="modal<?= $r->kode_pengeluaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Input Pengeluaran</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="" action="<?=base_url('pemilik/edit_pengeluaran'); ?>" method="post">
                                                <div class="form-group">
                                                  <input type="hidden" name="kode_pengeluaran" value="<?= $r->kode_pengeluaran ?>">
                                                  <label for="exampleInputEmail1">Ketrerangan Pengeluaran</label>
                                                  <input type="text" class="form-control"  placeholder="" name="keterangan_pengeluaran" value="<?= $r->keterangan_pengeluaran ?>">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Harga</label>
                                                  <input type="text" class="form-control"  placeholder="" name="harga" value="<?= $r->harga ?>">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Jumlah Pengeluaran</label>
                                                  <input type="text" class="form-control"  placeholder="" name="jumlah" value="<?= $r->jumlah ?>">
                                                  <?php
                                                  $jumlah_total += $jumlah ?>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                          <button class="btn btn-primary" type="submit">Update</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <a href="<?php echo base_url("pemilik/edit_pengeluaran/$r->kode_pengeluaran") ?>" class="btn btn-primary">Edit</a> -->
                                  <a href="<?php echo base_url("pemilik/hapus_pengeluaran/$r->kode_pengeluaran") ?>" class="btn btn-danger">Hapus</a>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                      <tfoot>
                          <tr>
                              <td colspan="4"><b>Total Jumlah</b></td>
                              <td><?= $jumlah ?></td>
                              <td>
                                  <!-- <button type="button" name="button" class="btn btn-primary">Update</button> -->
                              </td>
                          </tr>
                      </tfoot>
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
