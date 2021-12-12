<?php
include 'koneksi.php'; 
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_penduduk_tetap where kode='".$_GET["id"]."'");
	if ($qry){
		header('location: tetap_add.php');
	}
}
?>