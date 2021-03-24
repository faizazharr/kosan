 <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Pemesan</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Nama Kos</th>
                      <th>Kode Kos</th>
                      <th>Bukti Bayar</th>
                      <th>Permintaan</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($result as $r): ?>
                      <tr>
                          <td><?= $r->nama_pencari ?></td>
                          <td><?= $r->tgl_bayar ?></td>
                          <td><?= $r->nama_kos ?></td>
                          <td><?= $r->kode_kos ?></td>
                          <td>
                              <img src="<?= base_url('asset_admin/bukti_bayar/').$r->bukti_bayar ?>" alt="" height="200">
                          </td>
                          <td>
                              <?php if ($r->status_transaksi == 0): ?>
                                  <a href="<?= base_url('pemilik/proses_booking/').$r->id_transaksi ?>" class="btn btn-warning" class="btn btn-primary">
                                      Proses
                                  </a>
                              <?php elseif ($r->status_transaksi == 1): ?>
                                  <button type="anchor" class="btn btn-primary" disabled>
                                      Menunggu Pembayaran
                                  </button>
                              <?php elseif ($r->status_transaksi == 2): ?>
                                  <button type="anchor" class="btn btn-success" disabled>
                                      Lunas 
                                  </button>
                              <?php else: ?>
                                  Maaf Hubungi Pemilik atau Admin
                              <?php endif; ?>
                              <!-- <?= $r->status_transaksi ?> -->
                          </td>
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
