<div class="container">
	<div class="header_listmobil">
		<img class="inline" src=""></img>
		<p class="margin_left">Profil > Edit Profil</p>
		<b><p class="margin_kanan">Saldo : Rp. 0</p></b>
	</div>
	<div class="listmobil_user">
		<div class="right_listmobil">
			<form method="post"  id="form_rental" class="form-horizontal">
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Foto Profil</p> 
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						<img data-src="holder.js/100%x100%" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
					  <div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Ganti</span><input type="file" name="foto4"></span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
					  </div>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Nama Lengkap</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Email</p> 
					<div class="col-md-5">
						<input type="email" class="form-control" placeholder="Email" name="email"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">No. HP</p> 
					<div class="col-md-5">
						<input type="text" class="form-control" placeholder="No. HP" name="nohp"/>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Jenis Kelamin</p> 
					<div class="col-md-5">
						<input type="radio" name="sex" value="male"> Laki-laki <input type="radio" name="sex" value="female"> Perempuan
					</div>
				</div>
				<div class="form-group ">
					<p style="display:inline; float:left;" class="col-md-3">Tanggal Lahir</p> 
					<div class="input-group col-md-5">
						<input id="date-picker-2" type="text" class="date-picker form-control" /><label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span></label>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Provinsi</p> 
					<div class="col-md-5">
					<select name="provinsi" class="form-control" id="prov" >
						<option >- Pilih Provinsi -</option>
						<?php foreach($provinsi->result_array() as $row){ ?>
							<option value="<? echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
						<?php } ?>
					</select>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Kota</p> 
					<div class="col-md-5">
					<select class="form-control" name="kota" id="kota">
						<option >- Pilih Kota -</option>
					</select>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Kecamatan</p> 
					<div class="col-md-5">
					<select class="form-control" name="kecamatan" id="kecamatan">
						<option >- Pilih Kecamatan -</option>
					</select>
					</div>
				</div>
				<div class="form-group">
					<p style="display:inline; float:left;" class="col-md-3">Kelurahan</p> 
					<div class="col-md-5">
					<select class="form-control" name="kelurahan" id="kelurahan">
						<option >- Pilih Kelurahan -</option>
					</select>
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
				<input type="submit" class="btn" style="margin-right:35%; float:right; background-color:#006633 !important; color:white;" value="Daftar" id="button_rental"/>
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
	$('#button_rental').click(function() {
		$("#form_rental").submit(function(e){
			e.preventDefault();
			$.ajax({
				url: "<?php echo base_url().'index.php/user/insert_user'; ?>",
				type: "POST",
				dataType : 'json',
				data: 
					$("#form_rental").serialize(),
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