<?php error_reporting(0);?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<center><img src="<?php echo base_url() ?>asset_home/img/logo2.png" width="100px" height="100px" alt="" ></center> <br>
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-55">
						Ganti password
					</span>

		
	
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="password" name="password1" placeholder="Password baru">
						<input class="input100" type="hidden" name="email" value="<?= $_GET[email]?>" placeholder="Password baru">
					</div>


					
					<div class="container-login100-form-btn p-t-25">
						<button name="submit" class="login100-form-btn" value="1" style="background-color: #5F9EA0;">
							Simpan
						</button>
					</div>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Belum Punya Akun?
						</span>

						<a class="txt1 bo1 hov1" href="<?php echo base_url('Welcome/registrasi_pencari'); ?>">
							Daftar Sekarang							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<?php
	
		$conn = mysqli_connect("localhost","root","","kost");
		
		if($_POST[submit]!=''){
			$pass1	= md5($_POST[password1]);
			$email	= $_POST[email];
					mysqli_query($conn,"update pencari set password='$pass1' where email='$email'");
					mysqli_query($conn,"update pemilik set password='$pass1' where email='$email'");
					mysqli_query($conn,"update admin set password='$pass1' where email='$email'");
					
				?><script>alert('Password berhasil diubah, silahkan login kembali');window.location.href="<?= base_url('Welcome/login_pilihan'); ?>";</script><?php
			
		}
	?>