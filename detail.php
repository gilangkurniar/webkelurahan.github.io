<?php

include 'include/koneksi.php';

global $connect;
	$id = $_GET['id'];

    $sql = mysqli_query($connect,"SELECT * FROM berita WHERE id = '$id'");
    $res = mysqli_fetch_array($sql);

    $viewnum = mysqli_query($connect,"UPDATE berita SET view=view+1 WHERE id='$id'");
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
								<li><a href="news.php">Berita</a></li>
								<li>Detail Berita</li>
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
						<div class="course_title"><?php echo $res['judul']?></div>
						<div class="course_text" style="font-size: 15px;">Oleh <?php echo $res['author']?>, pada <?php echo $res['tanggal']?></div>

						<!-- Course Image -->
						<div class="course_image"><img class="img-responsive" width="700px" src="images/<?php echo $res['gambar']?>" alt=""></div>
        				<div class="latest_text mt-2"><?php echo $res['teks']?></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">

							<!-- Description -->
								<p style="text-align: justify; text-indent: 45px;"><?php echo nl2br($res['isi'])?></p>
						</div>
					</div>
					<div class="course_section my-5">
							<h4 class="latest_title">Baca Juga</h4><hr>
							<div class="course_latest">

								<!-- Latest Course -->
								<?php 
									$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' ORDER BY id DESC LIMIT 4,3");
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
				</div>

				<div class="col-lg-4">
					<div class="sidebar">
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
										<div class="latest_text"><?php echo $data['tanggal']?> | dilihat : <div class="latest_text"><?php echo $data['view']?> kali</div></div>
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
											$sql=mysqli_query($connect,"SELECT * FROM produk ORDER BY id DESC LIMIT 0,6");
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