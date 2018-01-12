<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once(__DIR__ . "/config/future.php");
    (new Future())->save_content();
    exit;
}
$page_title = "Articles";
require "includes/admin-header.php";
require "includes/admin-navmenu.php";
?>
<div class="card-panel">
    <div class="row"> 
        <!-- This is the sidebar-->  
        <div class="col s2 m2 l2 sidebar">
            <?php require "includes/admin-sidebar.php"; ?>
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
