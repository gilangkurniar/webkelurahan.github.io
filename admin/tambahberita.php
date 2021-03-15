<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

if (isset($_POST['tambahberita'])){

    global $connect;

    $sumber = $_FILES['gambar']['tmp_name'];
    $target = '../images/';
    $namagambar = $_FILES['gambar']['name'];

             move_uploaded_file($sumber, $target.$namagambar);
             date_default_timezone_set('Asia/Jakarta');
             $sql = mysqli_query($connect,"INSERT INTO berita (judul,isi,kategori,gambar,teks,tanggal,view,author,posttype,terbit) VALUES ('".$_POST['judul']."','".$_POST['isi']."','".$_POST['kategori']."','$namagambar','".$_POST['teks']."','".date("d F Y")."','0','".$_SESSION['loginadminnama']."','berita','".$_POST['terbit']."')");

            echo "<script>alert('Berhasil menambahkan berita!');
                  document.location.href='daftarberita.php';</script>";
              }

?>
<html>
<head>
	<title>Tambah Berita</title>
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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
            </div>
            <div class="card-body">
            
                <div class="form-group mt-3">
                <label for="nama">Judul Berita :</label>
                <input class="form-control" type="text" placeholder="Masukkan Judul Berita" name="judul" id="judul" autocomplete="off" required></div>

                <div class="form-group mt-3">
                <label for="isi">Isi Berita :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Isi Berita" name="isi" rows="7" autocomplete="off" required></textarea></div>
                

                <div class="form-group">
                <label for="kategori">Kategori :</label>
                <select name="kategori" class="form-control">
                  <option>Pilih Kategori</option>
                  <?php

                  global $connect;

                  $hasil = mysqli_query($connect,"SELECT * FROM kategori WHERE terbit='1' ORDER BY id");

                  while ($k = mysqli_fetch_array($hasil)) {
                    echo '<option value = "'.$k['kat'].'">'.$k['kat'].'</option>';
                  }
                  ?>
                </select></div>

                <label for="gambar">Gambar :</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div><br>

                <div class="form-group mt-3">
                <label for="teks">Teks :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Teks" name="teks" rows="3" autocomplete="off" required></textarea></div>

                <div class="form-group">
                <label for="alias">Terbitkan :</label>
                <select name="terbit" class="form-control">
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
                </select></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="tambahberita">Tambah Berita</button>&nbsp;
                <a href="daftarberita.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
         </div>
       </div>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>