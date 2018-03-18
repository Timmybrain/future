<?php
require "app/app.php";
$future = new FX\CMS\Future();
//is it admin?
$future->is_admin();
//if this is a post request?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $future->save_content();
    exit;
}
//run through the article
$page_title = "Articles";
//
$future->admin_head($page_title);
//
?>
<div class="card-panel">
    <div class="row"> 
        <!-- This is the sidebar-->  
        <div class="col s2 m2 l2 sidebar">
            <?= $future->admin_sidebar($page_title);?>
        </div>

        <!--The main panel starts from here.. -->
        <div class="col s10 m10 l10">
            <?php require __DIR__ . "/controllers/postController.php"; ?>
        </div>
    </div>
</div>

<?php 
require "includes/blog-footer.php" 
?>
