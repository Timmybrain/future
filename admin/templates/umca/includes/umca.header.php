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

	<title> <?= (!empty($article->post_title) ? $article->post_title : @$post_title) . " - " . $future->derive('site_title')?></title>

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
						<p><i class="fa fa-user"></i><a href="./admin/login.php" title="Login">Login</a></p>
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
		</div><!-- SidePanel /- -->
		<?php
		require "umca.navmenu.php";
		 ?>
	</header><!-- Header Section /- -->