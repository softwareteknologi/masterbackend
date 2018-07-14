<nav id="navigation" class="navigation  dd-effect-slide " data-sticky_logo="" data-sticky_logo_width="143" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" style="top: 0px;height: 45px;"><!--Navigation-->
<div class="inner"style="width: 1160px; padding: 0px; background:black;" style="width: 1160px; padding: 0px; background:black;"><!--inner-->
	<ul id="menu-main-menu" class="main-menu main-default-menu">
		<li id="menu-item-3401" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-iconsOnly menu-item-depth-0">
    		<a href="<?php echo $base_url; ?>">
    			<i class="icon_only momizat-icon-home"></i>
    			<span class="icon_only_label">Home</span>
    			<span class="menu_bl" style="background:;"></span>
    		</a>
    	</li>				
		<?php /* 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='91'");
				$bb = mysqli_fetch_array($aa); */
		?>
    			<!--<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php //echo $bb['id_kategori']; ?><?php //echo $bb['sub_kategori']; ?>"><?php //echo $bb['sub_kategori']; ?><span class="menu_bl" style="background:#D32F2F;"></span></a>
				<i class='responsive-caret'></i>-->
		<?php 
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='106'"); //pemerintahan
				$bb = mysqli_fetch_array($aa);
		?>
    			<li id="menu-item-3482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-depth-0"><a href="berita.php?id=<?php echo $bb['id_kategori']; ?><?php echo $bb['sub_kategori']; ?>"><?php echo $bb['sub_kategori']; ?><span class="menu_bl" style="background:#D32F2F;"></span></a>				
			<i class='responsive-caret'></i>
			</li>
			<?php 				
				$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='108'");		//nasional		
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
		<li id="menu-item-3482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
			<a href="berita.php?id=<?php echo $rr['id_kategori'] ?><?php echo $rr['sub_kategori']; ?>">
				<?php echo $rr['sub_kategori'] ?>
				<span class="menu_bl" style="background:#D32F2F;"></span>
			</a>
		</li>
		<?php 
			$uu = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='88'"); //religi
			$vv = mysqli_fetch_array($uu);
		?>
		<li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
			<a href="berita.php?id=<?php echo $vv['id_kategori'] ?><?php echo $vv['sub_kategori']; ?>">
				<?php echo $vv['sub_kategori'] ?>
				<span class="menu_bl" style="background:#D32F2F;"></span>
			</a>
		</li>
		<?php 
			$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='87'"); //opini
			$tt = mysqli_fetch_array($ss);
		?>
		<li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
			<a href="berita.php?id=<?php echo $tt['id_kategori'] ?><?php echo $tt['sub_kategori']; ?>">
				<?php echo $tt['sub_kategori'] ?>
				<span class="menu_bl" style="background:#D32F2F;"></span>
			</a>
		</li>
		<?php 
				$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='110'"); //profil
				$tt = mysqli_fetch_array($ss);
				?>
		<li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
			<a href="berita.php?id=<?php echo $tt['id_kategori'] ?><?php echo $tt['sub_kategori']; ?>"><?php echo $tt['sub_kategori'] ?>
				<span class="menu_bl" style="background:#D32F2F;"></span>
			</a>
		</li>
		<?php 
				$ss = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='111'"); //advertorial
				$tt = mysqli_fetch_array($ss);
				?>
		<li id="menu-item-2669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
			<a href="berita.php?id=<?php echo $tt['id_kategori'] ?><?php echo $tt['sub_kategori']; ?>"><?php echo $tt['sub_kategori'] ?>
				<span class="menu_bl" style="background:#D32F2F;"></span>
			</a>
		</li>

		<!--<li id="menu-item-3452" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
			<a href="<?php //echo $base_url; ?>/infogunungkidul.apk">
				Download Aplikasi Android Infogunungkidul.com
				<span class="menu_bl" style="background:#008000;"></span>
			</a>
			<div class="mom-megamenu cats-mega-wrap"></div>
			<i class='responsive-caret'></i>
		</li>-->
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
<li id="menu-item-3452" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0"><a href="berita.php?id=<?php echo $tt['id_kategori'] ?>"><?php echo $tt['sub_kategori'] ?><span class="menu_bl" style="background:#D32F2F;"></span></a><div class="mom-megamenu cats-mega-wrap">
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



</ul>
        </div>
        <div class="clear"></div>
</div><!--inner-->
</nav><!--Navigation-->