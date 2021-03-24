

<body>


<!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Kost </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Kost </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  slides with control  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Pencarian</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                            <th>No.</th>
                                            <th>Gambar</th>
                                            <th>Nama Kos</th>
                                            <th>Alamat</th>
                                            <th>Deskripsi</th>
                                            <th>Chat</th>
                                          </tr>
                                        </thead>
                                        <!-- <tfoot>
                                          <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                          </tr>
                                        </tfoot> -->
                                        <tbody>
                                          <?php
                                              $no = 1;
                                              foreach($result as $r){
                                          ?>
                                            <tr>
                                                <td><?= $no;?></td>
                                                <td><img src="<?= base_url('asset_admin/upload_kos/'.$r->foto); ?>" height="100"></td>
                                                <td><?= $r->nama_kos; ?></td>
                                                <td><?= $r->alamat; ?></td>
                                                <td><?= $r->deskripsi; ?></td>
                                                <td><button class="btn btn-warning" ><a href="<?php echo base_url('pencari/mailbox') ?>?from=<?=$r->id_pemilik?>&msg=Kode kos <?=$r->kode_kos?>
                  , Nama Kos <?=$r->nama_kos?>" class="btn btn-warning">
                  <i class="fa fa-comments"></i>
                  </a></button></td>
                                                <!-- <td>
                                                    <a href="<?= base_url() ?>kelola/editbarang/<?= $b->id_barang ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                                        <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                                    </a>
                                                    <a href="<?= base_url() ?>kelola/hapusbarang/<?= $b->id_barang ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                                        <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                                    </a>
                                                </td> -->
                                            </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                    <span>
                                        <!-- <?php echo print_r($barang); ?> -->
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
