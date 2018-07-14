        <footer class="footer clearfix" style="align:center;">
			<div class="inner">
				<div class="footer-widget one_fourth">
					<center>
					<div class="widget widget_text">
						<div class="widget-title">
							<h4>PT. SINAR MEDIA DHAKSINARGA</h4>
							<h5>BADAN HUKUM NOMOR AHU-0001934.AH.01.11.TAHUN 2018</h5>
						</div>
						<div class="textwidget">
							<?php 
								$y = mysqli_query($id_mysqli,"SELECT * FROM page WHERE id_user='20' And id_file='33'");
								$z = mysqli_fetch_array($y);
							?>
							<?php echo $z['isi_page'] ?>
						</div>
					</div>                    
				</div>
				<div class="footer-widget one_fourth">
					<center>
					<div class="widget momizat-facebook" style="padding-bottom:10px;">
						<div class="widget-title">
							<h4>Facebook</h4>
						</div>
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finf.gunungkidul%2F&tabs=timeline&width=800&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 80%;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>			
					</div>
				</div>
				<div class="footer-widget one_fourth">
					<center>
					<div class="widget momizat-twitter" style="padding-bottom:10px;">
						<div class="widget-title"><h4>Lokasi Kami</h4></div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7902.696282258438!2d110.58425562422734!3d-7.96292732705869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb339bdb6d987%3A0xfe4dacd6a5a001d4!2sCV+Sinar+Media+Dhaksinarga!5e0!3m2!1sid!2s!4v1494601810467" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 80%;" allowfullscreen></iframe>
					</div>                    
				</div>
				<div class="footer-widget one_fourth last">
					<center>
					<div class="widget social-icons">
						<div class="widget-title"><h4>Follow</h4>
						</div>
						<ul class="social-widget clearfix">
							<li class="twitter"><a href="https://twitter.com/infogununkidul/" target="_blank"></a></li>
							<li class="facebook"><a href="https://www.facebook.com/inf.gunungkidul/" target="_blank"></a></li>
							<li class="gplus"><a href="https://plus.google.com/u/0/110214300156502589722/" target="_blank"></a></li>
							<li class="linkedin"><a href="https://www.linkedin.com/in/infogunungkidul-informasi-gunungkidul-terlengkap-25b480138/" target="_blank"></a></li>
							<li class="instagram"><a href="https://www.instagram.com/accounts/login/?next=%2Finfogunungkidul_media_online%2F&source=follow" target="_blank"></a></li>							
						</ul>
					</div>
					<div class="widget momizat-news_letter">
						<center>	 
						<div class="widget-title"><h4>Official</h4></div>		
						<ul id="menu-main-menu" class="main-menu main-default-menu">
							<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0">
								<a href="berita.php?id=91Redaksi">
									<span class="menu_bl" style="background:#D32F2F;"></span>Redaksi<span class="menu_bl" style="background:#D32F2F;"></span>
								</a>				
								<i class="responsive-caret"></i>				
							</li>
							<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0">
								<a href="#">
									<span class="menu_bl" style="background:#D32F2F;"></span>Disclaimer<span class="menu_bl" style="background:#D32F2F;"></span>
								</a>				
								<i class="responsive-caret"></i>				
							</li>
					 	</ul>	
					</div>
				</div>
			</div>
		</footer>
		<div class="footer-bottom" role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
			<div class="inner">
				<div class="alignright">
					<ul class="footer-bottom-social" style="padding-top: 0px;">
					Contact The <a href="tel:082223306969">IT Support</i></a>
					</ul></div>
				<div class="alignleft">
					<div class="copyrights">Copyright © 2017-<?php echo date("Y");?> Powered By infogunungkidul.com . All Rights Reserved. </div>
				</div>
			</div>
        </div>
		<a class="toup" href="#"> 
			<!--<img src="https://images.staticjw.com/cor/3721/space-iklan1.gif"/>
			<i class="enotype-icon-arrow-up6">
			<i><p>Layanan Pembaca</p>-->
			<i class="enotype-icon-arrow-up6"></i>
		</a>
		<? 
		$waktu = date("A");
		$ol = "Ai";
		if ($waktu === $ol){?>
		<div style='height: 0px;'></div>
		<div align='center' id='btm_banner' style='height: auto; z-index: 9999;'>
			
			<!--<div style='text-align: right; width: 728px; height: 6px;'>
				<img src='http://1.bp.blogspot.com/-XvA7La2fWQU/T8aIU5kxRnI/AAAAAAAAAJA/uw2dWruT2Yg/s1600/close-icon.png'/>
			</div>-->
			<div style='clear: both;'></div>
			<a href="https://larasatiresidence.wordpress.com/" id='closed' target="_blank">
				<p>
					<center>
						Hari gini belum punya RUMAH? Kami punya solusinya. Klik selengkapnya
					</center>
					
				</p>
			</a>
		</div>
		<? }else{} ?>
		
		
	</div><!--fixed layout-->
</div> <!-- wrap every thing -->
<!--<div style="display:none">
	<div class="grofile-hash-map-3ae317858e1a6ab7a86c41da1ba5e4e4">
	</div>
	<div class="grofile-hash-map-93153c9957b36ba1fb971696a59c46aa">
	</div>
	<div class="grofile-hash-map-5a09ab8a3f03376046a6e6eec0a0d511">
	</div>
</div>-->
<script type='text/javascript' src='asset/wp-content/plugins/bbpress/templates/default/js/editor6640.js?ver=2.5.12-6148'></script>
<script type='text/javascript' src='asset/wp-includes/js/comment-reply.min85c5.js?ver=b1787119d1dc10318453d134a6be3b8c'></script>
<script type='text/javascript' src='asset/wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */
</script>
<!-- <script type='text/javascript' src='assetwp-content/plugins/contact-form-7/includes/js/scripts4906.js?ver=4.7'></script> -->
<!-- <script type='text/javascript' src='../../s0.wp.com/wp-content/js/devicepx-jetpack39df.js?ver=201718'></script> -->
<!-- <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script> -->
<script type='text/javascript' src='asset/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/multinews\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/multinews\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='asset/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min8d18.js?ver=3.0.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/multinews\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/multinews\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='asset/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min8d18.js?ver=3.0.5'></script>
<!-- <script type='text/javascript' src='../../s.gravatar.com/js/gprofilesa970.js?ver=2017Mayaa'></script> -->
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type='text/javascript' src='asset/wp-content/plugins/jetpack/modules/wpgroho85c5.js?ver=b1787119d1dc10318453d134a6be3b8c'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var momAjaxL = {"url":"https:\/\/themes.momizat.com\/multinews\/wp-admin\/admin-ajax.php","nonce":"a76cb8bf34","success":"Check your email to complete subscription","error":"Already subscribed","error2":"Email invalid","nomore":"No More Posts","homeUrl":"https:\/\/themes.momizat.com\/multinews","viewAll":"View All Results","noResults":"Sorry, no posts matched your criteria","postid":""};
/* ]]> */
</script>
<script type='text/javascript' src='asset/wp-content/themes/multinews/js/main5152.js?ver=1.0'></script>
<script type='text/javascript' src='asset/wp-content/themes/multinews/js/plugins.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='asset/wp-includes/js/wp-embed.min85c5.js?ver=b1787119d1dc10318453d134a6be3b8c'></script>
<script type='text/javascript' src='asset/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min3c21.js?ver=5.1.1'></script>
<script type='text/javascript' src='../../stats.wp.com/e-201718.js' async defer></script>
<script type='text/javascript'>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:4.8.2',blog:'96512415',post:'92',tz:'0',srv:'themes.momizat.com'} ]);
	_stq.push([ 'clickTrackerInit', '96512415', '92' ]);
</script>
	
    </body>
</html>
