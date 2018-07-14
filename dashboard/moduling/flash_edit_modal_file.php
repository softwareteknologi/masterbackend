<?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori WHERE fitur='file'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
        <!-- MODAL EDIT -->
        <div id="edit-<?php echo $baris['id_page'] ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Edit Data File</h4>
                    </div>
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="modal-body">
                        <!-- begin panel -->
                            <!-- Input Type Hidden -->
                            <input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
                            <input type="hidden" name="date_time" value="<?php echo $baris['date_time'] ?>">
                            <input type="hidden" name="id_file" value="<?php echo $baris['id_file']?>">
                            <!-- End -->
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Nama</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="judul_page" value="<?php echo $baris['judul_page'] ?>" />
                                </div>
                            </div>
							<div class="form-group m-b-10">
                                <label class="col-md-3 control-label">URL</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="isi_page" value="<?php echo $baris['isi_page'] ?>" />
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Keterangan</label>
                                <div class="col-md-7">
                                    <textarea name="keterangan"><?php echo $baris['keterangan'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Pilih Kategori</label>
                                <div class="col-md-7">
                                    <select id="formInput1226" class="form-control" name="id_kategori">
                                          <?php
                                            $user = id_user($username_user);
                                            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
                                            while($hasil2=mysqli_fetch_array($sql)){
                                            $id=$hasil2['id_kategori'];
                                            $text=$hasil2['isi_text'];
                                             $a=2;
										  $nomor=$a.$user;
										  $hasil3= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
										  $result= mysqli_fetch_array($hasil3);
										  $status=$result['status'];
										  $id_kategori=$result['id_kategori'];
										  $isi_text=$result['isi_text'];
                                        ?>

                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='18' && $status=='1')//Pdf
                                          echo '
                                              <option value="18">Pdf</option>' ;?>

                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='19' && $status=='1')//Word
                                          echo '
                                              <option value="19">Word</option>' ;?>

                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='20' && $status=='1')//Exel
                                          echo '
                                              <option value="20">Exel</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='21' && $status=='1')//Video
                                          echo '
                                              <option value="21">Video</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='22' && $status=='1')//gambar
                                          echo '
                                              <option value="22">Gambar</option>' ;?>
										  <?php
                                          if($username_user && $isi_text && $id_kategori=='94' && $status=='1')//Tugas
                                          echo '
                                              <option value="94">Tugas</option>' ;?>

                                            <?php } ?>

                                        </select>
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Gambar</label>
                                <div class="col-md-7">
                                    <?php echo "<img src=file/".$baris['nama_file']." width='200px' height='200px'>"; ?><br>
                                    <code class="alert alert-danger">*Harap menginput kembali gambar</code><br><br>
                                    <input type="file" name="nama_file" class="form-control" required>
                                </div>
                            </div>
                        <!-- end panel -->
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
						<input type="submit" name="edit_file" class="btn width-100 btn-primary" value="Simpan">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>