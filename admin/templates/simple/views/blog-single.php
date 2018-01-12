<?php
$sql = "SELECT * FROM authors WHERE author_id = :id";

        $stmt = $db_conn->prepare($sql);
        if($stmt) {
            $stmt->execute(array(
            ':id' => $post['author_id']
        ));
        }
        $author = $stmt->fetch();
?>
<body class="">
    <header class="card-panel center black lighten-4 z-depth-3">
        <h1 class="card-title post-title white-text text-darken-2"><?= $post['post_title'] ?></h1>
    </header>

    <div class="row">
        <div class="col card-panel s12 m8 primary-content">
            <div class="card-image center">
                <img src="<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] ?>/blog/media/images/<?= $post['post_img'] ?>" alt="" class="responsive-img">
            </div>
            <div class="card-content">
            <?= $post['post_body'] ?>
            <hr />
            
            <div class="card-action">
                    <a href="https://www.facebook.com/share.php?url=<?=$post['post_url']?>" target="_blank">
                        <button class="btn waves-effect waves-light blue">
                        <i class="fa fa-facebook"></i>
                    </button>
                    </a>
                    <a href="https://www.twitter.com/share.php?url=<?=$post['post_url']?>" target="_blank">
                        <button class="btn waves-effect waves-light cyan">
                            <i class="fa fa-twitter"></i>
                        </button>
                    </a>
                    <button class="btn waves-effect waves-light red">
                        <i class="fa fa-google"></i>
                    </button>
                    <a class="right blue-grey-text" href="#">
                        <i class="fa fa-user"></i> <?= ucfirst($author['author_fname'] . " " . $author['author_lname']); ?></a>
                </div>
                <div class="card-panel">
                    <?php require "blog-comment.php"; ?>
                </div>
            </div>
        </div>

        <div class="col sidebar card-panel s12 m3 l3 right secondary-content">
            <h3 class="card-title">This is the sidebars!</h3>
            This is the content shey you get that???
        </div>
    </div>


    <div class="card-panel footer-widget black">
        <div class="row">
            <div class="col s12 m6 l6 white-text">
                <h5 class="white-text">Footer Content</h5>
                <p>This is the first footer widget. Marvelous!</p>
            </div>
            <div class="col">
                <ul>
                    <li><a href="#" class="grey-text text-lighten-4 right">Help</a></li>
                    <li><a href="#" class="grey-text text-lighten-4 right">Privacy and Terms</a></li>
                    <li><a href="#" class="grey-text text-lighten-4 right">User Agreement</a></li>
                </ul>
            </div>
        </div>
</div>