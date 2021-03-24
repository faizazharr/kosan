 <div class="container-fluid">

   <!-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
        </div>
        <div class="card-body">-->
            <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($artikel as $art): ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('asset_admin/artikel/'.$art->foto) ?>" alt="First slide">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>   </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>  </a>
            </div> -->
            <!--<div class="card-columns">-->
    		<!--	<?php foreach ($artikel as $a): ?>-->
    			<!--	<div class="card">
    					<a href="<?= base_url('welcome/view_artikel/'.$a->id_artikel); ?>">
    						<img class="card-img-top" src=" <?= base_url('asset_admin/artikel/'.$a->foto) ?>" alt="Card image cap">
    					</a>
    					<div class="card-body">
    						<h5 class="card-title"><?= $a->judul ?></h5>
    						<p class="card-text"><?= $a->deskripsi ?></p>
    					</div>
    					<div class="card-footer">
    						<small class="text-muted"><?= $a->tgl_upload ?></small>
    					</div>
    				</div>
    			<?php endforeach; ?>
    		</div>
        </div>

    </div>-->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informasi Kos-Kos an</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card-columns">
                        <?php
                        // while ($row=$result->fetch_assoc()) {
                            ?>
                        <?php foreach ($result as $r): ?>
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url('asset_admin/upload_kos/'.$r->foto); ?>" alt="<?= $r->foto ?>">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $r->nama_kos; ?></h3>
                                    <p class="card-text">
                                        <?php echo $r->deskripsi; ?><br>
                                        Alamat : <?php echo $r->alamat; ?>
                                    </p>
									<a target="_blank" href="<?php echo base_url('pencari/mailbox') ?>?from=<?=$r->id_pemilik?>&msg=Kode kos <?=$r->kode_kos?>
									, Nama Kos <?=$r->nama_kos?>" class="btn btn-warning">
									<i class="fa fa-comments"></i>
									Chat Pemilik</a>
                                    <a href="<?= base_url('pencari/view_data_kos/').$r->kode_kos; ?>" class="btn btn-primary">
                   Ketersediaan Kamar</a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $r->no_telp?>" class="btn btn-success">Whatsapp</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php
                    // }
                         ?>
                      </div>
                    </div>
                  </thead>
                  <tfoot>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card-columns">
              <!-- <div class="card">
                  <img class="card-img-top" src="assets/images/card-img.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h3 class="card-title">Mudah mendapatkan vendor</h3>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
              </div>
               <div class="card">
                  <img class="card-img-top" src="assets/images/card-img.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h3 class="card-title">Lebih banyak pilihan</h3>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
              </div>
              <div class="card">
                  <img class="card-img-top" src="assets/images/card-img.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h3 class="card-title">Paket Pernikahan</h3>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="<?= base_url('paket')?>" class="btn btn-outline-primary">Lihat Paket</a>
                  </div>
              </div> -->
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
