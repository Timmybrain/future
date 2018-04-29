<?php
$path = str_replace("Route", "", __DIR__);
//all we want to do is to manage all request
require ( $path . "admin/app/app.php");

//$path = str_replace("\\", "/", $path);
$theme = $f->derive('theme');
$requested = $f->request_handler();

if ($f->index($requested) && $f->derive('static_home') == "Yes") {
    require  "$path/admin/templates/$theme/views/$theme.static.php";
    exit;
}
//no static home page for news blogs
elseif ($f->index($requested) && $f->derive('static_home') == "No") {
    require  "$path/admin/templates/$theme/views/$theme.blog.php";
    exit;
}

//if this is the blog page eg. /blog or /sermon /news 
elseif ($requested == $future->derive('blog_page')) {
    require  "$path/admin/templates/$theme/views/$theme.blog.php";
    exit;
}

//if there is a search query present the search template
if (!empty($_GET['q'])) {
    require "$path/admin/templates/$theme/views/$theme.search.php";
    exit;
}

elseif ($future->request_type($requested) === 'post') {
    //if the request ask for a POST, open the parse in the single post view
    require "$path/admin/templates/$theme/views/$theme.single.php";
    exit;
}
elseif($future->request_type($requested) === 'page') {
    //if the request ask for a POST, open the parse in the single post view
    require "$path/admin/templates/$theme/views/$theme.page.php";
    exit;
}
elseif (empty($f->pull_content($requested)) && !$f->index($requested) ) {
    require  "$path/admin/templates/$theme/views/$theme.404.php";
    exit;
}
