<?php error_reporting(0);?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="user-panel">
					<h6><a href="<?php echo base_url('Welcome/login_pilihan') ?>">Login   | </a>
					<a href="<?php echo base_url('Welcome/regis_pilihan') ?>">Registrasi</a></h6>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="<?php echo base_url() ?>asset_home/img/logo1.png" width="400px" height="110" alt="" >
				</a>
			</div>
		</div>
	</header>
	<!-- Header section end -->



	<div class="row">
<div class="col-lg-12">
<div class="container">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Kost</h1>
         </div>
         <!-- Content Row -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Keterangan Kos</h6>
           </div>
           <div class="card-body">
               <div class="row">
                   <div class="col col-md-3">
                       <img src="<?= base_url('asset_admin/upload_kos/'.$kos->foto); ?>" alt="" width="100%">
                   </div>
                   <div class="col">
                       <div class="table-responsive">
                           <table class="table" width="100%" cellspacing="0">
                               <tr>
                                   <th width="20%">Kode Kos</th>
                                   <th><?= $kos->kode_kos ?></th>
                               </tr>
                               <tr>
                                   <td>Nama Kos</td>
                                   <td><?= $kos->nama_kos ?></td>
                               </tr>
                               <tr>
                                   <td>Alamat</td>
                                   <td><?= $kos->alamat ?></td>
                               </tr>
                               <tr>
                                   <td>Deskripsi</td>
                                   <td><?= $kos->deskripsi ?></td>
                               </tr>
                               <tr>
                                   <td>Jenis Kosan</td>
                                   <td><?= $kos->jenis_kosan ?></td>
                               </tr>
                           </table>
                       </div>
                   </div>
               </div>
               <hr>
           </div>


       </div>
       <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
           </div>
           <div class="card-body">
               <div class="card-columns">

               <?php
               $no = 0;
               foreach ($result as $r): ?>
                   <?php $no++ ?>
                   <div class="card">
                       <img class="card-img-top" src="<?= base_url('asset_admin/upload_kos/') ?><?= $r->foto; ?>" alt="<?= $r->foto; ?>">
                       <div class="card-body">
                           <h3 class="card-title">No. <?= $no?></h3>
                           <p class="card-text">Deskripsi : <?= $r->deskripsi; ?></p>
                           <p class="card-text">Harga : <?= $r->harga; ?></p>
                           <p class="card-text">Tanggal Tersedia : <?= $r->tgl_tersedia; ?></p>
                       </div>
                       <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter<?= $no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Pemesanan Kamar No. <?= $no?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="form" action="<?= base_url('pencari/pesan_kamar') ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Uang Muka</label>
                                        <input type="number" class="form-control" placeholder="" name="uang_muka">
                                        <input type="hidden" name="harga" value="<?= $r->harga; ?>/Tahun">
                                        <input type="hidden" name="kode_kamar" value="<?= $r->kode_kamar; ?>">
                                        <input type="hidden" name="id_pencari" value="<?= $nama->id_pencari; ?>">
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Dari Tanggal</label>
                                            <input type="date" class="form-control" name="tgl_masuk">
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Sampai Tanggal</label>
                                                <input type="date" class="form-control" name="tgl_keluar">
                                            </div>
                                        </div>
                                    </div> -->
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Pesan</button>
                            </form>
                              </div>
                            </div>
                          </div>
                        </div>
                   </div>
               <?php endforeach; ?>
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
