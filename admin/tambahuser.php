<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

if (isset($_POST['tambah'])){

    global $connect;

    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);

    $sumber = $_FILES['gambar']['tmp_name'];
    $target = '../images/';
    $namagambar = $_FILES['gambar']['name'];

    $sql = mysqli_query($connect, "SELECT * FROM administrator WHERE username='".$username."' OR email='".$_POST['email']."' OR nama='".$_POST['nama']."' ");
    $hasil = mysqli_num_rows($sql);

    if($hasil > 0){

            echo "<script>alert('Username atau email sudah terdaftar!');</script>";

        } else{

            $pindah = move_uploaded_file($sumber, $target.$namagambar);

            if($pindah){
            $sql = mysqli_query($connect,"INSERT INTO administrator (nama,email,username,password,gambar) VALUES ('".$_POST['nama']."','".$_POST['email']."','$username','$password','$namagambar')");

            echo "<script>alert('Berhasil menambahkan data!');
                  document.location.href='daftaruser.php';</script>";
              } else{
                $sql = mysqli_query($connect,"INSERT INTO administrator (nama,email,username,password,gambar) VALUES ('".$_POST['nama']."','".$_POST['email']."','$username','$password','$namagambar')");

            echo "<script>alert('Berhasil menambahkan data!');
                  document.location.href='daftaruser.php';</script>";
              }
        }
}
?>
<!DOCTYPE html>
<head>
	<title>Tambah Data Admin</title>
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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
            </div>
            <div class="card-body">
            
                <div class="form-group mt-3">
                <label for="nama">Nama :</label>
                <input class="form-control" type="text" placeholder="Masukkan Nama" name="nama" id="nama" autocomplete="off" required></div>
              
                <div class="row">
                  <div class="form-group col-md-6">
                  <label for="email">Email :</label>
                  <input class="form-control" type="email" placeholder="Masukkan Email" name="email" id="email" autocomplete="off" required></div>
                
                  <div class="col-md-6">
                    <label for="username">Username :</label>
                    <input class="form-control" type="text" placeholder="Username" name="username" id="username" autocomplete="off">
                  </div>
                </div>
              
                <div class="form-group">
                <label for="password">Kata Sandi :</label>
                <input class="form-control" type="password" placeholder="Kata Sandi Baru" name="password" id="password" autocomplete="off"></div>

                 <label for="gambar">Foto :</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                  </div><br>

                <br><div class="form-group">
                <button class="btn btn-primary mb-3" type="submit" name="tambah">Tambah Data</button>&nbsp;
                <a href="daftaruser.php" class="btn btn-danger mb-3">Kembali</a></div>
              </div>
             </div>
           </form>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>