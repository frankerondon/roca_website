<?php
session_start();
require 'requirelanguage.php';
?>



<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<title>Roca Suministros</title>
		<meta content="" name="descriptison">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
		<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

		<!--Porducts And services header-->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


		<!-- Template Main CSS File -->
		<link href="assets/css/style.css" rel="stylesheet">

	</head>

	<body>

		<!-- ======= Header ======= -->
		<!--
		<header id="header" class="fixed-top">
		-->
		<div id="header">
			<div class="container d-flex align-items-center">

				<a href="index.html" class="logo mr-auto"><img src="assets/img/logo_roca3.png" alt="" class="img-fluid"</a>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

				<nav class="nav-menu d-none d-lg-block">
					<ul>
					  <li class="active"><a href="index.html"><?php echo $lang["header_home"]?></a></li>
					  <li><a href="#about-us"><?php echo $lang["header_company"]?></a></li>
					  <li><a href="#services"><?php echo $lang["header_products"]?></a></li>
					  <li><a href="#portfolio"><?php echo $lang["header_markets"]?></a></li>
					  <li><a href="#contact"><?php echo $lang["header_contact"]?></a></li>

					</ul>
				</nav><!-- .nav-menu -->

				<div class="header-social-links">
					<a href="changelanguage.php?language=es" class="twitter">ES</a>
					<a href="changelanguage.php?language=en" class="facebook">EN</a>
				</div>

			</div>
			<!--
			</header><!-- End Header -->
		</div>
		
		<!-- ======= Hero Section ======= -->
		<section id="hero">
			<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

				<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/slide/ilustracion_slide_petroleo2.jpg);">
				  <div class="carousel-container">
					<div class="carousel-content animated fadeInUp">
					  <h2><?php echo $lang["carousel0"]?> <span>Roca Suministros</span></h2>
					  
					  <p class="font-italic"><?php echo $lang["carousel1"]?></p>
					  
					  <div class="text-center"><a href="" class="btn-get-started"><?php echo $lang["carousel2"]?></a></div>
					</div>
				  </div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/ilustracion_slide_it.jpg);">
				  <div class="carousel-container">
				  </div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/ilustracion_slide_automatizacion.jpg);">
				  <div class="carousel-container">
					<!--
					<div class="carousel-content animated fadeInUp">
					  <h2>Sequi ea ut et est quaerat</h2>
					  <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
					  <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
					</div>
					-->
				  </div>
				</div>

				</div>

				<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

				<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			</div>
		</section><!-- End Hero -->


		<main id="main">

			<!-- ======= About Us Section ======= -->
			<section id="about-us" class="about-us">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
					  <h2><?php echo $lang["section_about_title"]?></strong></h2>
					</div>

					<div class="row content">
						<div class="col-lg-12">
							<p><?php echo $lang["section_about_descripcion1"]?></p>
							<p class="font-italic"><?php echo $lang["section_about_descripcion2"]?></p>
						</div>
					</div>

				</div>
			</section><!-- End About Us Section -->


			<!-- ======= Services Section ======= -->
			<section id="services">
				<div class="container">
					<div class="section-header">
						<div class="section-title">
						  <h2><?php echo $lang["section_products_title"]?></h2>
						  
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap"> 
									<img src="assets/img/productos/bombas-hidraulicas.png">
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products4"]?></a></h6>
									
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap"> 
									<img src="assets/img/productos/cables.png">
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products6"]?></a></h6>
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap">
									<img src="assets/img/productos/compresor.png"> 
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products5"]?></a></h6>
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap"> 
									<img src="assets/img/productos/instrumentacion1.jpg">
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products3"]?></a></h6>
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-12">
							<br>
						</div>
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap"> 
									<img src="assets/img/productos/tuberia.png">
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products2"]?></a></h6>
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap"> 
									<img src="assets/img/productos/valvulas.png">
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products1"]?></a></h6>	
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap">
									<img src="assets/img/productos/switch_cisco.jpg"> 
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products7"]?></a></h6>
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
						
						<div class="col-md-3">
							<figure class="card card-product">
								<div class="img-wrap"> 
									<img src="assets/img/productos/plc.jpg">
								</div>
								<figcaption class="info-wrap">
									<h6 class="title text-dots" style="text-align:center"><a href="#"><?php echo $lang["section_products8"]?></a></h6>
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
					</div>
				</div>
			</section><!-- End Services Section -->

			<!-- ======= Portfolio Section ======= -->

			<section id="portfolio" class="portfolio">
				<div class="container">

					<div class="section-title" data-aos="fade-up">
					  <h2><?php echo $lang["section_markets_title"]?></h2>
					</div>

					<div class="row" data-aos="fade-up">
					  <div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
						  <li data-filter="*" class="filter-active"><?php echo $lang["section_markets1"]?></li>
						  <li data-filter=".filter-app"><?php echo $lang["section_markets2"]?></li>		<!--Upstream-->
						  <li data-filter=".filter-card"><?php echo $lang["section_markets3"]?></li>	<!--Refinery-->
						  <li data-filter=".filter-web"><?php echo $lang["section_markets4"]?></li>		<!--General-->
						  <li data-filter=".filter-energy"><?php echo $lang["section_markets5"]?></li>	<!--Energy-->
						</ul>
					  </div>
					</div>

					<div class="row portfolio-container" data-aos="fade-up">

					  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="assets/img/portfolio/upstream1.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets2"]?></h4>
						  <a href="assets/img/portfolio/upstream1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets2"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="assets/img/portfolio/g_industry6.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets4"]?></h4>
						  <a href="assets/img/portfolio/g_industry6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets4"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="assets/img/portfolio/upstream2.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets2"]?></h4>
						  <a href="assets/img/portfolio/upstream2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets2"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<img src="assets/img/portfolio/refinery2.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets3"]?></h4>
						  <a href="assets/img/portfolio/refinery2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets3"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="assets/img/portfolio/g_industry1.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets4"]?></h4>
						  <a href="assets/img/portfolio/g_industry1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets4"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="assets/img/portfolio/upstream3.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets2"]?></h4>
						  <a href="assets/img/portfolio/upstream3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets2"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<img src="assets/img/portfolio/refinery1.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets3"]?></h4>
						  <a href="assets/img/portfolio/refinery1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets3"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<img src="assets/img/portfolio/refinery3.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets3"]?></h4>
						  <a href="assets/img/portfolio/refinery3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets3"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>

					  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="assets/img/portfolio/g_industry2.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets4"]?></h4>
						  <a href="assets/img/portfolio/g_industry2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets4"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>
					  
					  
					  <!--Filter Energy -->
					  <div class="col-lg-4 col-md-6 portfolio-item filter-energy">
						<img src="assets/img/portfolio/energy5.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets5"]?></h4>
						  <a href="assets/img/portfolio/energy5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets5"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>
					  
					  <div class="col-lg-4 col-md-6 portfolio-item filter-energy">
						<img src="assets/img/portfolio/energy8.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets5"]?></h4>
						  <a href="assets/img/portfolio/energy8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets5"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>
					  
					  
					  <div class="col-lg-4 col-md-6 portfolio-item filter-energy">
						<img src="assets/img/portfolio/energy9.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
						  <h4><?php echo $lang["section_markets5"]?></h4>
						  <a href="assets/img/portfolio/energy9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $lang["section_markets5"]?>"><i class="bx bx-plus"></i></a>
						  <!--
						  <a href="index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
						</div>
					  </div>
					  
					</div>
				</div>
			</section><!-- End Portfolio Section -->
		</main><!-- End #main -->

		<div class="section-title">
		  <h2><?php echo $lang["section_contact_title"]?></h2>
		</div>

		<div class="map-section">
			<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.33751272143!2d-64.69941958549519!3d10.15319619274624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d7322195b029d%3A0xce2e5246da96a5f4!2sCentro%20Comercial%20Do%C3%B1a%20Am%C3%A9rica!5e0!3m2!1ses-419!2sve!4v1591464082636!5m2!1ses-419!2sve" frameborder="0" allowfullscreen></iframe>
		</div>

		<section id="contact" class="contact">
			<div class="container">

				<div class="row justify-content-center" data-aos="fade-up">

				  <div class="col-lg-10">

					<div class="info-wrap">
					  <div class="row">
						<div class="col-lg-6 info">
						  <i class="icofont-google-map"></i>
						  <h4><?php echo $lang["section_contact1"]?></h4>
						  <p>Av. El Ejercito</p> <p>C.C. Doña America, Nivel PB, Local 4<br>Sector Nva. Barcelona</p>
						</div>

						<div class="col-lg-6 info mt-4 mt-lg-0">
						  <i class="icofont-envelope"></i>
						  <h4><?php echo $lang["section_contact2"]?></h4>
						  <p>ventas@rocasuministros.com</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>

				<div class="row mt-5 justify-content-center" data-aos="fade-up">
				  <div class="col-lg-10">
					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
					  <div class="form-row">
						<div class="col-md-6 form-group">
						  <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang["section_contact4"]?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
						  <div class="validate"></div>
						</div>
						<div class="col-md-6 form-group">
						  <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang["section_contact5"]?>" data-rule="email" data-msg="Please enter a valid email" />
						  <div class="validate"></div>
						</div>
					  </div>
					  <div class="form-group">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $lang["section_contact6"]?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
						<div class="validate"></div>
					  </div>
					  <div class="form-group">
						<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="<?php echo $lang["section_contact7"]?>"></textarea>
						<div class="validate"></div>
					  </div>
					  <div class="mb-3">
						<div class="loading">Loading</div>
						<div class="error-message"></div>
						<div class="sent-message">Your message has been sent. Thank you!</div>
					  </div>
					  <div class="text-center"><button type="submit"><?php echo $lang["section_contact8"]?></button></div>
					</form>
				  </div>
				</div>
			</div>
		</section><!-- End Contact Section -->




		<!-- ======= Footer ======= -->
		<footer id="footer">

			<div class="footer-top">
				<div class="container">
					<div class="row">

					  <div class="col-sm-6 footer-contact align-self-center">
						<h3><?php echo $lang["section_footer_title"]?></h3>
						<p>
						  Av. El Ejercito <br>
						  C.C. Doña America, Nivel PB, Local 4 <br>
						  Sector Nva. Barcelona<br>
						  Barcelona. Anzoategui <br><br>
						  <strong><?php echo $lang["section_footer2"]?></strong> ventas@rocasuministros.com<br>
						</p>
					  </div>

					  <div class="col-sm-6 footer-links align-self-center">
						<h4><?php echo $lang["section_footer3"]?></h4>
						<ul>
						  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $lang["section_footer4"]?></a></li>
						  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $lang["section_footer5"]?></a></li>
						  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $lang["section_footer6"]?></a></li>
						  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $lang["section_footer7"]?></a></li>
						  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $lang["section_footer8"]?></a></li>
						</ul>
					  </div>
					</div>
				</div>
			</div>

			<div class="container d-md-flex py-4">

				<div class="mr-md-auto text-center text-md-left">
					<div class="copyright">
					  &copy; 2020 <strong><span>ROCASUMINISTROS, C.A.</span></strong> All Rights Reserved
					</div>
				</div>
			</div>
		</footer><!-- End Footer -->

		<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

		<!-- Vendor JS Files -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="assets/vendor/php-email-form/validate.js"></script>
		<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/venobox/venobox.min.js"></script>
		<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
		<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="assets/vendor/aos/aos.js"></script>

		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>
	</body>
</html>