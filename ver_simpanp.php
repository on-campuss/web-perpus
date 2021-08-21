<?php
error_reporting(0);
include"config/koneksi.php";
$judul =$_POST['judul'];
$nama=$_POST['nama'];
$pinjam =$_POST['pinjam'];
$kembali =$_POST['kembali'];
  //get the file name
//check if the file is corrupt or error

$sql_simpan="INSERT INTO peminjaman
(id_pinjam,judul,nama,pinjam,kembali)
VALUES ('','$judul','$nama','$pinjam','$kembali')"; 


mysql_query($sql_simpan, $konek)
or die ("Memasukan data produk gagal".mysql_error());
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('ver_lihatp.php')</script>
