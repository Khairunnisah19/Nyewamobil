	<div class="pencarian">
		<!-- ====================================== AWAL PENCARIAN =========================== -->
		<!--div class="input-append"-->
		<img class="kursor" id="klikhome" src="<?php echo base_url().'resource/img/icon.png'; ?>" width="194" height="35" style="display:inline; margin:20px 0 20px 180px; float:left; " />
		<div style="display:inline; margin:20px 0 20px 200px; float:left;">
			<form class="form-inline">
				<div class="input-append" >
				<input type="text" class="form-control" placeholder="Cari..." style="margin:0 !important;"/>
				<select class="form-control" style="margin:0 !important;">
					 <option>Toyota</option>
					 <option>Honda</option>
					 <option>Mitsubishi</option>
				</select>
				<input id="klikcari" type="submit" class="btn" value="Pencarian" style="margin:0 !important;"/>
				</div>
			</form>
		</div>
		
		<div class="btn-group" style="display:inline; float:left; margin:20px 0 20px 100px;" >
		<?php if($this->session->userdata('id_user') != ''){ ?>
			<input type="button" id="kliklogout" class="btn" style="background-color:#006633 !important; color:white;" value="Logout"/>
		<?php }else{ ?>
			<input type="button" id="kliklogin" class="btn" style="background-color:#006633 !important; color:white;" value="Login"/>
			<input type="button" id="klikregis" class="btn" style="background-color:white !important; color:black !important;" value="Daftar"/>
		<?php } ?>
		</div>
	</div>
	<div class="border_hitam"></div>
	<br/>
	<script>
	$(document).ready(function() {
		$('#kliklogin').click(function(){
			window.location = "<?php echo base_url().'index.php/user/login'; ?>";
		});
		$('#kliklogout').click(function(){
			window.location = "<?php echo base_url().'index.php/user/logout'; ?>";
		});
		$('#klikregis').click(function(){
			window.location.replace("<?php echo base_url().'index.php/user/registrasi'; ?>");
		});
		$('#klikhome').click(function(){
			window.location = "<?php echo base_url().'index.php/user/home'; ?>";
		});
		$('#klikcari').click(function(){
			//window.location.href("<?php echo base_url().'index.php/user/home'; ?>");
		});
	});
	</script>
	