<div>
	<img src="<?php echo base_url().'resource/img/orang1.jpg'; ?>" class="inline" width="40" height="50" style="margin-top:10px; margin-left:50px;"/>
	<div class="inline atas"><i><strong style="font-size:20px;">sewa mobil dari</strong></i><br/><i style="font-size:20px;">tempat terdekat</i></div>
	<div class="pointer menu" id="menumobil" ><b align="center">Mobil</b></div>
	<div class="pointer menu" id="menupeta" ><b align="center">Peta</b></div>
	<?php if($this->session->userdata('id_user')){ ?>
		<div class="pointer menudashboard" id="menudashboard" ><b align="center">Dashboard</b></div>
	<?php } ?>
</div>
<div class="border_hijau"></div>
<script>
		$('#menumobil').click(function(){
			window.location = "<?php echo base_url().'index.php/list_mobil/mobil1'; ?>";
		});
		$('#menupeta').click(function(){
			window.location = "<?php echo base_url().'index.php/peta/peta_'; ?>";
		});
		$('#menudashboard').click(function(){
			window.location = "<?php echo base_url().'index.php/mobil/listmobil/'.$this->session->userdata('id_user'); ?>";
		});
</script>
	