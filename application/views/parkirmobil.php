<div class="container">
	<div class="header_listmobil">
		<img class="inline" src=""></img>
		<p class="margin_left">Parkiran > List Mobil</p>
		<b><p class="margin_kanan">Saldo : Rp</p></b>
	</div>
	<div class="listmobil_user">
		<div class="right_listmobil">
			<div class="list_permobil"> 
				<p class="tulisan_listmobil"> List Mobil </p> 
			</div>
			<div class="garis_abu"></div>
			<br/>
			<form method="post"  id="form_parkir" class="form-horizontal">
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Nama Rental / Judul</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nama Rental / Judul" name="nama_rental"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Jenis Mobil</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Jenis Mobil" name="jenis_mobil"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Tahun Mobil</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Tahun Mobil" name="tahun_mobil"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Harga Mobil</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Harga Mobil" name="harga_mobil"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Lama Waktu Rental</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Lama Waktu Rental" name="waktu_rental"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Deskripsi</p> 
					<div class="col-md-5">
						<textarea class="form-control" placeholder="Deskripsi" name="deskripsi" rows="4" cols="10"></textarea>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Alamat</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat"/>
						<input type="hidden" id="latitude" name="latitude" value=""/>
						<input type="hidden" id="longitude" name="longitude" value=""/>
					</div>
				</div>
				<div class="garis_abu"></div><br/>
				<div class="box_hitam"><p style="font-size:18px;">Upload Foto </p></div><br/>
				<div style="display:inline;">
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img src="<?php echo base_url().'resource/img/mobil_profil.png'; ?>" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto1"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img data-src="holder.js/100%x100%" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto2"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img data-src="holder.js/100%x100%" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto3"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
				</div><br/>
				<div style="display:inline;">
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img data-src="holder.js/100%x100%" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto4"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img data-src="holder.js/100%x100%" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto5"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img data-src="holder.js/100%x100%" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto6"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
				</div><br/><br/>
				<div class="garis_abu"></div><br/>
				<div class="box_hitam"><p style="font-size:18px;">Fitur Tambahan</p></div><br/>
				<div>
					<div style="width:50%; display:inline; float:right;">
						Petunjuk: <br/>
						Ketika Anda membelifitur tambahan, maka saldo Anda akan berkurang otomatis.<br/>
						Harga Fitur :<br/>
						Fitur A: 15.000 / 30 hari<br/>
						Fitur B: 15.000 / 30 hari<br/>
						Fitur C: 15.000 / 30 hari<br/><br/>
						<input type="submit" class="btn" style="margin-right:35%; float:right; background-color:#006633 !important; color:white;" value="Daftar" id="submit_rental"/>
					</div>
					<div style="display:inline; float:left;">
						<input type="checkbox" name="vehicle" value="Bike"> Fitur A - <b>Bold Text</b><br>
						<input type="checkbox" name="vehicle" value="Car"> Fitur B - <b>Background</b><br>
						<input type="checkbox" name="vehicle" value="Car"> Fitur C - <b>Top</b><br>
					</div>
				</div>
			</form>
		</div>
		<?php $this->load->view('v_mobilkiri'); ?>
	</div>
</div>
<script>
$(document).ready(function() {
	//Autocomplete variables
	 var lat = -0.789275;
	 var lng = 113.92132700000002;
     var input = document.getElementById('alamat');
     var autocomplete = new google.maps.places.Autocomplete(input, {
             types: ["geocode"]
         });
	 google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
		 var placeK = autocomplete.getPlace();
		 $('#latitude').val(placeK.geometry.location.lat());
		 $('#longitude').val(placeK.geometry.location.lng());
	 });	
	 $("#prov").change(function() {
        var provinsi =$("#prov").val();
        $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/rental/get_kota/"+provinsi,
            cache: true,
            success: function(data) {
                $("#kota").html(data);
            }		
        });
    });
	 $("#kota").change(function() {
        var kota =$("#kota").val();
        $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/rental/get_kecamatan/"+kota,
            cache: true,
            success: function(data) {
                $("#kecamatan").html(data);
            }			
        });
    });
	 $("#kecamatan").change(function() {
        var kecamatan =$("#kecamatan").val();
        $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/rental/get_kelurahan/"+kecamatan,
            cache: true,
            success: function(data) {
                $("#kelurahan").html(data);
            }		
        });
    });
	$(".date-picker").datepicker();
	$(".date-picker").on("change", function () {
		var id = $(this).attr("id");
		var val = $("label[for='" + id + "']").text();
	});
	$('#submit_rental').click(function() {
		$("#form_parkir").submit(function(e){
			e.preventDefault();
			$.ajax({
				url: "<?php echo base_url().'index.php/user/insert_user'; ?>",
				type: "POST",
				dataType : 'json',
				data: 
					$("#form_parkir").serialize(),
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
});
</script>