<?php include "dashboard/core/koneksi.php"; ?>
<?php include "dashboard/core/fungsi.php"; ?>
<?php $base_url = "https://infogunungkidul.com/"; ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="no-js">
	<head>
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
			while($hasil=mysqli_fetch_array($detail3)){
			$desc1 = $hasil['isi_page'];
			$desc2 = substr($desc1,'100');
		?>
		
		<meta property="og:url" content="<?php echo $base_url; ?>detail.php?id=<?php echo $hasil['id_page'];?>/<?php echo str_replace(' ', '-', $hasil['judul_page']); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $hasil['judul_page']; ?>" />
		<meta property="og:description" content="<?php //echo $desc2;?>" />
		<meta property="og:image" content="<?php echo $base_url; ?>dashboard/<?php echo $hasil['nama_file']; ?>" />
		  <?php } ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="icon_infogk.ico" type="image/x-icon">
		
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="icon_infogk.ico" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="asset/wp-content/themes/multinews/css/print.css" media="print" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel='dns-prefetch' href='https://s0.wp.com/' />
		<link rel='dns-prefetch' href='https://s.gravatar.com/' />
		<link rel='dns-prefetch' href='https://s.w.org/' />
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
                			<?php
								include 'module/top-bar.php';
							?>

							<div class="header-wrap"><!--header content-->
								<div class="inner"><!--inner-->
									<?php
										include 'module/logo-view.php';
										include 'module/banner-view.php';
									?>
								</div><!--inner-->
							
							</div><!--header content-->
							<?php
								include 'module/banner-big-view.php';
							?>
						</div><!-- header wrap -->
						<?php
							include 'module/nav.php';
						?>
						<?php
							//include 'module/breaking-news.php';
						?>
					</header><!--Header-->
			