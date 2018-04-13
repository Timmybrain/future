<?php
$post_title = "Home";
require dirname(__DIR__) . "/includes/umca.header.php";
?>
<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
	
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<!-- Header Section -->
	<header class="header_s header_s1">
		<!-- SidePanel -->
		<div id="slidepanel">
			
			<!-- Top Header -->
			<div class="container-fluid no-right-padding no-left-padding top-header">
				<!-- Container -->
				<div class="container">						
					<div class="top-left">
						<p><i class="fa fa-map-marker"></i>Off University Road, Tanke,Ilorin, Kwara State, Nigeria</p>
						<p><i class="fa fa-phone"></i> Mobile: <a href="tel:123045670890">+234-703-3661-965</a></p>
					</div>
					<div class="top-login">
						<p><i class="fa fa-user"></i><a href="/admin/login.php" title="Login">Login</a></p>
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
		</div><!-- SidePanel /- -->

		
		<!-- Ownavigation -->
		<nav class="navbar ownavigation">
			<!-- Container -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="<?=$future->theme_assets?>/images/logo.png" alt="logo" height="75" width="75"></a>
				</div>
				<div class="submit-btn">
					<a href="#" title="SignUp">Register as Member</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="index.html" title="Home">Home</a>
							<!--i class="ddl-switch fa fa-user"></i>
							<ul class="dropdown-menu">
								<li><a href="index.html" title="Homepage 01">Homepage 01</a></li>
								<li><a href="index.html" title="Homepage 02">Homepage 02</a></li>
							</ul-->
						</li>
						<li><a href="leadership.html" title="Leadership">LeaderShip</a></li>
						<li class="dropdown">
							<a href="fellowships.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Fellowships</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="mensFellowships.html" title="Men's Fellowship">Men's Fellowship</a></li>
								<li><a href="ladiesFELLOWSHIP.html" title="Services List">Ladies's Fellowship</a></li>
								<li><a href="fellowships.html" title="Services">Couple's Koinonia</a></li>
								<li><a href="foyca.html" title="Fellowship of Young Christain Adult">FOYCA</a></li>
								<li><a href="fellowships.html" title="Services">Youth Fellowship</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="department.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Departments</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="#" title="Media/Technical">Media/Technical</a></li>
								<li><a href="#" title="Christian Faith in Action">CFIA</a></li>
								<li><a href="#" title="Membership">Membership</a></li>
								<li><a href="#" title="Ordinance">Ordinance</a></li>
								<li><a href="#" title="Sunday School">Sunday School</a></li>
							</ul>
						</li>
						<li><a href="aboutus.html" title="About">About</a></li>
						<!--li><a href="contactus.html" title="Contact Us">Contact</a></li-->
					</ul>
				</div>
				<div id="loginpanel" class="desktop-hide">
					<div class="right" id="toggle">
						<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
						<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
					</div>
				</div>
			</div><!-- Container /- -->
		</nav><!-- Ownavigation /- -->
		
	</header><!-- Header Section /- -->	
	<!-- Page Banner -->
		<div class="container-fluid no-left-padding no-right-padding page-banner">
			<!-- Container -->
			<div class="container" style="height: 30vh">
				<!--h3>OUR LEADERS</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Pastors</li>
				</ol-->
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->

	<div class="main-container">
	
		<main class="site-main">		
	
			<!-- Features Section -->
			<div style="background: radial-gradient(#fff,#f2f2f2,#fff);padding: 4px 5px;border: 1px solid #f2f2f2;border-radius: 9px;margin: 0 0 0 25%;width: 48%;box-shadow: 2px 2.5px 8px #e6e6e6 "><h1 style="text-align: center; color: darkred;font-weight: bolder;text-shadow: 2.5px 1.5px 1.5px grey;font-size: 45px;z-index: 1" id="event">OUR EVENTS</h1></div>
			<div class="container-fluid no-left-padding no-right-padding features-section">
				<!-- Container -->
				<div class="container">
					<div class="feature-carousel">
						<div class="col-md-12">
							<div class="feature-box">
								<div class="feature-img-box">
									<img src="<?=$future->theme_assets?>/images/feature-1.jpg" alt="Features" />
									<div class="feature-content">
										<li class="fa fa-book"></i>
										<p>Accountability Compliant Family.</p>
										<a href="#" title="Read More">Read More <i class="arrow_right"></i></a>
									</div>
								</div>
								<h4>Accountability Compliant Family.</h4>
							</div>
						</div>
						<div class="col-md-12">
							<div class="feature-box">
								<div class="feature-img-box">
									<img src="<?=$future->theme_assets?>/images/feature-3_1.jpg" alt="Features" />
									<div class="feature-content">
										<li class="fa fa-book"></i>
										<p>As men who must give account</p>
										<a href="#" title="Read More">Read More <i class="arrow_right"></i></a>
									</div>
								</div>
								<h4><b>2017 Theme:</b> As men who must give account</h4>
							</div>
						</div>
						<div class="col-md-12">
							<div class="feature-box">
								<div class="feature-img-box">
									<img src="<?=$future->theme_assets?>/images/holding.jpg" alt="Features" />
									<div class="feature-content">
										<li class="fa fa-book"></i>
										<p>Holding fast the WORD of life.</p>
										<a href="#" title="Read More">Read More <i class="arrow_right"></i></a>
									</div>
								</div>
								<h4><b>2018 Theme:</b> Holding fast the WORD of life.</h4>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Features Section /- -->


			
			<!-- About Section -->
			<div class="container-fluid no-left-padding no-right-padding about-section">
				<div class="about-img-block col-md-6 col-xs-12 no-left-padding no-right-padding" data-image="<?=$future->theme_assets?>/images/about-image.jpg">
				</div>
				<!-- Container -->
				<div class="container">
					<div class="col-md-offset-6 col-md-6 col-xs-12 about-content">
						<!-- Section Header -->
						<div class="section-header">
							<h3>ABOUT US</h3>
						</div><!-- Section Header /- -->
						<div class="about-details">
							<div class="about-details-box">
								<i><img src="<?=$future->theme_assets?>/images/about-cnt-icon-3.png" alt="Icon" /></i>
								<h4>Our History</h4>
								<p>To Preach Christ as the only Savior, Provide Rich Christian Fellowship, Bring Believers to Maturity and Equip them for Ministry in the Church and Mission to the World in Order to Magnify the Lord.</p>
							</div>
							<div class="about-details-box">
								<i><img src="<?=$future->theme_assets?>/images/about-cnt-icon-2.png" alt="Icon" /></i>
								<h4>Our Mission</h4>
								<p>To Preach Christ as the only Savior, Provide Rich Christian Fellowship, Bring Believers to Maturity and Equip them for Ministry in the Church and Mission to the World in Order to Magnify the Lord..</p>
							</div>
							<div class="about-details-box">
								<i><img src="<?=$future->theme_assets?>/images/about-cnt-icon-3.png" alt="Icon" /></i>
								<h4>Our Vision</h4>
								<p>To Preach Christ as the only Savior, Provide Rich Christian Fellowship, Bring Believers to Maturity and Equip them for Ministry in the Church and Mission to the World in Order to Magnify the Lord..</p>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- About Section /- -->
			
			<!-- Services Section -->
			<div class="container-fluid no-left-padding no-right-padding services-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header text-center">
						<h3 style="color: #B89B5E">OUR WEEEKLY SERVICES</h3>
					</div><!-- Section Header /- -->
					<!-- Nav tabs -->
					<ul class="nav nav-tabs srv-tab" role="tablist">
						<li role="presentation" class="active">
							<a href="#sunday-service" title="Sunday Service" aria-controls="family" role="tab" data-toggle="tab">
								<span><i><img src="<?=$future->theme_assets?>/images/services-icon-1.png" alt="Icon" /></i>SUNDAY SERVICE</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#wednesday-service" title="Wednesday Service" aria-controls="wednesday-service" role="tab" data-toggle="tab">
								<span><i><img src="<?=$future->theme_assets?>/images/services-icon-1.png" alt="Icon" /></i>WEDNESDAY SERVICE</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#friday-service" title="Friday Service" aria-controls="accident" role="tab" data-toggle="tab">
								<span><i><img src="<?=$future->theme_assets?>/images/services-icon-1.png" alt="Icon" /></i>FRIDAY REHEARSAL</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#saturday-service" title="Sturday Service" aria-controls="saturday-service" role="tab" data-toggle="tab">
								<span><i><img src="<?=$future->theme_assets?>/images/services-icon-1.png" alt="Icon" /></i>SATURDAY REHEASAL</span>
							</a>
						</li>
					</ul>
				</div><!-- Container /- -->
			<!-- Faq And Appointment Form -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Faq Section -->
					<div class="col-md-6 col-xs-12 faq-section">
						<!-- Section Header -->
						<div class="section-header">
							<h3 style="color: #999">frequently asked question</h3>
						</div><!-- Section Header /- -->
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading1">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">What do I need to be save?</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
									<div class="panel-body">
										<i><img src="<?=$future->theme_assets?>/images/faq-img.jpg" alt="Faq" /></i>
										<p>Being save is as simple as ABC. Accept Jesus as your personal lord and saviour, Believe in him with all your heart and Confess all your sins.Being save is as simple as ABC. Accept Jesus as your personal lord and saviour, Believe in him with all your heart and Confess all your sins.</p>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading2">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true">How do I accept this Jesus?</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
									<div class="panel-body">
										<i><img src="<?=$future->theme_assets?>/images/faq-img.jpg" alt="Faq" /></i>
										<p>Being save is as simple as ABC. Accept Jesus as your personal lord and saviour, Believe in him with all your heart and Confess all your sins.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading3">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true">Do you believe in trinity?</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
									<div class="panel-body">
										<i><img src="<?=$future->theme_assets?>/images/faq-img.jpg" alt="Faq" /></i>
										<p>Being save is as simple as ABC. Accept Jesus as your personal lord and saviour, Believe in him with all your heart and Confess all your sins.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading4">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true">Any criteria to become a member?</a>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
									<div class="panel-body">
										<i><img src="<?=$future->theme_assets?>/images/faq-img.jpg" alt="Faq" /></i>
										<p>Being save is as simple as ABC. Accept Jesus as your personal lord and saviour, Believe in him with all your heart and Confess all your sins.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- Faq Section /- -->
					<!-- Appointment Form -->
					<div class="col-md-6 col-xs-12 appointment-form-section">
						<!-- Section Header -->
						<div class="section-header">
							<h3 style="color: #999">Believers Database</h3>
						</div><!-- Section Header /- -->
						<div class="book-appointment-form">
							<form>
								<div class="form-group col-md-12">
									<input type="text" placeholder="Enter Your Name*" class="form-control" />
								</div>
								<div class="form-group col-md-12">
									<input type="tel" placeholder="Contact Address*" class="form-control" />
								</div>
								<div class="form-group col-md-6">
									<div class='date' id='datetimepicker1'>
										<input type='tel' class="form-control" placeholder="Phone Number" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<select class="selectpicker">
										<option>What You Do</option>
										<option>Student</option>
										<option>Private Bussiness</option>
										<option>Civil Servant</option>
										<option>Others</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<div class='date' id='datetimepicker1'>
										<input type='date' class="form-control" placeholder="" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<select class="selectpicker">
										<option>Sex</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<input type="text" placeholder="Prayer Request/Heart Desire*" class="form-control" />
								</div>
								<div class="form-group col-md-12">
									<input type="submit" name="submit" value="Join Believers" />
									<span style="margin-left: 25%"></span>><input type="submit" name="login" value="Login As Member" />
								</div>
							</form>
						</div>
					</div><!-- Appointment Form /- -->
				</div><!-- Row /- -->
			</div><!-- Faq And Appointment Form /- -->
			
			<!-- Counter Section -->
			<div class="container-fluid no-left-padding no-right-padding counter-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header text-center">
						<h3>DATA SUMMARY</h3>
					</div><!-- Section Header /- -->
					<div class="skill-progress">
						<div class="col-md-3 col-xs-4 skill-box">	
							<div class="skill-icon">
								<input class="dial" data-angleOffset="210" data-angleArc="360" data-animation="fade-in" data-fgColor="#b89b5e" data-bgcolor="rgba(0,0,0,0)" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".1" data-value="65" data-width="90" data-height="90" type="text" value="0"/>
								<i><img src="<?=$future->theme_assets?>/images/counter-icon-1.png" alt="Counter" /></i>
							</div>
							<h3 id="skill_count-1" data-skills_percent="6">%</h3>
							<h4>Pastors</h4>
						</div>
						<div class="col-md-3 col-xs-4 skill-box">		
							<div class="skill-icon">
								<input class="dial" data-angleOffset="210" data-angleArc="360" data-animation="fade-in" data-fgColor="#b89b5e" data-bgcolor="rgba(0,0,0,0)" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".1" data-value="75" data-width="90" data-height="90" type="text" value="0" />
								<i><img src="<?=$future->theme_assets?>/images/counter-icon-2.png" alt="Counter" /></i>
							</div>
							<h3 id="skill_count-2" data-skills_percent="25">%</h3>
							<h4>Sermons</h4>
						</div>
						<div class="col-md-3 col-xs-4 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="210" data-angleArc="360" data-animation="fade-in" data-fgColor="#b89b5e" data-bgcolor="rgba(0,0,0,0)" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".1" data-value="50" data-width="90" data-height="90" type="text" value="0" />
								<i><img src="<?=$future->theme_assets?>/images/counter-icon-2.png" alt="Counter" /></i>
							</div>
							<h3 id="skill_count-3" data-skills_percent="12">%</h3>
							<h4>Units</h4>
						</div>
						<div class="col-md-3 col-xs-4 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="210" data-angleArc="360" data-animation="fade-in" data-fgColor="#b89b5e" data-bgcolor="rgba(0,0,0,0)" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".1" data-value="65" data-width="90" data-height="90" type="text" value="0" />
								<i><img src="<?=$future->theme_assets?>/images/counter-icon-1.png" alt="Counter" /></i>
							</div>
							<h3 id="skill_count-4" data-skills_percent="5">%</h3>
							<h4>Fellowship</h4>
						</div>
						<div class="col-md-3 col-xs-4 skill-box">
							<div class="skill-icon">
								<input class="dial" data-angleOffset="210" data-angleArc="360" data-animation="fade-in" data-fgColor="#b89b5e" data-bgcolor="rgba(0,0,0,0)" data-delay="0" data-linecap="square" data-readonly="true" data-displayinput="false" data-thickness=".1" data-value="75" data-width="90" data-height="90" type="text" value="0" />
								<i><img src="<?=$future->theme_assets?>/images/counter-icon-3.png" alt="Counter" /></i>
							</div>
							<h3 id="skill_count-5" data-skills_percent="2">%</h3>
							<h4>Schools/Colleges</h4>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Counter Section /- -->
			
			
			
			<!-- Testimonial Section -->
			<div class="container-fluid no-left-padding no-right-padding testimonial-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header text-center">
						<h3>TESTIMONIES</h3>
					</div><!-- Section Header /- -->
					<div class="col-md-offset-2 col-md-8 no-left-padding no-right-padding">
						<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="testimonial-content">
										<div class="testimonial-box">
											<i><img src="<?=$future->theme_assets?>/images/male.jpg" alt="Testifier" /></i>
											<h4>Ladejobi Blessing</h4>
											<span>Student</span>
											<ul>
												<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" title="Pinterest"><i class="fa fa-whatsapp"></i></a></li>
											</ul>
										</div>
										<p>I thank God for his protection, provision and his love for me. I thank him for the salvation of my soul and for the way he has been helping me to walk in his path.</p>
									</div>
								</div>
								<div class="item">
									<div class="testimonial-content">
										<div class="testimonial-box">
											<i><img src="<?=$future->theme_assets?>/images/female.png" alt="Testi" /></i>
											<h4>Busola <br/>Oloshunde</h4>
											<span>Student</span>
											<ul>
												<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" title="Pinterest"><i class="fa fa-whatsapp"></i></a></li>
											</ul>
										</div>
										<p>I thank God for his protection, provision and his love for me. I thank him for the salvation of my soul and for the way he has been helping me to walk in his path.</p>
									</div>
								</div>
								<div class="item">
									<div class="testimonial-content">
										<div class="testimonial-box">
											<i><img src="<?=$future->theme_assets?>/images/male.jpg" alt="Testi" /></i>
											<h4>Omotosho Jesulayomi</h4>
											<span>Student</span>
											<ul>
												<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" title="Pinterest"><i class="fa fa-whatsapp"></i></a></li>
											</ul>
										</div>
										<p>I thank God for his protection, provision and his love for me. I thank him for the salvation of my soul and for the way he has been helping me to walk in his path.</p>
									</div>
								</div>
								<div class="item">
									<div class="testimonial-content">
										<div class="testimonial-box">
											<i><img src="<?=$future->theme_assets?>/images/female.png" alt="Testi" /></i>
											<h4>Adeyanju Mosunmola</h4>
											<span>Student</span>
											<ul>
												<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#" title="Pinterest"><i class="fa fa-whatsapp"></i></a></li>
											</ul>
										</div>
										<p>I thank God for his protection, provision and his love for me. I thank him for the salvation of my soul and for the way he has been helping me to walk in his path.</p>
									</div>
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
								<i class="arrow_left"></i>
							</a>
							<a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
								<i class="arrow_right"></i>
							</a>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Testimonial Section /- -->
			
			<!-- Client Section -->
			<div class="container-fluid no-left-padding no-right-padding client-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header text-center">
						<h3 style="color: #000080">Bussiness Advert</h3>
					</div><!-- Section Header /- -->
					<!-- Client Carousel -->
					<div class="client-carousel">
						<div class="client-item">
							<a href="#"><img src="<?=$future->theme_assets?>/images/advert/writer1.png" alt="Client" /></a>
						</div>
						<div class="client-item">
							<a href="#"><img src="<?=$future->theme_assets?>/images/advert/art1.jpg" alt="Client" /></a>
						</div>
					</div><!-- Client Carousel /- -->
				</div><!-- Container /- -->
			</div><!-- Client Section /- -->
			
			<!-- Newsletter Section -->
			<div class="container-fluid no-left-padding no-right-padding newsletter-section">
				<!-- Container -->
				<div class="container">
					<div class="newsletter-box">
						<h3>THOUGHTS</h3>
						<p>The Church is not a place to put ourselves on display so that others can admire our spirituality,capacity or prosperity.</p>
						<form>
							<div class="form-group">
								<!--i class="fa fa-envelope-o"></i>
								<input type="text" class="form-control" placeholder="Your email address" /-->
							</div>
							<input type="submit" value="Join" />
						</form>
					</div>
				</div><!-- Container -->
			</div><!-- Newsletter Section /- -->
			
		</main>

	</div>
	
	<!-- Footer Main -->
	<footer id="footer-main" class="container-fluid no-left-padding no-right-padding footer-main">
		<!-- Top Footer -->
		<div class="container-fluid no-left-padding no-right-padding top-footer">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
				
					<!-- Widget About -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<aside class="widget widget_about">
							<h2 class="widget-title" style="color: #b89b5e;">PRAYER MEETING</h2>
							<img src="<?=$future->theme_assets?>/images/ftr-abt-img.jpg" alt="Image" title="umca chapel Tanke" height="130px" width="250px" />
							<p>Join us every Wednesday as we pray to author and finisher of our faith in one accord.</p>
						</aside>
					</div><!-- Widget About /- -->
					
					<!-- Widget Links -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<aside class="widget widget_latestposts">
							<h3 class="widget-title">LATEST ARTICLES</h3>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/medal.png" class="wp-post-image" alt="medal-img" title="medal" width="60" height="60"></i></a>
								<h5><a title="#" href="medals.html">WHAT CAN I OFFER YOU?</a></h5>
								<span><a href="#">September 30,2017</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/wot.jpg" class="wp-post-image" alt="blog-1"></i></a>
								<h5><a title="" href="#">Holding fast the word of truth</a></h5>
								<span><a href="#">October 12,2017</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-2.jpg" class="wp-post-image" alt="blog-1" width="90" height="90"></i></a>
								<h5><a title="" href="changeAgent.html">Death - The Change Agent</a></h5>
								<span><a href="#">November 24,2017</a></span>
							</div>
						</aside>
					</div><!-- Widget Links /- -->
					
					<!-- Widget Latest Post -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<aside class="widget widget_latestposts">
							<h3 class="widget-title">Drama Ministration</h3>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-3.jpg" class="wp-post-image" alt="blog-3" height="70" width="65"></i></a>
								<h5><a title="#" href="#">The Reflection</a></h5>
								<span><a href="#">September 30,2017</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/practice-6.jpg" class="wp-post-image" alt="blog-1" height="70" width="70"></i></a>
								<h5><a title="" href="#">What will you say?</a></h5>
								<span><a href="#">October 12,2017</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-1.jpg" class="wp-post-image" alt="blog-1" height="70" width="75"></i></a>
								<h5><a title="#" href="#">Great King</a></h5>
								<span><a href="#">November 24,2017</a></span>
							</div>
						</aside>
					</div><!-- Widget Latest Post -->
					
					<!-- Widget Latest Tweets -->
					<!-- <div class="col-md-3 col-sm-6 col-xs-6">
						<aside class="widget widget_latesttweets">
							<h3 class="widget-title">LATEST TWEETS</h3>
							<div class="latest-tweets-content">
								<p>Seeking Farming Word Press Theme Check out Farmvilla on #themeforest <a href="#">https://t.co/CmPny6jrUi #envato</a></p>
								<div class="post-meta">
									<a href="#" title="Reply">Reply</a>
									<a href="#" title="Retweet">Retweet</a>
									<a href="#" title="Favorite">Favorite</a>
								</div>
							</div>
							<div class="latest-tweets-content">
								<p>Seeking organic food WordPress themeFood WordPress Theme on  <span>#themeforest #envato</span> <a href="#">https://t.co/CmPny6jrUi #envato</a></p>
								<div class="post-meta">
									<a href="#" title="Reply">Reply</a>
									<a href="#" title="Retweet">Retweet</a>
									<a href="#" title="Favorite">Favorite</a>
								</div>
							</div>
						</aside>
					</div> --><div class="col-md-3 col-sm-6 col-xs-6">
						<aside class="widget widget_latestposts">
							<h3 class="widget-title">Upcoming Events</h3>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/children.jpg" class="wp-post-image" alt="blog-3" height="70" width="60"></i></a>
								<h5><a title="" href="#">Children Anniversary</a></h5>
								<span><a href="#">September 30,2017</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/faq-img_2.jpg" class="wp-post-image" alt="blog-1" width="65" height="65"></i></a>
								<h5><a title="#" href="#">Thanksgiving sunday</a></h5>
								<span><a href="#">October 12,2017</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-1.jpg" class="wp-post-image" alt="blog-1" height="70" width="60"></i></a>
								<h5><a title="#" href="#">Dunamis Concert</a></h5>
								<span><a href="#">November 24,2017</a></span>
							</div>
						</aside>
					</div><!-- Widget Latest Tweets /- -->
					
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Top Footer -->
		<!-- Bottom Footer -->
		<div class="container-fluid bottom-footer no-left-padding no-right-padding">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-4">
						<p>COPYRIGHTS <i class="fa fa-copyright"></i> 2018 ALL RIGHTS RESERVED</p>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<p><i class="fa fa-board">Powered by: <a href="http://fxnigeria.com" class="copyright">FUTUREX MEDIA INC.</a></i></p>
						<!-- Ownavigation -->
						<!-- <nav class="navbar ownavigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ftr" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>									
							</div>
							<div id="navbar-ftr" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li><a href="#" title="Home">Home</a></li>
									<li><a href="#" title="About Us">About Us</a></li>
									<li><a href="#" title="Services">services</a></li>
									<li><a href="#" title="Gallery">gallery</a></li>								
									<li><a href="#" title="Latest News">latest news</a></li>
									<li><a href="#" title="Contact">Contact</a></li>
								</ul>
							</div>
						</nav> --><!-- Ownavigation /- -->
					</div>
				</div><!-- Row -->
			</div><!-- Container -->
		</div><!-- Bottom Footer /- -->
	</footer><!-- Footer Main /- -->
	
	
	<!-- JQuery v1.12.4 -->
	<script src="<?=$future->theme_assets?>/js/jquery-1.12.4.min.js"></script>

	<!-- Library - Js -->
	<script src="<?=$future->theme_assets?>/js/lib.js"></script>
	<script src="<?=$future->theme_assets?>/js/jquery.flagstrap.min.js"></script>
	<script src="<?=$future->theme_assets?>/js/jquery.knob.js"></script>
	
	<!-- RS5.3`````` Core JS Files -->
	<script type="text/javascript" src="<?=$future->theme_assets?>/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="<?=$future->theme_assets?>/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="<?=$future->theme_assets?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="<?=$future->theme_assets?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?=$future->theme_assets?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?=$future->theme_assets?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	
	<!-- Library - Theme JS -->
	<script src="<?=$future->theme_assets?>/js/functions.js"></script>
	
</body>

</html>