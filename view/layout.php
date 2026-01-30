<!DOCTYPE html>
<html>
<head>
    <title>NEWSPORTAL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
</head>
<body>
    <header>
        <div class="logo">NEWSPORTAL</div>
        <nav class="one">
            <ul class="topmenu">
                <li><a href="#">Categories<i class="fa fa-angle-down"></i></a>
                    <ul class="submenu">
                        <?php Controller::AllCategory(); ?>
                    </ul>
                </li>
                <li><a href="iwww">Info</a></li>
                <li><a href="./">Start</a></li>
                <li><a href="registerForm">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="divBox">
            <?php
            if (isset($content)) {
                echo $content;
            } else {
                echo '<h1>Content is gone!</h1>';
            }
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 JKITp24. All rights reserved.</p>
    </footer>
</body>
</html>
