<div class="header-banner">
	<div class="mom-ads-wrap  ">
		<div class="mom-ads " style="">
			<div class="mom-ads-inner">
				<?php 
					$e = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='101' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
					$f = mysqli_fetch_array($e);
				?>
				<div class="mom-ad" data-id="1236" style="width:728px; height:90px; ">
					<a href="<?php echo $f['isi_page'] ?>" target="_blank">
					    <img class="appear" src="<?php echo $base_url; ?>dashboard/file/<?php echo $f['nama_file']?> " alt="<?php echo $f['isi_page'] ?>" width="728" height="90">
					</a>
				</div><!--mom ad-->
			</div>
		</div>	<!--Mom ads-->
	</div>
</div>