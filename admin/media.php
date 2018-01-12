<?php
$page_title = "Media";
require "includes/admin-header.php";
require "includes/admin-navmenu.php";
?>

<div class="card-panel">

    <div class="row">   
        <div class="col s2 m2 l2 sidebar">
            <?php require "includes/admin-sidebar.php"; ?>
        </div>

        <div class="col s10 m10 l10">
                <?php require "includes/media-manager.php"; ?>
            </div>
                </div>
</div>
<?php require "includes/blog-footer.php" ?>
<script>
function i() {
    if (confirm('Do you wish to logout?')) {
        window.location.href = 'logout.php';   
    }   
}
</script>