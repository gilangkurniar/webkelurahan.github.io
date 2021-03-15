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
			$stradd = "OR judul LIKE '%{$val}%' ";
		} else {
			$stradd = "AND judul LIKE '%{$val}%' ";
			}
		}

$jumlahdataperhal = 5;
$result = mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' $stradd");
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
	<?php include 'part/headernews.php';?>


	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<h2 align="center">Daftar Berita</h2><br><br>
					<div class="courses_search_container">
						<form action="" method="GET" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start light">
							<input type="search" name="key" class="col courses_search_input" placeholder="Cari Berita disini" autocomplete="off" required>
							<button action="submit" name="search" value="cari" class="courses_search_button ml-auto"><i class="fa fa-search"></button></i>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							<?php 
								if (isset($_GET['search'])){
									echo "<div class='course_text mx-4 text-dark'>Menampilkan Hasil Pencarian dari '<b>$val</b>'</div>";
								} ?>
							
							<!-- Course -->
							<?php 

								$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' $stradd ORDER BY id DESC LIMIT $awaldata, $jumlahdataperhal");
		                        while ($data = mysqli_fetch_array($sql)) {
	                   		?>
							<div class="course_section"><br>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="course_image mx-4 my-4"><img class="img-responsive img-fluid img-thumbnail" width="300px" src="images/<?php echo $data['gambar']?>" alt=""></div>
									<div class="course_body">
										<div class="latest_text"><?php echo $data['tanggal']?></div>
										<h3 class="course_title"><a href="detail.php?id=<?php echo $data['id']?>"><?php echo $data['judul']?></a></h3>
										<div class="course_text">
											<p><?php echo substr($data['isi'],0,150)?>...</p><hr>
											<p><a class="latest_text text-dark" href="detail.php?id=<?php echo $data['id'] ?>">Baca Selengkapnya...</a></p>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
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
				</div>

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Kategori</div>
							<div class="sidebar_categories">
								<ul>
									<?php
									$sql=mysqli_query($connect,"SELECT * FROM kategori WHERE terbit='1' ORDER BY id DESC LIMIT 0,5");
			                        while ($data = mysqli_fetch_array($sql)) {
									 ?>
									<li><a href="kategori.php?id=<?php echo $data['id']?>"><?php echo $data['kat']?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita Baru-Baru Ini</div><hr>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<?php 
									$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' ORDER BY id DESC LIMIT 0,3");
			                        while ($data = mysqli_fetch_array($sql)) {
		                   		?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/<?php echo $data['gambar']?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="detail.php?id=<?php echo $data['id']?>"><?php echo $data['judul']?></a></div>
										<div class="latest_text"><?php echo $data['tanggal']?></div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita Populer</div><hr>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<?php 
									$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' ORDER BY view DESC LIMIT 1,3");
			                        while ($data = mysqli_fetch_array($sql)) {
		                   		?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/<?php echo $data['gambar']?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="detail.php?id=<?php echo $data['id']?>"><?php echo $data['judul']?></a></div>
										<div class="latest_text"><?php echo $data['tanggal']?> | <div class="latest_text"><?php echo $data['view']?>x dilihat</div></div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Produk Terbaru</div>
							<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<?php 
											$sql=mysqli_query($connect,"SELECT * FROM produk WHERE tampil='1' ORDER BY id DESC LIMIT 0,6");
					                        while ($data = mysqli_fetch_array($sql)) {
				                   		?>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">Lihat</div>
										<a class="colorbox" href="produk.php">
											<img src="images/<?php echo $data['gambar']?>" width="100px" height="80px" alt="">
										</a>
										<?php } ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'part/footer.php';
		  include 'part/script.php';?>
</body>
</html>