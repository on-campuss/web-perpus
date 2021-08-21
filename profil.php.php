<?php include"ver_atasUSER.php";?>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->

						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<br>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-sm-12">
								<!-- start: TEXT FIELDS PANEL -->
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title"><span class="text-bold">Edit Data Diri</span></h4>
										<div class="panel-tools">
											<div class="dropdown">
												<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu dropdown-light pull-right" role="menu">
													<li>
														<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
													</li>
													<li>
														<a class="panel-refresh" href="#">
															<i class="fa fa-refresh"></i> <span>Refresh</span>
														</a>
													</li>
													<li>
														<a class="panel-config" href="#panel-config" data-toggle="modal">
															<i class="fa fa-wrench"></i> <span>Configurations</span>
														</a>
													</li>
													<li>
														<a class="panel-expand" href="#">
															<i class="fa fa-expand"></i> <span>Fullscreen</span>
														</a>
													</li>
												</ul>
											</div>
											<a class="btn btn-xs btn-link panel-close" href="#">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									  <?php
error_reporting(0);
include 'config/koneksi.php';
$sql_news="select * from tb_login where level='user'";
$qry_news=mysql_query($sql_news, $konek)
or die ("gagal menampilkan".mysql_error());
$verlifet=mysql_fetch_array($qry_news);
$verlijudul =$verlifet['kd_anggota'];
$verlipengarang =$verlifet['nim'];
$verlidesc=$verlifet['progdi'];
$verlipenerbit=$verlifet['jekel'];
$verliIDbuku=$verlifet['ttl'];
$verlipengirim=$verlifet['alamat'];
$verlinohp=$verlifet['nohp'];
$data_date =$verlifet['date'];
?>    
										<div class="panel-body">
										<form action="ver_ubahprosimpan.php" method="post" enctype="multipart/form-data" name="form1" target="_self"  class="form-horizontal" role="form">
													<!--Verli : Textfield Judul-->								
											<div class="form-group">
												<label class="col-sm-2 control-label">
												Username
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  value='<?php echo $verlifet['username'];?>' name="username" id="username" class="form-control">
		
														 </span>
												</div>
														</div>
														<!--Verli : Textfield Judul STOP-->

											<!--Verli : Textfield Penerbit START-->			
										<div class="form-group">
												<label class="col-sm-2 control-label">
												NIDN
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="nidn" id="nidn" class="form-control" value='<?php echo $verlifet['nidn'];?>'">
														 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Nama Lengkap
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $verlifet['nama'];?>">
														 </span>
												</div>
														</div>
										<!--Verli : Textfield Penerbit STOP-->


										<!--Verli : Textfield Pengarang STOP-->
 									
									

										<!--Verli : Textfield ISI DESC START-->
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Jenis Kelamin
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="jekel" id="jekel" class="form-control" value='<?php echo $verlifet['jekel'];?>'">
														 </span>
												</div>
														</div>
										<!--Verli : Textfield ISI DESC STOP-->


										<!--Verli : Textfield PENGIRIM START-->
										<div class="form-group">
												<label class="col-sm-2 control-label">
												Tempat Tanggal Lahir
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" value="<?php echo $verlifet['ttl'];?>" name="ttl" id="ttl" class="form-control">
														 </span>
												</div>
												</div>
										<!--Verli : Textfield PENGIRIM STOP-->
<div class="form-group">
												<label class="col-sm-2 control-label">
												Alamat
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  value="<?php echo $verlifet['alamat'];?>" name="alamat" id="alamat" class="form-control">
														 </span>
												</div>
												</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">
												No. Hp
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  value="<?php echo $verlifet['nohp'];?>" name="nohp" id="nohp" class="form-control">
														 </span>
												</div>
												</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">
												Password
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  value="<?php echo $verlifet['password'];?>" name="password" id="password" class="form-control">
														 </span>
												</div>
												</div>


										

										<!--Verli : Textfield UPLOD STOP-->


										<!--Verli : TOMBOL SIMPAN START-->
														<center><button type="submit" class="btn btn-info btn-squared btn-lg">
												Simpan <i class="fa fa-arrow-circle-right"></i>
											</button></center>

										<!--Verli : TOMBOL SIMPAN STOP-->
										</form>
									</div>
								</div>

								<!-- end: TEXT FIELDS PANEL -->
							</div>
						</div>
						
			<!-- *** SHOW CONTRIBUTORS *** -->
			<div id="showContributors">
				<div class="barTopSubview">
					<a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Add new contributor</a>
				</div>
				<div class="noteWrap col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="contributors">
								<div class="options-contributors hide">
									<div class="btn-group">
										<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
											<i class="fa fa-cog"></i>
											<span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">
											<li>
												<a href="#newContributor" class="show-subviews edit-contributor">
													<i class="fa fa-pencil"></i> Edit
												</a>
											</li>
											<li>
												<a href="#" class="delete-contributor">
													<i class="fa fa-times"></i> Delete
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end: SUBVIEW SAMPLE CONTENTS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/moment/min/moment.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/plugins/truncate/jquery.truncate.js"></script>
		<script src="assets/plugins/summernote/dist/summernote.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/js/subview.js"></script>
		<script src="assets/js/subview-examples.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="assets/plugins/select2/select2.min.js"></script>
		<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		<script src="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				FormElements.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Nov 2014 00:38:39 GMT -->
</html>