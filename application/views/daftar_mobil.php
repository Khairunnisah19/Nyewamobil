<div class="tengah">	
	<ul class="list-group">
		<figure class="img-responsive">
			<?php	if(count($results) > 0) {
						foreach ($results as $row){?>
					<div>
							<div style="display:inline; float:left; padding-right:20px;">
								<a href="#" class="thumbnail"><img src="<?php echo base_url().'resource/img_mobil/'.$row->foto1; ?>" width="150px"/></a>
							</div>
							<div>
							<p style="float:right; margin-right:18%; display:inline; "><b>Status </b><br/> <?php echo $row->status;?></p>
							</div>
							<div>
								<figcaption width="300px;">		
									<b class="judul_mobil"><?php echo $row->jenis_mobil;?></b><br/>
									Harga : <?php echo $row->harga_sewa;?><br/>
									Lokasi : <?php echo $row->alamat;?><br/>
									Deskripsi : <?php echo substr($row->deskripsi_mobil, 0, 100);?><br/>
									<a class="btn btn-info" href="<?php echo base_url().'index.php/mobil/detailmobil'; ?>"><span class="glyphicon glyphicon-share-alt"></span>Lihat Detail</a>
								</figcaption>
							</div>
					</div><br/><br/><br/><br/>
						<?php }
					} ?>
		</figure>
	</ul>
	<div>
		<?php echo $hal; ?>
	</div>
</div>
