<?php
$sql = "SELECT * FROM comments LIMIT 5";
$stmt = $future->db()->prepare($sql);

if ($stmt) {
    $stmt->execute();
}
$comments = $stmt->fetchAll();
echo '<ul class="collection">';

foreach ($comments as $comment) {
    $frame = <<<EOD
    <li class="collection-item">{$comment['comment_body']}</li>
EOD;

echo $frame;
}
echo "</ul>";