<?php
	// include Database connection file 
	include("../core/koneksi.php");
	include("../core/fungsi.php");
?>
<?php
$result = mysql_query("SELECT * FROM pesan where id_user='$id1' order by waktu_pesan");
while($row = mysql_fetch_array($result)){ ?>
<li class="left">
<a href="javascript:;" class="image"><img alt="" src="assets/img/user_1.jpg" /></a>
<div class="message">
<a href="javascript:;" class="name"><?php echo nama_user1($row['id_user'])?></a>
<?php echo $row['isi_pesan'] ?>
<span class="date-time"><?php echo $row['waktu_pesan'] ?></span>
</div></li>
<?php } ?>
<?php
	$result = mysql_query("SELECT * FROM pesan where id_user='$id2' order by waktu_pesan");
	while($row = mysql_fetch_array($result)){ ?>
	<li class="right">
	<a href="javascript:;" class="image"><img alt="" src="assets/img/user_2.jpg" /></a>
	<div class="message">
	<a href="javascript:;" class="name"><?php echo nama_user1($row['id_user'])?></a>
	<?php echo $row['isi_pesan'] ?>
	<span class="date-time"><?php echo $row['waktu_pesan'] ?></span>
	</div>
	</li>
<?php } ?>