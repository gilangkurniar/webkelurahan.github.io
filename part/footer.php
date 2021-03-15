<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<!-- <div class="col-lg-3"> -->
					
								<!-- Footer About -->
								<!-- <div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Web<span>site</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div> -->&nbsp;

							<div class="col-lg-4">
								<div class="footer_section footer_contact">
									<div class="footer_title">Kategori Berita</div>
									<div class="footer_contact_info">
										<ul>
											<?php
											$sql=mysqli_query($connect,"SELECT * FROM kategori WHERE terbit='1' ORDER BY id DESC LIMIT 0,5");
					                        while ($data = mysqli_fetch_array($sql)) {
											 ?>
											<li><a class="text-white" href="kategori.php?id=<?php echo $data['id']?>"><?php echo $data['kat']?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>&nbsp;

							<div class="col-lg-4">
								<div class="footer_section footer_contact">
									<div class="footer_title">Kategori Produk</div>
									<div class="footer_contact_info">
										<ul>
											<?php
											$sql=mysqli_query($connect,"SELECT * FROM kategoriproduk WHERE terbit='1' ORDER BY id DESC LIMIT 0,5");
					                        while ($data = mysqli_fetch_array($sql)) {
											 ?>
											<li><a class="text-white" href="kategoriproduk.php?id=<?php echo $data['id']?>"><?php echo $data['katproduk']?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>&nbsp;

							<div class="col-lg-2">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email : gilkr20@gmail.com</li>
											<li>Phone :  +(62) 851 5768 3044</li>
											<li>Jl. Ikan Tongkol 22, Banyuwangi</li>
										</ul>
									</div>
								</div>	
							</div>&nbsp;

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>