<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");
    }

    $id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM produk WHERE id = '$id'");
    $result = mysqli_fetch_array($sql);

    if (isset($_POST['ubah'])){

      global $connect;

      $sumber = $_FILES['gambar']['tmp_name'];
      $target = '../images/';
      $namagambar = $_FILES['gambar']['name'];
      $gambarasli = $_FILES['gambar'];

        move_uploaded_file($sumber, $target.$namagambar);
         $sql = mysqli_query($connect,"UPDATE produk SET gambar='$namagambar', nama='".$_POST['nama']."', kategoriproduk='".$_POST['kategoriproduk']."',deskripsi='".$_POST['deskripsi']."',harga='".$_POST['harga']."',satuan='".$_POST['satuan']."',tampil='".$_POST['tampil']."' WHERE id = '".$_POST['id']."' ");

        echo "<script>alert('Data berhasil diubah!');
              document.location.href = 'daftarproduk.php';</script>";

      if(!isset($_FILES['gambar'])){
        $namagambar = $gambarasli;
      }
    }
?>
<html>
<head>
	<title>Edit Data Produk</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php'; 
	include 'header.php';
	?>
      <div class="container-fluid">
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $result['id']?>" />
        <input type="hidden" name="gambar" value="<?php echo $result['gambar']?>" />
        <div class="card mb-4 mt-4">
          <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data User</h6>
            </div>
            <div class="card-body">
                
                <div class="form-group">
                <label>Gambar saat ini :</label><br>
                <?php
                  if($result['gambar']){
                    echo "<img src='../images/$result[gambar]' width='250px'";
                  } else{
                    echo "<br><h3>Tidak Ada Gambar</h3>";
                  }
                ?>
                </div><br><br>

                <label for="gambar">Gambar :</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile02"><?php echo $result["gambar"]?></label>
                  </div><br>

                <div class="form-group mt-3">
                <label for="nama">Nama :</label>
                <input class="form-control" type="text" placeholder="Inputkan Nama" name="nama" value="<?php echo $result['nama']?>" autocomplete="off" required /></div>
              
                <div class="form-group">
                <label for="katproduk">Kategori Produk :</label>
                <select name="kategoriproduk" class="form-control">
                  <option>Pilih Kategori</option>
                  <?php

                  global $connect;

                  $hasil = mysqli_query($connect,"SELECT * FROM kategoriproduk WHERE terbit='1' ORDER BY id");

                  while ($k = mysqli_fetch_array($hasil)) {
                    echo '<option value ="'.$k['katproduk'].'" '.($result['katproduk']==$k['kategoriproduk'] ? 'selected' : '').'>'.$k['katproduk'].'</option>';
                  }
                  ?>
                </select></div>
              
                <div class="form-group mt-3">
                <label for="isi">Deskripsi Produk :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Isi Berita" name="deskripsi" rows="7" autocomplete="off" required><?php echo $result['deskripsi']?></textarea></div>

                <div class="row">
                  <div class="form-group mt-3 col-md-6">
                    <label>Harga :</label>
                    <input class="form-control" type="text" placeholder="Harga per pcs / kg / lembar" name="harga" value="<?php echo $result['harga']?>" autocomplete="off" required>
                  </div>
                  <div class="mt-3 col-md-6">
                    <label>per</label>
                    <select name="satuan" class="form-control">
                      <option>Pilih satuan</option>
                      <option value="Kg">Kilogram</option>
                      <option value="pcs">Pcs</option>
                      <option value="lembar">Lembar</option>
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
                <button class="btn btn-primary mb-3" type="submit" name="ubah">Ubah Data</button>
                &nbsp;<a href="daftarproduk.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </div>
        </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>