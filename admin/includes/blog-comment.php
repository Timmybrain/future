<?php

$sql = "SELECT * FROM comments WHERE post_id = :post_id AND comment_status = 'approved' LIMIT 5";
$stmt = $db_conn->prepare($sql);

if ($stmt) {
    $stmt->execute(array(':post_id' => $post['post_id']));
}
$comments = $stmt->fetchAll();
echo '<div class="card-panel">';
if (count($comments) === 1) {
    echo "<h5>". count($comments) . " Thought on this post.</h5>";
}
elseif (count($comments) >= 1) {
    echo "<h5>". count($comments) . " Thoughts on this post.</h5>";
}
else {
    echo "<h5>Be the first comment this post</h5>";
}
echo '</div>';

if (!empty($comments)) {
    echo '<ul class="collection">';
    
    foreach ($comments as $comment) {
        $frame = <<<EOD

        <li class="collection-item">
        <h6>{$comment['commentor']}</h6>
        {$comment['comment_body']}

        <span class="secondary-content">
        {$comment['comment_datetime']}
        </span>
        </li>
EOD;
        echo $frame;
    }
}
echo "</ul>";
?>
<div class="card-panel medium">
    <h3 class="black-text">Share Your Thought</h3>
    <div class="row">
        <form method="post" action="/<?=$post['post_url']?>/post" class="col 12">
            <div class="input-field col s6">
                <input type="text" name="commentor">
                <label for="commentor">Name</label>
            </div>

            <div class="input-field col s6">
                <input type="email" name="commentor_email">
                <label for="commentor">Email</label>
            </div>

            <div class="materialize_textarea col s12">
                <label for="comment_body">Your Thought</label>
                <textarea name="comment_body" rows="" cols="" class="validate"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Comment</button>
        </form>
    </div>
</div>