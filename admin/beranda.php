<?php
session_start();

include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"]) ) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu!');
          document.location.href='index.php';</script>";
}

$datauser = mysqli_query($connect,"SELECT * FROM administrator");
$datakat = mysqli_query($connect,"SELECT * FROM kategori");
$databerita = mysqli_query($connect,"SELECT * FROM berita");
$dataproduk = mysqli_query($connect,"SELECT * FROM produk");

$jumlahdata = mysqli_num_rows($datauser);
$jumlahkat = mysqli_num_rows($datakat);
$jumlahberita = mysqli_num_rows($databerita);
$jumlahproduk = mysqli_num_rows($dataproduk);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php';
	include 'header.php';
	?>
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang, <?php echo "<strong>".$_SESSION['loginadminnama']."</strong>"?></h1>
            <a href="../index.php" class="btn btn-sm btn-light text-dark mt-1" target="_blank"><i class="fab fa-chrome mx-1"></i> Lihat Website</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4 sm-12">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="daftaruser.php">Total User Admin</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($jumlahdata,0,",",".");?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="daftarproduk.php"><div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Produk</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($jumlahproduk,0,",",".");?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-store fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="daftarberita.php"><div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Berita</div></a>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo number_format($jumlahberita,0,",",".");?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            
          </div>
        </div>
      </div>
    <?php include 'footer.php';
	      include 'script.php'; ?>
</body>
</html>