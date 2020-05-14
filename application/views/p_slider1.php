        <br/>    
			<!--div id="myCarousel" class="carousel slide" style="clear:both;"-->
                <!-- Carousel items -->
			<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
					<div class="carousel-inner">
						<?php $i=0; ?>
						<div class="item <?php if($i == 0 && $i <= 3){ echo "active"; } ?>">
								<?php foreach($list_mobil as $row){ ?>
								<li class="span3">
									<div class="thumbnail">
										<a href="#"><img src="<?php echo base_url().'resource/img_mobil/'.$row['foto1']; ?>" class="img-responsive"></a>
									</div>
									<div class="caption">
										<?php echo $row['nama_rental'].'<br/>';
											echo $row['jenis_mobil'].'<br/>';
											echo $row['alamat'].'<br/>';
											echo $row['harga_sewa'].'<br/>'; 
										?>
									</div>
								</li>
								<?php $i++; 
						echo '</div><br/>'; } ?>
					</div><br/><br/>
				 <a class="left glyphicon glyphicon-chevron-left" href="#carousel-example" data-slide="prev"></a>
				 <a class="right glyphicon glyphicon-chevron-right" href="#carousel-example" data-slide="next"></a>
		</div>
		<br/><br/>
            <!--/div-->
            <!--/myCarousel-->