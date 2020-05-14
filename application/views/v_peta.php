<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type='text/css'>
	#peta {
	width: 50%;
	height: 400px;
	margin: 0 auto !important;
	} 
</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	(function() {
		window.onload = function() {
		var map;
		var locations = [
		<?php
					$sql_lokasi="select * from mobil";
					$result=mysql_query($sql_lokasi);
					// ambil nama,lat dan lon dari table lokasi
					while($data=mysql_fetch_object($result)){
		?>				['<?=$data->jenis_mobil;?>', <?=$data->latitude;?>, <?=$data->longitude;?>, '<?=$data->deskripsi_mobil;?>', '<?=$data->harga_sewa;?>', '<?=$data->alamat;?>', 					'<?=$data->id_mobil;?>'],
					<? } ?>			
		
			];
		//Parameter Google maps
		var options = {
		  zoom: 12, //level zoom
		  //posisi tengah peta
		  center: new google.maps.LatLng(-6.211544000000000000, 106.845172000000050000),
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	
	 // Buat peta di 
		var map = new google.maps.Map(document.getElementById('peta'), options);
	 // Tambahkan Marker 
  
	  var infowindow = new google.maps.InfoWindow();

    var marker, i;
     /* kode untuk menampilkan banyak marker */
    for (i = 0; i < locations.length; i++) {  
		marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
        map: map,
		icon: "<?php echo base_url().'resource/img/peta.png';?>"
		});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
				var id= locations[i][0];	
			}
		})(marker, i));
	}
  };
})();
</script>
</head>
<body>
<div id="peta"></div>
</body>
</html>