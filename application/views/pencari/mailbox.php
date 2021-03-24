 <?php error_reporting(0); 
 $conn	 	= mysqli_connect("localhost","root","","kost");
?>
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
				<b>From :</b> 
				<input type="text" name="from" value="<?=$_GET[from]?>"></b>
				</form>
				<hr>
				
			<?php if($_GET[from]!=''){
				?>
				
			<div style="height:350px; overflow:auto; ">
				<?php
						  $my 		= $nama->id_pencari;
						  $dari 	= $_GET[from];
						  $qmail	= mysqli_query($conn,"select * from mailbox where untuk='$my' and dari='$dari' OR untuk='$dari' and dari='$my' order by id desc");
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
			
			<?php
						  
			}?> 
			
			</div>
			<?php 
				if($_POST[smsg]!=''){
					$frm	= $nama->id_pencari;
					$to 	= $_POST[smsg];
					$pesan	= mysqli_real_escape_string($conn,$_POST[msg]);
					mysqli_query($conn,"insert into mailbox set pesan='$pesan', dari='$nama->id_pencari', untuk='$to'");
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
						  $my 		= $nama->id_pencari;
						  $qmail	= mysqli_query($conn,"select distinct dari  from mailbox where untuk='$my' order by id desc");
						  while($rmail= mysqli_fetch_array($qmail)){
					?>
						<tr>
							<td>
							<a href="?mail=<?=$rmail[id];?>&from=<?=$rmail[dari];?>">
							<?= $rmail[dari]?>
							</a>
							</td>
							<td style="font-size:10px;"><?= $rmail[waktu]?></td>
						</tr>
						  <?php } ?>
					</table>
				</div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   