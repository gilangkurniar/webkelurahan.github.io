<?php

	include '../include/koneksi.php';

 	$id = $_GET['id'];

	mysqli_query($connect,"DELETE FROM administrator WHERE id = '$id'");
	echo "<script>document.location.href='daftaruser.php';</script>";

?>