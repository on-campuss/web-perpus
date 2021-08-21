<?php include"ver_atas.php";?>

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
										<h4 class="panel-title">Input <span class="text-bold">Buku</span></h4>
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
									<div class="panel-body">
										<form action="ver_simpan.php" method="post" enctype="multipart/form-data" name="form1" target="_self"  class="form-horizontal" role="form">
													<!--Verli : Textfield Judul-->
<?php
			  $no=mysql_query("SELECT kd_buku FROM buku ORDER BY kd_buku DESC");
			  $abcd = mysql_fetch_array($no);
			  $kode= $abcd['kd_buku'];
			  $urut=substr ($kode, 2, 3);
			  $tambah=(int) $urut + 1;
			  if (strlen ($tambah)==1){
				  $format = "BK"."00".$tambah;
			   }else if (strlen ($tambah)==2){
				  $format = "BK"."0".$tambah;
			   }else{ 
				  $format = "BK".$tambah;				  
			   }
			   ?>
													<div class="form-group">
												<label class="col-sm-2 control-label">
												Kode Buku
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  name="kd_buku" id="kd_buku" class="form-control" readonly value ='<?php echo $format;?>'>
												 </span>
												</div>
														</div>													
											<div class="form-group">
												<label class="col-sm-2 control-label">
												Judul Buku
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  name="judul" id="judul" class="form-control">
												 </span>
												</div>
														</div>
														<!--Verli : Textfield Judul STOP-->

											<!--Verli : Textfield Penerbit START-->			
										<div class="form-group">
												<label class="col-sm-2 control-label">
												Pengarang
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="pengarang" id="pengarang" class="form-control">
													 </span>
												</div>
														</div>
										<!--Verli : Textfield Penerbit STOP-->


										<!--Verli : Textfield Pengarang STOP-->
 									<div class="form-group">
												<label class="col-sm-2 control-label">
												Penerbit
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  name="penerbit" id="penerbit" class="form-control">
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Tahun Terbit
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<select name="tahun_terbit" id="tahun_terbit" required class="form-control">
														<option>-- Silahkan Pilih -- </option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
	  <option value="2002">2002</option>
	  <option value="2003">2003</option>
	  <option value="2004">2004</option>
	  <option value="2005">2005</option>
	  <option value="2006">2006</option>
	  <option value="2007">2007</option>
	  <option value="2008">2008</option>
	  <option value="2009">2009</option>
	  <option value="2010">2010</option>
	  <option value="2011">2011</option>
	  <option value="2012">2012</option>
	  <option value="2013">2013</option>
	  <option value="2014">2014</option>
	  <option value="2015">2015</option>
	  <option value="2016">2016</option>
	  <option value="2017">2017</option>
	  </select>
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												ISBN
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="isbn" id="isbn" class="form-control">
													 </span>
												</div>
														</div>
																	<div class="form-group">
												<label class="col-sm-2 control-label">
												Kategori Buku
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<select name="kt_buku" id="kt_buku" required class="form-control">
														<option>-- Silahkan Pilih -- </option>
      <option value="Umum">Umum</option>
      <option value="Filsafat dan Psikologi">Filsafat dan Psikologi</option>
      <option value="Agama">Agama</option>
	  <option value="Sosial">Sosial</option>
	  <option value="Bahasa">Bahasa</option>
	  <option value="Sains dan Matematika">Sains dan Matematika</option>
	  <option value="Teknologi">Teknologi</option>
	  <option value="Seni dan Kreasi">Seni dan Kreasi</option>
	  <option value="Literatur dan Sastra">Literatur dan Sastra</option>
	  <option value="Sejarah dan Geografi">Sejarah dan Geografi</option>
	  </select>
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Jenis Buku
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<select name="jn_buku" id="jn_buku" required class="form-control">
														<option>-- Silahkan Pilih -- </option>
      <option value="Umum">Umum</option>
      <option value="Filsafat dan Psikologi">Filsafat dan Psikologi</option>
      <option value="Agama">Agama</option>
	  <option value="Sosial">Sosial</option>
	  <option value="Bahasa">Bahasa</option>
	  <option value="Sains dan Matematika">Sains dan Matematika</option>
	  <option value="Teknologi">Teknologi</option>
	  <option value="Seni dan Kreasi">Seni dan Kreasi</option>
	  <option value="Literatur dan Sastra">Literatur dan Sastra</option>
	  <option value="Sejarah dan Geografi">Sejarah dan Geografi</option>
	  </select>
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Denda
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="denda" id="denda" class="form-control">
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Jumlah
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="jml" id="jml" class="form-control">
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Lokasi
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<select name="lks" id="lks" required class="form-control">
														<option>-- Silahkan Pilih -- </option>
      <option value="A001">A001</option>
      <option value="A002">A002</option>
      <option value="A003">A003</option>
	  <option value="A004">A004</option>
	  <option value="A005">A005</option>
	  <option value="A006">A006</option>
	  <option value="A007">A007</option>
	  <option value="A008">A008</option>
	  <option value="A009">A009</option>
	  <option value="A010">A010</option>
	  </select>
													 </span>
												</div>
														</div>
									

										<!--Verli : Textfield ISI DESC START-->
										
										<!--Verli : Textfield ISI DESC STOP-->


										<!--Verli : Textfield PENGIRIM START-->
										
										<!--Verli : Textfield PENGIRIM STOP-->



										<!--Verli : Textfield STOK START-->
										
										<!--Verli : Textfield STOK STOP-->


										<!--Verli : Textfield UPLOAD START-->
															<div class="form-group">
												
													<label class="col-sm-2 control-label">
														Image Upload
													</label>
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="fileupload-new thumbnail"><img src="assets/verlybook/verpus.png" alt=""/>
														</div>
														<div class="fileupload-preview fileupload-exists thumbnail"></div>
														<div>
														<div class="col-sm-4 control-label">
															<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
																<input type="file"name='picture[]'"  value="<img src="assets/verlybook/verpus.png">
														
															<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																<i class="fa fa-times"></i> Remove
															</a>
													</div>
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