<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

if (isset($_POST['tambahkat'])) {

    global $connect;

    $hasil = mysqli_query($connect,"INSERT INTO kategoriproduk (katproduk,terbit) VALUES ('".$_POST['katproduk']."','".$_POST['terbit']."')");

    echo "<script>alert('Berhasil menambahkan kategori baru');
          document.location.href='daftarkategoriproduk.php';</script>";
}

?>
<html>
<head>
	<title>Tambah Kategori Produk</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php'; 
	include 'header.php';
	?>
      <div class="container-fluid">
      <form action="" method="POST">
        <div class="card mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori Produk</h6>
            </div>
            <div class="card-body">
            
                <div class="form-group mt-3">
                <label for="nama">Kategori :</label>
                <input class="form-control" type="text" placeholder="Kategori Baru" name="katproduk" id="katproduk" autocomplete="off" required></div>

                <div class="form-group">
                <label for="alias">Tampilkan :</label>
                <select name="terbit" class="form-control">
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
                </select></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="tambahkat">Tambah Kategori</button>&nbsp;
                <a href="daftarkategoriproduk.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>