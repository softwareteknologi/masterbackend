<?php
$auto=mysqli_query($id_mysqli,"SELECT * FROM page ORDER BY id_page DESC LIMIT 1");
$no=mysqli_fetch_array($auto);

//if($_GET[tampil]=='1')
//$angka=$_GET[no];
//else
$angka=$no['id_page']+2;

$tgl=date('Y-m-d H:m:s');

?>
    <!-- begin #content -->
            <div id="content" class="content">
                    <!-- begin row -->
                <div class="row">
                   <div class="col-md-6">
                            <!-- begin panel -->
                        <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="panel p-20">
								<div class="form-group m-b-10">
								<label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
										<?php
										$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$id_userku'");
										while($baris=mysqli_fetch_array($hasil)){

										?>
										
											<?php echo "<img src='file/".$baris['foto']."' style='border-radius: 100px; height: 150px;'>" ;?>
											
										<?php } ?>
										<br><br><br>
										<div class="input-group image-preview">
									                <input type="hidden" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
									                <span class="input-group-btn">
									                    <!-- image-preview-clear button -->
									                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
									                        <span class="glyphicon glyphicon-remove"></span> Clear
									                    </button>
									                    <!-- image-preview-input -->
									                    <div class="btn btn-primary image-preview-input">
									                        <span class="glyphicon glyphicon-folder-open"></span>
									                        <span class="image-preview-input-title"><font color="white">Ganti Foto</font></span>
									                        <input type="file" accept="image/png, image/jpeg, image/gif" name="foto"/ required/> <!-- rename it -->
									                    </div>
									                </span>
									            </div>
										
									</div>
								</div>
                            </div>
							
							<div class="panel p-20">
								<div class="form-group m-b-10">
								<label class="col-md-3 control-label"></label>

										<div class="alert alert-warning alert-dismissible" role="alert">
										  <strong>Di dalam pengaturan akun ini hanya bisa mengedit Gambar, Username, Password</strong>
										</div>

								</div>
                            </div>
                        </div>



                     <div class="col-md-6">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <?php
								$user1= id_user($username_user);
								$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$id_userku'");
								while($baris=mysqli_fetch_array($hasil)){

								?>
								
								<table class="table table-bordered table-hover">
								  <tbody>
									<tr>
									<input type="hidden" value="<?php echo $kunci_login ?>" name="kunci_login">
									<input type="hidden" value="<?php echo $baris['id_user'] ?>" name="id_user">
									  <td class="col-md-1 col-sm-2">Nama Lengkap</td>
									  <td class="col-sm-3"><input type="text" class="form-control" value="<?php echo $baris['nama_user'] ?>"readonly/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Username</td>
									  <td class="col-sm-3"><input type="text" class="form-control" name="username_user" value="<?php echo $baris['username_user'] ?>"/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Password</td>
									  <td class="col-sm-3"><input type="password" class="form-control" name="password_user" placeholder="Harus di mengisi password kembali" required/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Tempat Lahir</td>
									  <td class="col-sm-3"><input type="text" class="form-control" value="<?php echo $baris['tempat_lahir'] ?>" readonly/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Tanggal Lahir</td>
									  <td class="col-sm-3"><input type="text" class="form-control" value="<?php echo list_tanggal($baris['tanggal_lahir']); ?>" readonly/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Pendidikan Terakhir</td>
									  <td class="col-sm-3"><input type="text" class="form-control" value="<?php echo $baris['pend_terakhir'] ?>" readonly/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Agama</td>
									  <td class="col-sm-3"><input type="text" class="form-control" value="<?php echo $baris['agama_user'] ?>" readonly/></td>
									</tr>
									<tr>
									  <td class="col-md-1 col-sm-2">Jabatan</td>
									  <td class="col-sm-3"><input type="text" class="form-control" value="<?php echo $baris['jabatan_user'] ?>" readonly/></td>
									</tr>
								  </tbody>
								</table>
								
								<?php } ?>
								
								<input type="submit" name="edit_akun" class="btn width-100 btn-primary" value="Simpan">
								
                            </div>
                            <!-- end panel -->
                        </div>
                    </form>
                </div>