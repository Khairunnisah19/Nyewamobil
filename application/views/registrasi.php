<div class="container">
	<div class="header_registrasi">
		<br/>
		<p>Registrasi User</p>
	</div>
	
	<div class="registrasi">
		<br/>
		<form method="post"  id="form_registrasi" class="form-horizontal" action="<?php //echo base_url().'index.php/user/insert_user'; ?>">
			<div class="form-group">
				<label class="col-md-3 control-label">Username</label> 
				<div class="col-md-5">
					<input type="text" class="form-control" placeholder="Username" name="username"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Password</label> 
				<div class="col-md-5">
				<input type="password" class="form-control" name="password" id="password" placeholder="Password" />
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-3 control-label">Ulangi Password</label> 
			<div class="col-md-5">
				<input type="password" class="form-control" name="confirm_password" placeholder="Ulangi password" />
			</div>	
			</div>
			<div class="form-group">
			<label class="col-md-3 control-label">Nama Depan</label> 
			<div class="col-md-5">
				<input type="text" class="form-control" placeholder="Nama Depan" id="nama_depan" name="nama_depan"/>
			</div>
			</div>
			<div class="form-group">
			<label class="col-md-3 control-label">Nama Belakang</label> 
			<div class="col-md-5">
				<input type="text" class="form-control" placeholder="Nama Belakang" id="nama_belakang" name="nama_belakang"/>
			</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-5">
					<input type="email" class="form-control" placeholder="Email" id="email" name="email"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">No. Telp.</label> 
				<div class="col-md-5">
					<input type="text" class="form-control" placeholder="Ex: 08xxxx" id="telp" name="telp"/>
				</div>
			</div>
			<br/>
			<input type="submit" class="btn" style="margin-right:35%; float:right;" value="Daftar" id="button_daftar"/>
			<br/><br/>
			<p style="margin-left: 4px;"> Tekan "daftar" jika Anda telah menyetujui <a href="#" style="color:red;">Aturan Penggunaan</a> pinjamobil.com</p><br/>
		</form>
		<div id="pesan_daftar" class="alert alert-warning fade in hide" role="alert">
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">×</span>
			<span class="sr-only">Close</span>
		</button>
		<p>Thank for signing up</p>
		<br/>
		</div>
		<div id="spinner" class="spinner" style="display:none;">
			<img id="img-spinner" src="<?php echo base_url().'resource/img/loading.gif'; ?>" alt="Loading"/>
		</div>
	</div>
</div>
<script>
$('#button_daftar').click(function() {
		$("#form_registrasi").submit(function(e){
			e.preventDefault();
			$.ajax({
				url: "<?php echo base_url().'index.php/user/insert_user'; ?>",
				type: "POST",
				dataType : 'json',
				data: 
					$("#form_registrasi").serialize(),
				success: function(data){	
					alert("Berhasil");
					pesan_daftar.show();
				},
				failure: function(data){
					alert("Gagal");
				}
			});
			return false;
		});
	});
</script>