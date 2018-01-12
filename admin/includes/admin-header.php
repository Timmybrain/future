<?php 
//import of the Future Class
require str_replace("includes", "", __DIR__) . "config/future.php";
//Instant of Future
$future = new Future();
$assets = $future->assets;
//the page title manipulator
$page_title = (isset($page_title)) ? $page_title : "Hello Timmy";

//Checking Whether the current page is not Login page
if ($page_title != "Login" ) {
    $future->is_admin();
}

$head = <<<EOD
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="$assets/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="$assets/css/single.min.css">
        <link rel="stylesheet" href="$assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="$assets/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="$assets/summernote/summernote.css" rel="stylesheet">
        <title>$page_title</title>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="$assets/js/materialize.min.js"></script>
        <script src="$assets/ckeditor/ckeditor.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
        <script src="$assets/summernote/summernote.min.js"></script>
        <script src="$assets/jquery-ui/jquery-ui.min.js"></script>
        
    </head>
EOD;
echo $head;
?>
