<div class="adv">
							<?php 
								$i = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='100' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
								while($m=mysqli_fetch_array($i)){ 
							?>
							<a href="<?php echo strip_tags($m['isi_page']); ?>" target="_blank">
								<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $m['nama_file']; ?>" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 411px;width: 98%;"/>
							</a>
							<?php } ?>
							
							<!--<a href="http://www.bpddiy.co.id/index.php?page=bisnis&sub=kantor&id=5" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/tengah_bpd_kur.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 411px;width: 98%;" /></a>-->
							
					</div>