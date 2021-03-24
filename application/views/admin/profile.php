 <?php error_reporting(0);?>
 <div class="container-fluid">

    <div class="card shadow mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Profile/Settings</h6>
            </div>
            <div class="card-body">
			<div class="col-lg-6" style="float:right;">
							<h3>Ganti password</h3>
					<form method="post">
											
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password lama</span>
						<input class="form-control" class="input100" type="password" name="password1" placeholder="Kosongkan jika tidak ingin diubah">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password baru</span>
						<input class="form-control" class="input100" type="password" name="password2" placeholder="Kosongkan jika tidak ingin diubah">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password baru ulangi</span>
						<input class="form-control" class="input100" type="password" name="password3" placeholder="Kosongkan jika tidak ingin diubah">
						<span class="focus-input100"></span>
					</div>
					<br>
					<button name="cpass" value="1" class="btn btn-primary btn-lg">Save</button>
					</form>
				</div>
			<div class="col-lg-6">
				<form method="post" enctype="multipart/form-data">
					<img src="<?= base_url('asset_registrasi/upload_admin/').$nama->foto ?>" class="img img-thumbnail rounded-circle" style="width:100px; height:100px;">
					<input type="file" name="foto">
					<br>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Username</span>
						<input class="form-control" class="input100" value="<?php echo $nama->username;?>" type="text" name="username" placeholder="ID User">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nama Lengkap</span>
						<input class="form-control" class="input100" value="<?php echo $nama->nama_admin;?>" type="text" name="nama_admin" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
					</div>
					
					 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="form-control" class="input100" value="<?php echo $nama->email;?>" type="email" name="email" placeholder="Email address...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">No Telepone</span>
						<input class="form-control" class="input100" value="<?php echo $nama->no_telp;?>" type="number" name="no_telp" placeholder="No Telepone...">
						<span class="focus-input100"></span>
					</div>
 
					<br>
					<div class="wrap-input100 validate-input" >
						<button value="1" name="udata" class="btn btn-primary btn-lg">Save</button>
						<span class="focus-input100"></span>
					</div>
					
				</form>
				</div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   
   <?php
		$conn = mysqli_connect("localhost","root","","kost");
		
		if($_POST[cpass]!=''){
			$idpen 	= $nama->username;
			$pass1	= md5($_POST[password1]);
			$pass2	= md5($_POST[password2]);
			$pass3	= md5($_POST[password3]);
		$qcek = mysqli_query($conn,"select * from admin where username='$idpen'");
			$rcek = mysqli_fetch_array($qcek);
			if($pass1==$rcek[password]){
				if($pass2==$pass3){
					mysqli_query($conn,"update admin set password='$pass2' where username='$idpen'");
					
				?><script>alert('Password berhasil diubah, silahkan login kembali');window.location.href="<?= base_url('pencari/logout'); ?>";</script><?php
				}else{
					
				?><script>alert('Password baru tidak sama');</script><?php
				}
			}else{
				?><script>alert('Password lama salah');</script><?php
			}
			
		}
		if($_POST[udata]=='1'){
			
			
				if($_FILES['foto']['name']!=''){

					$gambar = rand(0000,9999).$_FILES["foto"]["name"];
					$target_file = 'asset_registrasi/upload_admin/'.$gambar;
					move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
					$upfoto = ", foto='$gambar' ";
					
				}				
					
					
		mysqli_query($conn,"UPDATE `kost`.`admin` SET `nama_admin` = '$_POST[nama_admin]',
`email` = '$_POST[email]',
`no_telp` = '0823462621' $upfoto WHERE `admin`.`username` = '$_POST[username]' 
		 ");
?><script>alert("Berhasil deparbaharui"); window.location.href="?";</script><?php
		}
	?>