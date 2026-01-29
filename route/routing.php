<?php
<<<<<<< HEAD
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();
}

elseif($path == 'all') {
    $response = Controller::AllNews();
}

elseif($path == 'category' and isset($_GET['id'])) {
    $response = Controller::NewsByCatID($_GET['id']);
}

elseif($path == 'news' and isset($_GET['id'])) {
    $response = Controller::NewsByID($_GET['id']);
}

elseif($path == 'insertcomment' and isset($_GET['comment'],$_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'],$_GET['id']);
}

else{
    $response = Controller::error404();
}
=======
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$paths = explode('/', $host)[$num];

if ($paths == '' OR $paths == 'index' OR $paths == 'index.php') {
    $response = Controller::StartSite();
}
elseif ($paths == 'all') {
    $response = Controller::AllNews();
}
elseif ($paths == 'category' && isset($_GET['id'])) {
    $response = Controller::NewsByCatID($_GET['id']);
}
elseif ($paths == 'news' && isset($_GET['id'])) {
    $response = Controller::NewsByID($_GET['id']);
}

elseif ($paths == 'insertcomment' and isset($_GET['comment'],$_GET['id']))
{
    $response = Controller::InsertComment($_GET['comment'], $_GET['id']);
}

elseif ($paths == 'registerForm' )
{
    $response = Controller::registerForm();
}

elseif ($paths == 'registerAnswer' )
{
    $response = Controller::registerUser();
}

else {
    $response = Controller::error404();
}
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
