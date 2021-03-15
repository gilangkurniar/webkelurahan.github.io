<?php

include 'include/koneksi.php';

global $connect;

    $sql = mysqli_query($connect,"SELECT * FROM profil");
    $res = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Kelurahan</title>
	<?php include 'part/head.php';?>
	<link rel="stylesheet" type="text/css" href="styles/course.css">
	<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>
	<?php include 'part/headerkontak.php';?>


	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Kontak</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.7959838338707!2d114.36043311433134!3d-8.223261084812332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15acb6bb125a5%3A0xb813505a073bbbd!2sKelurahan%20Tamanbaru!5e0!3m2!1sid!2sid!4v1608095573366!5m2!1sid!2sid" width="1366" height="768" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">

					<!-- Contact Info -->
					<div class="col-lg-12">
						<div class="contact_info">
							<div class="contact_info_title">Hubungi Kami</div>
							<div class="contact_info_text">
								<p>Jika ada sesuatu hal mendesak yang ingin dibicarakan, berikut adalah daftar kontak Kelurahan Tamanbaru yang dapat dihubungi :</p>
							</div>
							<div class="contact_info_location">
								<ul class="location_list">
									<li>Alamat : Jl. Pajajaran, kec. Banyuwangi, kab. Banyuwangi 68416</li>
									<li>No. Telepon : (+62)822-3637-3911</li>
									<li>No. Telepon 2 : (+62)851-5768-3044</li>
									<li>E-Mail : gilkr20@gmail.com</li>
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