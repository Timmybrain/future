<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= (isset($page_title) ? $page_title . " | " : "") . $future->derive('site_title'); ?></title>
<link href="<?=$future->theme_assets?>/css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?=$future->theme_assets?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?=$future->theme_assets?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?=$future->theme_assets?>/js/carouselScript.js"></script>
<link href="<?=$future->theme_assets?>/css/carousel.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="social-wrapper">
  <div class="row">
    <ul>
      <li><a href="#"><img src="<?=$future->theme_assets?>/images/social-1.jpg" alt="" /></a></li>
      <li><a href="#"><img src="<?=$future->theme_assets?>/images/social-2.jpg" alt="" /></a></li>
      <li><a href="#"><img src="<?=$future->theme_assets?>/images/social-3.jpg" alt="" /></a></li>
      <li class="no-padding"><a href="#"><img src="<?=$future->theme_assets?>/images/social-4.jpg" alt="" /></a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
<!-- end of SOCIAL ICONS -->
<div class="header">
  <div class="row">
    <div class="logo">
      <h1><?= $future->derive('site_title'); ?></h1>
    </div>
    
<!-- end of MENU WRAPPER -->