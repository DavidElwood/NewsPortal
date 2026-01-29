<?php
session_start();
include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/News.php';
require 'model/Comments.php';
<<<<<<< HEAD
=======
require 'model/Register.php';
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e

include_once 'view/news.php';
include_once 'view/comments.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
