<html>
<head>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="public/css/mystyle.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <!-- scripts -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/ajaxupload.3.5.js"></script>
</head>
<body>
    <div class="container">
    <?php if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"])): ?>
        <div class="header clearfix">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <?php
                    echo '<ul class="nav nav-pills pull-right">
                            <li role="button">'
                                . htmlspecialchars($_SESSION["name"]) .
                                ' <a href="logout" style="display: inline;">Quit <i class="fa fa-sign-out"></i></a>
                            </li>
                          </ul>';

                    if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin") {
                        echo '<h4><a href="../" target="_blank">WEB SITE</a>';
                        echo ' &#187; <a href="categoryAdmin">Categories</a>';
                        echo ' &#187; <a href="newsAdmin">News List</a>';
                        echo '</h4>';
                    } else {
                        echo '<h4>Permissions Denied</h4>';
                    }
                    ?>
                </div>
            </nav>
        </div>
    <?php endif; ?>

    <div id="content" style="padding-top:20px;">
        <?php echo $content; ?>
    </div>

    <footer class="footer">
        <p>&copy; 2019 Design Admin Dashboard <i class="fa fa-child"></i></p>
    </footer>
    </div>
</body>
</html>
