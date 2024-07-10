<!DOCTYPE html>
<html lang="en">
<head>
	
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<link href="drai2/assets3/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="drai2/assets3/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="drai2/assets3/css/user.min.css" rel="stylesheet" id="user-style-default">
   
<style>
	.featured_tag
{ 
	background: #06A3DA; 
}

.home_slider_nav_container
{ 
	background: #06A3DA; 
}

.home_slider_nav
{ 
	background: #06A3DA; 
}
.featured_container
{
	width: 100%;
	padding-left: 0;
	margin-left: 135px;
	margin-top: -145px;
}
.course_body { 
    padding-left: 15px;
    padding-right: 15px; 
    background: #EEF9FF ;
}
.section_subtitle {
    font-size: 18px; 
}
.news_post_date { 
    color: #06A3DA; 
}
@media (min-width: 992px) {
	.ctn-service{
	margin:70px 0px;
}
}

@media only screen and (max-width: 991px)
{	.featured_container
	{
		padding-left: 0;
		margin-top: 60px;
		margin-left: 0;
	}
    .courses_slider_nav {
         display: inline; 
    }
	.courses_slider_next {
    right: -65px;
}

.courses_slider_prev {
    left: -65px;
}
}
</style>
</head>
<body>

<?php

include "components/mueller/index.php";
?>
<style>
	.s-header__block {
    z-index: 101;
    width: max-content;
}
</style>
<div class="super_container">

	<!-- Header -->


	<!-- Menu -->

	
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<!-- Background image artist https://unsplash.com/@benwhitephotography -->
					<div class="home_slider_background" style="background-image:url(images/carousel-2.jpg)"></div>
					<div style="background-color: #0000008a;position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 0; " class="backdrop"></div>
					<div class="home_container" style="z-index:500" >
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center" style="margin-top:-120px"> 
										<div class="home_text">
											<div class="home_title">Nous Sommes Une Clinique Dentaire Certifiée</div>
											<div class="home_subtitle">Notre clinique, reconnue par des certifications et récompenses prestigieuses, vous offre des soins dentaires fiables et de qualité supérieure.
											</div>
										</div>
										 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			 

				<!-- Slider Item -->
				<div class="owl-item">
					<!-- Background image artist https://unsplash.com/@benwhitephotography -->
					<div class="home_slider_background" style="background-image:url(images/carousel-1.jpg)"></div>
					<div style="background-color: #0000008a;position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 0; " class="backdrop"></div>
					<div class="home_container" style="z-index:500" >
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center" style="margin-top:-120px"> 
										<div class="home_text">
											<div class="home_title">Prenez Le Meilleur Traitement Dentaire</div>
											<div class="home_subtitle">Recevez des soins dentaires de la plus haute qualité avec des technologies de pointe et des techniques modernes pour garantir des résultats optimaux et durables</div>
										</div>
										 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
		</div>
	</div>

	<!-- Featured Course -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Home Slider Nav -->
					<div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
						<div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					</div>
					<div class="featured_container" style="  
">
						<div  style="background-color:#f2f1f8" class="row">
							<div class="col-lg-6 featured_col">
								<div class="featured_content">
									<div class="featured_header d-flex flex-row align-items-center justify-content-start">
										<div class="featured_tag"><a href="#">rendez-vous</a></div> 
									</div>
									<div class="featured_title"><h3><a href="#">Personnel Professionnel</a></h3></div>
									<div class="featured_text">Notre équipe est composée de professionnels hautement qualifiés et expérimentés, dédiés à fournir des soins dentaires exceptionnels et personnalisés.
									</div> 
								</div>
							</div>
							<div  class="col-lg-6 featured_col">
								<!-- Background image artist https://unsplash.com/@jtylernix -->
								<div class="featured_background" style="background-image:url(images/Team.webp)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	
</div>


<div class="container ctn-service">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Nos Services</h2></div>
					<div class="section_subtitle">Explorez l’ensemble de nos services dentaires, incluant la prévention, les soins esthétiques, les traitements restaurateurs et les interventions chirurgicales, pour répondre à tous vos besoins dentaires.</div>
					
				</div>
			</div>
</div>
				

<?php

include "components/Green/index.php"; 

?>

<!-- Courses -->

<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Plan Tarifaire</h2></div>
					<div class="section_subtitle">Consultez nos plans tarifaires transparents et compétitifs, avec des options de paiement flexibles pour rendre les soins dentaires accessibles à tous. 
					</div>
				</div>
			</div>
	 
			<div class="row">
				<div class="col">
					
					<!-- Courses Slider -->
					<div class="courses_slider_container">
						<div class="owl-carousel owl-theme courses_slider">
							
							<!-- Slider Item -->
							<div class="owl-item" style="background:#EEF9FF">
								<div class="course">
									<div class="course_image"><img style=" height: 270px;" src="images/service-1.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="#">services</a></div>
											<div class="course_price ml-auto">Price: <span>5000 fcfa</span></div>
										</div>
										<div class="course_title"><h3><a href="#">Dental Bridges
										</a></h3></div>
										<div class="course_text">
										<ul class="">
										<li><a href="#">Modern Equipment</a></li>
										<li><a href="#">Professional Dentist</a></li>
										<li><a href="#">24/7 Call Support</a></li>
										</ul>
									</div>
										<div  class="course_footer d-flex align-items-center justify-content-start">
  											<div style="margin:0" class="course_author_name">call for  <a href="#">appointment</a></div>
											<div class="course_sales ml-auto" style="  font-size: 13px; "><span>+237</span> 699 99 99 99</div>
										</div>
									</div>
								</div>
							</div>
 
							
							<!-- Slider Item -->
							<div class="owl-item" style="background:#EEF9FF">
								<div class="course">
									<div class="course_image"><img style=" height: 270px;" src="images/after.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="#">services</a></div>
											<div class="course_price ml-auto">Price: <span>15000 fcfa</span></div>
										</div>
										<div class="course_title"><h3><a href="#">Teeth Whitening
										</a></h3></div>
										<div class="course_text">
										<ul class="">
										<li><a href="#">Modern Equipment</a></li>
										<li><a href="#">Professional Dentist</a></li>
										<li><a href="#">24/7 Call Support</a></li>
										</ul>
									</div>
										<div  class="course_footer d-flex align-items-center justify-content-start">
  											<div style="margin:0" class="course_author_name">call for  <a href="#">appointment</a></div>
											<div class="course_sales ml-auto" style="  font-size: 13px; "><span>+237</span> 699 99 99 99</div>
										</div>
									</div>
								</div>
							</div>
 
							
							<!-- Slider Item -->
							<div class="owl-item" style="background:#EEF9FF">
								<div class="course">
									<div class="course_image"><img style=" height: 270px;" src="images/price-3.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="#">services</a></div>
											<div class="course_price ml-auto">Price: <span>10000 fcfa</span></div>
										</div>
										<div class="course_title"><h3><a href="#">Dental Implants
										</a></h3></div>
										<div class="course_text">
										<ul class="">
										<li><a href="#">Modern Equipment</a></li>
										<li><a href="#">Professional Dentist</a></li>
										<li><a href="#">24/7 Call Support</a></li>
										</ul>
									</div>
										<div  class="course_footer d-flex align-items-center justify-content-start">
  											<div style="margin:0" class="course_author_name">call for  <a href="#">appointment</a></div>
											<div class="course_sales ml-auto" style="  font-size: 13px; "><span>+237</span> 699 99 99 99</div>
										</div>
									</div>
								</div>
							</div>
 
							
							<!-- Slider Item -->
							<div class="owl-item" style="background:#EEF9FF">
								<div class="course">
									<div class="course_image"><img style=" height: 270px;" src="images/price-2.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="#">services</a></div>
											<div class="course_price ml-auto">Price: <span>20000 fcfa</span></div>
										</div>
										<div class="course_title"><h3><a href="#">Cosmetic Dentistry
										</a></h3></div>
										<div class="course_text">
										<ul class="">
										<li><a href="#">Modern Equipment</a></li>
										<li><a href="#">Professional Dentist</a></li>
										<li><a href="#">24/7 Call Support</a></li>
										</ul>
									</div>
										<div  class="course_footer d-flex align-items-center justify-content-start">
  											<div style="margin:0" class="course_author_name">call for  <a href="#">appointment</a></div>
											<div class="course_sales ml-auto" style="  font-size: 13px; "><span>+237</span> 699 99 99 99</div>
										</div>
									</div>
								</div>
							</div>
 
						</div>
						
						<!-- Courses Slider Nav -->
						<div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Sections -->

	<div class="grouped_sections">
		<div class="container">
			<div class="row">

				<!-- Why Choose Us -->

				<div class="col-lg-4 grouped_col">
					<div class="grouped_title">Why Choose Us?</div>
					<div class="accordions">

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center active"><div>Technologie de Pointe</div></div>
							<div class="accordion_panel">
								<div>
									<p>Notre clinique est équipée des dernières innovations en matière de technologie dentaire, telles que les scanners intra-oraux, l'imagerie 3D, et les lasers dentaires.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Personnel Hautement Qualifié</div></div>
							<div class="accordion_panel">
								<div>
									<p>Notre équipe comprend des dentistes diplômés des meilleures universités, avec des spécialisations variées telles que l'orthodontie, la parodontologie, et la chirurgie buccale</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Approche Personnalisée des Soins</div></div>
							<div class="accordion_panel">
								<div>
									<p>Nous offrons des plans de traitement individualisés basés sur les besoins spécifiques et les préférences de chaque patient</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Ambiance Conviviale et Relaxante</div></div>
							<div class="accordion_panel">
								<div>
									<p>Notre clinique est conçue pour offrir un environnement apaisant avec des salles d'attente confortables, des équipements de divertissement et une décoration chaleureuse.
									</p>
								</div>
							</div>
						</div>

					</div>

				</div>

				<!-- Events -->

				<div class="col-lg-4 grouped_col">
					<div class="grouped_title">Upcoming Events</div>
					<div class="events">

						<!-- Event -->
						<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">20</div>
									<div class="event_month">Janvier</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Journées Portes Ouvertes</a></div>
								<div class="event_subtitle">Location: Bafoussam</div>
							</div>
						</div>

						<!-- Event -->
						<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">23</div>
									<div class="event_month">Mars</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Ateliers de Prévention Dentaire</a></div>
								<div class="event_subtitle">Location: Bafoussam</div>
							</div>
						</div>

						<!-- Event -->
						<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">25</div>
									<div class="event_month">April</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Conférences avec des Experts</a></div>
								<div class="event_subtitle">Location: Bafoussam</div>
							</div>
						</div>

						<!-- Event -->
						<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">27</div>
									<div class="event_month">Juin</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Séances de Dépistage Gratuit</a></div>
								<div class="event_subtitle">Location: Bafoussam</div>
							</div>
						</div>

						<!-- Event -->
						<div class="event d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">29</div>
									<div class="event_month">Aout</div>
								</div>
							</div>
							<div class="event_body">
								<div class="event_title"><a href="#">Concours de Souriant</a></div>
								<div class="event_subtitle">Location: Bafoussam</div>
							</div>
						</div>

					</div>
				</div>

				<!-- News -->

				<div class="col-lg-4 grouped_col">
					<div class="grouped_title">Latest News</div>
					<div class="news">
						
						<!-- News Post -->
						<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_1.jpg" alt="https://unsplash.com/@beccatapert"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">April 02, 2024</div>
								<div class="news_post_title"><a href="#">Ateliers pour Enfants</a></div>
								<div class="news_post_author">événements éducatifs amusants pour les enfants, mettant l'accent sur l'importance de la santé dentaire.</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_2.jpg" alt="https://unsplash.com/@nbb_photos"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">juillet 02, 2024</div>
								<div class="news_post_title"><a href="#">Journée de Bénévolat Communautaire</a></div>
								<div class="news_post_author">activités communautaires, des campagnes de nettoyage et initiatives de santé publique</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_3.jpg" alt="https://unsplash.com/@rawpixel"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">septembre 02, 2024</div>
								<div class="news_post_title"><a href="#">Partenariats avec des Entreprises Locales</a></div>
								<div class="news_post_author">réductions spéciales et des forfaits de soins dentaires pour leurs employés</div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-row align-items-start justify-content-start">
							<div><div class="news_post_image"><img src="images/news_4.jpg" alt="https://unsplash.com/@jtylernix"></div></div>
							<div class="news_post_body">
								<div class="news_post_date">Decembre 02, 2024</div>
								<div class="news_post_title">Expositions de Santé et Bien-Être</div>
								<div class="news_post_author">foires locales de santé où nous présentons nos services et effectuons des démonstrations en direct.</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
  h5{
    margin:0;
  }
</style>
	<?php

include "components/drai2/index.php"; 

?>





<?php

include "components/mueller/css.php"; 
// include "components/Green/css.php"; 
?>



 
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- About -->
			 
				
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Us</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Address:</div>
								<div class="footer_contact_line">bafoussam</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Phone:</div>
								<div class="footer_contact_line">+237 699 99 99 99</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Email:</div>
								<div class="footer_contact_line">yourmail@gmail.com</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">menu</div>
						<ul class="footer_list">
							<li><a href="index.html">acceuil</a></li>
							<li><a href="#">services</a></li>
							<li><a href="#">tarification</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>

<div class="col-lg-3 footer_col">
	<div class="footer_links">
		<div class="footer_title">lien utiles</div>
		<ul class="footer_list">
			<li><a href="index.html">acceuil</a></li>
			<li><a href="#">services</a></li>
			<li><a href="#">tarification</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">reseau sociaux</div>
						<ul class="footer_list">
							 
						<li> <div class="footer_contact_title"><i class="fa fa-facebook" aria-hidden="true"></i>facebook</div></li>
						<li> <div class="footer_contact_title"><i class="fa fa-google-plus" aria-hidden="true"></i>google</div></li>
						<li> <div class="footer_contact_title"><i class="fa fa-twitter" aria-hidden="true"></i>twitter</div></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<!-- <script src="styles/bootstrap4/popper.js"></script> -->
<!-- <script src="styles/bootstrap4/bootstrap.min.js"></script> -->
<!-- <script src="plugins/greensock/TweenMax.min.js"></script> -->
<!-- <script src="plugins/greensock/TimelineMax.min.js"></script> -->
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<!-- <script src="plugins/greensock/animation.gsap.min.js"></script> -->
<!-- <script src="plugins/greensock/ScrollToPlugin.min.js"></script> -->
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<!-- <script src="plugins/easing/easing.js"></script> -->
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>