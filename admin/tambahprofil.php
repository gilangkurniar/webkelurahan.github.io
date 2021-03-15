<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

if (isset($_POST['tambahprofil'])) {

    global $connect;

    $sumber = $_FILES['gambar']['tmp_name'];
    $target = '../images/';
    $namagambar = $_FILES['gambar']['name'];

    move_uploaded_file($sumber, $target.$namagambar);
    date_default_timezone_set('Asia/Jakarta');
    $hasil = mysqli_query($connect,"INSERT INTO profil (gambar,isi,tanggal) VALUES ('$namagambar','".$_POST['isi']."','".date("d F Y")."')");

    echo "<script>alert('Berhasil menambahkan kategori baru');
          document.location.href='daftarprofil.php';</script>";
        }

?>
<html>
<head>
	<title>Tambah Kategori</title>
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
                <h6 class="m-0 font-weight-bold text-primary">Profil Kelurahan</h6>
            </div>
            <div class="card-body">
            
                <label for="gambar">Gambar :</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div><br>
              
                <div class="form-group mt-3">
                <label for="isi">Isi Berita :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Isi Berita" name="isi" rows="7" autocomplete="off" required></textarea></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="tambahprofil">Tambah Kategori</button>&nbsp;
                <a href="#" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>
