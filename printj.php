
<?php 
session_start();
error_reporting(0);
require_once 'config/koneksi.php';
?>
<body onLoad="window.print();">
		<p align="center">LAPORAN DATA PEMINJAMAN BUKU BERDASARKAN JURUSAN</p>
   	      <table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	       
   	          <tr>
   	            <th width="3%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
   	            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">No Anggota</th>
				<th width="12%" align="center" class="style1" bgcolor="#CCCCCC">Judul</th>
   	            <th width="15%" align="center" class="style1" bgcolor="#CCCCCC">Nama</th>
				<th width="15%" align="center" class="style1" bgcolor="#CCCCCC">Progdi</th>
   	            <th width="30%" align="center" class="style1" bgcolor="#CCCCCC">Pinjam</th>
   	            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Kembali</th>
              </tr>

  <?php
   $sql = mysql_query ("SELECT * from peminjaman where progdi='Sistem Informasi'");
   if($sql===FALSE){
   die(mysql_error());}
   $no="";
   while ($tampil = mysql_fetch_array($sql)){
   ?>
   <tbody>
   <tr>
    <td><?php echo ++$no;?></td>
	<td><?php echo $tampil['id_pinjam'];?></td>
    <td><?php echo $tampil['judul'];?></td>
	<td><?php echo $tampil['nama'];?></td>
	<td><?php echo $tampil['progdi'];?></td>
	<td><?php echo $tampil['pinjam'];?></td>
	<td><?php echo $tampil['kembali'];?></td>			
              </tr>    
            <?php } ?>
           
            </tbody>
          </table>
</body>