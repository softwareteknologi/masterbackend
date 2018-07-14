<?php
$auto=mysqli_query($id_mysqli,"SELECT * FROM file ORDER BY id_file DESC LIMIT 1");
$no=mysqli_fetch_array($auto);
$tampil = isset($_GET['tampil']) ? $_GET['tampil'] : null;
$nog = isset($_GET['no']) ? $_GET['no'] : null;
if($tampil=='1')
$angka=$nog;
else
$angka=$no['id_file']+2;

$tgl=date('Y-m-d H:m:s');
//}
?>
<!-- begin #content -->
    <div id="content" class="content">
        <?php
            $user = id_user($username_user); // Mengubah session username menjadi id user 
            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'"); // ambil data dari tabel text
            while($hasil=mysqli_fetch_array($sql)){
            $id=$hasil['id_kategori'];
            $text=$hasil['isi_text'];
            $a=2; // kode hak akses file
			$nomor=$a.$user; // penggabungan kode hak akses file dengan id user
			$hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
			$result= mysqli_fetch_array($hasil);
			$status=$result['status'];
			$id_kategori=$result['id_kategori'];
			$isi_text=$result['isi_text'];
        ?>
		<?php if($username_user && $isi_text && $id_kategori=='41' && $status=='1'){ // hak akses fitur file dengan id kategori 41 yaitu fitur file ?>
            <!-- begin row -->
				<div class="row">
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-md-9">
                        <?php include "moduling/flash_input_file.php"; ?>
                    </div>
                    <div class="col-md-3">
                        <?php include "moduling/flash_kategori_file.php"; ?>
					</div>
                    </form>
                </div>
				<div class="row">
					<div class="col-md-12">
						<?php include "moduling/flash_tabel_file.php"; ?>
					</div>
				</div>
		<?php include "moduling/flash_edit_modal_file.php"; ?>
		<?php include "moduling/flash_detail_modal_file.php"; ?>
        <?php } ?>
		<?php } ?>
		<br><br>
			<!--<div class="row">
                <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
					<div class="col-md-9">
						<?php //include "moduling/flash_input_kategori.php"; ?>
					</div>
				</form>
			</div>-->
