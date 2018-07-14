<div class="breaking-news"><!--breaking news-->
    <div class="inner"><!--inner-->
		<div class="breaking-news-items">
			<span class="breaking-title">INFO GUNUNGKIDUL</span>
			<div class="breaking-cont">
				<ul class="webticker" data-br_type="default" data-br_speed="0.07" data-br_bspeed="600" data-br_duration="500" width="auto">
					<?php 
					/*
						$query_berita_terbaru = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.id_user='20' AND page.status_hapus='aktif' ORDER BY id_page ASC");
						while($berita_terbaru=mysqli_fetch_array($query_berita_terbaru)){
					*/
					?>
					<?php 
				        $ff = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='105' AND page.sub_id_kategori='92' AND status_hapus='aktif' ORDER BY id_page DESC LIMIT 1");
			        	$gg = mysqli_fetch_array($ff) 
			        ?>
					<li>
						<h4><span class="enotype-icon-arrow-right6"></span>
							<a href="tel:081904213283">
								<?php echo $gg['isi_page']; ?>
							</a>
						</h4>
					</li>
					<?php //} ?>
				</ul>
			</div>
		</div>
        <div class="brmenu"></div>
    </div><!--inner-->
</div><!--breaking news-->