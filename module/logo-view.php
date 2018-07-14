<div class="logo" itemscope="itemscope">
	<?php 
		$c = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE page.id_user='20' And page.id_file='31'");
		$d = mysqli_fetch_array($c);
	?>
	<img class="print-logo" itemprop="logo" src="<?php echo $base_url; ?>dashboard/file/<?php echo $d['nama_file']?> " width="" height="" alt="infogunungkidul"/> 
	<h1>
		<a href="<?php echo $d['isi_page'] ?>">
			<img itemprop="logo" src="<?php echo $base_url; ?>dashboard/file/<?php echo $d['nama_file']?> " alt="infogunungkidul" style="padding-bottom: 0px;height: 80px;" />
			<img itemprop="logo" class="mom_retina_logo" src="<?php echo $base_url; ?>dashboard/file/<?php echo $d['nama_file']?> " alt="infogunungkidul" style="padding-bottom: 0px;height: 80px;" />
		<a>
	</h1>
</div>