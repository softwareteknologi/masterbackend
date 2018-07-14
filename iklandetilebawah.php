<div class="alert info" style="padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px;">
						<img src="<?php echo $base_url; ?>/dashboard/file/RJC.jpeg"/><br>
						
						</div>
						
						    
						    <div class="alert info" style="padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
						<?php 
						
						
							$ee = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='112' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
							$ff=mysqli_fetch_array($ee);
								echo $ff['isi_page'];
						?>
						</div>
						<div class="alert info" style="padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px;">
							<?php
								if(empty($ff['nama_file'])){
							?>
							<?php
								}else{
							?><img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $ff['nama_file']; ?>"/>
							<?php
								}
							?>
							
						</div>