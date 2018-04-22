<?php
require "app/app.php";
$page_title = "Profile";
$app->is_admin();
$app->add_script_to_head("<!-- Nothing for now! -->");
$app->admin_html_head($page_title);
$app->admin_sidebar($page_title);
$app->admin_nav_section();
$users = $future->fetch_authors();