<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<?php include 'header.php'; ?>
	<!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- my stylesheet -->
	<link rel="stylesheet" href="style.css">
	<style>
		#menu-majid{
			background: red;
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
		}
		#menu-majid li a{
			padding: 10px 50px;
			text-decoration: none;
			color: white;
			display: inline-block;
		}
		#menu-majid li a:hover{
			background: white;
			color: red;
		}
	</style>
</head>
<body>

	<!------------------------------
		top nav section start
	------------------------------>
	<div class="topnav">
		<div class="container custom-width">
			<div class="row pt-1">
				<div class="col-lg-5">
					<h5>বাংলাদেশ জাতীয় তথ্য বাতায়ন</h5>
				</div>
				<div class="col-lg-7 d-flex justify-content-end">
					<span>৪ আষাঢ়, ১৪২৯</span>
					<h5 class="px-3">|</h5>
					<a href="" class="text-white text-decoration-none">English</a>
				</div>
			</div>
		</div>
	</div>
	<!------------------------------
		top nav section end
	------------------------------>



	<!------------------------------
		logo section start
	------------------------------>
	<div class="logo">
		<div class="container custom-width">
			<div class="row">
				<div class="col-lg-4 py-2 logo-img">
					<a href="">
						<?php 
							if (has_custom_logo()) {
								the_custom_logo();
							}
							else{
								?>
									<img src="<?php echo get_theme_file_uri()."/assets/img/logo.jpg" ?>" alt="Logo" >
								<?php
							}
						 ?>

					</a>
				</div>
				<div class="col-lg-8 montronaloy1">
					<div class="row float-end">
						<div class="col-lg-12 pe-0">
							<div class="montronaloy">
								<div class="div1">
									<h5>৫৮</h5>
									<span>মন্ত্রণালয় <br> ও বিভাগ</span>
								</div>
								<div class="div2">
									<h5>৩৫৩</h5>
									<span>অধিদপ্তর <br> ও অন্যান্য</span>
								</div>
								<div class="div2">
									<h5>৮</h5>
									<span>বিভাগ</span>
								</div>
								<div class="div2">
									<h5>৬৪</h5>
									<span>জেলা</span>
								</div>
								<div class="div2">
									<h5>৪৯২</h5>
									<span>উপজেলা</span>
								</div>
								<div class="div2">
									<h5>৪৫৫৪</h5>
									<span>ইউনিয়ন</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-5 custom-margin">
						<div class="col-lg-7 offset-lg-2 pt-1 onushondhan">
							<input type="text" placeholder="খুঁজুন">
							<button>অনুসন্ধান </button>
							<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/a2i-logo-footer.png" alt=""></a>
						</div>
						<div class="col-lg-3">
							<div class="social">
								<span>সাথে থাকুন:</span>
								<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/facebook-icon.png" alt=""></a>
								<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/twitter-blue-icon.png" alt=""></a>
								<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/youtube-icon.png" alt=""></a>
								<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/gplus-icon.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------------------------------
		logo section end
	------------------------------>


	<!------------------------------
		navbar section start
	------------------------------>
	<?php wp_nav_menu(array(
			'theme_location'=>'primary_menu'
		)) ?>
	<nav class="navbar navbar-expand-lg navbar-light light-back container custom-width py-0 px-0 custom-margin mt-3">
		<div class="container-fluid px-0">
			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-dark active" aria-current="page" href="#">হোম</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">বাংলাদেশ সম্পর্কিত</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">ই-সেবাসমূহ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">সেবাখাত</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">ব্যবসা-বাণিজ্য</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">বৈদেশিক বিনিয়োগ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">আইন-বিধি</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">তথ্য বাতায়ন</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">সেবাকুঞ্জ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">ফরমস</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!------------------------------
		navbar section end
	------------------------------>

	<!------------------------------
		main section start
	------------------------------>
	<div class="main">
		<div class="container custom-width">
			<div class="row">
				<!-- leftbar start -->
				<div class="col-lg-8 ps-0 custom-padding">
					<!-- national image start -->
					<div class="national-img">
						<?php 
							if (is_active_sidebar("banner")) {
								dynamic_sidebar("banner");
							}
						 ?>
					</div>
					<!-- national image start -->

					<!-- slider start -->
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/slider/myGov Static2(1) (1).jpeg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/slider/333_gov.png" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/slider/6.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/slider/our_pride.png" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/slider/banner-renew-your-passport.png" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/slider/Banner-1.jpg" class="d-block w-100" alt="...">
					    </div>
					  </div>
					</div>
					<!-- slider end -->


					 <!-- Tab start -->
					<div class="tab mt-3 ms-2">
					  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">জনপ্রিয় সেবা</button>
					  <button class="tablinks" onclick="openCity(event, 'Paris')">নতুন সেবা</button>
					  <button class="tablinks" onclick="openCity(event, 'Tokyo')">মোবাইল সেবা</button>
					  <button class="tablinks" onclick="openCity(event, 'doptor')">দপ্তর ভিত্তিক সেবা</button>
					  <button class="tablinks" onclick="openCity(event, 'Tokyo')">সকল ই-সেবা</button>
					</div>

					<!-- Tab content -->
					<div id="London" class="tabcontent ms-2">
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					</div>

					<div id="Paris" class="tabcontent ms-2">
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					</div>

					<div id="Tokyo" class="tabcontent ms-2">
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					  <div class="tabdiv">
					  	<a href="">
					  		<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/tab/business.png" alt="">
					  		<p>অর্থ ও বাণিজ্য</p>
					  	</a>
					  </div>
					</div> 

					<div id="doptor" class="tabcontent ms-2">
						<div class="row">
							<div class="col-lg-4 p-2">
								<ul class="list-unstyled">
									<li><a href="">অর্থ বিভাগ, অর্থ মন্ত্রালয়</a></li>
									<li><a href="">আইন ও বিচার বিভাগ</a></li>
									<li><a href="">আরজেএসসিএফ</a></li>
									<li><a href="">ইমিগ্রেশন ও পাসপোর্ট অধিদপ্তর</a></li>
									<li><a href="">এটুআই</a></li>
									<li><a href="">এনএপিডি</a></li>
									<li><a href="">এনপিও</a></li>
									<li><a href="">ওয়াসা</a></li>
								</ul>
							</div>
							<div class="col-lg-4 p-2">
								<ul class="list-unstyled">
									<li><a href="">অর্থ বিভাগ, অর্থ মন্ত্রালয়</a></li>
									<li><a href="">আইন ও বিচার বিভাগ</a></li>
									<li><a href="">আরজেএসসিএফ</a></li>
									<li><a href="">ইমিগ্রেশন ও পাসপোর্ট অধিদপ্তর</a></li>
									<li><a href="">এটুআই</a></li>
									<li><a href="">এনএপিডি</a></li>
									<li><a href="">এনপিও</a></li>
									<li><a href="">ওয়াসা</a></li>
								</ul>
							</div>
							<div class="col-lg-4 p-2">
								<ul class="list-unstyled">
									<li><a href="">অর্থ বিভাগ, অর্থ মন্ত্রালয়</a></li>
									<li><a href="">আইন ও বিচার বিভাগ</a></li>
									<li><a href="">আরজেএসসিএফ</a></li>
									<li><a href="">ইমিগ্রেশন ও পাসপোর্ট অধিদপ্তর</a></li>
									<li><a href="">এটুআই</a></li>
									<li><a href="">এনএপিডি</a></li>
									<li><a href="">এনপিও</a></li>
									<li><a href="">ওয়াসা</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Tab end -->

					<!-- uddog start -->
					<div class="uddog mt-5 ms-3">
						<div class="row">
							<div class="col-lg-7">
								<span>উদ্যোগ</span>
								<ul class="list-unstyled">
									<li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>(১৩-০৬-২০১৬)</li>
									<li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>(১১-০৪-২০১৫)</li>
									<li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>(১১-০৪-২০১৫)</li>
									<li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>(১১-০৪-২০১৫)</li>
									<li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>(১১-০৪-২০১৫)</li>
									<li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>(১১-০৪-২০১৫)</li>
									<li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>(১১-০৪-২০১৫)</li>
								</ul>
								<button class="float-end">সকল</button>
							</div>
						</div>
					</div>
					<!-- uddog end -->

					<!-- images section start-->
					<div class="images mt-3 ms-3">
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/forms_portal_logo (1).png" alt=""></a>
					</div>
					<!-- images section end-->

					<!-- jonoprio section start -->
					<div class="jonoprio mt-5 ms-3">
							<span>জনপ্রিয়</span>
						<div class="row pt-2">
							<div class="col-lg-5">
								<h6 class="text-warning">সেবাসমূহ</h6>
								<ul type="square">
									<li><a href="">ই-টেন্ডারিং</a></li>
									<li><a href="">জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন</a></li>
									<li><a href="">আয়কর নিবন্ধন</a></li>
									<li><a href="">এসএসসি, দাখিল ও সমমানের পরীক্ষার ফলাফল</a></li>
									<li><a href="">অনলাইনে পাসপোর্টের আবেদন</a></li>
									<li><a href="">নতুন ভোটার নিবন্ধন</a></li>
									<li><a href="">অনলাইন ভিসা যাচাই</a></li>
									<li><a href="">কৃষি গবেষণা তথ্য ব্যবস্থাপনা ডাটাবেজ</a></li>
									<li><a href="">আল কুরআন</a></li>
									<li><a href="">সরকারি ফরমস</a></li>
								</ul>
							</div>
							<div class="col-lg-2">
								<h6 class="text-primary">পাতাসমূহ</h6>
							</div>
							<div class="col-lg-2">
								<h6 class="text-success">পোর্টালসমূহ</h6>
							</div>
						</div>
							<button class="float-end">আরও...</button>
					</div>
					<!-- jonoprio section end -->

					<!-- odhikar start -->
					<div class="odhikar mt-4">
						<div class="mydiv"><h3> আশ্রয়ণের অধিকার শেখ হাসিনার উপহার </h3></div>
						<div class="row mb-3 ms-1 mr-right">
							<div class="col-lg-4 border p-1">
								<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
							</div>
							<div class="col-lg-4 border p-1">
								<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
							</div>
							<div class="col-lg-4 border p-1">
								<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
							</div>
						</div>
						<div class="mydiv"><h3>  অন্যান্য ভিডিও  </h3></div>
						<div class="row mb-3 ms-1 mr-right">
							<div class="col-lg-4 border p-1">
								<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
								<p>ফল আর্মিওয়ার্ম পর্যবেক্ষণ ও সনাক্তকরণ</p>
							</div>
							<div class="col-lg-4 border p-1">
								<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
								<p>বন্যার সময় কি করণীয়</p>
							</div>
							<div class="col-lg-4 border p-1">
								<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
								<p>ভ্যাকসিনের জন্য নিবন্ধন করুন </p>
							</div>
						</div>
					</div>
					<!-- odhikar end -->
				</div>
				<!-- leftbar end -->

				<!-- rightbar start -->
				<div class="col-lg-4">
					<!-- rightbar image start -->
					<div class="rightsidebar-img">
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
					</div>
					<!-- rightbar image end -->

					<!-- shokol batayon start -->
					<div class="batayon mt-3">
						<h3>সকল বাতায়ন</h3>
						<select name="" id="">
							<option value="">ওয়েবসাইট বাছাই করুন</option>
							<option value="">মন্ত্রণালয়</option>
							<option value="">অধিদপ্তর </option>
							<option value="">ঢাকা বিভাগ </option>
						</select>
						<button>চলুন</button>

						<div class="mydiv mt-2"><h3> মুজিব১০০ আ্যাপ </h3></div>
						<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
						<div class="mydiv mt-2"><h3>মাস্ক পরুন সেবা নিন </h3></div>
						<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/mask-bd-portal (1).jpeg" alt="" class="myimg">
						<h3 class="bataton mt-3">ডেঙ্গু প্রতিরোধে করণীয় </h3>
						<img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/dengu.jpg" alt="" class="myimg">
						<h3 class="bataton mt-3 digital"> ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর </h3>
						<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
						<h3 class="bataton mt-3 digital"> রূপময় বাংলাদেশ </h3>
						<iframe src="http://localhost/rpl/wp-content/themes/newtheme/https://www.youtube.com/embed/l7G3TPz6P24" width="100%" frameborder="0"></iframe>
					</div>
					<!-- shokol batayon end -->
					<div class="rightsidebar-img">
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
						<a href=""><img src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/rightsidebar/bangladesh-portal--batton-bangla.png" alt=""></a>
					</div>
				</div>
				<!-- rightbar end -->
			</div>
			<!-- footer area start  -->
			<footer>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer"></div>
					</div>
				</div>
				<div class="row light-back py-3 myfooter">
					<div class="col-lg-8">
						<div class="footer-menu1">
							<ul class="list-unstyled">
								<li class="list-inline-item"><a href="">গোপনীয়তার নীতিমালা</a></li>
								<li class="list-inline-item"><a href="">ব্যবহারের শর্তাবলি</a></li>
								<li class="list-inline-item"><a href="">সার্বিক সহযোগিতায়</a></li>
								<li class="list-inline-item"><a href="">সাইট ম্যাপ</a></li>
								<li class="list-inline-item"><a href="">সচরাচর জিজ্ঞাসা</a></li>
							</ul>
						</div>
						<div class="footer-text" style="padding-top: 10px;">
                           <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: <span class="font-italic">২০২২-০৬-০৮ ০৮:৫২:৩৮</span></p>
						</div>
					</div>
					<div class="col-lg-4 ps-0 footer-col">
						<div class="footer-menu2">
							<ul class="list-unstyled">
								<p>পরিকল্পনা ও বাস্তবায়নে: </p>    
								<li class="list-inline-item"><a href="">এটুআই,</a></li>
								<li class="list-inline-item"><a href="">মন্ত্রিপরিষদ বিভাগ,</a></li>
								<li class="list-inline-item"><a href="">বিসিসি,</a></li>
								<li class="list-inline-item"><a href="">বেসিস,</a></li>
								<li class="list-inline-item"><a href="">ডিওআইসিটি</a></li>
							</ul>
						</div>
						<div class="footer-text2">
                           <div class="row">
                           	<div class="col-lg-4">
                           		<p>কারিগরি সহায়তায়:</p>
                           	</div>
                           	<div class="col-lg-8">
                           		<img class="img-fluid" src="http://localhost/rpl/wp-content/themes/newtheme/assets/img/np-logo-set.png" alt="">
                           	</div>
                           </div>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer area end  -->
		</div>
	</div>
	<!------------------------------
		main section end
	------------------------------>
	
	<script src="http://localhost/rpl/wp-content/themes/newtheme/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="http://localhost/rpl/wp-content/themes/newtheme/script.js"></script>
	<script>
		document.getElementById("defaultOpen").click();
	</script>
	<?php include 'footer.php'; ?>
</body>
</html>