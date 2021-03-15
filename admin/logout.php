<?php

session_start();
session_destroy();
session_unset();
$_SESSION = [];
echo "<script>alert('Anda Berhasil Logout');
	  document.location.href='index.php';</script>";
?>