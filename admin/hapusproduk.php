<?php

	include '../include/koneksi.php';

 	$id = $_GET['id'];

	mysqli_query($connect,"DELETE FROM produk WHERE id = '$id'");
	echo "<script>document.location.href='daftarproduk.php';</script>";

?>