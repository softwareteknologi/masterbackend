<?php 
$tgl = date('Y-m-d H:m:s');
?>
<!-- begin #content -->
		<div id="content" class="content height-full p-0" onload="readChat()">
		  <!-- begin mail-box -->
		    <div class="mail-box">
		        <!-- begin mail-box-sidebar -->
		        <div class="mail-box-sidebar dropdown">
		            <!-- begin mail-box-mobile-toggler -->
		            <div class="mail-box-mobile-toggler">
		                <a href="#" class="btn btn-default width-100 btn-sm" data-toggle="email-sidebar">Inbox <b class="caret"></b></a>
		            </div>
		            <!-- end mail-box-mobile-toggler -->
		            <!-- begin email-sidebar -->
		            <div class="dropdown-menu email-sidebar" id="email-sidebar" data-scrollbar="true" data-height="100%">
		                <!-- begin mail-box-header -->
		                <div class="mail-box-header text-center">
                            <a href="index.php?menu=interaktif&act=baru" class="btn btn-danger width-150 btn-sm">
                               New Message
                            </a>
		                </div>
		                <!-- end mail-box-header -->
		                <!-- begin mail-box-wrapper -->
		                <div class="mail-box-wrapper">
                            <h4 class="title m-t-0">FOLDER</h4>
                            <ul class="mail-box-menu">
                                <li><a href="index.php?menu=interaktif">Inbox <b>(5)</b></a></li>
                                <li><a href="#">Archive</a></li>
                                <li><a href="#">Junk</a></li>
                                <li><a href="#">Drafts</a></li>
                                <li><a href="#">Sent</a></li>
                                <li><a href="#">Trash <b>(99+)</b></a></li>
                                <li><a href="#">Flagged</a></li>
                            </ul>
                            <h3 class="title">ONLINE USER</h3>
                            <ul class="mail-box-user-list">
							<?php
							$user= id_user($username_user);
							$hasil = mysqli_query($id_mysqli,"SELECT * FROM user where online='1'and id_user!='$user'");
							while($baris=mysqli_fetch_array($hasil)){
							?>
                                <li><a href="index.php?menu=interaktif_rony&act=chat&id=<?php echo $baris['id_user']?>">
								<img src="assets/img/user_1.jpg" alt="" /><i class="fa fa-circle text-success-light"></i> <?php echo $baris['nama_user'] ?></a>
								</li>
							<?php } ?>
                            </ul>
		                </div>
		                <!-- end mail-box-wrapper -->
                    </div>
                    <!-- end email-sidebar -->
		        </div>
		        <!-- end mail-box-sidebar -->
				<?php 
				$id= $_GET['act'];
				if(empty($id)){
				?>
				<!-- begin mail-box-content -->
		        <div class="mail-box-content">
		            <!-- begin mail-box-toolbar -->
		            <div class="mail-box-toolbar">
		                <div class="pull-left">
                            <a href="#" class="btn btn-white btn-sm m-r-5" data-click="check-all"><i class="fa fa-square-o text-muted fa-lg m-r-5 fa-fw"></i> <b class="caret"></b></a>
                            <a href="#" class="btn btn-white btn-sm">Filter by:
							<b><select>
							<option>Date</option>
							<option>Month</option>
							<option>Year</option>
							</select>
							</b></a>
		                </div>
		                <div class="pull-right">
		                    <span class="btn-group m-l-10">
                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-chevron-right"></i></a>
		                    </span>
		                </div>
		            </div>
		            <!-- end mail-box-toolbar -->
		            <!-- begin mail-box-container -->
		            <div class="mail-box-container">
		                <!-- begin scrollbar -->
		                <div data-scrollbar="true" data-height="100%">
		                    <!-- end table-email -->
		                    <table class="table-email">
		                        <tbody>
		                            <tr>
                                        <td class="email-checkbox">
                                            <input type="checkbox" name="email_checkbox" />
                                            <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                        </td>
                                        <td class="email-sender">
                                            <a href="index.php?menu=interaktif&act=detail">App Store</a>
                                       </td>
                                       <td class="email-message">
                                            <a href="index.php?menu=interaktif&act=detail">
                                                <span class="email-title">
                                                    Angry Birds Transformers, Great Role-Playing Games & More‏ -
                                                    <span class="email-desc">
                                                        Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                    </span>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="email-attachment"></td>
                                        <td class="email-date">
                                            <a href="index.php?menu=interaktif&act=detail">Aug 11</a>
                                        </td>
                                    </tr>
		                            <tr>
                                        <td class="email-checkbox">
                                            <input type="checkbox" name="email_checkbox" />
                                            <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                        </td>
                                        <td class="email-sender">
                                            <a href="index.php?menu=interaktif&act=detail">BrowserStack</a>
                                       </td>
                                       <td class="email-message">
                                            <a href="index.php?menu=interaktif&act=detail">
                                                <span class="email-title">
                                                    Microsoft Edge browser + Windows 10 added to BrowserStack -
                                                    <span class="email-desc">
                                                        Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                    </span>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="email-attachment"></td>
                                        <td class="email-date">
                                            <a href="index.php?menu=interaktif&act=detail">Aug 09</a>
                                        </td>
                                    </tr>
		                            <tr>
                                        <td class="email-checkbox">
                                            <input type="checkbox" name="email_checkbox" />
                                            <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                        </td>
                                        <td class="email-sender">
                                            <a href="index.php?menu=interaktif&act=detail">Twitter</a>
                                       </td>
                                       <td class="email-message">
                                            <a href="index.php?menu=interaktif_rony&act=detail">
                                                <span class="email-title">
                                                    Confirm your account, Fahri Fırat -
                                                    <span class="email-desc">
                                                        Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                    </span>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="email-attachment"></td>
                                        <td class="email-date">
                                            <a href="index.php?menu=interaktif&act=detail">Aug 09</a>
                                        </td>
                                    </tr>
		                            <tr>
                                        <td class="email-checkbox">
                                            <input type="checkbox" name="email_checkbox" />
                                            <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                        </td>
                                        <td class="email-sender">
                                            <a href="index.php?menu=interaktif_rony&act=detail">Facebook</a>
                                       </td>
                                       <td class="email-message">
                                            <a href="index.php?menu=interaktif_rony&act=detail">
                                                <span class="email-title">
                                                    You have 2 new notifications -
                                                    <span class="email-desc">
                                                        Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                    </span>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="email-attachment"></td>
                                        <td class="email-date">
                                            <a href="index.php?menu=interaktif&act=detail">Aug 09</a>
                                        </td>
                                    </tr>
		                            <tr>
                                        <td class="email-checkbox">
                                            <input type="checkbox" name="email_checkbox" />
                                            <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                        </td>
                                        <td class="email-sender">
                                            <a href="index.php?menu=interaktif&act=detail">Bitbucket</a>
                                       </td>
                                       <td class="email-message">
                                            <a href="index.php?menu=interaktif&act=detail">
                                                <span class="email-title">
                                                    You have been given write access to qasim/Brock‏ -
                                                    <span class="email-desc">
                                                        Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                    </span>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="email-attachment"></td>
                                        <td class="email-date">
                                            <a href="index.php?menu=interaktif&act=detail">Aug 08</a>
                                        </td>
                                    </tr>
		                        </tbody>
		                    </table>
		                    <!-- end table-email -->
		                </div>
		                <!-- end scrollbar -->
		            </div>
		            <!-- end mail-box-container -->
		        </div>
		        <!-- end mail-box-content -->
				<?php 
				}
				else if($id==='baru'){
				?>
		        <!-- begin mail-box-content -->
		        <div class="mail-box-content">
		            <!-- begin mail-box-toolbar -->
		            <div class="mail-box-toolbar">
		                <div class="pull-left">
                            <a href="index.php?menu=interaktif" class="btn btn-white btn-sm m-r-5">Cancel</a>
                            <a href="#" class="btn btn-white btn-sm">Save Draft</a>
		                </div>
		                <div class="pull-right">
                            <a href="#" class="btn btn-success width-100 btn-sm">SEND</a>
		                </div>
		            </div>
		            <!-- end mail-box-toolbar -->
		            <!-- begin mail-box-container -->
		            <div class="mail-box-container">
		                <!-- begin scrollbar -->
		                <div data-scrollbar="true" data-height="100%">
		                    <!-- begin mail-to-box -->
		                    <div class="mail-to-box">
		                        <div class="row row-space-0">
		                            <div class="col-md-4 mail-input-box">
                                        <label>To:</label>
                                        <input type="text" class="form-control" />
		                            </div>
		                            <div class="col-md-4 mail-input-box">
                                        <label>Cc:</label>
                                        <input type="text" class="form-control" />
		                            </div>
		                            <div class="col-md-4 mail-input-box">
                                        <label>Bcc:</label>
                                        <input type="text" class="form-control" />
		                            </div>
		                        </div>
		                    </div>
		                    <!-- end mail-to-box -->
		                    <!-- begin mail-subject-box -->
		                    <div class="mail-subject-box">
		                        <div class="mail-input-box">
                                    <input type="text" class="form-control" placeholder="Add a subject" />
		                        </div>
		                    </div><br/>
		                    <!-- end mail-subject-box -->
		                    <!-- begin mail-compose-content -->
		                    <div id="mail-compose-box">
							<textarea></textarea>
							</div>
		                    <!-- end mail-compose-content -->
		                </div>
		                <!-- end scrollbar -->
		            </div>
		            <!-- end mail-box-container -->
		        </div><br/><br/>
				<?php } 
				if($id==='detail'){?>
				<!-- begin mail-box-content -->
		        <div class="mail-box-content">
		            <!-- begin mail-box-toolbar -->
		            <div class="mail-box-toolbar">
		                <div class="pull-left">
		                    <a href="#" class="btn btn-white btn-sm m-r-5"><i class="fa fa-reply"></i> <span class="hidden-xs">Reply</span></a>
		                    <a href="#" class="btn btn-white btn-sm m-r-5"><i class="fa fa-reply-all"></i> <span class="hidden-xs">Reply All</span></a>
		                    <a href="#" class="btn btn-white btn-sm m-r-5"><i class="fa fa-share"></i> <span class="hidden-xs">Forward</span></a>
		                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> <span class="hidden-xs">Delete</span></a>
		                </div>
		                <div class="pull-right">
		                    <span class="btn-group">
                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="btn btn-white btn-sm"><i class="fa fa-chevron-down"></i></a>
		                    </span>
                            <a href="email_inbox.html" class="btn btn-white btn-sm m-l-5"><i class="fa fa-remove"></i></a>
		                </div>
		            </div>
		            <!-- end mail-box-toolbar -->
		            <!-- begin mail-box-container -->
		            <div class="mail-box-container">
		                <!-- begin scrollbar -->
		                <div data-scrollbar="true" data-height="100%">
		                    <!-- begin mail-detail -->
		                    <div class="mail-detail">
		                        <!-- begin mail-detail-header -->
		                        <div class="mail-detail-header">
                                    <h4 class="mail-subject">Your order #19043902 is being processed!‏</h4>
                                </div>
		                        <!-- end mail-detail-header -->
		                        <!-- begin mail-detail-info -->
		                        <div class="mail-detail-info">
                                    <ul class="media-list m-b-0">
                                        <li class="media">
                                            <a href="javascript:;" class="pull-left">
                                                <img src="assets/img/user_1.jpg" alt="" class="media-object" />
                                            </a>
                                            <div class="media-body">
                                                <div class="email-from">
                                                    <span class="email-sender">Twitter, Inc</span> 
                                                    <span class="email-date">11/12/2015</span>
                                                </div>
                                                <div class="email-to">
                                                    <small class="text-muted m-r-5">to</small> seantheme@live.co.uk, charlie@gmail.com, danijel@hotmail.com
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
		                        </div>
		                        <!-- end mail-detail-info -->
		                        <!-- begin mail-detail-attachment -->
		                        <div class="mail-detail-attachment clearfix">
		                            <div class="mail-attachment">
                                        <a href="#">
                                            <div class="document-file">
                                                <i class="fa fa-file-pdf-o"></i>
                                            </div>
                                            <div class="document-name">invoice.pdf</div>
                                        </a>
                                    </div>
		                            <div class="mail-attachment">
		                                <a href="#">
                                            <div class="document-file">
                                                <i class="fa fa-film"></i>
                                            </div>
                                            <div class="document-name">video.mp4</div>
                                        </a>
                                    </div>
		                            <div class="mail-attachment">
		                                <a href="#">
                                            <div class="document-file">
                                                <img src="assets/img/media-1.jpg" alt="">
                                            </div>
                                            <div class="document-name">image.jpg</div>
                                        </a>
                                    </div>
                                    <a href="#">Download as zip</a>
                                </div>
		                        <!-- end mail-detail-attachment -->
		                        <!-- begin mail-detail-body -->
		                        <div class="mail-detail-body">
		                            Hi Dear Customer,<br />
		                            <br />
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel auctor nisi, vel auctor orci. <br />
                                    Aenean in pretium odio, ut lacinia tellus. Nam sed sem ac enim porttitor vestibulum vitae at erat.<br />
                                    <br />
                                    Curabitur auctor non orci a molestie. Nunc non justo quis orci viverra pretium id ut est. <br />
                                    Nullam vitae dolor id enim consequat fermentum. Ut vel nibh tellus. <br />
                                    Duis finibus ante et augue fringilla, vitae scelerisque tortor pretium. <br />
                                    Phasellus quis eros erat. Nam sed justo libero.<br />
                                    <br />
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br />
                                    Sed tempus dapibus libero ac commodo.<br />
                                    <br />
                                    <br />
                                    Regards,<br />
                                    Twitter Inc,<br />
                                    795 Folsom Ave, Suite 600<br />
                                    San Francisco, CA 94107<br />
                                    P: (123) 456-7890<br />
		                        </div>
		                        <!-- end mail-detail-body -->
		                    </div>
		                    <!-- end mail-detail -->
		                </div>
		                <!-- end scrollbar -->
		            </div>
		            <!-- end mail-box-container -->
		        </div>
		        <!-- end mail-box-content -->
				<?php }
				if($id==='chat'){
					$id1= $_GET['id'];
					$id2= id_user($username_user);
					$id3 = $id2.$id1;
					$id4 = $id1.$id2;
					?>
				<div class="mail-box-content">
					<div class="panel panel-inverse">
			            <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-lime" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
			                <h4 class="panel-title"><?php echo nama_user1($id1) ?></h4>
			            </div>
			            <div class="panel-body">
                            <div data-scrollbar="true" data-height="450px">
                                <ul class="chats" id="chats">
								<?php
									$result = mysqli_query($id_mysqli,"SELECT * FROM pesan where id_user='$id1' and chat_group='$id4' order by waktu_pesan desc");
									while($row = mysqli_fetch_array($result)){
										$result1 = mysqli_query($id_mysqli,"SELECT * FROM pesan where id_user='$id2' and chat_group='$id3'  order by waktu_pesan desc");
									while($row1 = mysqli_fetch_array($result1)){
									?>
                                    <li class="left">
                                        <a href="javascript:;" class="image"><img alt="" src="assets/img/user_1.jpg" /></a>
                                        <div class="message">
                                            <a href="javascript:;" class="name"><?php echo nama_user1($row['id_user'])?></a>
                                            <?php echo $row['isi_pesan'] ?>
                                            <span class="date-time"><?php echo $row['waktu_pesan'] ?></span>
                                        </div>
                                    </li>
									<li class="right">
										<a href="javascript:;" class="image"><img alt="" src="assets/img/user_2.jpg" /></a>
											<div class="message">
												<a href="javascript:;" class="name"><?php echo nama_user1($row1['id_user'])?></a>
													<?php echo $row1['isi_pesan'] ?>
											<span class="date-time"><?php echo $row1['waktu_pesan'] ?></span>
										</div>
									</li>
									<?php }} ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-footer bg-white">
                            <form class="form-input-flat">
                                <div class="input-group">
									<input type="hidden" class="form-control" id="id_user" value="<?php echo $id2 ?>">
									<input type="hidden" class="form-control" id="id_user2" value="<?php echo $id1 ?>">
									<input type="text" class="form-control" id="chat_group" value="<?php echo $id2.$id1 ?>">
									<input type="hidden" class="form-control" id="waktu_pesan" value="<?php echo $tgl ?>">
                                    <input type="text" class="form-control" id="isi_pesan" name="isi_pesan" placeholder="Enter your message here.">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button" onclick="addChat()">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
					</div>
			        <!-- end panel -->
				</div>
				<?php } ?>
		    </div>
		    <!-- end mail-box -->
			<script type="text/javascript">
			// Add Record
function addChat() {
    // get values
    var isi_pesan = $("#isi_pesan").val();
	var id_user = $("#id_user").val();
	var id_user2 = $("#id_user2").val();
	var chat_group = $("#chat_group").val();
	var waktu_pesan = $("#waktu_pesan").val();

    // Add record
    $.post("ajax/addChat.php", {
        isi_pesan: isi_pesan,
        id_user: id_user,
		id_user2: id_user2,
		chat_group: chat_group,
		waktu_pesan: waktu_pesan
    }, function (data, status) {
        // read records again
        readChat();
		
        // clear fields from the popup
        $("#isi_pesan").val("");
    });
}

// READ records
function readChat() {
  $.get("ajax/readChat.php", {}, function (data, status) {
        $(".chats").html(data);
    });
}


$(document).ready(function () {
    // READ recods on page load
    readChat(); // calling function
});
</script>
			
