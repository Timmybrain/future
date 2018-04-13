<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title> <?= (!empty($page_title) ? $page_title : @$post_title) . " - " . $future->derive('site_title')?></title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="<?=$future->theme_assets?>/images/favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="<?=$future->theme_assets?>/images/apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="<?=$future->theme_assets?>/images/apple-touch-icon-72x72-precomposed.html">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?=$future->theme_assets?>/images/apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Vollkorn:400,400i,700,700i" rel="stylesheet">

	<!-- Library -->
    <link href="<?=$future->theme_assets?>/css/lib.css" rel="stylesheet">
    <link href="<?=$future->theme_assets?>/css/flags.css" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link href="<?=$future->theme_assets?>/css/plugins.css" rel="stylesheet">
	<link href="<?=$future->theme_assets?>/css/elements.css" rel="stylesheet">	
	<link href="<?=$future->theme_assets?>/css/rtl.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=$future->theme_assets?>/style.css">
		
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

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
						<p><i class="fa fa-map-marker"></i>Off University Road, Tanke,Ilorin, Kwara State, Nigeria </p>
						<p><i class="fa fa-phone"></i> Mobile: <a href="tel:+234-703-3661-965"> +234-703-3661-965</a></p>
					</div>
					<div class="top-login">
						<p><i class="fa fa-user"></i><a href="#" title="Login">Login</a></p>
						
						<!--form class="lang-dropdown">
							<div class="form-group">
								<div id="basic" data-input-name="country"></div>
							</div>
						</form-->
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
								<li>
									<a href="mensFellowships.html" title="Men's Fellowship">Men's Fellowship</a>
								</li>
								<li>
									<a href="ladiesFELLOWSHIP.html" title="Services List">Ladies's Fellowship</a>
								</li>
								<li>
									<a href="fellowships.html" title="Services">Couple's Koinonia</a>
								</li>
								<li>
									<a href="foyca.html" title="Fellowship of Young Christain Adult">FOYCA</a>
								</li>
								<li>
									<a href="fellowships.html" title="Services">Youth Fellowship</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="department.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Departments</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<!--ul class="dropdown-menu">
								<li><a href="fellowships.html" title="Dunamis Choir">Dunamis Choir</a></li>
								<li><a href="ladiesFellowship.html" title="Ushering">Ushering</a></li>
								<li><a href="fellowships.html" title="Drama Unit">Drama Unit</a></li>
								<li><a href="fellowships.html" title="Writers' Unit">Writers' Unit</a></li>
								<li><a href="fellowships.html" title="Arts Unit">Arts Unit</a></li>
								<li><a href="fellowships.html" title="Sunday School">Sunday School</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle btn-disabled" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="blog.html" title="Blog Single Page">Blog</a></li>
								<li><a href="blog-single.html" title="Blog Single Audio">Others</a></li>
							</ul>
						</li-->
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