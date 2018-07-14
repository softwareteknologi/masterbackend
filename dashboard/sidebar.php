		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar nav -->
				<ul class="nav">
				    <li class="nav-user">
				        <div class="image">
						
						<?php
						$user1= $id_userku;
						$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$user1'");
						while($baris=mysqli_fetch_array($hasil)){
						?>
						
				            <?php echo "<img src=file/".$baris['foto'].">" ;?>
							
						<?php } ?>
							
				        </div>
				        <div class="info">
				            <div class="name dropdown">
				                <a href="javascript:;" data-toggle="dropdown">
								<?php echo nama_user($id_userku) ?>
								</a>
								<h6 style="color:white;"><?php echo jabatan($id_userku); ?></h6>
                                <!--<ul class="dropdown-menu">
                                    <!-- <li><a href="javascript:;">Edit Profile</a></li>
                                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                    <li><a href="javascript:;">Calendar</a></li>
                                    <li><a href="javascript:;">Setting</a></li>
                                    <li class="divider"></li>
									<?php
									//$user1= id_user($username_user);
									//if($user1==20){ //Username = infogk ?>
									<li><a href="http://softek.co.id/infogunungkidul/core/logout.php?id=<?php// echo id_user($username_user) ?>">Log Out</a></li>
									<?php// } else { ?>
										<li><a href="core/logout.php?id=<?php // echo id_user($username_user) ?>">Log Out</a></li>
									<?php// } ?>
                                </ul>-->
				            </div>
							<div class="position">
							
							<?php
							$user1=$id_userku;
							  $hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$user1'");
                              $no=1;
                              while($baris=mysqli_fetch_array($hasil)){
								  $kategori = $baris['id_kategori'];
                            ?>
							
							<?php
								$baris['gaji_pokok'];
								$baris['bonus'];
							 
                                $sub_total = $baris['gaji_pokok'] + $baris['bonus'];

                                if($sub_total > '4000000')
                                $pph = $sub_total * '10' / '100';
                                else
                                $pph = '0';

                                $total = $sub_total - $pph;
                                //echo 'Rp ' .number_format($total);

								if($sub_total > '4000000')
								$pph = $sub_total * '10' / '100';
								else
								$pph = '0';
								//echo 'Rp ' .number_format($pph);
							}
								$total = $sub_total - $pph; 
							?>
							
							<?php 
							$saldo = $total;
							?>
							
							
							<?php
									$user = id_user($username_user);
									$sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
									while($hasil=mysqli_fetch_array($sql)){
									$id=$hasil['id_kategori'];
									$text=$hasil['isi_text'];
									 $a=6;
									  $nomor=$a.$user;
									  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
									  $result= mysqli_fetch_array($hasil);
									  $status=$result['status'];
									  $id_kategori=$result['id_kategori'];
									  $isi_text=$result['isi_text'];
								?>
								<?php
									if($username_user && $isi_text && $id_kategori=='97' && $status=='1'){ ?>
							
							
							Saldo : <b><?php echo 'Rp '. number_format($saldo); ?></b>
							<?php if($saldo){ ?>
							<span class="glyphicon glyphicon-ok"></span>
							<?php } ?>
							<?php if(empty($saldo)){ ?>
							<span class="glyphicon glyphicon-remove"></span>
									<?php } } }?>
							</div>
				        </div>
				    </li>
					<li class="nav-header">Menu Dashboard</li>
		<?php
			if($kategori=='62'){
		?>
         <li>
            <a href="index.php">
                <i class="fa fa-home"></i>
                <span>Dashboard</span>
              </a>
          </li>
			<?php } ?>
		<?php
            $user = $id_userku;
        ?>
		  
		<?php 
			$a = 1;
			$aa= $a.$user;
			$aaa = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$aa'");
			$aaaa = mysqli_fetch_array($aaa);
		?>
          <li>
            <a href="?menu=publishing">
                <i class="fa fa-pencil-square-o"></i>
                <span><?php echo $aaaa['isi_text']; ?></span>
              </a>
          </li>
		  <?php 
			$b = 4;
			$bb= $b.$user;
			$bbb = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$bb'");
			$bbbb = mysqli_fetch_array($bbb);
		  ?>
          <li>
            <a href="?menu=branding">
                <i class="fa fa-bookmark"></i>
                <span><?php echo $bbbb['isi_text']; ?></span>
              </a>
          </li>
		  <?php 
			$d = 2;
			$dd= $d.$user;
			$ddd = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$dd'");
			$dddd = mysqli_fetch_array($ddd);
		  ?>
          <li>
            <a href="?menu=file">
                <i class="fa fa-folder"></i>
                <span><?php echo $dddd['isi_text']; ?></span>
              </a>
          </li>
		  <?php 
			$e = 5;
			$ee= $e.$user;
			$eee = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$ee'");
			$eeee = mysqli_fetch_array($eee);
		  ?>
          <li>
            <a href="?menu=accounting">
                <i class="fa fa-credit-card"></i>
                <span><?php echo $eeee['isi_text']; ?></span>
              </a>
          </li>
		  <?php 
			$f = 3;
			$ff= $f.$user;
			$fff = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$ff'");
			$ffff = mysqli_fetch_array($fff);
		  ?>
          <li>
            <a href="?menu=interaktif">
                <i class="fa fa-comments-o"></i>
                <span><?php echo $ffff['isi_text']; ?></span>
              </a>
          </li>
		  <?php 
			$g = 6;
			$gg= $g.$user;
			$ggg = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gg'");
			$gggg = mysqli_fetch_array($ggg);
		  ?>
          <li>
            <a href="?menu=network">
                <i class="icon-feed"></i>
                <span><?php echo $gggg['isi_text']; ?></span>
              </a>
          </li>
		  <?php 
			$h = 7;
			$hh= $h.$user;
			$hhh = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$hh'");
			$hhhh = mysqli_fetch_array($hhh);
		  ?>
          <li>
            <a href="?menu=report">
                <i class="fa fa-bar-chart"></i>
                <span><?php echo $hhhh['isi_text']; ?></span>
              </a>
          </li>
			<?php 
            //$user = id_user($username_user);
            //$sql= mysql_query("SELECT * From text where id_user='$user' AND status='1'");
            //while($hasil=mysql_fetch_array($sql)){
            //$id=$hasil['id_kategori'];
            //$text=$hasil['isi_text'];
            //$hasil= mysql_query("SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text'");
            //while($result= mysql_fetch_array($hasil)){
            //$status=$result['status'];
            //$id_kategori=$result['id_kategori'];
            //$isi_text=$result['isi_text'];
        ?>
        <?php
        //if($username_user && $isi_text=='Network' && $id_kategori=='43' && $status=='1'){ ?>
          <!--<li>
            <a href="?menu=user">
                <i class="fa fa-user"></i>
                <span>User</span>
              </a>
          </li>-->
        <?php //} ?>

        <?php //}} ?>

					<li class="divider has-minify-btn">
                        <!-- begin sidebar minify button -->
                        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-left"></i>
						</a>
                        <!-- end sidebar minify button -->
					</li>
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->