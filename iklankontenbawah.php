<div class="adv">
							<?php 
								/* $g = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='102' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
								while($h=mysqli_fetch_array($g)){  */
							?>
							<!--<a href="<?php echo strip_tags($h['isi_page']); ?>" target="_blank">
								<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $h['nama_file']; ?>" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 100px;width: 98%;"/>
								<br><br>
							</a>-->
							<?php //} ?>
							
							<a href="http://danagung.com/bpr/" target="_blank">
								<img src="<?php echo $base_url; ?>/dashboard/file/danagung.png" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 100px;width: 98%;"/>
								<br><br>
							</a>
							
						
					</div>
					<!-- /.adv --> 