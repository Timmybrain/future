<?php
$page_title = "Sermons";
$posts = $future->pull_blog_contents(2);
require "includes/church.header.php";
?>
<body class="container grey darken-2">
    <div class="row">

    <?php
    foreach ($posts as $post) {
        $author = $future->fetch_author($post->author_id) ;
        ?>
        <div class="col s12 m6">
            <div class="card white darken-4">
                <div class="card-image">
                    <a href="<?= $post->post_url; ?>"><img src="media/images/<?= $post->post_img ?>" width="300" height="300"></a>
                </div>

                <div class="card-content">
                    <span class="card-title green-text">
                        <a href="<?= $post->post_url; ?>"><h3 class="entry-title"><?= $post->post_title ?></h3></a>
                    </span>
                    <div class="truncate">
                        <?= $post->post_body; ?>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light blue">
                        <i class="fa fa-facebook"></i>
                    </button>
                    <button class="btn waves-effect waves-light cyan">
                        <i class="fa fa-twitter"></i>
                    </button>
                    <button class="btn waves-effect waves-light red">
                        <i class="fa fa-google"></i>
                    </button>
                    <a class="right blue-grey-text" href="#">
                        <i class="fa fa-user"></i> <?= ucfirst($author->author_fname . " " . $author->author_lname); ?></a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>