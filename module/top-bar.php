<div class="top-bar"><!--topbar-->
								<div class="inner"><!--inner-->

               

	 <?php

	//Array Hari
	$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
	$hari = $array_hari[date("N")];

	//Format Tanggal
	$tanggal = date ("j");

	//Array Bulan
	$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
	$bulan = $array_bulan[date("n")];

	//Format Tahun
	$tahun = date("Y");
	
	?>
    
	
<div class="top-bar-left">
    <ul class="top-social-icon" style="height: auto;" bgcolor="black">
		  <li><font size="3" align="left" color="white"><b><?php echo $hari . ", " . $tanggal . " " . $bulan . " " . $tahun; 
		  //echo date("l j F Y")?></b></font></li>
		  <li class="top-search"><a href="#"></a>
				<div class="search-dropdown">
				  <form class="mom-search-form" method="get" action="#/">
					  <input type="text" id="tb-search" class="sf" name="s" placeholder="Enter keywords and press enter" required="" autocomplete="off">
					<span class="sf-loading"><img src="asset/wp-content/themes/multinews/images/ajax-search-nav.png" alt="search" width="16" height="16"></span>                      </form>
							<div class="ajax-search-results"></div>
						  </div>
			  </li>
		  <li class="facebook"><a href="https://www.facebook.com/inf.gunungkidul/" target="_blank"><font size="3" align="left" color="white"></font></a></li>
		  <li><a href="login.php"><font size="3" align="left" color="white"><b>LOGIN</b></font></a></li>
		  <!--<li><marquee bgcolor="black" behavior="alternate" direction="left" width="800" scrolldelay="50" onMouseOver="this.stop()" onMouseOut="this.start()"><b>
			
			<?php 
				/* $ff = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='105' AND page.sub_id_kategori='92' AND status_hapus='aktif' ORDER BY id_page DESC LIMIT 1");
				$gg = mysqli_fetch_array($ff) */ ?>
				
			<?php //echo $gg['isi_page']; ?>

		  </b>
		  </marquee></li>-->
	</ul>
</div>
        </div><!--inner-->
    </div><!--topbar-->