 <?php error_reporting(0);?>
 <?php if($_GET['print']==2){ echo "<script>print();</script>";}?>
 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kost</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			  <?php if($_GET['print']==1){ ?>
			  <a target="_BLANK" href="<?=base_url('admin/data_kos');?>/print?print=2" class="btn btn-lg btn-warning">Cetak</a>
			  <br>
			  <br>
			  <?php } ?>
			  
					   <?php if($_GET['print']==2){ ?>
                      Print date : <?=date('d/m/Y');?>
					   <?php } ?>
                <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Kos</th>
                      <th>Nama Kos</th>
                      <th>Alamat</th>
                      <th>Deskripsi</th>
                      <th>Foto</th>
                      <th>Jenis Kosan</th>
                      <th>Saldo Kos</th>
                      <th>ID Pemilik</th>
					   <?php if($_GET['print']!=2){ ?>
                      <th>Aksi</th>
					   <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $r): ?>
                      <tr>
                        <td><?php echo $r->kode_kos ?></td>
                        <td><?php echo $r->nama_kos ?></td>
                        <td><?php echo $r->alamat ?></td>
                        <td><?php echo $r->deskripsi ?></td>
                        <td><?php echo $r->foto ?></td>
                        <td><?php echo $r->jenis_kosan ?></td>
                        <td><?php echo $r->saldo_kos ?></td>
                        <td><?php echo $r->id_pemilik ?></td>
						 <?php if($_GET['print']!=2){ ?>
                        <td>
                          <a href="<?php echo base_url("Admin/hapus_kos/$r->kode_kos") ?>" class="btn btn-primary">Hapus</a>
                          <a href="<?php echo base_url("Admin/edit_kos/$r->kode_kos") ?>" class="btn btn-danger">Edit</a>
                        </td>
						 <?php } ?>
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
