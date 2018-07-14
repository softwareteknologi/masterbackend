<?php include "dashboard/core/koneksi.php"; ?>
<?php include "dashboard/core/fungsi.php"; ?>
<?php $base_url = "http://localhost/infogunungkidul/"; ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="no-js">
	<head>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-8645800628139710",
			enable_page_level_ads: true
			});
		</script>
		<?php
			$id3=trim(strip_tags(isset($_GET['id']) ? $_GET['id'] : null));
			$query = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE page.id_page='$id3'");
			$result=mysqli_fetch_array($query);
			$id_page = $result['id_page'];
		
			if(empty($id_page)) {
		?>
		<title>Infogunungkidul.com - Informasi Gunungkidul Terlengkap</title>
		<?php
			} else {
		?>
		<title><?php echo $result['judul_page']; ?></title>
		<?php } ?>
		<?php
			$detail3=mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE page.id_page='$id3'");
			$hasil=mysqli_fetch_array($detail3);
			$desc1 = $hasil['isi_page'];
			$desc2 = substr($desc1,'350');
		?>
		<!--<meta name="google-site-verification" content="27_1AWV42yOCgJA7jMdeSDnmxjl06pt5cfqmd_QDkAY" />-->
		<meta property="og:url" content="<?php echo $base_url; ?>detail.php?id=<?php echo $hasil['id_page'];?>/<?php echo str_replace(' ', '-', $hasil['judul_page']); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $hasil['judul_page']; ?>" />
		<meta property="og:description" content="<?php echo $desc2;?>" />
		<meta property="og:image" content="<?php echo $base_url; ?>dashboard/<?php echo $hasil['nama_file']; ?>" />
		  
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="icon_infogk.ico" type="image/x-icon">
		
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="icon_infogk.ico" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="asset/wp-content/themes/multinews/css/print.css" media="print" />
		<!--<link rel="apple-touch-icon" href="asset/wp-content/themes/multinews/apple-touch-icon-precomposed.png" />-->
		<!--<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/themes.momizat.com\/multinews\/","name":"Multinews \u2013 Premium WordPress News\/Magazine","potentialAction":{"@type":"SearchAction","target":"https:\/\/themes.momizat.com\/multinews\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
		 / Yoast SEO plugin. -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

		<link rel='dns-prefetch' href='https://s0.wp.com/' />
		<link rel='dns-prefetch' href='https://s.gravatar.com/' />
		<link rel='dns-prefetch' href='https://s.w.org/' />
		<!--<link rel="alternate" type="application/rss+xml" title="Multinews – Premium WordPress News/Magazine &raquo; Feed" href="feed/index.html" />
		<link rel="alternate" type="application/rss+xml" title="Multinews – Premium WordPress News/Magazine &raquo; Comments Feed" href="comments/feed/index.html" />
		<link rel="alternate" type="application/rss+xml" title="Multinews – Premium WordPress News/Magazine &raquo; Home Page Comments Feed" href="sample-home-page/feed/index.html" />-->
		<!--<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-104122711-1', 'auto');
			  ga('send', 'pageview');

		</script>-->
		
		<style type="text/css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>

		<style>
		.alert {
			padding: 20px;
			background-color: #f44336;
			color: white;
			opacity: 1;
			transition: opacity 0.6s;
			margin-bottom: 15px;
		}

		.alert.success {background-color: #4CAF50;}
		.alert.info {background-color: #2196F3;}
		.alert.warning {background-color: #ff9800;}

		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}

		.closebtn:hover {
			color: black;
		}
		</style>
		
		<link rel='stylesheet' id='bbp-default-css'  href='asset/wp-content/plugins/bbpress/templates/default/css/bbpress6640.css?ver=2.5.12-6148' type='text/css' media='screen' />
		<link rel='stylesheet' id='bp-parent-css-css'  href='asset/wp-content/themes/multinews/css/buddypress4dc3.css?ver=2.8.2' type='text/css' media='screen' />
		<link rel='stylesheet' id='contact-form-7-css'  href='asset/wp-content/plugins/contact-form-7/includes/css/styles4906.css?ver=4.7' type='text/css' media='all' />
		<link rel='stylesheet' id='multinews-style-css'  href='asset/wp-content/themes/multinews/style85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='main-css'  href='asset/wp-content/themes/multinews/css/main85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='plugins-css'  href='asset/wp-content/themes/multinews/css/plugins85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='responsive-css'  href='asset/wp-content/themes/multinews/css/media85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='dashicons-css'  href='asset/wp-includes/css/dashicons.min85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-css'  href='asset/wp-content/themes/multinews/framework/woocommerce/woocommerce85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-responsive-css'  href='asset/wp-content/themes/multinews/framework/woocommerce/woocommerce-media85c5.css?ver=b1787119d1dc10318453d134a6be3b8c' type='text/css' media='all' />
		<link rel='stylesheet' id='js_composer_front-css'  href='asset/wp-content/plugins/js_composer/assets/css/js_composer.min3c21.css?ver=5.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='jetpack_css-css'  href='asset/wp-content/plugins/jetpack/css/jetpack4a41.css?ver=4.8.2' type='text/css' media='all' />
		<script type='text/javascript' src='asset/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
		<script type='text/javascript' src='asset/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
		<!-- Chart JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
		<!-- //Chart JS -->

		<script type='text/javascript'>
		/* <![CDATA[ 
		var BP_Confirm = {"are_you_sure":"Are you sure?"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/confirm.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/widget-members.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/jquery-query.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript'>
		/* <![CDATA[ 
		var BP_Confirm = {"are_you_sure":"Are you sure?"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/confirm.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/widget-members.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/jquery-query.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript'>
		/* <![CDATA[ 
		var BP_DTheme = {"accepted":"Accepted","close":"Close","comments":"comments","leave_group_confirm":"Are you sure you want to leave this group?","mark_as_fav":"Favorite","my_favs":"My Favorites","rejected":"Rejected","remove_fav":"Remove Favorite","show_all":"Show all","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all comments (%d)","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","view":"View"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='asset/wp-content/plugins/buddypress/bp-templates/bp-legacy/js/buddypress.min4dc3.js?ver=2.8.2'></script>
		<script type='text/javascript'>
		/* <![CDATA[ 
		var wc_add_to_cart_params = {"ajax_url":"\/multinews\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/multinews\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/themes.momizat.com\/multinews\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='asset/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min8d18.js?ver=3.0.5'></script>
		<script type='text/javascript' src='asset/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart3c21.js?ver=5.1.1'></script>
		<script type='text/javascript' src='asset/wp-content/themes/multinews/framework/woocommerce/woocommerce85c5.js?ver=b1787119d1dc10318453d134a6be3b8c'></script>
		<link rel='https://api.w.org/' href='asset/wp-json/index.html' />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 

		<link rel='shortlink' href='https://wp.me/P6wXhR-1u' />
		<link rel="alternate" type="application/json+oembed" href="asset/wp-json/oembed/1.0/embed2426.json?url=https%3A%2F%2Fthemes.momizat.com%2Fmultinews%2F" />
		<link rel="alternate" type="text/xml+oembed" href="asset/wp-json/oembed/1.0/embeda027?url=https%3A%2F%2Fthemes.momizat.com%2Fmultinews%2F&amp;format=xml" />

			<script type="text/javascript">var ajaxurl = 'wp-admin/admin-ajax.html';</script>
			
		<script type="text/javascript">
		(function(url){
			if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
			var addEvent = function(evt, handler) {
				if (window.addEventListener) {
					document.addEventListener(evt, handler, false);
				} else if (window.attachEvent) {
					document.attachEvent('on' + evt, handler);
				}
			};
			var removeEvent = function(evt, handler) {
				if (window.removeEventListener) {
					document.removeEventListener(evt, handler, false);
				} else if (window.detachEvent) {
					document.detachEvent('on' + evt, handler);
				}
			};
			var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
			var logHuman = function() {
				var wfscr = document.createElement('script');
				wfscr.type = 'text/javascript';
				wfscr.async = true;
				wfscr.src = url + '&r=' + Math.random();
				(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
				for (var i = 0; i < evts.length; i++) {
					removeEvent(evts[i], logHuman);
				}
			};
			for (var i = 0; i < evts.length; i++) {
				addEvent(evts[i], logHuman);
			}
		})('index5de7.html?wordfence_logHuman=1&amp;hid=41882EBABE1A0DDB96454A632D68E4EC');
		</script>
		<link rel='dns-prefetch' href='https://v0.wordpress.com/'>
		
		<style type='text/css'>img#wpstats{display:none}</style>
		<!--[if lt IE 9]>
	
		<?php 
			$vvv = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='103' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
			$vvvv = mysqli_fetch_array($vvv);
		?>-->
		<style type="text/css" title="dynamic-css" class="options-output">
		.logo, .logo 
		.site_title{
			margin-top:0;
			margin-right:0;
			margin-bottom:0;
			margin-left:0;
		}
		body{
			background-image:url('https://infogunungkidul.com/dashboard/file/<?php echo $vvvv['nama_file']?>');
		}
		.fixed, .fixed2{background-color:#f2f2f2;}
		body
		.mom-megamenu .sub-mom-megamenu2 ul li h2 a,
							.mom-megamenu .sub-mom-megamenu ul li h2 a,
							ul.webticker li h4,
							.entry-meta a,
							.entry-meta,
							.review-widget li .rev-title,
							.review-widget li small,
							.widget_rss .rss-date{font-family:Arial, Helvetica, sans-serif;font-weight:normal;}
		</style>	
		<style type="text/css" class="multinews-custom-dynamic-css">
					header.block-title h2 a, header.block-title h2, .section-header h2.section-title a, .section-header h2.section-title{
			color: ;
		}
				.widget-title h2{
			color: ;
		}
				.header-wrap > .inner,
		.header-wrap{
			line-height: 122px;
			height: 122px;
		}
						.navigation .mom-megamenu ul li.active:before, .navigation .mom-megamenu ul li:hover:before{
			border-left-color: ;
		}
					/* navigation style */
			
	
		                    .page-id-1956 .mom_lightbox{text-align:center;}
		.page-id-1956 .mom_lightbox img{display:inline-block;}
		.page-id-252 .secondary-sidebar{
			margin: 0 10px 0 0;
		}
		.page-id-252 .main-left .secondary-sidebar{
			margin: 0 0 0 10px;
		}
		.fixed-header .inner {
			width: 1200px;
		}
		.entry-content blockquote{
			padding: 18px 25px 18px 45px;
		}
		body {

		}

		@font-face {
			font-family: 'Alex brush';
			src: url('asset/wp-content/uploads/2015/07/AlexBrush-Regular.eot'); /* IE9 Compat Modes */
			src: url('asset/wp-content/uploads/2015/07/AlexBrush-Regulard41d.eot?#iefix') format('embedded-opentype'),
			url('asset/wp-content/uploads/2015/07/AlexBrush-Regular.woff') format('woff'),
			url('asset/wp-content/uploads/2015/07/AlexBrush-Regular.ttf')  format('truetype'),
			url('asset/wp-content/uploads/2015/07/AlexBrush-Regular.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'Caviar dream';
			src: url('asset/wp-content/uploads/2016/02/CaviarDreams-webfont.eot'); /* IE9 Compat Modes */
			src: url('asset/wp-content/uploads/2016/02/CaviarDreams-webfontd41d.eot?#iefix') format('embedded-opentype'),
			url('asset/wp-content/uploads/2016/02/CaviarDreams-webfont.woff') format('woff'),
			url('asset/wp-content/uploads/2016/02/CaviarDreams-webfont.ttf')  format('truetype'),
			url('asset/wp-content/uploads/2016/02/CaviarDreams-webfont.svg#svgFontName') format('svg');
		}
		/* ==========================================================================
                 	Visual composer
		========================================================================== */
		.wpb_row, .wpb_content_element, ul.wpb_thumbnails-fluid > li, .wpb_button {
			margin-bottom: 20px;
		}
		.wpb_row .wpb_wrapper > *:last-child {
			margin-bottom: 0;
		}

		.inner, .main-container {
			width:auto;
			padding: 0 20px;
		}
		</style>
		<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
        
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript'>
		</script><br />
		<script type='text/javascript'>
		$(document).ready(function() {
		$('a#closed').click(function(){
		$('#btm_banner').hide(90);
		});
		});
		</script>
		<style type='text/css'>
		div#btm_banner {background-color:#fff;width: 100%; bottom: 0; left: 0; position: fixed; opacity: 0.9;}
		div#btm_banner img{
		border:0;
		cursor:pointer;
		}
		</style>

	</head>
	<body>
    	<div class="wrap_every_thing">
			<div class="fixed_wrap fixed clearfix"><!--fixed layout-->
				<div class="wrap clearfix"><!--wrap-->
					<header class="header"><!--Header-->
						<div id="header-wrapper"><!-- header wrap -->
                			<div class="top-bar"><!--topbar-->
								<div class="inner"><!--inner-->

               <!-- <ul id="menu-top-menu" class="top-menu">
                	<li id="menu-item-3505" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-92 current_page_item menu-item-depth-0">
                		<a href="index.html">Redaksi
                			<span class="menu_bl" style="background:;"></span>
                		</a>
                </li>
				<li id="menu-item-3540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
					<a href="typography/index.html">About
						<span class="menu_bl" style="background:;"></span>
					</a>
				</li>
				<li id="menu-item-3504" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
					<a href="contact-us/index.html">Contact US
						<span class="menu_bl" style="background:;"></span>
					</a>
				</li>
			</ul>
			    <div class="mom_visibility_device device-top-menu-wrap mobile-menu">
      <div class="top-menu-holder"><i class="fa-icon-align-justify mh-icon"></i></div>
     </div>-->

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
		  <li><a href="login_infogk.php"><font size="3" align="left" color="white"><b>LOGIN</b></font></a></li>
		  <!--<li><marquee bgcolor="black" behavior="alternate" direction="left" width="800" scrolldelay="50" onMouseOver="this.stop()" onMouseOut="this.start()"><b>
			
			<?php 
				$ff = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='105' AND page.sub_id_kategori='92' AND status_hapus='aktif' ORDER BY id_page DESC LIMIT 1");
				$gg = mysqli_fetch_array($ff) ?>
				
			<?php echo $gg['isi_page']; ?>

		  </b>
		  </marquee></li>-->
	</ul>
</div>
        </div><!--inner-->
    </div><!--topbar-->

                    <div class="header-wrap"><!--header content-->
                        <div class="inner"><!--inner-->
                        	    <div class="logo" itemscope="itemscope">
								<?php 
								$c = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE page.id_user='20' And page.id_file='31'");
								$d = mysqli_fetch_array($c);
								?>
                <img class="print-logo" itemprop="logo" src="<?php echo $base_url; ?>/dashboard/file/<?php echo $d['nama_file']?> " width="" height="" alt="infogunungkidul"/> 
                <h1>
					<a href="<?php echo $d['isi_page'] ?>" target="_blank">
                		<img itemprop="logo" src="<?php echo $base_url; ?>/dashboard/file/<?php echo $d['nama_file']?> " alt="infogunungkidul" style="padding-bottom: 0px;height: 80px;" />
						
						<img itemprop="logo" class="mom_retina_logo" src="<?php echo $base_url; ?>/dashboard/file/<?php echo $d['nama_file']?> " alt="infogunungkidul" style="padding-bottom: 0px;height: 80px;" />
					<a>
         </h1>  
    </div>
                
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
					    <img class="appear" src="<?php echo $base_url; ?>/dashboard/file/<?php echo $f['nama_file']?> " alt="<?php echo $f['isi_page'] ?>" width="728" height="90">
					</a>
		 	</div><!--mom ad-->
		 	
			</div>
			<div class="mom-ads-inner">
		 	
			</div>
	</div>	<!--Mom ads-->
	</div>
    </div>
    
                        </div><!--inner-->
                    </div><!--header content-->

                    <div class="mom-ad" data-id="1236" style="width:100%; height:100%; ">
					<a href="https://www.hotelorchid-gk.com" target="_blank">
					<img class="appear" src="https://infogunungkidul.com/dashboard/file/iklan-banner-Recovered.gif" alt="Hotel Orchid Gunungkidul" width="100%" height="50%" data-pin-nopin="true">
					</a>
		 	        </div>
                </div><!-- header wrap -->

				<nav id="navigation" class="navigation  dd-effect-slide " data-sticky_logo="" data-sticky_logo_width="143" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" style="top: 0px;height: 45px;"><!--Navigation-->
<div class="inner"style="width: 1160px; padding: 0px; background:black;" style="width: 1160px; padding: 0px; background:black;"><!--inner-->
								

    		<ul id="menu-main-menu" class="main-menu main-default-menu">
    			<li id="menu-item-3401" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-iconsOnly menu-item-depth-0">
    				<a href="index.php">
    					<i class="icon_only momizat-icon-home"></i>
    					<span class="icon_only_label">Home</span>
    					<span class="menu_bl" style="background:;"></span>
    				</a>
    			</li>				
				<?php /* 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='91'");
				$bb = mysqli_fetch_array($aa); */
				?>
    			<!--<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori']; ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori']; ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
					
<i class='responsive-caret'></i>-->
<?php 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='106'"); //pemerintahan
				$bb = mysqli_fetch_array($aa);
				?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori']; ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori']; ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
					
<i class='responsive-caret'></i>
</li>
<?php 				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='108'");		//nasional		
$bb = mysqli_fetch_array($aa);				?>    			
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori'] ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a><i class='responsive-caret'></i></li>
<?php 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='109'");//daerah
				$bb = mysqli_fetch_array($aa);
				?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori']; ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori']; ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
					
<i class='responsive-caret'></i>
</li>
<?php 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='90'"); //'wisata
				$bb = mysqli_fetch_array($aa);
				?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori']; ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori']; ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
					
<i class='responsive-caret'></i>
</li>
<?php 
				$kk = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='83'"); //pendidikan
				$ll = mysqli_fetch_array($kk);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $ll['id_kategori'] ?><?php echo $ll['sub_kategori']; ?>"><?php echo $ll['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
<?php 
				$mm = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='84'"); //budaya
				$nn = mysqli_fetch_array($mm);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $nn['id_kategori'] ?><?php echo $nn['sub_kategori']; ?>"><?php echo $nn['sub_kategori']  ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
<?php 
				$oo = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='85'"); //kesehatan
				$pp = mysqli_fetch_array($oo);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $pp['id_kategori'] ?><?php echo $pp['sub_kategori']; ?>"><?php echo $pp['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
<?php 
				$ee = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='80'"); //peristiwa
				$ff = mysqli_fetch_array($ee);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $ff['id_kategori'] ?><?php echo $ff['sub_kategori']; ?>"><?php echo $ff['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
				<?php 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='78'"); //politik
				$bb = mysqli_fetch_array($aa);
				?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori'] ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
				<?php 
				$cc = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='79'"); //kriminal
				$dd = mysqli_fetch_array($cc);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $dd['id_kategori'] ?><?php echo $dd['sub_kategori']; ?>"><?php echo $dd['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
<?php 
				$ii = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='82'"); //ekonomi
				$jj = mysqli_fetch_array($ii);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $jj['id_kategori'] ?><?php echo $jj['sub_kategori']; ?>"><?php echo $jj['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
<?php 
				$ww = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='89'"); //oow
				$xx = mysqli_fetch_array($ww);
				?>
<li id="menu-item-3481" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-0"><a href="berita.php?id=<?php echo $xx['id_kategori'] ?><?php echo $xx['sub_kategori']; ?>"><?php echo $xx['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a></li>
<?php 
				$qq = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='86'"); //olahraga
				$rr = mysqli_fetch_array($qq);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $rr['id_kategori'] ?><?php echo $rr['sub_kategori']; ?>"><?php echo $rr['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
<i class='responsive-caret'></i>
</li>
				<?php 
				$uu = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='88'"); //religi
				$vv = mysqli_fetch_array($uu);
				?>
<li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0"><a href="berita.php?id=<?php echo $vv['id_kategori'] ?><?php echo $vv['sub_kategori']; ?>"><?php echo $vv['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a></li>
<?php 
				$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='87'"); //opini
				$tt = mysqli_fetch_array($ss);
				?>
<li id="menu-item-3452" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-parent-item mom_mega_cats menu-item-depth-0"><a href="berita.php?id=<?php echo $tt['id_kategori'] ?><?php echo $tt['sub_kategori']; ?>"><?php echo $tt['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a><div class="mom-megamenu cats-mega-wrap">
</div>
<i class='responsive-caret'></i>
</li>
<?php 
				$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='110'"); //profil
				$tt = mysqli_fetch_array($ss);
				?>
<li id="menu-item-3452" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-parent-item mom_mega_cats menu-item-depth-0"><a href="berita.php?id=<?php echo $tt['id_kategori'] ?><?php echo $tt['sub_kategori']; ?>"><?php echo $tt['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a><div class="mom-megamenu cats-mega-wrap">
</div>
<i class='responsive-caret'></i>
</li>
<?php 
				$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='111'"); //advertorial
				$tt = mysqli_fetch_array($ss);
				?>
<li id="menu-item-3452" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-parent-item mom_mega_cats menu-item-depth-0"><a href="berita.php?id=<?php echo $tt['id_kategori'] ?><?php echo $tt['sub_kategori']; ?>"><?php echo $tt['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a><div class="mom-megamenu cats-mega-wrap">
</div>
<i class='responsive-caret'></i>
</li>

<li id="menu-item-3452" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-parent-item mom_mega_cats menu-item-depth-0"><a href="<?php echo $base_url; ?>/infogunungkidul.apk">Download Aplikasi Android Infogunungkidul.com<span class="menu_bl" style="background:#008000;"></span></a><div class="mom-megamenu cats-mega-wrap">
</div>
<i class='responsive-caret'></i>
</li>
				
				
				



</ul>        
         <div class="mom_visibility_device device-menu-wrap">
            <div class="device-menu-holder">
                <i class="momizat-icon-paragraph-justify2 mh-icon"></i> <span class="the_menu_holder_area"><i class="dmh-icon"></i>Menu</span><i class="mh-caret"></i>
            </div>
        <ul id="menu-main-menu-1" class="device-menu"><li id="menu-item-3401" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-iconsOnly menu-item-depth-0"><a href="index.php"><i class="icon_only momizat-icon-home"></i><span class="icon_only_label">Home</span><span class="menu_bl" style="background:;"></span></a></li>
		
		<?php 
				$aaa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='91'");
				$bbb = mysqli_fetch_array($aaa);
				?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bbb['id_kategori'] ?>"><?php echo $bbb['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>

        	<?php 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='78'");
				$bb = mysqli_fetch_array($aa);
				?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori'] ?>"><?php echo $bb['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
				<?php 
				$cc = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='79'");
				$dd = mysqli_fetch_array($cc);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $dd['id_kategori'] ?>"><?php echo $dd['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
				<?php 
				$ee = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='80'");
				$ff = mysqli_fetch_array($ee);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $ff['id_kategori'] ?>"><?php echo $ff['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
				<?php 
				$gg = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='81'");
				$hh = mysqli_fetch_array($gg);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $hh['id_kategori'] ?>"><?php echo $hh['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
					<?php 
				$ii = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='82'");
				$jj = mysqli_fetch_array($ii);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $jj['id_kategori'] ?>"><?php echo $jj['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
					<?php 
				$kk = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='83'");
				$ll = mysqli_fetch_array($kk);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $ll['id_kategori'] ?>"><?php echo $ll['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
					<?php 
				$mm = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='84'");
				$nn = mysqli_fetch_array($mm);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $nn['id_kategori'] ?>"><?php echo $nn['sub_kategori']  ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
				<?php 
				$oo = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='85'");
				$pp = mysqli_fetch_array($oo);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $pp['id_kategori'] ?>"><?php echo $pp['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
				<?php 
				$qq = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='86'");
				$rr = mysqli_fetch_array($qq);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $rr['id_kategori'] ?>"><?php echo $rr['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>
				<?php 
				$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='87'");
				$tt = mysqli_fetch_array($ss);
				?>
<li id="menu-item-3452" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-parent-item mom_mega_cats menu-item-depth-0"><a href="berita.php?id=<?php echo $tt['id_kategori'] ?>"><?php echo $tt['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a><div class="mom-megamenu cats-mega-wrap">
</div>
</li>
				<?php 
				$uu = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='88'");
				$vv = mysqli_fetch_array($uu);
				?>
<li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0"><a href="berita.php?id=<?php echo $vv['id_kategori'] ?>"><?php echo $vv['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a></li>
				<?php 
				$ww = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='89'");
				$xx = mysqli_fetch_array($ww);
				?>
<li id="menu-item-3481" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-0"><a href="berita.php?id=<?php echo $xx['id_kategori'] ?>"><?php echo $xx['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a></li>
				<?php 
				$yy = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='90'");
				$zz = mysqli_fetch_array($yy);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $zz['id_kategori'] ?>"><?php echo $zz['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>

<?php 
				$yyyy = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_kategori='106'");
				$zzzz = mysqli_fetch_array($yyyy);
				?>
<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $zzzz['id_kategori'] ?>"><?php echo $zzzz['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
</li>

<!--<li id="menu-item-3417" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="#">Reviews<span class="menu_bl" style="background:#d91897;"></span></a>
<ul class="sub-menu ">
	<li id="menu-item-3518" class="menu-item menu-item-type-post_type menu-item-object-post active menu-item-depth-1"><a href="2014/05/samsung-galaxy-s5-review/index.html">Review &#8211; Bars</a></li>
	<li id="menu-item-3519" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-depth-1"><a href="2014/05/samsung-galaxy-note-pro-review/index.html">Review &#8211; Circles</a></li>
	<li id="menu-item-3520" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-depth-1"><a href="2014/05/sony-rx100-iii-bets-a-better-lens/index.html">Review &#8211; Stars</a></li>
	<li id="menu-item-3521" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-depth-1"><a href="2014/05/ipad-mini-with-retina-display-review/index.html">Review &#8211; All Styles</a></li>
	<li id="menu-item-3522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-1"><a href="review-system/index.html">Review System Backend</a></li>
</ul>
<i class='responsive-caret'></i>
</li>-->

</ul>
        </div>
        <div class="clear"></div>
</div><!--inner-->
</nav><!--Navigation-->

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
				    <a href="sms:081904213283" >
		            <?php echo $gg['isi_page']; ?>
		            </a>
		            </h4>
                </li>
				<?php //} ?>
			</ul>
        </div>
    </div> 

        <div class="brmenu">
            </div>
            
    </div><!--inner-->
</div><!--breaking news-->

            </header><!--Header-->
			