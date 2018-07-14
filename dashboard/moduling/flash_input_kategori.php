<!-- begin panel -->
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Kategori</h4>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Pilih Kategori</label>
                                    <div class="col-md-7">
                                        <select id="formInput1226" class="form-control" name="nama_kategori">

                                        <?php
                                            $user = id_user($username_user);
                                            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
                                            while($hasil=mysqli_fetch_array($sql)){
                                            $id=$hasil['id_kategori'];
                                            $text=$hasil['isi_text'];
                                            $a=1;
											  $nomor=$a.$user;
											  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
											  $result= mysqli_fetch_array($hasil);
											  $status=$result['status'];
											  $id_kategori=$result['id_kategori'];
											  $isi_text=$result['isi_text'];
                                        ?>

                                        <?php
                                        if($username_user && $isi_text && $id_kategori=='4' && $status=='1')//Berita
                                        echo '
                                            <option value="Berita">Berita</option>' ;?>

                                        <?php
                                        if($username_user && $isi_text && $id_kategori=='5' && $status=='1')//Artikel
                                        echo '
                                            <option value="Artikel">Artikel</option>' ;?>

                                        <?php
                                        if($username_user && $isi_text && $id_kategori=='6' && $status=='1')//Page
                                        echo '
                                            <option value="Page">Page</option>' ; } ?>


                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Pilih Sub Kategori</label>
                                    <div class="col-md-7">
										<select id="formInput1226" class="form-control" name="sub_kategori_1">
											<?php //echo sub_kategori_turdesa_kategori(); ?>
										</select>
                                    </div>
                                </div>
								
								<div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Input Kabupaten</label>
                                    <div class="col-md-7">
										<input type="text" class="form-control" name="sub_kategori_2">
                                    </div>
                                </div>
								<div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Input Kecamatan</label>
                                    <div class="col-md-7">
										<input type="text" class="form-control" name="sub_kategori_3">
                                    </div>
                                </div>
								<div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Input Desa</label>
                                    <div class="col-md-7">
										<input type="text" class="form-control" name="sub_kategori_4">
                                    </div>
                                </div>
								<input type="hidden" class="form-control" name="fitur" value="publishing">
								<input type="submit" class="btn btn-primary" name="simpan_kategori">
                            </div>