<!DOCTYPE html>
<html>
    <head>
<<<<<<< HEAD
        <title> NEWSPORTAL </title>
        <link rel="stylesheet" href="
        https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity=
        "sha384-ggOyR-iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel= "stylesheet" type ="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta chatset="utf-8">
    </head>
    <body>
        <nav class="one">
        <ul class="topmenu">
        <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
        <ul class="submenu">
        <?php
           Controller::AllCategory();
        ?>
        </ul>
        </li>
        <li><a href="testError">Info</a></li>
        <li><a href="./">Stardileht</a></li>
=======
        <title> NEWSPORTAL</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel= "stylesheet" type ="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta charset="utf-8">
        
</head>
    <body>
        <nav class="one">
            <ul class="topmenu">
        <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i> </a>
        <ul class="submenu">
            <?php
            Controller::AllCategory();
            ?>
        </ul>
        </li>
        <li><a href="iwww">Info</a></li>
        <li><a href="./">Stardileht</a></li>
        <li><a href="registerForm">Register </a></li>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e

        </ul>
        </nav>
        <section>
<<<<<<< HEAD
            <div class = 'divBox'>
                <?php
                if(isset($content)){
                    echo $content;
                }
                else {
                    echo '<h1>Content is Gone!</h1>';
                }
                ?>
            </div>
        </section>
        <hr>
        <p style="display:block; text-align:center;">JKITp24 2026 a. &copy</p>
    </body>

</html>
=======
            <div class= "divBox">
            <?php
            if (isset($content)) {
                echo $content;
            }
            else {
                echo '<h1>Content is gone!</h1>';
            }
            ?>
            </div>
        </section>
            <hr>
            <p style="display:block; text-align:center;">JKITp24 2026 a. &copy</p>
    </body>
</html> 

>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
