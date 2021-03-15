<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");
    }

    $id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM profil WHERE id = '$id'");
    $res = mysqli_fetch_array($sql);

    if (isset($_POST['ubah'])){

        $sumber = $_FILES['gambar']['tmp_name'];
        $target = '../images/';
        $namagambar = $_FILES['gambar']['name'];

        move_uploaded_file($sumber, $target.$namagambar);
        date_default_timezone_set('Asia/Jakarta');
        $sql = mysqli_query($connect,"UPDATE profil SET gambar='$namagambar',isi='".$_POST['isi']."',tanggal='".date("d F Y")."' WHERE id = '".$_POST['id']."' ");

        echo "<script>alert('Data berhasil diubah!');
              document.location.href = 'daftarprofil.php';</script>";

    }
?>
<html>
<head>
	<title>Edit Profil Kelurahan</title>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Profil Kelurahan</h6>
            </div>
            <div class="card-body">
                
                <div class="form-group">
                <label>Foto saat ini :</label><br>
                <?php
                  if($res['gambar']){
                    echo "<img src='../images/$res[gambar]' width='250px'";
                  } else{
                    echo "<br><h3>Tidak Ada Gambar</h3>";
                  }
                ?>
                </div><br><br>

                <label for="gambar">Foto :</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile02"><?php echo $res['gambar']?></label>
                  </div><br>
              
                <div class="form-group mt-3">
                <label for="isi">Isi Berita :</label>
                <textarea class="form-control" type="text" placeholder="Masukkan Isi Berita" name="isi" rows="7" value="<?php echo $res['isi']?>" autocomplete="off" required><?php echo $res['isi']?></textarea></div>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="ubah">Ubah Data</button>
                &nbsp;<a href="daftarprofil.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>