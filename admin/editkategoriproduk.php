<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");
    }

    $id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM kategoriproduk WHERE id = '$id'");
    $res = mysqli_fetch_array($sql);

    if (isset($_POST['ubah'])){

        $sql = mysqli_query($connect,"UPDATE kategoriproduk SET katproduk='".$_POST['katproduk']."', terbit='".$_POST['terbit']."' WHERE id = '".$_POST['id']."' ");

        echo "<script>alert('Data berhasil diubah!');
              document.location.href = 'daftarkategoriproduk.php';</script>";

    }
?>
<html>
<head>
	<title>Edit Kategori Produk</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php'; 
	include 'header.php';
	?>
      <div class="container-fluid">
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $res['id']?>" />
        <div class="card mb-4 mt-4">
          <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Produk</h6>
            </div>
            <div class="card-body">
                
                <div class="form-group mt-3">
                <label for="nama">Kategori :</label>
                <input class="form-control" type="text" placeholder="Inputkan Kategori" name="katproduk" value="<?php echo $res['katproduk']?>" autocomplete="off" required /></div>
              
                <div class="form-group">
                <label for="alias">Tampilkan :</label>
                <select name="terbit" class="form-control">
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
                </select></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="ubah">Ubah Data</button>
                &nbsp;<a href="daftarkategori.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>