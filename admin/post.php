<?php
require "app/app.php";
//is it admin?
$future->is_admin();
//if this is a post request?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $future->save_content();
    exit;
}
//run through the article
$page_title = "Articles";
$future->admin_html_head($page_title);
$future->admin_sidebar($page_title);
$future->admin_nav_section();

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
<div class="main-grid">
    <div class="agile-grids">	
    <div class="progressbar-heading grids-heading">
    <h2><?=$page_title?></h2>
    </div>

    <!-- menu -->
    <div class="banner">
    <div class="row">
    <span class="col-md-2"> <a type="button" class="btn btn-primary btn-lg" href="edit.php">Add New</a></span>
    <a class="col-md-2" href="?">All <?= $all ?></a>
    <a class="col-md-2" href="?sort=published">Published <?= $pub ?></a>
    <a class="col-md-2" href="?sort=draft">Draft <?= $dft ?></a>
    <a class="col-md-2" href="?sort=trashed">Trash <?= $trash ?></a>
    </div>
    </div>
    <div class="blank-page">
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
        $trash = "<i class='fa fa-remove text-danger'></i> <a class='text-danger' href='?p=" . $article['post_id']
        . "&amp;action=trash'>trash</a>";
    }
    $edit  = "./edit.php?p=" . $article['post_id']. "&amp;action=edit";
    $last  = "?p=" .$article['post_id'] . "&amp;action=" . $last_action;
    $view = $future->get_traffic($article['post_url']);
    ?>
    <ul class="list-group">
        <li class="list-group-item">
            <input type="checkbox" name="post_id" value="<?= $article['post_id']; ?>">
            <span> <?= $article['post_title'] ?></a></span>
            <i class="fa fa-eye"></i><a href="../<?=$article['post_url']?>"target="_blank"> view (<?=$view?>)</a> &nbsp;
            <i class="fa fa-edit"></i> <a href="<?= $edit ?>"> edit</a> &nbsp;
            <?= $trash ?> &nbsp;
            <i class="fa fa-live"></i> <a href="<?= $last ?>"><?= $last_action ?> </a>
        </li>
    <?php
    }
    ?>
    </ul>
                    </div>
                </div>
			</div>
        </div>

        </div>
        <div class="clearfix"></div>
<!-- footer -->
<?= $future->footer()?>
