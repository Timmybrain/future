<?php
$path = str_replace("Route", "", __DIR__);
//all we want to do is to manage all request
require ( $path . "admin/app/app.php");

//$path = str_replace("\\", "/", $path);
$theme = $future->derive('theme');
$requested = $future->request_handler();

//if there is a search query present the search template
if (!empty($_GET['q'])) {
    require "$path/admin/templates/$theme/views/$theme.search.php";
    exit;
}
elseif ($requested == $future->derive('blog_page')) {
    require  "$path/admin/templates/$theme/views/$theme.blog.php";
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
elseif ($f->index()) {
    require  "$path/admin/templates/$theme/views/$theme.static.php";
    exit;
}