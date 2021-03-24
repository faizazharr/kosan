<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo base_url() ?>asset_registrasi/images/logo2.png');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" enctype="multipart/form-data" method="POST" action="<?php echo base_url('Welcome/insert_pemilik/') ?>">
					<span class="login100-form-title p-b-59">
						Sign Up Pemilik Kos
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nama Lengakap</span>
						<input class="input100" type="text" name="nama_pemilik" placeholder="nama Lengkap">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="konfirmasi" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">No KTP</span>
						<input class="input100" type="number" name="no_ktp" placeholder="No Ktp...">
						<span class="focus-input100"></span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">No Telepone</span>
						<input class="input100" type="number" name="no_telp" placeholder="No Telepon...">
						<span class="focus-input100"></span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nomor Rekening</span>
						<input class="input100" type="number" name="no_rek" placeholder="Nomor Rekening...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nama Pemilik Rekening</span>
						<input class="input100" type="text" name="atas_nama_rek" placeholder="Nama Pemilik Rekening...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nama Bank</span>
						<input class="input100" type="text" name="bank" placeholder="Nama Bank...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Jenis Kelamin</span>
						<input class="" type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki 
						<input class="" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan 
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Foto</span>
						<input type="file" class="form-control" name="foto">
						<span class="focus-input100"></span>
					</div>
					

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn" style="background-color: #5F9EA0;">
								Submit
							</button>
						</div>

						<a href="<?php echo base_url(); ?>Welcome/login_pemilik" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	