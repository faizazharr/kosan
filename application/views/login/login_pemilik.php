<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<center><img src="<?php echo base_url() ?>asset_home/img/logo2.png" width="100px" height="100px" alt="" ></center> <br>
				<form class="login100-form validate-form" action="<?php echo base_url('Welcome/proses_login?pemilik'); ?>" method="POST">
					<span class="login100-form-title p-b-55">
						Login Pemilik Kos
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button type="submit" name="submit" class="login100-form-btn" style="background-color: #5F9EA0;">
							Login
						</button>
						<div class="container-login100-form-btn p-t-25">
							<a class="login100-form-btn" style="background-color: red;"  href="<?php echo base_url('Welcome/'); ?>">
								Back
							</a>
						
						<a href="forget">Lupa password</a>
					</div>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Belum Punya Akun?
						</span>

						<a class="txt1 bo1 hov1" href="<?php echo base_url('Welcome/registrasi_pemilik'); ?>">
							Daftar Sekarang
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
