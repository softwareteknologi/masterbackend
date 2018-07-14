<!-- begin panel -->
<div class="panel p-20">
	<div class="form-group">
		<label class="control-label">Pilih Kategori</label>
		<select id="formInput1226" class="form-control" name="id_kategori">
				<?php
					$user = id_user($username_user);
                    $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
                    while($hasil=mysqli_fetch_array($sql)){
                    $id=$hasil['id_kategori'];
                    $text=$hasil['isi_text'];
                    $a=2;
					$nomor=$a.$user;
					$hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
					$result= mysqli_fetch_array($hasil);
					$status=$result['status'];
					$id_kategori=$result['id_kategori'];
					$isi_text=$result['isi_text'];
                ?>
				<?php
					if($username_user && $isi_text && $id_kategori=='18' && $status=='1')//Pdf
                    echo '<option value="18">Pdf</option>' ;
				?>
				<?php
					if($username_user && $isi_text && $id_kategori=='19' && $status=='1')//Word
                    echo '<option value="19">Word</option>' ;
				?>
				<?php
					if($username_user && $isi_text && $id_kategori=='20' && $status=='1')//Exel
                    echo '<option value="20">Exel</option>' ;
				?>
				<?php
                    if($username_user && $isi_text && $id_kategori=='21' && $status=='1')//Video
					echo '<option value="21">Video</option>' ;
				?>
				<?php
                    if($username_user && $isi_text && $id_kategori=='22' && $status=='1')//Gambar
					echo '<option value="22">Gambar</option>' ;
				?>
				<?php
					if($username_user && $isi_text && $id_kategori=='94' && $status=='1')//Tugas
                    echo '<option value="94">Tugas</option>' ;
				?>
				<?php } ?>
		</select>
    </div>
        <div class="form-group">
			<label class="control-label">Pilih File/Gambar</label>
            <input type="file" class="form-control" name="nama_file"><br>
            <font color="red"><b>Input File Tanpa Spasi</b></font>
        </div>
        <!-- Input Type Hidden -->
		<input type="hidden" value="<?php echo $user ?>" name="id_user">
        <input type="hidden" value="<?php echo $tgl ?>" name="date_time">
        <input type="hidden" name="id_file" value="<?php echo $angka ?>">
		<input type="hidden" name="status_hapus" value="aktif">
        <!-- End -->
        <input type="submit" name="simpan_file" class="btn width-100 btn-primary" value="Simpan">
    </div>
    <!-- end panel -->