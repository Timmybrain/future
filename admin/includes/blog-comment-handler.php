<?php
if (!empty($_POST['commentor_email'])) {
    $sql = "INSERT INTO `comments`(`post_id`, `commentor`, `commentor_email`, `commentor_ip`, `comment_body`) 
    VALUES (:post_id, :commentor, :com_email, :com_ip, :com_body)";

    $stmt = $db_conn->prepare($sql);

    if ($stmt) {
        $stmt->execute(array(
            ':post_id' => $post['post_id'],
            ':commentor' => $_POST['commentor'],
            ':com_email' => $_POST['commentor_email'],
            ':com_ip' => $_SERVER['REMOTE_ADDR'],
            ':com_body' => $_POST['comment_body']
        ));
    }
    if ($stmt->rowCount() == 1) {
        ?>
        <script>
            alert("Comment submitted for moderation!.")
        </script>
    <?php
    }
}
