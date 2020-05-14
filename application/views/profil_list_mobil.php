<div class="container">
	<div class="header_listmobil">
		<img class="inline" src="<? echo base_url().'resource/img/setting_icon.png';?>"></img>
		<p class="margin_left">Parkiran > List Mobil</p>
		<b><p class="margin_kanan">Saldo : Rp</p></b>
	</div>
	<div class="listmobil_user">
		<div class="right_listmobil">
			<div class="list_permobil"> 
				<p class="tulisan_listmobil"> List Mobil </p> 
				<div style="float:right; margin-right: 100px; display:inline;">
					<br/>
					<img src="<? echo base_url().'resource/img/view_list.png';?>" height="30" width="30"/>
					<img src="<? echo base_url().'resource/img/view_box.png';?>" height="30" width="30"/>
				</div>
			</div>
			<div class="garis_abu"></div>
			<?php	if(count($datamobil) > 0) {
						foreach($datamobil->result_array() as $row){?>
			<div class="list_permobil">
				<div class="inline_kanan">
					<a href="#">Edit</a><br/>
					<a href="#"><img src="<?php echo base_url().'resource/img/Edit_icon.png'; ?>" width="50" height="60" class="inline_kanan" style="margin-top: 0 !important;"/></a>
				</div>
				<img src="<?php echo base_url().'resource/img_mobil/'.$row['foto1']; ?>" width="150" height="100" class="inline_kanan"/>
				<div class="inline_kanan">
					<p class="font_besar"><?php echo $row['jenis_mobil']."<br/>"; ?></p>
					<p class=""><?php echo "Tanggal <br/>"; ?></p>
					<p class=""><?php echo $row['harga_sewa']; ?></p>
					<p class=""><?php echo $row['bahan_bakar']; ?></p>
				</div>
				<div class="inline_kanan" style="margin-left: 40px !important;" >
					<p class="font_besar">Status</p>
					<p class=""><?php echo $row['ketersediaan']; ?></p>
				</div>
			</div><br/>
			<div class="garis_abu" style="margin-top:150px;"></div>
			<?php } 
			}?>
		</div>
		<?php  ?>
		<div class="left_listmobil">
			<br/>
			<a href="#"><img src="<?php echo base_url().'resource/img/orang_profil.png'; ?>" height="200" width="160" /></a><br/>
			<div class="box_putih"><?php echo /*$row['nama_depan'].' '.$row['nama_belakang']*/ 'Muhammad Arief'; ?></div>
			<div class="box_putih"><?php echo /*$row['nama_rental']*/'Rental Arief'; ?></div>
			<div class="box_putih"><?php echo /*$row['rating']*/ "<img src='localhost/nyewamobil/resource/img/rating.png' />"; ?></div>
			<div class="box_putih"><?php echo /*$row['tgl_bergabung']*/ '1 Januari 2015'; ?></div>
			<div class="box_putih"><?php echo /*$row['poin'].*/'9 poin'; ?></div><br/>
			<div class="inline box_kuning">
				Parkiran
				<img src="<?php echo base_url().'resource/img/Mobil_orange.png'; ?>" class="icon"/>
			</div>
			<br/><br/>
			<div class="box_abu">List Mobil</div>
			<div class="box_putih">Parkir Mobil</div>
			<div class="box_putih">Status Mobil</div>
			<div class="box_hijautua">Profil <img src="<?php echo base_url().'resource/img/Profil_icon.png'; ?>" class="icon"/></div><br/>
			<div class="box_hijautua">Saldo <img src="<?php echo base_url().'resource/img/Saldo_icon.png'; ?>" class="icon"/></div><br/>
			<div class="box_hijautua">Pesan <img src="<?php echo base_url().'resource/img/Pesan_icon.png'; ?>" class="icon"/></div><br/>
		</div>
		<?php ?>
	</div>
	<div>
		<?php echo $hal; ?>
	</div>
</div>