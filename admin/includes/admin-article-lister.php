<?php

$filter = !empty($_GET['sort']) ? $_GET['sort'] : "";

if (!empty($filter) && $filter != "") {
    $sql = "SELECT * FROM contents WHERE post_status = :filtered LIMIT 5";
}
else {
    $sql = "SELECT * FROM contents";
}

$stmt = $future->db()->prepare($sql);

if ($stmt) {
    $stmt->execute(array(':filtered' => $filter));
}

$articles = $stmt->fetchAll();

$total = " ( " .count($articles) . " )";

$all = $pub = $dft = $trash = "";

switch ($filter) {
    case 'published':
    $pub = $total;
        break;

    case 'draft':
        $dft = $total;
        break;

    case 'trashed':
        $trash = $total;
        break;

    default:
        $all = $total;
        break;
}
if(!empty($_GET['p']) && !empty($_GET['action'])) {
    $post = $_GET['p'];
    $action = $_GET['action'];

    if ($action == 'trash') {
        $future->set_content($post, "trashed");
    }

    elseif ($action == 'unpublish') {
        $future->set_content($post, "draft");
    }
    elseif ($action == "delete") {
        $future->del_content($_GET['p']);
    }
    elseif ($action === 'edit') {
        header("Location: edit.php?post=$post");
        exit;
    }
    else {
        $future->set_content($post, $action);
    }

    
}
?>
<nav>
    <div class="nav-wrapper">
        <a type="button" class="btn waves-effect waves-light white blue-text z-depth-2 hoverable" href="edit.php">Add New</a>
        <ul class="right">
            <li><a href="?">All <?= $all ?></a></li>
            <li><a href="?sort=published">Published <?= $pub ?></a></li>
            <li><a href="?sort=draft">Draft <?= $dft ?></a></li>
            <li><a href="?sort=trashed">Trash <?= $trash ?></a></li>
        </ul>
    </div>
</nav>
<ul class="collection">


<?php
foreach ($articles as $article) {
    if ($article['post_status'] == "published") {
        $last_action = "unpublish";
    }
    elseif ($article['post_status'] == "trashed" && $filter == "trashed") {
        $last_action = "delete";
    }
    else {
        $last_action = "published";
    }

    if ($article['post_status'] == "trashed") {
        $trash = "<i class='fa fa-send green-text'></i> <a class='green-text' href='?p=". $article['post_id'] .
        "&amp;action=published'>restore</a>";
    }
    else {
        $trash = "<i class='fa fa-trash red-text'></i> <a class='red-text' href='?p=" . $article['post_id']
        . "&amp;action=trash'>trash</a>";
    }
    $edit  = "?p=" . $article['post_id']. "&amp;action=edit";
    $last  = "?p=" .$article['post_id'] . "&amp;action=" . $last_action;
    $view = $future->get_traffic($article['post_url']);
    ?>
    <li class="collection-item">
        <div><input type="checkbox" name="post_id" value="<?= $article['post_id']; ?>">
        <span> <?= $article['post_title'] ?></a></span>

        <div class="secondary-content">
            <i class="fa fa-eye"></i><a href="../<?=$article['post_url']?>"target="_blank"> view (<?=$view?>)</a> &nbsp;
            <i class="fa fa-edit"></i> <a href="<?= $edit ?>"> edit</a> &nbsp;
            <?= $trash ?> &nbsp;
            <i class="fa fa-live"></i> <a href="<?= $last ?>"><?= $last_action ?> </a>
        </div>
    </li>

    <?php
}

?>
</ul>

