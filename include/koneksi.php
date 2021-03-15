<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'dbwebdes');

define('URL_SITUS', 'http://localhost/webdes');

$connect = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

if(mysqli_connect_errno()){
	echo "gagal konek ke database". mysqli_connect_error();
}
?>