<?php $this->load->view('v_sub_menu');
   $this->load->view('v_header'); ?>
Data Mobil
<div style="width:600px; ">
	<form method="post"  id="form_parkir" class="form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-md-3 control-label">Nama Rental / Judul</label> 
			<div class="col-md-5">
				<input type="text" class="form-control" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Jenis Mobil</label> 
		<div class="col-md-5">
			<input type="text" class="form-control" placeholder="Nama Depan" id="nama_depan" name="nama_depan"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Tahun Mobil</label> 
		<div class="col-md-5">
			<input type="text" class="form-control" placeholder="Nama Belakang" id="nama_belakang" name="nama_belakang"/>
		</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Harga Mobil</label>
			<div class="col-md-5">
				<input type="email" class="form-control" placeholder="Email" id="email" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Lama Waktu Rental</label> 
			<div class="col-md-5">
				<input type="text" class="form-control" placeholder="Ex: 08xxxx" id="telp" name="telp"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Deskripsi</label> 
			<div class="col-md-5">
				<textarea></textarea>
			</div>
		</div>
		<div>
		Alamat
		<a href="#">Edit</a>
		</div>
		<br/>
		<label for="userfile">File</label>
        <input type="file" name="userfile" id="userfile" size="20" />

		<input type="submit" value="Simpan" id="button_parkir" class="button_daftar" style="margin-right:110px; float:right;"/>
	</form>
	</div>
		<div id="pesan_daftar" class="alert alert-success" role="alert">
	</div>
	<div id="spinner" class="spinner" style="display:none;">
		<img id="img-spinner" src="<?php echo base_url().'resource/img/loading.gif'; ?>" alt="Loading"/>
	</div>
</div>
<? $this->load->view('v_footer'); ?>