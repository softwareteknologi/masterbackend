<?php
$user1=$id_userku;

$asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
$kirik = mysqli_fetch_array($asu);
$result2= $kirik['id_user'].$kirik['reff'];
$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur =  'file' AND status_hapus =  'aktif' AND user.id_user =  '$user1' UNION SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur ='file' AND status_hapus =  'aktif' AND user.reff LIKE '%$result2' order by date_time desc");

//pagination config start
        //$rpp = 5; // jumlah record per halaman
        //$reload = "index.php?page=true";
        //$page = intval($_GET["page"]);
        //if($page<=0) $page = 1;  
        //$tcount = mysqli_num_rows($hasil);
        //$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        //$count = 0;
        //$i = ($page-1)*$rpp;
       // $no_urut = ($page-1)*$rpp;
        //pagination config end

		?>
<div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data File</h4>
                        <table id="data-table" data-order='[[1,"desc"]]' class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th>No</th>
                                    <th>Nama</th>
									<th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							  //while(($count<$rpp) && ($i<$tcount)) {
                       // mysqli_data_seek($hasil,$i);
							
                              $no=1; while($baris=mysqli_fetch_array($hasil)){
                            ?>
                                <tr>
                                    <td align="center"><?php echo $no;// ++$no_urut; ?></td>
                                    <td align="center">
                                      <?php echo $baris['nama_user'];?>
                                    </td>
									<td align="center"><?php echo $baris['judul_page'];?></td>
                                    <td align="center"><?php echo $baris['nama_kategori'];?></td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                        <a data-toggle="modal" data-target="#edit-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
										<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
											<input type="submit" name="hapus_file" class="btn btn-danger btn-xs" value="Hapus">
										</form>
                                    </td>
                                </tr>
								<?php $no++; }  ?>
                            </tbody>
                        </table>
                    </div>