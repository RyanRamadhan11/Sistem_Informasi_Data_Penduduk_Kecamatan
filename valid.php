<?php
include'koneksi.php';
session_start(array());
	if (empty($_SESSION['user_name'])){
	echo "<h1>Harap Login Mas Mba</H1>";	die("Belum Login ya<a href=\"javascript:history.back()\">Back</a>");
	}else{	
?>
<?php } ?>
