<?php

include 'include/koneksi.php';

global $connect;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kelurahan Tamanbaru</title>
	<?php include 'part/head.php';?>
</head>
<body>
	<?php include 'part/header.php';?>

	<div class="home">
	
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/Kelurahan_tamanbarubwi1.jpeg);
						-webkit-filter:brightness(75%);"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title text-light">Kelurahan Tamanbaru</div>
									<div class="home_slider_subtitle text-light">Kecamatan Banyuwangi, Kabupaten Banyuwangi</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<!-- <div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/gandrung.jpg);
						-webkit-filter:brightness(75%)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title text-light">Dapatkan Informasi Terbaru</div>
									<div class="home_slider_subtitle text-light">Dengan melihat update berita berita terbaru yang ada di sekitar anda</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				<!-- Home Slider Item -->
				<!-- <div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/bwx.jpg);
						-webkit-filter:brightness(75%);"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title text-light">Berbagai Produk Produk Menarik</div>
									<div class="home_slider_subtitle text-light">Lengkap dengan detail produk disertai dengan gambar dari produk</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->

			</div>
		</div>

		<!-- Home Slider Nav -->

		<!-- <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div> -->
	</div>

	<!-- Team -->
		<br>
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<!-- <div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">SELAMAT DATANG</h2>
						<div class="section_subtitle"><p>DI WEBSITE KELURAHAN TAMANBARU, KEC. BANYUWANGI</p></div>
					</div>
				</div>
			</div> -->
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col mx-5 my-4">
					<div class="team_item">
						<div class="team_image"><img src="images/pp.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Abdur Rachman, S. Sos, MAP</a></div>
							<div class="team_subtitle">Lurah Tamanbaru</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="section_title_container mx-5"><br>
						<h2 class="section_title">Sambutan Lurah Tamanbaru</h2>
						<div class="section_subtitle my-4"><?php echo nl2br("<p>Assalamu'alaikum Warahmatullahi Wabarakaatuh,

						Pengunjung situs web yang kami hormati, Pertama-tama kami panjatkan puji syukur atas limpahan rahmat-Nya, sehingga situs web kelurahan Tamanbaru ini dapat kami selesaikan. Tak lupa kami ucapkan terima kasih kepada Perangkat Kelurahan Tamanbaru yang sudah bekerja keras untuk menyiapkan data-data untuk melengkapi informasi di situs web ini.

						Situs web ini sebagai wujud komitmen kami dalam memberikan informasi seluas-seluasnya kepada masyarakat.   Pada situs web ini, kami isi dengan berita-berita seputar wilayah Kelurahan Tamanbaru.  Tak kalah menariknya, di situs web ini senantiasa kami update info-info terbaru dan penting yang perlu diketahui oleh masyarakat.  Oleh karena itu, masyarakat perlu sering melihat situs web ini agar selalu terdepan dan tidak ketinggalan mengenai informasi penting, baik dari update berita-berita terbaru hingga berbagai produk menarik yang ada di Kelurahan Tamanbaru. Kritik dan saran selalu kami nantikan, agar panyajian informasi di situs web ini dapat memberikan manfaat yang sebesar-besarnya bagi masyarakat.

						Wassalamu'alaikum warahmatullahi wabarakaatuh,</p></div>");?>
					</div>

<!-- 					<div class="row">
						<div class="col"> -->
							<div class="section_title_container text-center">
								<br><br><br><h2 class="section_title">Produk Terbaru</h2>
								</div>
							</div><br>
					<!-- 	</div>
					</div> -->

					<!-- Team Item -->
				<div class="row team_row">
					<?php 
					$sql = mysqli_query($connect,"SELECT * FROM produk WHERE tampil='1' ORDER BY id DESC LIMIT 0,4");
					while ($produk = mysqli_fetch_array($sql)){
					 ?>
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="images/<?php echo $produk['gambar']?>" alt="" width="190px" height="160px"></div>
							<div class="team_body">
								<div class="team_title"><a href="detailproduk.php?id=<?php echo $produk['id']?>"><?php echo $produk['nama']?></a></div>
								<div class="team_subtitle">Rp <?php echo $produk['harga'] ?> per <?php echo $produk['satuan'] ?></div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

				<!-- Team Item -->
				<!-- <div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">John Tyler</a></div>
							<div class="team_subtitle">Quantum mechanics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> -->

				<!-- Team Item -->
				<!-- <div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_4.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Veronica Vahn</a></div>
							<div class="team_subtitle">Math & Physics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div> -->
				<!-- </div> -->

			</div>
		</div>

	<!-- Latest News -->
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center mb-3">
						<h2 class="section_title">Berita Terbaru</h2>
						<p class="section_subtitle">Berikut adalah daftar berita-berita terbaru seputar lingkungan kelurahan, seputar Banyuwangi ataupun lingkup nasional</p> 
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					<!-- News Post Large -->
					<?php 
							$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' ORDER BY id DESC LIMIT 0,1");
	                        while ($data = mysqli_fetch_array($sql)) {
                   		?>
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img class="img-responsive" width="700px" src="images/<?php echo $data['gambar']?>"></div>
							<div class="news_post_large_title"><a href="detail.php?id=<?php echo $data['id']?>"><?php echo $data['judul']?></a></div>
							<div class="news_post_meta">
								<ul>
									<li><a><?php echo $data['author']?></li></a>
									<li><a><?php echo $data['tanggal']?></li></a>
									<li><a><?php echo $data['kategori']?></li></a>
								</ul>
							</div>
							<div class="news_post_text">
								<p><?php echo substr($data['isi'],0,150)?>...</p>
							</div>
							<div class="news_post_link"><a href="detail.php?id=<?php echo $data['id']?>">read more</a></div>
						</div>
					</div>
				</div>
			<?php }?>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						<!-- News Posts Small -->
						<?php 
							$sql=mysqli_query($connect,"SELECT * FROM berita WHERE terbit='1' ORDER BY id DESC LIMIT 1,4");
	                        while ($data = mysqli_fetch_array($sql)) {
                   		?>
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="detail.php?id=<?php echo $data['id']?>"><?php echo $data['judul']?></a></div>
							<div class="news_post_meta">
								<ul>
									<li><a><?php echo $data['tanggal']?></a></li>
									<li><a><?php echo $data['kategori']?></a></li>
								</ul>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'part/footer.php';
		  include 'part/script.php';?>
</body>
</html>