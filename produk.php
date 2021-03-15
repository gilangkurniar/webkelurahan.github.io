<?php

include 'include/koneksi.php';

global $connect;
error_reporting(0);

$key = $_GET['key'];
	$key = explode(" ", $key);
	sort($key);

	$stradd = '';

	foreach($key as $val) {
		if($stradd !='') {
			$stradd = "OR nama LIKE '%{$val}%' ";
		} else {
			$stradd = "AND nama LIKE '%{$val}%' ";
			}
		}

$jumlahdataperhal = 6;
$result = mysqli_query($connect,"SELECT * FROM produk WHERE tampil='1' $stradd");
$jumlahdata = mysqli_num_rows($result);
$jumlahhal = ceil($jumlahdata / $jumlahdataperhal);
$halamanaktif = (isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
$awaldata = ($jumlahdataperhal * $halamanaktif)-$jumlahdataperhal;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Kelurahan</title>
	<?php include 'part/head.php';?>
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/courses.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

	<style>
	.pagination {
	  display: inline-block;
	}

	.pagination a {
	  border: 1px solid #ddd;
	  color: black;
	  float: left;
	  padding: 8px 16px;
	  text-decoration: none;
	}
	.pagination a.active {
	  background-color: #4CAF50;
	  color: white;
	}

	.pagination a:hover:not(.active) {background-color: #ddd;}
	</style>
</head>
<body>
	<?php include 'part/headerproduk.php';?>


	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Produk</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="courses">
		<div class="container">
			<h2 align="center">Produk yang Tersedia di Kelurahan Tamanbaru</h2><br><br>
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-12">
					<div class="courses_search_container">
						<form action="" method="GET" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start light">
							<input type="search" name="key" class="col courses_search_input" placeholder="Cari Produk disini" autocomplete="off" required>
							<button action="submit" name="search" value="cari" class="courses_search_button ml-auto"><i class="fa fa-search"></button></i>
						</form>
					</div><br>
					<?php 
					if (isset($_GET['search'])){
						echo "<div class='course_text mx-4 text-dark'>Menampilkan Hasil Pencarian dari '<b>$val</b>'</div>";
						} ?>
					<div class="courses_container col-lg-12">
						<div class="row courses_row col-lg-12">

							<!-- Course -->
							<?php 
									$sql=mysqli_query($connect,"SELECT * FROM produk WHERE tampil='1' $stradd ORDER BY id DESC LIMIT $awaldata, $jumlahdataperhal");
			                        while ($data = mysqli_fetch_array($sql)) {
				                ?>
							<div class="col-lg-4"><br>
								<div class="course">
									<div class="course_image"><img src="images/<?php echo $data['gambar']?>" width="350px" height="210px" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="detailproduk.php?id=<?php echo $data['id']?>"><?php echo $data['nama'] ?></a></h3>
										<div class="course_teacher">Rp <?php echo $data['harga'] ?> per <?php echo $data['satuan'] ?></div>
										<div class="course_text">
											<p><?php echo substr($data['deskripsi'],0,80) ?>...</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<a href="detailproduk.php?id=<?php echo $data['id']?>"><span>Lihat Selengkapnya...</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
						<div>
						<?php if($halamanaktif > 1) : ?>
								<div class="pagination mt-4 ml-5">
									<a href="?halaman=<?php echo $halamanaktif -1 ?>">&laquo;</a>
								</div>
							<?php elseif($halamanaktif == 0) : ?>
								<div class="pagination mt-4 ml-5">
									<a href="#">&laquo;</a>
								</div>
							<?php else : ?>
								<div class="pagination mt-4 ml-5">
									<a href="#">&laquo;</a>
								</div>
							<?php endif ?>

							<?php for( $i=1; $i <= $jumlahhal; $i++) : ?>
								<?php if($i == $halamanaktif) : ?>
									<div class="pagination mt-4">
										<a class="active" href="?halaman=<?php echo $i ?>"><?php echo $i; ?></a>
									</div>
								<?php else : ?>
									<div class="pagination mt-4">
										<a href="?halaman=<?php echo $i ?>"><?php echo $i; ?></a>
									</div>
								<?php endif ?>
							<?php endfor; ?>

							<?php if($halamanaktif <= 1) : ?>
								<div class="pagination mt-4">
									<a href="?halaman=<?php echo $halamanaktif +1 ?>">&raquo;</a>
								</div>
							<?php elseif($halamanaktif == 0) : ?>
								<div class="pagination mt-4">
									<a href="#">&raquo;</a>
								</div>
							<?php else : ?>
								<div class="pagination mt-4">
									<a href="#">&raquo;</a>
								</div>
							<?php endif ?>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-4">
					<div class="sidebar">
 -->
						<!-- Categories -->
						<!-- <div class="sidebar_section">
							<div class="sidebar_section_title">Kategori Produk</div>
							<div class="sidebar_categories">
								<ul>
									<?php
									$sql=mysqli_query($connect,"SELECT * FROM kategoriproduk WHERE terbit='1' ORDER BY id DESC LIMIT 0,5");
			                        while ($data = mysqli_fetch_array($sql)) {
									 ?>
									<li><a href="kategoriproduk.php?id=<?php echo $data['id']?>"><?php echo $data['katproduk']?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'part/footer.php';
		  include 'part/script.php';?>
</body>
</html>