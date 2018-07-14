<?php
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		// query detail
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='branding' AND status_hapus='aktif' AND id_page='$id' ORDER BY date_time DESC");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
<div id="content" class="content">
    <div class="row">
	<div class="col-md-9">
    <div class="panel p-20">
        <table class="table table-bordered table-hover">
			<tbody>
				<tr>
					<?php if($baris['nama_file']){?>
                    <td colspan="2"><center><?php echo "<img src=file/".$baris['nama_file']." width='100%' height='100%'>"; ?></center>
					</td>
					<?php } ?>
				</tr>
				<tr>
					<td class="col-md-1 col-sm-2">Isi Text</td>
					<td class="col-sm-3"><?php echo $baris['isi_page'] ?></td>
                </tr>
				<tr>
					<td class="col-md-1 col-sm-2">Tanggal di Perbarui</td>
                    <td class="col-sm-3"><?php echo $baris['date_time'] ?></td>
                </tr>
				<tr>
					<td class="col-md-1 col-sm-2">Nama Kategori</td>
					<td class="col-sm-3"><?php echo $baris['nama_kategori'] ?></td>
                </tr>
				<tr>
					<td class="col-md-1 col-sm-2">Di Input Oleh</td>
                    <td class="col-sm-3"><?php echo $baris['nama_user'] ?></td>
                </tr>
				
				
			</tbody>
		</table>
		</div>
</div>
    </div>
<?php }  ?>