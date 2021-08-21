<?php
error_reporting(0);
include 'config/koneksi.php';
	$kd_buku	= $_POST['kd_buku'];
	$judul	= $_POST['judul'];
	$pengarang	= $_POST['pengarang'];
	$penerbit	= $_POST['penerbit'];
	$tahun_terbit	= $_POST['tahun_terbit'];
	$isbn	= $_POST['isbn'];
	$kt_buku	= $_POST['kt_buku'];
	$jn_buku	= $_POST['jn_buku'];
	$denda	= $_POST['denda'];
	$jml	= $_POST['jml'];
	$lks	= $_POST['lks'];
$bykFile = count($_FILES['picture']['name']);
  //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload\
$direktori= "assets/verlybook/"; // Verly Says : Direktory File Picture
//check if the file is corrupt or error
for ($i = 0; $i < $bykFile; $i++) {
$fileName = $_FILES['picture']['name'][$i];
$Images=$direktori.basename($_FILES['picture']['name'][$i]);
$move = move_uploaded_file($_FILES['picture']['tmp_name'][$i],$Images); //Verly Says : Data Picture Pindah Ke Directory

$insert = mysql_query ("insert into buku (kd_buku,judul,pengarang,penerbit,tahun_terbit,isbn,kt_buku,jn_buku,denda,jml,lks,picture)values('$kd_buku','$judul','$pengarang','$penerbit','$tahun_terbit','$isbn','$kt_buku','$jn_buku','$denda','$jml','$lks','$fileName')"); 


mysql_query($insert, $konek);
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('ver_lihat.php')</script>
<?php
}

?>