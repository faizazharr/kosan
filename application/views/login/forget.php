<?php error_reporting(0);?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<center><img src="<?php echo base_url() ?>asset_home/img/logo2.png" width="100px" height="100px" alt="" ></center> <br>
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-55">
						Lupa password
					</span>

					
	<?php
		if($_POST[submit]!=''){
			$conn = mysqli_connect("localhost","root","","kost");
			$qcek = mysqli_query($conn,"select * from admin,pencari,pemilik where admin.email='$_POST[email]' 
			or  pencari.email='$_POST[email]' or pemilik.email='$_POST[email]'");
			$rcek = mysqli_fetch_array($qcek);
			if($rcek[email]==''){
				?><script>alert("Email tidak terdaftar");</script><?php
			}else{
				$koderand	= md5(rand('0000','9999'));
				$key		= $koderand;
				$exp 		= date('H');
				mysqli_query($conn,"insert into tmp_forget_pass set email='$_POST[email]', kode='$koderand', exp='$exp'");
				
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="='.base_url('Welcome/resetpass?key=').$key.'&email='.$_POST[email].'&action=reset" target="_blank">'.base_url('Welcome/resetpass?key=').$key.'&email='.$email.'</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$body = $output; 
$subject = "Password Recovery - Kost";
$email = $_POST[email];
$email_to = $email;
$fromserver = "noreply@yourwebsite.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.yourwebsite.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "noreply@yourwebsite.com"; // Enter your email here
$mail->Password = "password"; //Enter your passwrod here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "noreply@yourwebsite.com";
$mail->FromName = "AllPHPTricks";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}
	
	
			}
			
			?><script>window.location.href="<?php echo base_url('Welcome/resetpass?key=').$key.'&email='.$_POST[email];?>";</script><?php
		}
	?>
	
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
					</div>


					
					<div class="container-login100-form-btn p-t-25">
						<button name="submit" class="login100-form-btn" value="1" style="background-color: #5F9EA0;">
							Kirim
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