<?php
include 'config/future.php';
include '../vendor/autoload.php';
$app = new Future();

echo ABSPATH;

// Create new Plates instance
$templates = new League\Plates\Engine('templates/plates');

// Preassign data to the layout
$templates->addData(['company' => $app->derive('site_title')], 'layout');

// Render a template
echo $templates->render('home', ['name' => $app->derive('site_email')]);
?>