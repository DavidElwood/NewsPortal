<?php
if (isset($_SESSION['userId'])) {
    header('Location: login');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="public/css/mystyle.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <form class="form-signin" action="login" method="POST">
        <h3 class="form-signin-heading">Enter your credentials</h3>

        <input type="text"
               name="email"
               class="form-control"
               placeholder="Email"
               autofocus>

        <input type="password"
               name="password"
               class="form-control"
               placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Login</button>

        <p style="padding-top:10px; color: #ff00ff;">
            <?php
            if (isset($_SESSION['errorString'])) {
                echo $_SESSION['errorString'];
                unset($_SESSION['errorString']);
            }
            ?>
        </p>

        <p style="padding-top:10px;"><a href="../">Web site</a></p>
    </form>
</div> <!-- /container -->
</body>
</html>
