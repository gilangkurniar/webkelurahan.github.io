<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");
    }

    $id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM berita WHERE id = '$id'");
    $res = mysqli_fetch_array($sql);

    if (isset($_POST['ubah'])){

      global $connect;

      $sumber = $_FILES['gambar']['tmp_name'];
      $target = '../images/';
      $namagambar = $_FILES['gambar']['name'];

        move_uploaded_file($sumber, $target.$namagambar);
        date_default_timezone_set('Asia/Jakarta');
        $sql = mysqli_query($connect,"UPDATE berita SET judul='".$_POST['judul']."',isi='".$_POST['isi']."',kategori='".$_POST['kategori']."',gambar='$namagambar',teks='".$_POST['teks']."',tanggal='".date("d F Y")."',view='0',author='".$_SESSION['loginadminnama']."',posttype='berita',terbit='".$_POST['terbit']."' WHERE id = '".$_POST['id']."' ");

        echo "<script>alert('Data berhasil diubah!');
              document.location.href = 'daftarberita.php';</script>";

    }
?>
<html>
<head>
	<title>Edit Data Berita</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php'; 
	include 'header.php';
	?>
      <div class="container-fluid">
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $res['id']?>" />
        <div class="card mb-4 mt-4">
          <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Berita</h6>
            </div>
            <div class="card-body">
                
                <div class="form-group mt-3">
                <label for="nama">Judul Berita :</label>
                <input class="form-control" type="text" placeholder="Masukkan Judul Berita" name="judul" value="<?php echo $res['judul']?>" autocomplete="off" required></div>

                <div class="form-group mt-3">
                <label for="isi">Isi Berita :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Isi Berita" name="isi" rows="7" autocomplete="off" required><?php echo $res['isi']?></textarea></div>

                <div class="form-group">
                <label for="kategori">Kategori :</label>
                <select name="kategori" class="form-control">
                  <option>Pilih Kategori</option>
                  <?php

                  global $connect;

                  $hasil = mysqli_query($connect,"SELECT * FROM kategori WHERE terbit='1' ORDER BY id");

                  while ($k = mysqli_fetch_array($hasil)) {
                    echo '<option value = "'.$k['kat'].'" '.($res['kategori']==$k['kat'] ? 'selected' : '').'>'.$k['kat'].'</option>';
                  }
                  ?>
                </select></div>

                <div class="form-group">
                <label>Gambar saat ini :</label><br>
                <?php
                  if($res['gambar']){
                    echo "<img src='../images/$res[gambar]' width='500px'";
                  } else{
                    echo "<br><h3>Tidak Ada Gambar</h3>";
                  }
                ?>
                </div><br><br>

                <label for="gambar">Gambar :</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                  <label class="custom-file-label" for="inputGroupFile02"><?php echo $res["gambar"]?></label>
                </div><br>

                <div class="form-group mt-3">
                <label for="teks">Teks :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Teks" name="teks"  rows="3" autocomplete="off" required><?php echo $res['teks']?></textarea></div>

                <div class="form-group">
                <label for="alias">Terbitkan :</label>
                <select name="terbit" class="form-control">
                  <option value="1" <?php echo (($res['terbit']==1) ? 'selected' :'')?>>Ya</option>
                  <option value="0" <?php echo (($res['terbit']==0) ? 'selected' :'')?>>Tidak</option>
                </select></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="ubah">Ubah Data</button>
                &nbsp;<a href="daftarberita.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>