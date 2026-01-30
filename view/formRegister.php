<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register User</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="form-container">
        <h3>Register</h3>
        <form role="form" method="POST" action="registerAnswer">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name"
                       type="text"
                       name="name"
                       value=""
                       required
                       autofocus>
            </div>

            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email"
                       type="email"
                       name="email"
                       value=""
                       required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password"
                       type="password"
                       name="password"
                       required>
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm"
                       type="password"
                       name="confirm"
                       required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn" name="save">
                    Register
                </button>
            </div>

            <p style="padding-top:10px;">
                <a href="./">Web site</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
