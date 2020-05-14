<form id="form_catatan">
	<div class="tabbable">
		<ul class="nav nav-tabs" id="tabs">
			<li class="active"><a href="#" id="pribadi" data-toggle="tab" id="p1">Pribadi</a></li>
			<li><a href="#" id="panitia" data-toggle="tab" id="p2" >Panitia</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="pribadi">
			</div>
			<div class="tab-pane" id="panitia">
			</div>
		</div>
		<textarea name="teks"></textarea>
		<input type="hidden" name="userid" value="<?echo $this->session->userdata('userid');?>"/>
		<input type="hidden" name="jenis" id="jenis_" value=""/>
		<input type="submit" class="btn" value="Simpan" id="simpan_note"/>
	</div>
</form>
<div>
	<a href="<?echo base_url().'index.php/panitia/get_catatan'; ?>"> Lihat data </a>
</div>

<script type="text/javascript">	
$(document).ready(function() {
	$('#p1').click(function() {
		$('input#jenis_').val('pribadi');
	});
	$('#p2').click(function() {
		$("#jenis_").val("panitia");
	});	
	$("#simpan_note").click(function() {
		$("#form_catatan").submit(function(e){
			e.preventDefault();
			$.ajax({
				url: "<? echo base_url().'index.php/panitia/tambah_catatan'; ?>",
				type: "POST",
				dataType : 'json',
				data: 
					$("#form_catatan").serialize(),
				success: function(){
					alert('Catatan berhasil disimpan!');
				},
				failure: function(){
					alert('Maaf, catatan gagal disimpan!');
				}
			});	
		});
	});
});
</script>