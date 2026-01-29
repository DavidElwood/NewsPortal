<?php
class controllerAdmin {

<<<<<<< HEAD
    public static function formLoginSite() {
        include_once('viewAdmin/formLogin.php');
    }

    public static function loginAction(){
        $logIn=modelAdmin::userAuthentication();
        if(isset($logIn) and $logIn==true) {
            include_once('viewAdmin/startAdmin.php');
        }
        else {
            $_SESSION['errorString']='Incorrect username or password';
            include_once('viewAdmin/formLogin.php');
        }
    }

    public static function logoutAction(){
        modelAdmin::userLogout();
        include_once('viewAdmin/formLogin.php');
    }

    public static function error404(){
        include_once('viewAdmin/error404.php');
    }
}
?>
=======
public static function formLoginSite() {
    return viewAdmin::formLoginSite();
include_once ('viewAdmin/viewAdmin.php');
}
//auth user

public static function loginAction() {
 $logIn = modelAdmin::userAuthentication();
 if(isset($logIn) and $logIn==true){
    include_once('viewAdmin/startAdmin.php');
}
else{
        $_SESSION['errorString'] = 'Invalid username or password.';
        include_once ('viewAdmin/formLogin.php');
    }
}

//logout
public static function logoutAction() {
    modelAdmin::userLogout();
    include_once ('viewAdmin/formLogin.php');
}
//error404
public static function error404() {
    include_once ('viewAdmin/error404.php');
    }
}
?>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
