<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo base_url() ?>asset_registrasi/images/logo2.png');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" enctype="multipart/form-data" method="POST" action="<?php echo base_url('Welcome/insert_pencari') ?>">
					<span class="login100-form-title p-b-59">
						Sign Up Pencari Kos
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="nama_pencari" placeholder="Nama Lengkap">
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
						<span class="label-input100">Tempat Lahir</span>
						<input class="input100" type="text" name="tempat_lahir" placeholder="Tempat Lahir...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Tanggal Lahir</span>
						<input class="input100" type="date" name="tgl_lahir" placeholder="Tanggal Lahir...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Asal Daerah</span>
						<input class="input100" type="text" name="asal_daerah" placeholder="Asal Daerah">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">No KTP</span>
						<input class="input100" type="number" name="no_ktp" placeholder="No KTP...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Status</span>
						<input class="input100" type="text" name="status" placeholder="Status...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Jenis Kelamin</span><br><br>
						<input class="" type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki 
						<input class="" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email address...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">No Telepone</span>
						<input class="input100" type="number" name="no_telp" placeholder="No Telepone...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">No Telepone Wali</span>
						<input class="input100" type="number" name="no_telp_wali" placeholder="No Telepone Wali...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Foto</span>
						<input type="file" class="form-control" name="foto">
						<span class="focus-input100"></span>
					</div>


					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required="">
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
							<button class="login100-form-btn" style="background-color: #5F9EA0;">
								Sign Up
							</button>
						</div>
						<a href="<?php echo base_url(); ?>login/login_pencari" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	