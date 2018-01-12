<?php
$plugin_page = !empty($_GET['page']) ? $_GET['page'] : "";
if (!empty($plugin_page)) {
    require "includes/admin-plugin-page.php";
}
else {
    require "includes/admin-plugin-home.php";
}

$plug = !empty($_GET['plug']) ? $_GET['plug'] : "";
$action = !empty($_GET['action']) ? $_GET['action'] : "";

if (!empty($plug) && !empty($action)) {
    require "includes/blog-database.php";
    if($action === "activate") {
        $sql = "UPDATE plugins SET plugin_status = true WHERE plugin_slug = :plug";
        $stmt = $db_conn->prepare($sql);

        if ($stmt) {
            $stmt->execute(array(':plug' => $plug));
        }
        if($stmt->rowCount() === 1) {
            ?>
            <script>
                alert("Plugin Successfully activated!");
            </script>
            <?php
        }
    }
}
?>