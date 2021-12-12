<?php
include 'koneksi.php'; 
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_warga where kode='".$_GET["id"]."'");
	if ($qry){
		header('location: penduduk_tampil.php');
	}
}
?>