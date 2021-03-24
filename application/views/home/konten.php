<?php error_reporting(0);
		session_start();?>
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
					<h6><a href="<?php echo base_url('Welcome/') ?>">HOME</a>
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
				<a href="#" class="site-logo">
					<img src="<?php echo base_url() ?>asset_home/img/logo1.png" width="400px" height="110" alt="" >
				</a>
			</div>
		</div>
	</header>
	<!-- Header section end -->



	<div class="container">
		<div class="card-columns">
				<?php $conn = mysqli_connect("localhost","root","","ngekost"); 
					$q 		= mysqli_query($conn,"select * from kosan ");
					while($r= mysqli_fetch_array($q)){
				?>
    				<div class="card">
    					<a target="_blank" href="<?= base_url('Welcome/view_data_kos/'.$r[kode_kos]) ?>">
    						<img width="200" height="240" class="card-img-top" src="<?= base_url('asset_admin/upload_kos/'.$r[foto]) ?>" alt="Card image cap">
    					</a>
    					<div class="card-body">
    						<h5 class="card-title"><?= $r[nama_kos] ?></h5>
    						<p class="card-text"><?= $r[deskripsi] ?></p>
    					</div>
    					<div class="card-footer">
    						<small class="text-muted"><?= $r[jenis_kosan] ?></small>
    					</div>
    				</div>
    			<?php } ?>
		</div>
	</div>


	
	
	
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?= base_url('style.css');?>">
	
  <!--  <input type="checkbox" id="click">-->
  
    <label for="click">
      <a target="_blank" href="http://line.me/ti/p/@612lcjze">-<i class="fab fa-line "></i></a>
      <!--<i class="fas fa-times"></i>-->
    </label>
    <!--<div class="wrapper">
      <div class="head-text">Let's chat?</div>
      <div class="chat-box">
	  <?php if($_SESSION[myid]==''){?>
        <div class="desc-text">Silahkan chat Kami Disini.</div>
        <form action="" method="post">
          <div class="field">
            <input type="text" name="nama" placeholder="Your Name" required>
          </div>
          <div class="field">
            <input type="email" placeholder="Email Address" required>
          </div>
          <div class="field textarea">
            <textarea cols="30" name="msg" rows="10" placeholder="Masukan pesan disini.." required></textarea>
          </div>
          <div class="field">
            <button name="chat" value="1" type="submit">Start Chat</button>
          </div>-->
        </form>
	 <!-- <?php }else{?>-->
	 <!-- <div class="desc-text"></div>
        <form action="" method="post">
		<a href="chat">Start Chat</a>
		</form>
	  </div>
	  <?php }?>
    </div>-->
	<!--<?php if($_POST[chat]!=''){
		$_SESSION[myid]=rand('000000','999999').$_POST[nama];
		?>
		<script>window.location.href="chat?from=<?=$_SESSION[myid]?>&msg=<?=$_POST[msg]?>";</script>
		<?php
		
	}
	?>-->
	
	<!-- Footer section  -->
	<?php /*
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
	*/?>
	<!-- Footer section end -->
