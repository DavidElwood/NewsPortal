<?php
session_start();
<<<<<<< HEAD
    require_once '../inc/database.php';
    include_once("modelAdmin/modelAdmin.php");
    include_once("controllerAdmin/controllerAdmin.php");

    include('routeAdmin/routingAdmin.php');//!!!!

    echo $response;
=======
require_once ('../inc/Database.php');

include_once("modelAdmin/modelAdmin.php");
include_once("modelAdmin/modelAdminNews.php");
include_once("modelAdmin/modelAdminCategory.php");

include_once("controllerAdmin/controllerAdmin.php");
include_once("controllerAdmin/controllerAdminNews.php");

include('routeAdmin/routingAdmin.php');

echo $response;
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
