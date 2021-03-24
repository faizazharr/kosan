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


	<!-- Hero section -->
	<section class="hero-section">
        <div class="container">
            <div class="card">
              <img width="25%" class="align-self-start mr-3" src=" <?= base_url('asset_admin/artikel/'.$artikel->foto) ?>" alt="Generic placeholder image">
              <div class="media-body p-3">
                <h5 class="mt-0"><?= $artikel->judul ?></h5>
                <p>Tanggal Atrikel : <?= $artikel->tgl_ubah ?></p>
				<div class="card-body">
					<?= $artikel->deskripsi ?>
					<pre>
					</pre>
				</div>
              </div>
            </div>
        </div>
	</section>
	<!-- Hero section end -->

    <div class="clearfix">

    </div>


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="<?php echo base_url() ?>asset_home/img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="<?php echo base_url() ?>asset_home/img/logo1.png" width="200px" height="60" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">

					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ngekos Yuk <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
