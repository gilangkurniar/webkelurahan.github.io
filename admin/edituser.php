<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");
    }

    $id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM administrator WHERE id = '$id'");
    $result = mysqli_fetch_array($sql);

    if (isset($_POST['ubah'])){

      global $connect;

      $sumber = $_FILES['gambar']['tmp_name'];
      $target = '../images/';
      $namagambar = $_FILES['gambar']['name'];

        move_uploaded_file($sumber, $target.$namagambar);
         $sql = mysqli_query($connect,"UPDATE administrator SET nama='".$_POST['nama']."', email='".$_POST['email']."', username='".$_POST['username']."',password='".$_POST['password']."',gambar='$namagambar' WHERE id = '".$_POST['id']."' ");

        echo "<script>alert('Data berhasil diubah!');
              document.location.href = 'daftaruser.php';</script>";    
      }
?>
<html>
<head>
	<title>Edit Data Admin</title>
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
                
                <div class="form-group mt-3">
                <label for="nama">Nama :</label>
                <input class="form-control" type="text" placeholder="Inputkan Nama" name="nama" value="<?php echo $result['nama']?>" autocomplete="off" required /></div>
              
                <div class="row"><div class="form-group col-md-6">
                <label for="email">Email :</label>
                <input class="form-control" type="email" placeholder="Inputkan Email" name="email" value="<?php echo $result['email']?>" autocomplete="off" required /></div>
              
                <div class="col-md-6">
                <label for="username">Username :</label>
                <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo $result['username']?>" autocomplete="off" /></div>
                </div>
              
                <div class="form-group">
                <label for="password">Kata Sandi :</label>
                <input class="form-control" type="password" placeholder="Kata Sandi Baru" name="password" value="<?php echo $result['password']?>" autocomplete="off" /></div>

                <div class="form-group">
                <label>Foto saat ini :</label><br>
                <?php
                  if($result['gambar']){
                    echo "<img src='../images/$result[gambar]' width='250px'";
                  } else{
                    echo "<br><h3>Tidak Ada Gambar</h3>";
                  }
                ?>
                </div><br><br>

                <label for="gambar">Foto :</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile02"><?php echo $result['gambar']?></label>
                  </div><br>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="ubah">Ubah Data</button>
                &nbsp;<a href="daftaruser.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </div>
        </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>