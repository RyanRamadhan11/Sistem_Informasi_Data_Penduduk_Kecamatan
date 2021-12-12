<?php
include 'koneksi.php'; 
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_kematian where kode='".$_GET["id"]."'");
	if ($qry){
		header('location: meninggal_tampil.php');
	}
}
?>