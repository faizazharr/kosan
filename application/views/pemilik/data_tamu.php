 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pemesan Kost</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <!-- <?php print_r($result) ?> -->
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Instansi Bekerja</th>
                      <th>Asal Daerah</th>
                      <th>No Ktp</th>
                      <th>No Telp</th>
                      <th>No Telp Orang Tua</th>
                      <th>E-Mail</th>
                      <th>Lama Sewa</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Keluar</th>
                      <th>Status Bayar</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($result as $r): ?>
                      <tr>
                          <?php
                          $selisih = strtotime($r->tgl_keluar)-strtotime($r->tgl_masuk);
                          $lama = ceil($selisih/(60*60*24*365)) ?>
                          <td><?= $r->nama_pencari ?></td>
                          <td><?= $r->instansi ?></td>
                          <td><?= $r->asal_daerah ?></td>
                          <td><?= $r->no_ktp ?></td>
                          <td><?= $r->no_telp ?></td>
                          <td><?= $r->no_telp_wali ?></td>
                          <td><?= $r->email ?></td>
                          <td><?= $lama ?> Tahun</td>
                          <td><?= $r->tgl_masuk ?></td>
                          <td><?= $r->tgl_keluar ?></td>
                          <td>
                              <?php if ($r->status_transaksi == 1): ?>
                                  Belum Lunas
                              <?php elseif ($r->status_transaksi == 2): ?>
                                Lunas
                                <?php else: ?>
                                    Hubungi Admin
                              <?php endif; ?>
                          </td>
                          <td><img src="<?= base_url('asset_registrasi/upload_pencari/').$r->foto ?>" alt="" width="100"> </td>
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
