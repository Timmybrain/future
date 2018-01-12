<?php
require __DIR__ . "/Route/web.php";

//the global variables to accesss theme contents
if ( $future->match('static_homepage') ) {
    //if there is a static homepage
    require __DIR__ . "/admin/templates/$future->view.static.php";
}
else {
    //no static homepage set!
    require __DIR__ . "/admin/templates/$future->view.blog.php";
}

