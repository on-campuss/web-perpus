
<?php 
session_start();
error_reporting(0);
require_once 'config/koneksi.php';
?>
<body onLoad="window.print();">
		<p align="center">LAPORAN DATA BUKU</p>
   	      <table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	       
   	          <tr>
   	            <th width="3%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
   	            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">ISBN</th>
				<th width="12%" align="center" class="style1" bgcolor="#CCCCCC">Judul Buku</th>
   	            <th width="15%" align="center" class="style1" bgcolor="#CCCCCC">Pengarang</th>
   	            <th width="18%" align="center" class="style1" bgcolor="#CCCCCC">Penerbit</th>
   	            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Denda</th>
                <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Kategori Buku</th>
				<th width="30%" align="center" class="style1" bgcolor="#CCCCCC">Lokasi</th>
              </tr>

  <?php
   $sql = mysql_query ("SELECT * from buku");
   if($sql===FALSE){
   die(mysql_error());}
   $no="";
   while ($tampil = mysql_fetch_array($sql)){
   ?>
   <tbody>
   <tr>
    <td><?php echo ++$no;?></td>
    <td><?php echo $tampil['isbn'];?></td>
	<td><?php echo $tampil['judul'];?></td>
	<td><?php echo $tampil['pengarang'];?></td>
	<td><?php echo $tampil['penerbit'];?></td>
	<td><?php echo $tampil['denda'];?></td>
	<td><?php echo $tampil['kt_buku'];?></td>
	<td><?php echo $tampil['lks'];?></td>				
              </tr>    
            <?php } ?>
           
            </tbody>
          </table>
</body>