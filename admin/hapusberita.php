<?php

	include '../include/koneksi.php';

 	$id = $_GET['id'];

	mysqli_query($connect,"DELETE FROM berita WHERE id = '$id'");
	echo "<script>document.location.href='daftarberita.php';</script>";

?>