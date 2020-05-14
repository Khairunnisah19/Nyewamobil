		<div class="tengah" style="margin-top: 50px; margin-bottom: 50px;">	
			<form id="form_login">
				<div style="width:500px; height:auto; background-color: #009933; border-radius: 10px;">
					<div style="width:350px; height: 150px; padding:0 10px 20px 20px;" class="inline">
						<div class="form-group">
							<label for="inputusername" style="color:white;">Username</label>
							<input type="text" class="form-control" style="background-color:white !important;" name="username" placeholder="Username"/>
						</div>
						<div class="form-group">
							<label for="inputPassword" style="color:white;">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password"/>
						</div>
					</div>
					<div style="padding:40px 0;" class="inline">
						<input type="submit" class="button_login" style="margin-right: 0 !important" value="Login" id="btn_login"/>
					</div>  
					<div id="login_bawah" style="clear:both; padding: 0 20px 20px 20px;">
						<a href="#" style="color:yellow;"> Lupa Password </a>
						<div class="checkbox" style="display:inline;">
							<label style="color:white;"><input type="checkbox"/>Remember me</label>
						</div>
					</div>
				</div>
			</form>	
		</div>
<script>
$('#btn_login').click(function() {
		$("#form_login").submit(function(e){
			e.preventDefault();
			$.ajax({
				url: "<?php echo base_url().'index.php/user/cek_login'; ?>",
				type: "POST",
				dataType : 'json',
				data: 
					$("#form_login").serialize(),
				success: function(data){	
					window.location.replace('<?php $id = $this->session->userdata('id_user'); echo base_url()."index.php/mobil/listmobil/$id"; ?>');
				},
				failure: function(){
					alert("Gagal");
				}
			});
			return false;
		});
	});
</script>
