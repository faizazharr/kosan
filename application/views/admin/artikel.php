<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Artikel</a>
    </div>
    <!-- Content Row -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Kamar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url()?>admin/tambah_artikel" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Judul Artike;</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Judul" name="judul_artikel" aria-label="judulArtikel" aria-describedby="basic-addon2">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Kategori</label>
                      <input type="text" class="form-control bg-light border-1 small" placeholder="Kategori" name="kategori_artikel" aria-label="kategoriArtikel" aria-describedby="basic-addon2">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Deskripsi</label>
                      <textarea type="text" class="form-control bg-light border-1 small" placeholder="Deskripsi" name="deskripsi_artikel" aria-label="deskripsi" aria-describedby="basic-addon2"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Gambar Artikel</label>
                      <input type="file" class="form-control bg-light border-1 small" placeholder="" name="foto" aria-label="foto" aria-describedby="basic-addon2">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
        </div>
    </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Artikel</th>
                      <th>Judul Artikel</th>
                      <th>Kategori</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Upload</th>
                      <th>Tanggal Diubah</th>
                      <th>Gambar Artikel</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($result as $r): ?>
                          <tr>
                              <td><?= $r->id_artikel ?></td>
                              <td><?= $r->judul ?></td>
                              <td><?= $r->kategori_artikel ?></td>
                              <td><?= $r->deskripsi ?></td>
                              <td><?= $r->tgl_upload ?></td>
                              <td><?= $r->tgl_ubah ?></td>
                              <td>
                                  <img src="<?= base_url('asset_admin/artikel/').$r->foto ?>" alt="artikel" height="200px"></td>
                              <td>
                                  <a href="<?php echo base_url("admin/edit_artikel/$r->id_artikel") ?>" class="btn btn-primary">Edit</a>
                                  <a href="<?php echo base_url("admin/hapus_artikel/$r->id_artikel") ?>" class="btn btn-danger">Hapus</a>
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
