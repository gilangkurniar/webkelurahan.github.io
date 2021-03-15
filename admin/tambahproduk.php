<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

if (isset($_POST['tambah'])){

    global $connect;

    $sumber = $_FILES['gambar']['tmp_name'];
    $target = '../images/';
    $namagambar = $_FILES['gambar']['name'];

            move_uploaded_file($sumber, $target.$namagambar);
            $sql = mysqli_query($connect,"INSERT INTO produk (gambar,nama,kategoriproduk,deskripsi,harga,satuan,tampil) VALUES ('$namagambar','".$_POST['nama']."','".$_POST['kategoriproduk']."','".$_POST['deskripsi']."','".$_POST['harga']."','".$_POST['satuan']."','".$_POST['tampil']."')");

            echo "<script>alert('Berhasil menambahkan produk!');
                  document.location.href='daftarproduk.php';</script>";
              }
?>
<!DOCTYPE html>
<head>
	<title>Tambah Produk</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php'; 
	include 'header.php';
	?>
      <div class="container-fluid">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="card mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Produk</h6>
            </div>
            <div class="card-body">
            
                <label for="gambar">Foto :</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                  </div><br>

                <div class="form-group mt-3">
                <label for="nama">Nama :</label>
                <input class="form-control" type="text" placeholder="Masukkan Nama" name="nama" id="nama" autocomplete="off" required></div>

                <div class="form-group">
                <label for="katproduk">Kategori Produk :</label>
                <select name="kategoriproduk" class="form-control">
                  <option>Pilih Kategori</option>
                  <?php

                  global $connect;

                  $hasil = mysqli_query($connect,"SELECT * FROM kategoriproduk WHERE terbit='1' ORDER BY id");

                  while ($k = mysqli_fetch_array($hasil)) {
                    echo '<option value = "'.$k['katproduk'].'">'.$k['katproduk'].'</option>';
                  }
                  ?>
                </select></div>
              
                <div class="form-group mt-3">
                <label>Deskripsi Produk :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Isi Berita" name="deskripsi" rows="7" autocomplete="off" required></textarea></div>

                <div class="row">
                  <div class="form-group mt-3 col-md-6">
                    <label>Harga :</label>
                    <input class="form-control" type="text" placeholder="Harga per pcs / kg / lembar" name="harga" id="harga" autocomplete="off" required>
                  </div>
                  <div class="mt-3 col-md-6">
                    <label>per</label>
                    <select name="satuan" class="form-control">
                      <option>Pilih satuan</option>
                      <option value="Kg">Kilogram</option>
                      <option value="pcs">Pcs</option>
                      <option value="lembar">Lembar</option>
                      <option value="kemasan">Kemasan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                <label>Tampilkan :</label>
                <select name="tampil" class="form-control">
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
                </select></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="tambah">Tambah Data</button>&nbsp;
                <a href="daftarproduk.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>