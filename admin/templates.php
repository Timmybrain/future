<?php
$page_title = "Templates";
require "includes/admin-header.php";
require "includes/admin-navmenu.php";
?>
<div class="card-panel">

    <div class="row">   
        <div class="col s2 m2 l2 sidebar">
            <?= $future->admin_sidebar($page_title);?>
        </div>

        <div class="col s10 m10 l10"></div>
            <div class="card-penal">
                <p class="flow-text">
                    <?php require "controllers/tempController.php"; ?>
                </p>

            </div>
        </div>

</div>
<?php require "includes/blog-footer.php" ?>
