<?php

include 'include/koneksi.php';

global $connect;
	$id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM produk WHERE id = '$id'");
    $res = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Kelurahan</title>
	<?php include 'part/head.php';?>
	<link rel="stylesheet" type="text/css" href="styles/courses.css">
	<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/course.css">
	<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
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
								<li><a href="produk.php">Produk</a></li>
								<li>Detail Produk</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title"><?php echo $res['nama']?></div>
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item col-lg-6">
								<div class="course_info_title">Harga (per <?php echo $res['satuan'] ?>):</div>
								<div class="course_info_text">Rp <?php echo $res['harga'] ?></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item col-lg-6">
								<div class="course_info_title">Kategori:</div>
								<div class="course_info_text"><?php echo $res['kategoriproduk'] ?></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img class="img-responsive" width="650px" height="370px" src="images/<?php echo $res['gambar']?>" alt=""></div>
						<!-- Course Tabs -->
						<div class="course_tabs_container">

							<!-- Description -->
								<p style="text-align: justify; text-indent: 45px;"><?php echo nl2br($res['deskripsi'])?></p>
						</div>
					</div>
					<div class="course_section my-5">
							<h4 class="latest_title">Produk Terlaris</h4><hr>
							<div class="course_latest">

								<!-- Latest Course -->
								<?php 
									$sql=mysqli_query($connect,"SELECT * FROM produk WHERE tampil='1' ORDER BY id DESC LIMIT 4,3");
			                        while ($data = mysqli_fetch_array($sql)) {
		                   		?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/<?php echo $data['gambar']?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="detailproduk.php?id=<?php echo $data['id']?>"><?php echo $data['nama']?></a></div>
										<div class="latest_text">Rp <?php echo $data['harga']?> per <?php echo $data['satuan'] ?></div>
									</div>
								</div>
								<?php }?>
							</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar_section">
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
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Produk Terbaru</div><hr>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<?php 
									$sql=mysqli_query($connect,"SELECT * FROM produk WHERE tampil='1' ORDER BY id DESC LIMIT 0,4");
			                        while ($data = mysqli_fetch_array($sql)) {
		                   		?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/<?php echo $data['gambar']?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="detailproduk.php?id=<?php echo $data['id']?>"><?php echo $data['nama']?></a></div>
										<div class="latest_text">Rp <?php echo $data['harga']?> per <?php echo $data['satuan'] ?></div>
									</div>
								</div>
								<?php }?>
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