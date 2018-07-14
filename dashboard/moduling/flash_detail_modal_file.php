<?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='file' AND status_hapus='aktif' ORDER BY date_time DESC");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <!-- MODAL DETAIL -->
            <div id="detail-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
								<?php if($baris['nama_file']){?>
                                  <td colspan="2"><center>
								   <?php echo "<a href=file/".$baris['nama_file']." type='application/docx' target='_blank'>";?>
								   <?php echo $baris['nama_file'];?>
								  <?php //echo "<img src=file/".$baris['nama_file']." width='200px' height='200px'>"; ?></a></center></td>
								<?php } ?>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Judul Tugas</td>
                                  <td class="col-sm-3"><?php echo $baris['judul_page'] ?></td>
                                </tr>
                                <tr>
								<?php if($baris['isi_page']){?>
                                  <td class="col-md-1 col-sm-2">URL</td>
                                  <td class="col-sm-3">
                                     <?php echo "<a href=".$baris['isi_page']." target='_blank'>";?>
                                      <?php echo $baris['isi_page'];?>
                                      <?php echo "</a>"; ?>
                                    </td>
								<?php } ?>
                                </tr>
								<tr>
                                  <td class="col-md-1 col-sm-2">Keterangan</td>
                                  <td class="col-sm-3"><?php echo $baris['keterangan'] ?></td>
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
                                  <td class="col-md-1 col-sm-2">Nama Pengirim</td>
                                  <td class="col-sm-3"><?php echo $baris['nama_user'] ?></td>
                                </tr>
                              </tbody>
                            </table>
                    </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>