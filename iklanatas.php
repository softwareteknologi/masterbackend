<marquee behavior="alternate" direction="left" scrollamount="7" class="responsive">
		<?php 
			$e = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='9' AND page.sub_id_kategori='92' AND status_hapus='aktif' ORDER BY RAND() LIMIT 10");
			while($f=mysqli_fetch_array($e)){
				if($f['nama_file']!=null){
				?>
					
					<a href="<?php echo $f['isi_page']; ?>" target="_blank">
						<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $f['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
					</a>
				<?php 
				}else{
			
				}
			} ?>
			
			<!--<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/mertelu_18_iklanjalan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/pan_18_iklanjalan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/tksk_iklanjalan_18.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/dpdpks18_idulfitri_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-jurangjero18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hsutamto_18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-bejiarjo18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-ekodem18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="http://www.bpddiy.co.id/" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/bpddiy18_idulfitri_iklanjalan22.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/srf_18__iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/supriyadi18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/bdg_idulfitri_18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/fedora18__iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/gari18__iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/logandeng_2018__iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			
			
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-pengkol18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-slamet18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-suparja18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/pacarejo_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/semar_mei_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/ikg_mei_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/BDG_HUT_GK_187_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/WhatsAppImage2018-05-23at10.01.46.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_candirejo.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_karangmojo.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_kelor.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_logandeng.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_ngawis.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_ngeposari.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_pulutan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_semanu.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_serut.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_siraman.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0009.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0010.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0011.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0013.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0015.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0016.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0025.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>-->
	</marquee>