<!-- DATA TABLES -->
        <link href="Assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<div class="col-md-12"> 
  <div class="panel panel-default">
    <div class="panel-heading"><h4> <strong>View Data Buku</strong> </h4></div>
    <div class="panel-body">
    	 <!-- /.box-header -->
               <div class="box-body table-responsive">

<table width="100%" class="table table-bordered table-striped" id="example1">
  <thead>
  <tr>
    <th width="6%">No</th>
	<th width="10%">Kode Buku</th>
	<th width="10%">ISBN</th>
    <th width="41%">Judul Buku</th>
    <th width="43%">Pengarang </th>
	<th width="41%">Penerbit</th>
    <th width="10%">Tahun Terbit</th>
	<th width="41%">Kategori Buku</th>
	<th width="10%">Lokasi</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $query = mysql_query("select * from buku");
  $no="";
  while ($tampil = mysql_fetch_array($query)){
	 
  ?>
  <tr>
    <td><?php echo ++$no;?></td>
	<td><?php echo $tampil['kd_buku'];?></td>
    <td><?php echo $tampil['isbn'];?></td>
	<td><?php echo $tampil['judul'];?></td>
	<td><?php echo $tampil['pengarang'];?></td>
	<td><?php echo $tampil['penerbit'];?></td>
	<td><?php echo $tampil['tahun_terbit'];?></td>
	<td><?php echo $tampil['kt_buku'];?></td>
	<td><?php echo $tampil['lks'];?></td>
    

  </tr>
  <?php }; ?>
  </tbody>
</table>
<a href="digit/lapor/print.php"><button type="submit" name="login" class="btn btn-danger">Cetak Laporan <i class="fa fa-arrow-circle-right"></i></button></a>
</div>
</div>
</div>
</div>
 <script src="Assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="Assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script> 
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
