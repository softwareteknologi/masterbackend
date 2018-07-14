<!-- Iklan Sidebar Kanan Atas -->
						<div class="adv">
							<?php 
								$c = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='98' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
								while($d = mysqli_fetch_array($c)){  ?>
								<a href="<?php echo strip_tags($d['isi_page']); ?>" target="_blank">
									<img src="<?php echo $base_url; ?>dashboard/file/<?php echo $d['nama_file']; ?>" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;"
									>
								</a>
							<?php  } ?>
							
							<!--<a href="https://bankgunungkidul.co.id" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/iklan_bdg_feb_2018.gif" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
							<a href="#" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/dandim_mei_2018.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
							<a href="#" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/polres_mei_2018_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
							
							<a href="http://logandeng-playen.desa.id/first" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/bd.gif" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
							<br>-->
							
						</div>