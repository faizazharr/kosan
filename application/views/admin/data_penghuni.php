 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penghuni</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Penghuni</th>
                      <th>Nama Penghuni</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Asal Daerah</th>
                      <th>No KTP</th>
                      <th>Status</th>
                      <th>Jenis Kelamin</th>
                      <th>Email</th>
                      <th>No Telepon</th>
                      <th>No Telepon
                      wali</th>
                      <th>Foto</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($result as $r): ?>
                      <tr>
                          <td><?= $r->id_pencari ?></td>
                          <td><?= $r->nama_pencari ?></td>
                          <td><?= $r->tempat_lahir ?></td>
                          <td><?= $r->tgl_lahir ?></td>
                          <td><?= $r->asal_daerah ?></td>
                          <td><?= $r->no_ktp ?></td>
                          <td><?= $r->status ?></td>
                          <td><?= $r->jenis_kelamin ?></td>
                          <td><?= $r->email ?></td>
                          <td><?= $r->no_telp ?></td>
                          <td><?= $r->no_telp_wali ?></td>
                          <td><img src="<?= base_url('asset_registrasi/upload_pencari/'.$r->foto); ?>" alt="foto_pemilik <?= $r->foto ?>" width="100"></td>
                          <!-- <td><?= $r->foto ?></td> -->
                          <td>
                              <a href="<?php echo base_url("admin/edit_penghuni/$r->id_pencari") ?>" class="btn btn-primary">Edit</a>
                              <a href="<?php echo base_url("admin/hapus_penghuni/$r->id_pencari") ?>" class="btn btn-danger">Hapus</a>
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
