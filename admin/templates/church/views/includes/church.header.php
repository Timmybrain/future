<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= (isset($page_title) ? $page_title . " | " : "") . $future->derive('site_title'); ?></title>
    <link rel="stylesheet" href="<?=$future->theme_assets?>assets/css/style.css">
    <link rel="stylesheet" href="<?=$future->theme_assets?>css/style.css">
    <link href="<?=$future->theme_assets?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?=$future->theme_assets?>css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?=$future->theme_assets?>css/flexslider.css" rel="stylesheet" />
    <link href="<?=$future->theme_assets?>css/index-style.css" rel="stylesheet" />    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>