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
</head>
<body>
	<?php include 'part/headerprofil.php';?>


	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Profil</a></li>
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
				<div class="col-lg-12">
					
					<div class="course_container">
						<div class="course_title text-center">Profil Kelurahan Tamanbaru</div><br><br>
						
						<!-- Course Image -->
						<div class="course_image text-center"><img class="img-responsive" width="960px" height="540px" src="images/<?php echo $res['gambar']?>" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">

							<!-- Description -->
								<p style="text-align: justify; text-indent: 45px;"><?php echo nl2br($res['isi'])?></p>
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