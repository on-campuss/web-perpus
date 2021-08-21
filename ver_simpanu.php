<?php
error_reporting(0);
include"config/koneksi.php";
$id =$_POST['id_login'];
$username=$_POST['username'];
$password =$_POST['password'];
$level =$_POST['level'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$nidn=$_POST['nidn'];
$jekel=$_POST['jekel'];
$ttl=$_POST['ttl'];
$sql_simpan="INSERT INTO tb_login
(id_login,username,password,avatar,level,nama,alamat,nohp,nidn,jekel,ttl)
VALUES ('$id','$username','$password','efi.jpg','$level','$nama','$alamat','$nohp','$nidn','$jekel','$ttl')"; 


mysql_query($sql_simpan, $konek)
or die ("Memasukan data produk gagal".mysql_error());
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('ver_lihatu.php')</script>
