<?php

include 'include/koneksi.php';

global $connect;

$katid = (isset($_GET['id']) ? $_GET['id'] : '');
$getkat=mysqli_query($connect,"SELECT * FROM kategori WHERE id='".$katid."' ");

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
						<?php
							global $connect;

		                        while ($kat = mysqli_fetch_array($getkat)) {
		                        	echo "<h2 align='center'>Kategori : $kat[kat]</h2><br>";
		                        	?><br>
		            <div class="courses_search_container">
						<form action="news.php" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start light">
							<input type="search" name="key" class="col courses_search_input" placeholder="Cari Berita" autocomplete="off" required>
							<button action="submit" name="search" value="cari" class="courses_search_button ml-auto"><i class="fa fa-search"> Cari</button></i>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">

							<!-- Course -->
							<?php

								$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' AND kategori='".$kat['kat']."' ORDER BY id DESC LIMIT 0,5");
		                        while ($data = mysqli_fetch_array($sql)) {
	                   		?>
							<div class="course_section"><br>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="course_image mx-4 mt-4"><img class="img-responsive img-thumbnail" width="300px" src="images/<?php echo $data['gambar']?>" alt=""></div>
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
						<?php } }?>
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
										<div class="latest_text"><?php echo $data['tanggal']?> | dilihat : <div class="latest_text"><?php echo $data['view']?> kali</div></div>
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