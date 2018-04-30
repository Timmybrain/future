<!DOCTYPE html>
<html>

<head>
	<title><?= (isset($page_title) ? $page_title . " | " : "") . $future->derive('site_title'); ?></title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Welcome to Education!" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="<?=$future->theme_assets?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=$future->theme_assets?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?=$future->theme_assets?>/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=$future->theme_assets?>/css/owl.theme.css" type="text/css" media="all">
	<link href="<?=$future->theme_assets?>/css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

		
</head>

<body>
	<!-- header -->
	<div class="header">
	<div class="agileits_top_menu">
		<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> <?=$future->derive('site_mobile')?></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?=$future->derive('site_email')?>"><?=$future->derive('site_email')?></a></li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-book" aria-hidden="true"></span> WINNERS <label>Advanced Success Academy</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html" class="effect-3">Home</a></li>
								<li><a href="about.html" class="effect-3">About</a></li>
								<li><a href="services.html" class="effect-3">Services</a></li>
								<li><a href="gallery.html" class="effect-3">Gallery</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Programs <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="ijmb.html">IJMB</a></li>
										<li><a href="jupeb.html">JUPEB</a></li>
										<li><a href="nabteb.html">NABTEB</a></li>
										<li><a href="sat.html">SAT</a></li>
										<li><a href="tofel.html">TOFEL</a></li>
										<li><a href="cambridge.html">CAMBRIDGE</a></li>
									</ul>
								</li>
								<li><a href="contact.html" class="effect-3">Contact</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Quality <span>Education</span></h3>
						<p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Qualified <span>Lecturers.</span></h3>
						<p>We get the best university lecturers and teaching experts to train our students!</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Unconventional Learning <span>Evironment</span></h3>
						<p>We pride on creating winners in all field of life. We are aware of the differences per student, so we tweak the class per student for optimum results.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Check the Result »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
		<!-- about -->
	<div class="agile-about w3ls-section text-center" id="about">
		<div class="container">
		<h3 class="heading-agileinfo">Welcome To <?=$f->derive('site_title')?><span>When Climbing The Carrer Ladder</span></h3>
			<div class="agileits-about-grid">
				<p>Since 2009, Winners Advanced Success Academy has been helping students win in all fields of life. 
				We yearly produce scholars in all major universities in the country. 
				Our students makes the best results out of their prestigious institutions and we are glad to help you too.</p>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-bottom -->
	<div class="agileits-about-btm">
		<div class="container">
			<div class="w3-flex">
			<div class="col-md-4 col-sm-4 col-xs-12 ab1 agileits-about-grid1">
				<span class="fa fa-desktop" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Learn Better</h4>
				<h5>IJMB</h5>
				<p>G.</p>
				<h5>JUPEB</h5>
				<p>Ncididunt ut labore et t enim ad minim.</p>
				<h5>UTME</h5>
				<p>We offer tutorial for the entrance examination to 100 level</p>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">
				<span class="fa fa-arrows  wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Secure Admission</h4>
				<h5>IJMB</h5>
				<p>Gain admission to 200 level of any course in university in Nigeria.</p>
				<h5>JUPEB</h5>
				<p>Ncididunt ut labore et t enim ad minim.</p>
				<h5>UTME</h5>
				<p>We offer tutorial for the entrance examination to 100 level</p>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
				<span class="fa fa-bar-chart  wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Be Outstanding</h4>
				<h5>Complexities of banking </h5>
				<p>Ncididunt ut labore et t enim ad minim.</p>
				<h5>Compliance regulations</h5>
				<p>Ncididunt ut labore et t enim ad minim.</p>
				<h5>Finance products</h5>
				<p>Ncididunt ut labore et t enim ad minim.</p>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->
<!-- stats -->
	<div class="stats">
		<div class="container">
		<h3 class="heading-agileinfo">Our Stats<span class="ttt">When Climbing The Carrer Ladder </span></h3>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h3>Graduates</h3>
				<p class="counter">1231</p>
				
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
				<span class="fa fa-user" aria-hidden="true"></span>
				<h3>Certified Staff</h3>
				<p class="counter">16</p>
				
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
				<span class="fa fa-users" aria-hidden="true"></span>
				<h3>Curret Student</h3>
				<p class="counter">563</p>
				
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<span class="fa fa-trophy" aria-hidden="true"></span>
				<h3>Awards</h3>
				<p class="counter">12</p>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //stats -->
	<!-- services -->
<div class="services">
		<h3 class="heading-agileinfo">What we offer<span>When Climbing The Carrer Ladder </span></h3>
	<div class="container">
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					<h4>Undergraduate Study</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-book" aria-hidden="true"></i>
					<h4>Professional Study</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-tasks" aria-hidden="true"></i>
					<h4>Programs</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-comment-o" aria-hidden="true"></i>
					<h4>Online Learning</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-bookmark-o" aria-hidden="true"></i>
					<h4>Summer Session</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<h4>Global Education</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->

	<!-- feedback -->
	<div class="feedback section-w3ls about-w3ls" id="testimonials">
		<div class="feedback-agileinfo">
			<div class="container">
				<h3 class="heading-agileinfo">Testimonials<span class="ttt">When Climbing The Carrer Ladder </span></h3>
				<div class="agileits-feedback-grids">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="<?=$future->theme_assets?>/images/test1.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Mary Jane</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="<?=$future->theme_assets?>/images/test3.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Peter</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="<?=$future->theme_assets?>/images/test2.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Steven</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="<?=$future->theme_assets?>/images/test3.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Mary Jane</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="<?=$future->theme_assets?>/images/test2.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Guptill</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="<?=$future->theme_assets?>/images/test1.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5> Wilson</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->
<!-- news -->
	<div class="news">
		<div class="container">  
				<h2 class="heading-agileinfo">News & Events<span>Exclusive Holidays for Any Travelers</span></h2>
			<div class="news-agileinfo"> 
				<div class="news-w3row"> 
					<div class="wthree-news-grids">
						<div class="col-md-5 col-xs-5 datew3-agileits">
							<img src="<?=$future->theme_assets?>/images/g7.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info ">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Sit amet justo vitae</a></h5>
							<h6>3/01/2018</h6>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="wthree-news-grids news-grids-mdl">
						<div class="col-md-5 col-xs-5 datew3-agileits datew3-agileits-fltrt">
							<img src="<?=$future->theme_assets?>/images/g10.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info datew3-agileits-info-fltlft">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Fusce scelerisque</a></h5>
							<h6>5/01/2018</h6>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //news -->

	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>About Us</h3>
				<p>Nam libero tempore cum vulputate id est id, pretium semper enim. Morbi viverra congue nisi vel pulvinar posuere sapien
					eros.
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Latest News</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><?=$f->derive('location')?></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?=$future->derive('site_email')?>"><?=$future->derive('site_email')?></a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?=$future->derive('site_mobile')?>"><?=$future->derive('site_mobile')?></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="footer_grids">
				<div class="col-md-4 footer_grid_left">
					<h3>Sign up for our Newsletter</h3>
				</div>
				<div class="col-md-8 footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
					<div class="footer_bottom1">
						<p>© <?=date('Y')?> Instruction. All rights reserved | Powered by <a href="http://fxnigeria.com">FutureX Media Inc.</a></p>
					</div>
		</div>
	</div>
	<!-- //footer -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Instruction</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g12.jpg" class="img-responsive" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="<?=$future->theme_assets?>/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?=$future->theme_assets?>/js/bootstrap.js"></script>
	<!-- stats -->
	<script src="<?=$future->theme_assets?>/js/jquery.waypoints.min.js"></script>
	<script src="<?=$future->theme_assets?>/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- owl carousel -->
	<script src="<?=$future->theme_assets?>/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				items: 3,
				itemsDesktop: [991, 2],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //owl carousel -->


</body>

</html>