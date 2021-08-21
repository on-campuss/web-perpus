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
										<h4 class="panel-title">Ubah <span class="text-bold">Data Buku</span></h4>
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
$select = mysql_query ("select * from buku where kd_buku = '$_GET[verubah]'");
$tampil = (mysql_fetch_array($select));
$verlijudul =$verlifet['judul'];
$verlipengarang =$verlifet['pengarang'];
$verlidesc=$verlifet['isi'];
$verlipenerbit=$verlifet['penerbit'];
$verliIDbuku=$verlifet['id_buku'];
$verlipengirim=$verlifet['pengirim'];
$data_date =$verlifet['date'];
$tgl =substr("$data_date",8,2);
$bln =substr("$data_date",5,2);
$thn =substr("$data_date",0,4);
?>    
										<div class="panel-body">
										<form action="ver_ubahsimpan.php" method="post" enctype="multipart/form-data" name="form1" target="_self"  class="form-horizontal" role="form">
													<!--Verli : Textfield Judul-->								
											<div class="form-group">
												<label class="col-sm-2 control-label">
												Kode Buku
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  name="kd_buku" id="kd_buku" class="form-control" readonly value ='<?php echo $tampil['kd_buku'];?>'>
												 </span>
												</div>
														</div>													
											<div class="form-group">
												<label class="col-sm-2 control-label">
												Judul Buku
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text"  name="judul" id="judul" class="form-control" value ='<?php echo $tampil['judul'];?>'>
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
														<input type="text" name="pengarang" id="pengarang" class="form-control" value ='<?php echo $tampil['pengarang'];?>'>
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
														<input type="text"  name="penerbit" id="penerbit" class="form-control" value ='<?php echo $tampil['penerbit'];?>'>
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
      <option value="2000"<?php if($tampil['tahun_terbit']=="2000"){echo"selected";} ?>>2000</option>
      <option value="2001"<?php if($tampil['tahun_terbit']=="2001"){echo"selected";} ?>>2001</option>
	  <option value="2002"<?php if($tampil['tahun_terbit']=="2002"){echo"selected";} ?>>2002</option>
	  <option value="2003"<?php if($tampil['tahun_terbit']=="2003"){echo"selected";} ?>>2003</option>
	  <option value="2004"<?php if($tampil['tahun_terbit']=="2004"){echo"selected";} ?>>2004</option>
	  <option value="2005"<?php if($tampil['tahun_terbit']=="2005"){echo"selected";} ?>>2005</option>
	  <option value="2006"<?php if($tampil['tahun_terbit']=="2006"){echo"selected";} ?>>2006</option>
	  <option value="2007"<?php if($tampil['tahun_terbit']=="2007"){echo"selected";} ?>>2007</option>
	  <option value="2008"<?php if($tampil['tahun_terbit']=="2008"){echo"selected";} ?>>2008</option>
	  <option value="2009"<?php if($tampil['tahun_terbit']=="2009"){echo"selected";} ?>>2009</option>
	  <option value="2010"<?php if($tampil['tahun_terbit']=="2010"){echo"selected";} ?>>2010</option>
	  <option value="2011"<?php if($tampil['tahun_terbit']=="2011"){echo"selected";} ?>>2011</option>
	  <option value="2012"<?php if($tampil['tahun_terbit']=="2012"){echo"selected";} ?>>2012</option>
	  <option value="2013"<?php if($tampil['tahun_terbit']=="2013"){echo"selected";} ?>>2013</option>
	  <option value="2014"<?php if($tampil['tahun_terbit']=="2014"){echo"selected";} ?>>2014</option>
	  <option value="2015"<?php if($tampil['tahun_terbit']=="2015"){echo"selected";} ?>>2015</option>
	  <option value="2016"<?php if($tampil['tahun_terbit']=="2016"){echo"selected";} ?>>2016</option>
	  <option value="2017"<?php if($tampil['tahun_terbit']=="2017"){echo"selected";} ?>>2017</option>
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
														<input type="text" name="isbn" id="isbn" class="form-control" value ='<?php echo $tampil['isbn'];?>'>
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
      <option value="Umum"<?php if($tampil['kt_buku']=="Umum"){echo"selected";} ?>>Umum</option>
      <option value="Filsafat dan Psikologi"<?php if($tampil['kt_buku']=="Filsafat dan Psikologi"){echo"selected";} ?>>Filsafat dan Psikologi</option>
      <option value="Agama"<?php if($tampil['kt_buku']=="Agama"){echo"selected";} ?>>Agama</option>
	  <option value="Sosial"<?php if($tampil['kt_buku']=="Sosial"){echo"selected";} ?>>Sosial</option>
	  <option value="Bahasa"<?php if($tampil['kt_buku']=="Bahasa"){echo"selected";} ?>>Bahasa</option>
	  <option value="Sains dan Matematika"<?php if($tampil['kt_buku']=="Sains dan Matematika"){echo"selected";} ?>>Sains dan Matematika</option>
	  <option value="Teknologi"<?php if($tampil['kt_buku']=="Teknologi"){echo"selected";} ?>>Teknologi</option>
	  <option value="Seni dan Kreasi"<?php if($tampil['kt_buku']=="Seni dan Kreasi"){echo"selected";} ?>>Seni dan Kreasi</option>
	  <option value="Literatur dan Sastra"<?php if($tampil['kt_buku']=="Literatur dan Sastra"){echo"selected";} ?>>Literatur dan Sastra</option>
	  <option value="Sejarah dan Geografi"<?php if($tampil['kt_buku']=="Sejarah dan Geografi"){echo"selected";} ?>>Sejarah dan Geografi</option>
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
      <option value="Umum"<?php if($tampil['jn_buku']=="Umum"){echo"selected";} ?>>Umum</option>
      <option value="Filsafat dan Psikologi"<?php if($tampil['jn_buku']=="Filsafat dan Psikologi"){echo"selected";} ?>>Filsafat dan Psikologi</option>
      <option value="Agama"<?php if($tampil['jn_buku']=="Agama"){echo"selected";} ?>>Agama</option>
	  <option value="Sosial"<?php if($tampil['jn_buku']=="Sosial"){echo"selected";} ?>>Sosial</option>
	  <option value="Bahasa"<?php if($tampil['jn_buku']=="Bahasa"){echo"selected";} ?>>Bahasa</option>
	  <option value="Sains dan Matematika"<?php if($tampil['Sains dan Matematika']=="Umum"){echo"selected";} ?>>Sains dan Matematika</option>
	  <option value="Teknologi"<?php if($tampil['jn_buku']=="Teknologi"){echo"selected";} ?>>Teknologi</option>
	  <option value="Seni dan Kreasi"<?php if($tampil['jn_buku']=="Seni dan Kreasi"){echo"selected";} ?>>Seni dan Kreasi</option>
	  <option value="Literatur dan Sastra"<?php if($tampil['jn_buku']=="Literatur dan Sastra"){echo"selected";} ?>>Literatur dan Sastra</option>
	  <option value="Sejarah dan Geografi"<?php if($tampil['jn_buku']=="Sejarah dan Geografi"){echo"selected";} ?>>Sejarah dan Geografi</option>
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
														<input type="text" name="denda" id="denda" class="form-control" value ='<?php echo $tampil['denda'];?>'>
													 </span>
												</div>
														</div>
														<div class="form-group">
												<label class="col-sm-2 control-label">
												Jumlah
												</label>
														<div class="col-sm-5">
													<span class="input-icon">
														<input type="text" name="jml" id="jml" class="form-control" value ='<?php echo $tampil['jml'];?>'>
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
      <option value="A001"<?php if($tampil['lks']=="A001"){echo"selected";} ?>>A001</option>
      <option value="A002"<?php if($tampil['lks']=="A002"){echo"selected";} ?>>A002</option>
      <option value="A003"<?php if($tampil['lks']=="A003"){echo"selected";} ?>>A003</option>
	  <option value="A004"<?php if($tampil['lks']=="A004"){echo"selected";} ?>>A004</option>
	  <option value="A005"<?php if($tampil['lks']=="A005"){echo"selected";} ?>>A005</option>
	  <option value="A006"<?php if($tampil['lks']=="A006"){echo"selected";} ?>>A006</option>
	  <option value="A007"<?php if($tampil['lks']=="A007"){echo"selected";} ?>>A007</option>
	  <option value="A008"<?php if($tampil['lks']=="A008"){echo"selected";} ?>>A008</option>
	  <option value="A009"<?php if($tampil['lks']=="A009"){echo"selected";} ?>>A009</option>
	  <option value="A010"<?php if($tampil['lks']=="A010"){echo"selected";} ?>>A010</option>
	  </select>
													 </span>
												</div>
														</div>
										<!--Verli : Textfield PENGIRIM STOP-->



										<!--Verli : Textfield UPLOAD START-->
															<div class="form-group">
												
													<label class="col-sm-2 control-label">
														Image Upload
													</label>
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="fileupload-new thumbnail"><img src="assets/verlybook/ava.png" alt=""/>
														</div>
														<div class="fileupload-preview fileupload-exists thumbnail"></div>
														<div>
														<div class="col-sm-4 control-label">
															<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
																<input type="file"name='picture[]' value="<img src="assets/verlybook/ava.png">
															</span>
															<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																<i class="fa fa-times"></i> Remove
															</a>
													</div>
													</div>
													<div class="alert alert-warning">
														<span class="label label-warning">NOTE!</span>
														<span>Buku Original <b> </b></span>
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