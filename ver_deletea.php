
<!--Verli Delete -->
<?php
include_once "config/koneksi.php";
$idhapus=$_GET['idhapus'];


if (empty ($idhapus)) {
echo "Data yang dihapus belum dipilih";
}
else {
$sql_hapus="DELETE FROM tb_anggota  WHERE kd_anggota='$idhapus'";
mysql_query($sql_hapus, $konek)
or die ("Gagal perintah hapus".mysql_error());
include "ver_deldireka.php";
exit;
}
?>