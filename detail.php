<?php
include"header.php";
date_default_timezone_set('Asia/Jakarta'); 
$tanggal_sekarang = date("Y-m-d");// tanggal sekarang
$sekarang = strtotime(date("Y-m-d"));
$tanggal_kemaren = date('Y-m-d', strtotime('-1 day', $sekarang));
?>		
	<marquee behavior="alternate" direction="left" scrollamount="7" class="responsive">
		<?php 
			/* $e = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='9' AND page.sub_id_kategori='92' AND status_hapus='aktif' ORDER BY RAND() LIMIT 10");
			while($f=mysqli_fetch_array($e)){
				if($f['nama_file']!=null){ */
				?>
					
					<!--<a href="<?php echo $f['isi_page']; ?>" target="_blank">
						<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $f['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
					</a>-->
				<?php 
				/* }else{
			
				}
			} */?>
			<a href="https://infogunungkidul.com/#" target="_blank">
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
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-jurangjero18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
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
				<img src="<?php echo $base_url; ?>/dashboard/file/bpddiy18_idulfitri_iklanjalan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/srf_18__iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/supriyadi18_iklanjalan.jpg
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
				<img src="<?php echo $base_url; ?>/dashboard/file/infogk_18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
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
				<img src="<?php echo $base_url; ?>/dashboard/file/bdg_idulfitri_18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
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
			
			
			<!--new-->
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
			</a>
	</marquee>
	<div class="post-crumbs entry-crumbs" xmlns:v="https://rdf.data-vocabulary.org/#">
		<div class="crumb-icon"><i class="brankic-icon-tags"></i></div>           
		<span></span>
		<div class="vbreadcrumb" typeof="v:Breadcrumb">
			<?php
			$id= isset($_GET['id']) ? $_GET['id'] : null;
				$aa = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file ON page.id_file=file.id_file WHERE id_page='$id'");
				$bb = mysqli_fetch_array($aa);
			?>
			<a href="berita.php" rel="v:url" property="v:title" class="home">Berita</a>
		</div>
		<?php echo $bb['judul_page']; ?>       
	</div>
	<div class="main-container"><!--container-->
		<?php
			$id=trim(strip_tags(isset($_GET['id']) ? $_GET['id'] : null));
			$detail=mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN user ON page.id_file=file.id_file AND page.id_user=user.id_user WHERE page.id_page='$id' AND page.sub_id_kategori='92'");
			$hasil_detail=mysqli_fetch_array($detail);
			$cekdata=mysqli_num_rows($detail);
			$total_baca=$hasil_detail['total_baca']+1;
			if($cekdata!=0){
			$total_baca=mysqli_query($id_mysqli,"UPDATE page SET total_baca='$total_baca' WHERE id_page='$id'");
		?>	
		<div class="main-left"><!--Main Left-->
            <div class="main-content" role="main"><!--Main Content-->
				<div class="site-content page-wrap">
					<article id="post-123" class="post-123 post type-post status-publish format-video has-post-thumbnail category-entertainment category-life post_format-post-format-video" data-id="123">
						<header>
							<h1 itemprop="headline" class="entry-title"><?php echo $hasil_detail['judul_page']; ?></h1>
								<div class="entry-post-meta">
									<div><i class="momizat-icon-calendar"></i> Date: <?php echo list_tanggal($hasil_detail['date_time']); ?>
									</div>
									<!--<div class="entry-cat"><i class="momizat-icon-eye"></i> <?php //echo $hasil_detail['total_baca']; ?> Pembaca
									</div>-->
									<div class="entry-cat"><i class="momizat-icon-user"></i> <?php echo $hasil_detail['nama_user']; ?>
									</div>
								</div>                                          			
								<div class="top-share-icons">
								</div>
						</header> 
						<div class="entry-content clearfix">
							<!--<div class="entry-content-data has_f_image">
								<figure class="post-thumbnail " itemscope="" itemtype="http://schema.org/ImageObject">-->
								<img src="<?php echo $base_url; ?>/dashboard/<?php echo $hasil_detail['nama_file']; ?>"style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 400px;width: 98%;">
								<!--<span class="img-toggle"><i class="momizat-icon-arrow-down-right2"></i></span>
								</figure>	
							</div>-->
							<div style="padding: 5px;"></div>
							<div style="padding: 5px;"></div>
							<p style="margin: 0px 0px 20px; font-size: 16px; line-height: 22px; color: #080808; font-family: arial; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
							<?php echo $hasil_detail['isi_page']; ?>
							</p>
						</div>
						<div class="alert warning" style="padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
						<img src="<?php echo $base_url; ?>/dashboard/file/RJC.jpeg"/><br>
						
						</div>
						<!--<div class="alert warning" style="padding-top: 10px; padding-bottom: 10px;">
						    
						    
						<?php 
						
						
							$ee = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='112' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
							$ff=mysqli_fetch_array($ee);
								//echo $ff['isi_page'];
						?>
						</div>
						<div class="alert warning" style="padding-top: 10px; padding-bottom: 10px;">
							<img src="<?php echo $base_url; ?>/dashboard/file/wa-iklan-12012018.jpeg"/>
						</div>-->
					</article>
					<div class="mom-share-post">
						<?php
							$id1=trim(strip_tags(isset($_GET['id']) ? $_GET['id'] : null));
							$ddd=mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN user ON page.id_file=file.id_file AND page.id_user=user.id_user WHERE page.id_page='$id1' AND page.sub_id_kategori='92'");
							$sss=mysqli_fetch_array($ddd);
						?>
						<h4>share</h4>
						<div class="mom-share-buttons">
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9&appId=1705865589441586";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
							</script>
					
							<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $base_url ?>detail.php?id=<?php echo $sss['id_page']?>/<?php echo str_replace(' ', '-', $sss['judul_page']) ?>', 'Share This', 'menubar=no,toolbar=no,resizable=no,scrollbars=no, width=600,height=455');" class="share-facebook"><i class="enotype-icon-facebook"></i></a>

							<a href="#" onclick="window.open('https://twitter.com/share?text=Runaway%20short%20film&amp;url=https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>', 'Post this On twitter', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,width=600,height=455');" class="share-twitter"><i class="momizat-icon-twitter"></i></a>
							<a href="#" onclick="window.open('https://plus.google.com/share?url=https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>', 'Share', 'width=600,height=455');" class="share-google"><i class="momizat-icon-google-plus"></i></a>
							<!-- WhatsApp Share Button for WordPress:http://peadig.com/wordpress-plugins/whatsapp-share-button/ -->
							<a href="whatsapp://send?text=Info Gunungkidul - https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>/" data-action="share/whatsapp/share" class="wabtn"><i class="fa-icon-whatsapp"></i></a>
							<a href="#" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>', 'Share This', 'width=600,height=455');" class="share-linkedin"><i class="fa-icon-linkedin"></i></a>
							<a href="#" onclick="window.open('https://pinterest.com/pin/create/bookmarklet/?media=https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>', 'Share this', 'width=600,height=455');" class="share-pin"><i class="enotype-icon-pinterest"></i></a>
							<a href="#" onclick="window.open('https://vkontakte.ru/share.php?url=https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>', 'Share this', 'width=600,height=455');" class="share-vk"><i class="fa-icon-vk"></i></a>
							<a href="#" onclick="window.open('https://www.xing.com/social_plugins/share?url=https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>', 'Share this', 'width=600,height=455');" class="share-vk"><i class="fa-icon-xing"></i></a>
							<a href="mailto:?subject=Runaway short film&body=Proin+tristique+elit+et+augue+varius+pellentesque.+Donec+enim+neque%2C+vulputate+et+commodo+in%2C+tristique+sed+velit.+Phasellus+adipiscing+faucibus+felis+eget+hend : https://infogunungkidul.com/detail.php?id=<?php echo $id; ?>" class="share-email"><i class="dashicons dashicons-email-alt"></i></a>
							<a href="javascript:window.print()" rel="nofollow" class="share-email"><i class="brankic-icon-printer"></i></a>
						</div>
					</div>
					<?php
						$ambil1=mysqli_query($id_mysqli,"SELECT * FROM page WHERE id_page='$id' AND sub_id_kategori='92'");
						$hasil_ambil1=mysqli_fetch_array($ambil1);
						$hasil_id_kategori=$hasil_ambil1['id_kategori'];
					?>
					<!-- START BERITA LAINNYA -->	
					<div class="alert info" style="padding-top: 10px; padding-bottom: 10px;">
					  <strong><center>BACA JUGA</center></strong>
					</div>
					<div class="mom-share-post" style="margin-right: 0px;margin-left: 0px;padding-left: 0px;padding-right: 0px;">
						<div style="width: auto;float: left;margin: 0px;padding: 0px 0px 0px 0px;">
							<ul class="post-list ">
							    
								<?php
									$lainnya = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' AND page.id_kategori='$hasil_id_kategori' ORDER BY id_page DESC LIMIT 6");
									while($hasil_lainnya=mysqli_fetch_array($lainnya)){
								?>
								<div style="float:left; margin: 5px 5px 5px 5px; align:center;">
								    <li>
										<figure class="post-thumbnail">
											<?php echo "<a href=detail.php?id=".$hasil_lainnya['id_page']."/".str_replace(' ', '-', $hasil_lainnya['judul_page']).">" ;?>
											    <img src="<?php echo $base_url; ?>/dashboard/<?php echo $hasil_lainnya['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 1px;padding: 5px;height: 100px;width: 111px;">
											</a>
										</figure>
										<div style="width: 111px; height: 180px;">
										    <?php echo "<a href=detail.php?id=".$hasil_lainnya['id_page']."/".str_replace(' ', '-', $hasil_lainnya['judul_page']).">" ;?><font size="3" color="#0083b9">
										        <?php echo $hasil_lainnya['judul_page'];?>
										        </font></a>
											</div>
											<div class="entry-meta">
												<i class="momizat-icon-calendar"></i><?php echo list_tanggal($hasil_lainnya['date_time']);?>
											</div>
										</li>
								</div>
										<?php } ?>
							</ul>
						</div>
					</div>	
					<!-- END BERITA LAINNYA -->
					<!-- START PERINGATAN KOMENTAR -->	
					<?php
						$komentar=mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN user ON page.id_file=file.id_file AND page.id_user=user.id_user WHERE page.sub_id_kategori='92' AND page.id_kategori='107' ORDER BY id_page DESC LIMIT 1");
						$hasil_komentar=mysqli_fetch_array($komentar);
					?>		
					<div class="alert">
					  <?php echo $hasil_komentar['isi_page']; ?>
					</div>	
					<!-- END PERINGATAN KOMENTAR -->			
					<?php
					$id2=trim(strip_tags(isset($_GET['id']) ? $_GET['id'] : null));
					?>
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9&appId=1705865589441586";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
					</script>
					<div class="fb-comments" data-href="https://infogunungkidul.com/detail.php?id=<?php echo $id2; ?>" data-numposts="5"></div>
					<!-- #comments .comments-area -->                                					        
				</div>
            </div><!--Main Content-->
        </div><!--Main left-->
		<?php } ?>
		<div class="wpb_column vc_column_container momizat_vc_col vc_sec_sidebar secondary-sidebar">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="wpb_widgetised_column sidebar wpb_content_element">
						<div class="wpb_wrapper">
							<div class="widget posts">      
								<ul class="post-list ">
									<?php
										$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' ORDER BY RAND() LIMIT 11");
										while($baris=mysqli_fetch_array($hasil)){
									?>

									<li>
										<figure class="post-thumbnail">
											 <?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page']).">" ;?>
												<img src="<?php echo $base_url; ?>/dashboard/<?php echo $baris['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 100px;width: 90%;">
											</a>
										</figure>
										<h2><?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ;?><?php echo $baris['judul_page'];?></a></h2>
										<div class="entry-meta">
											<time class="entry-date" datetime="2014-05-18T11:37:42+00:00" content="2014-05-18T11:37:42+00:00"><i class="momizat-icon-calendar"></i><?php echo list_tanggal($baris['date_time']);?></time>
										</div>
										<div class="comments-link">
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<aside class="sidebar" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar"><!--sidebar-->
			<div class="widget social-icons">
				<div class="widget-title"><h4>Follow Us</h4></div>
				<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channelid="UCtHx8LBreF8uQPnfPIQA2Jg" data-layout="full" data-count="hidden"></div>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<iframe id="youtube_video" width="600" height="340" frameborder="0" allowfullscreen></iframe>

				<script>
					var channelID = "UCtHx8LBreF8uQPnfPIQA2Jg";
					$.getJSON('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3D'+channelID, function(data) {
					var link = data.items[0].link;
					var id = link.substr(link.indexOf("=")+1);
					$("#youtube_video").attr("src","https://youtube.com/embed/"+id + "?controls=0&showinfo=0&rel=0");
					});
				</script>
				<br>
				<ul class="social-widget clearfix">
					<li class="twitter"><a href="https://twitter.com/infogununkidul/" target="_blank"></a></li>
					<li class="facebook"><a href="https://www.facebook.com/inf.gunungkidul/" target="_blank"></a></li>
					<li class="gplus"><a href="https://plus.google.com/u/0/110214300156502589722/" target="_blank"></a></li>
					<li class="linkedin"><a href="https://www.linkedin.com/in/infogunungkidul-informasi-gunungkidul-terlengkap-25b480138/" target="_blank"></a></li>
					<li class="instagram"><a href="https://www.instagram.com/accounts/login/?next=%2Finfogunungkidul_media_online%2F&source=follow" target="_blank"></a></li>
				</ul>
			</div>
			<div class="widget social-icons">
				<div class="widget-title"><h4>Berita Terbaru</h4></div>
				<ul class="post-list">
					<?php
						$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.date_time='$tanggal_sekarang' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' ORDER BY id_page DESC");
						while($baris=mysqli_fetch_array($hasil)){
					?>	
					<li>
						<figure class="post-thumbnail">
							<?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ;?>
							<img src="<?php echo $base_url; ?>/dashboard/<?php echo $baris['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 100px;width: 70%;">				
							</a>
						</figure>
							<h2><?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ;?><?php echo $baris['judul_page']; ?></a></h2>
						<div class="entry-meta">
							<i class="momizat-icon-calendar"></i> <?php echo list_tanggal($baris['date_time']); ?> &nbsp&nbsp&nbsp
							<!--<i class="momizat-icon-eye"></i>(<?php //echo $baris['total_baca']; ?>) Pembaca--></a>
						</div>
						<?php echo "<a href=detail.php?id=".$baris['id_page']." class='read-more-link'>" ;?>Read more...</a>
					</li>				
					<?php } ?>
				</ul>
			</div>
			<!-- Iklan Sidebar Kanan Atas --> 
			<div class="adv">
				<?php 
					$c = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='98' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
					while($d = mysqli_fetch_array($c)){ ?>
					<!--<a href="<?php echo strip_tags($d['isi_page']); ?>" target="_blank">
						<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $d['nama_file']; ?>" title="infogunungkidul" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 98%;"/>
						<br><br>
					</a>--> 
				<?php  } ?>
				<a href="https://bankgunungkidul.co.id" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/bdg_iklan_sidebar_2018_ramadhan.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
				<a href="#" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/dandim_mei_2018.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
				<a href="#" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/polres_mei_2018_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
				<a href="http://logandeng-playen.desa.id/first" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/bd.gif" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
				<br>				
			</div>
			<!-- END -->
			<!-- Iklan Sidebar Kanan Bawah -->
			<div class="adv">
				<a href="" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/fedora.gif" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
				<br>
				<a href="#">
					<?php 
						$ff = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='99' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
						while($gg = mysqli_fetch_array($ff)) { 
					?>
					<!--<a href="<?php echo strip_tags($gg['isi_page']); ?>" target="_blank">
						<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $gg['nama_file']; ?>" title="infogunungkidul" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 98%;"/>
						<br><br>
					</a>-->
					<?php } ?>
				</a>
				<a href="http://gk-steak.business.site/" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/gk_steak_mei_2018_sidebarbawah.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://semin.desa.id/first" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/semin_mei_2018_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/dpdpks18_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="https://goo.gl/maps/PRKgBoFwLxm" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/khalifa28.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://www.karangmojo.desa.id/index.php/first" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/SID.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://kemadang-tanjungsari.desa.id/index.php/first" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/son.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://pendidikan.gunungkidulkab.go.id/" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/IF-disdik18_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://www.gunungkidulkab.go.id/D-21da7f6c73abb6460e61306528ef8be3-NR-100-0.html" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/IF-dpu18_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://www.gunungkidulkab.go.id/D-21da7f6c73abb6460e61306528ef8be3-NR-100-0.html" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180525-WA0006.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/idulfitri_18_tole.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/pkdtanjungsari_18_iklansidebar.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/pkdponjong18_iklansidebar.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/ikgjabodetabek18_iklansidebar.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
				
				<?php 
								$i = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='100' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
								while($m=mysqli_fetch_array($i)){
							?>
							<!--<a href="<?php echo strip_tags($m['isi_page']); ?>" target="_blank">
								<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $m['nama_file']; ?>" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;"/>
							</a>-->
							<?php } ?>
			</div>
		<!-- END -->
		</aside><!--sidebar-->
	</div><!--container-->
</div><!--wrap-->
                                            
<?php
include"footer.php";
?>
