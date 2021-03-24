<meta http-equiv="Refresh" content="25">
 <?php error_reporting(0); 
 session_start();
 $conn	 	= mysqli_connect("localhost","root","","kost");
?>
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

 <div class="container-fluid">

    <div class="card shadow mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Mailbox</h6>
            </div>
            <div class="card-body">
			<div class="col-lg-9" style="float:right;">
			<form method="get">
				
			<div style="height:350px; overflow:auto; ">
				<?php
						  $my 		= $_SESSION[myid];
						  $dari 	= $_GET[from];
						  $qmail	= mysqli_query($conn,"select * from mailbox where untuk='$my' and dari='admin' OR untuk='admin' and dari='$my' order by id desc");
						  while($rmail= mysqli_fetch_array($qmail)){ 
							?>
							<div style=" <?php if($rmail[dari]!=$my){?>background:lightgreen;<?php }else{?>background:;<?php } ?> padding:10px; border-radius:5px;">
							
							<?=$rmail[dari]?>
							<span style="font-size:10px;">Date : <?=$rmail[waktu]?></span>
							<br>
							<?=$rmail[pesan]?>
							</div>
							
				
							<?php
							mysqli_query($conn,"update mailbox set status='1' where dari='$dari'");
						  }
						  ?>
						  </div>
					<hr>
					<form method="post">
				<textarea placeholder="Masukan pesan anda..." name="msg" class="form-control"><?=$_GET[msg]?></textarea>
				<br>
				<button name="smsg" value="<?=$dari?>" style="float:right;" class="btn btn-success">Kirim</button>
			</form>
			
			
			</div>
			<?php 
				if($_POST[smsg]!=''){
					$frm	= $_SESSION[myid];
					$to 	= $_POST[smsg];
					$pesan	= mysqli_real_escape_string($conn,$_POST[msg]);
					mysqli_query($conn,"insert into mailbox set pesan='$pesan', dari='$_SESSION[myid]', untuk='admin'");
					?>
					<script>window.location.href="";</script>
					<?php
				}
			?>
		
			<div class="col-lg-3" style="height:400px;overflow:auto; float:left;">
					<b><i class="fas fa-envelope fa-fw"></i> Inbox</b>
					<hr>
					<table>
					<?php 
						  $my 		= $_SESSION[myid];
						  $qmail	= mysqli_query($conn,"select distinct dari from mailbox where untuk='$my' order by id desc");
						  while($rmail= mysqli_fetch_array($qmail)){
							  $dari = $rmail[dari];
							  if($rmail[dari]==$dari){
					?>
						<tr>
							<td>
							<a href="?mail=<?=$rmail[id];?>&from=<?=$rmail[dari];?>">
							<?= $rmail[dari]?>
							</a>
							</td>
							<td style="font-size:10px;"><?= $rmail[waktu]?></td>
						</tr>
							  <?php }
							  } ?>
					</table>
				</div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   