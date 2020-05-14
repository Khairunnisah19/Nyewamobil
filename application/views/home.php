	<?php
	//include('slider.php'); ?>
	
	<!-- 4:3 aspect ratio -->
	<!--div class="embed-responsive embed-responsive-4by3">
	  <iframe class="embed-responsive-item" src=""></iframe>
	</div-->
	<div class="container">
		<div>
		<p class="box_hijau testimoni" >Testimoni</p>
		<p class="box_hijau jargon" align="center">Kenapa Kami?</p>
		</div>
		<br/>
		<div id="myCarousel" class="carousel slide" data-interval="2000" data-ride="carousel" style="float:right; ">
			<!-- Carousel indicators -->
		
			<div class="carousel-inner" style="right: -120% !important;">
				<?php $i=0; foreach($testimoni->result_array() as $row){ ?>
				<div class="item inline <?php if($i == 0){ echo "active"; } ?>" style="float:right; width:100px; ">
					<img src="<?php echo base_url().'resource/img/'.$row['url_foto']; ?>"/>
					<?php
						echo $row['nama'].'<br/>';
						echo '<b>'.$row['jabatan'].'<br/></b>';
						echo $row['testimoni'].'<br/>';
						echo '</div>';
						$i++; 
				} ?>
			</div><br/>
			<ol class="carousel-indicators" style="color:black;">
			<?php $i=0; foreach($testimoni->result_array() as $row){ ?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo "active"; } ?>"></li>
			<?php $i++; } ?>
			</ol>
		</div>
		<br/>
		<div>
			<br/>
			<div class="inline">
				<img src="<?php echo base_url().'resource/img/cepat_ico.png'; ?>" width="60" height="70"/><br/>
				<p align="center">cepat</p>
			</div>
			<div class="inline">
				<img src="<?php echo base_url().'resource/img/tepat_ico.png'; ?>" width="80" height="70"/><br/>
				<p align="center">tepat</p>
			</div>
			<div class="inline">
				<img src="<?php echo base_url().'resource/img/aman_ico.png'; ?>" width="60" height="70"/><br/>
				<p align="center">aman</p>
			</div>
		</div>
	</div>
	

