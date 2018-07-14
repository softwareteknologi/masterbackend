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