<?php
$page_title = "Login";

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $future->admin_authorize();
}
$future->admin_header($page_title);
?>

<style>
.card-panel {
    width: 300px;
}
</style>
<body class="green">
<div class="container center">
    <div class="row">
        <center>
            <div class="card-panel">
                <form method="post" action="./login.php" autocomplete="off">
                    <label>Username / Email Address</label>
                    <input type="text" name="username">
                    <label>Password</label>
                    <input type="password" name="password">
                    <input type="hidden" name="redirect_to" value="<?= @$_GET['redirect_to']; ?>">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Login</button>
                </form>
                <p>
                    <a href="/">Visit Homepage</a>
                </p>
            </div>
        </center>
    </div>
</div>

</body>
</html>