<?php
$page_title = "Plugins";
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
                    <?php require "controllers/pluginController.php"; ?>
                </p>

            </div>
        </div>

</div>
<?php require "includes/blog-footer.php" ?>
</script>