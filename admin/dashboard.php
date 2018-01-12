<?php
$page_title = "Dashboard";
require "includes/admin-header.php";
require "includes/admin-navmenu.php";
?>
<div class="card-panel">
    <div class="row">   
        <div class="col s2 m2 l2 sidebar">
            <?php require "includes/admin-sidebar.php"; ?>
        </div>

        <div class="col s10 m10 l10 card-penal">
        
            <div class="card-panel small purple white-text">
                <div class="card-title">
                    <p>Current theme: <?= $future->output(ucfirst($future->derive('theme'))) ?></p>
                </div>
                <div class="content">
                
                </div>
            </div>

        </div>
    </div>
</div>
<?php require "includes/blog-footer.php" ?>
