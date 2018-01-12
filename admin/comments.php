<?php
// I NEVER WAS, I AM ALWAYS TO BE, NO ONE EVER SAW ME OR EVER WILL AND YET I AM FOR COMFORT OF ALL WHO LIVE AND BREATH.
$page_title = "Comments";
require "includes/admin-header.php";
require "includes/admin-navmenu.php";
?>
<div class="card-panel">

    <div class="row">   
        <div class="col s2 m2 l2 sidebar">
            <?php require "includes/admin-sidebar.php"; ?>
        </div>

        <div class="col s10 m10 l10"></div>
            <div class="card-penal">
                <p class="flow-text">
                    <?php require "includes/admin-comment-home.php"; ?>
                </p>

            </div>
        </div>

</div>
<?php require "includes/blog-footer.php" ?>