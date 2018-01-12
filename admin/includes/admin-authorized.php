<?php
require "config/future.php";
$future = new Future();

$username = $_POST['username'];

$password = $_POST['password'];

$redirect = !empty($_POST['redirect_to']) ? $_POST['redirect_to'] : "dashboard.php";

$sql = "SELECT * FROM authors WHERE author_email = :username OR author_nick = :username AND author_password = SHA(:passkey)";

$stmt = $future->db()->prepare($sql);

if ($stmt) {
    $stmt->execute(array ('username' => $username,':passkey' => $password));
}

$result = $stmt->fetch();

if ($stmt->rowCount() == 1 && !empty($result) && in_array($username, $result)) {
    session_start();
    $_SESSION['username'] = $result['author_nick'];
    $_SESSION['author_data'] = $result;

    header("Location: $redirect");
}
