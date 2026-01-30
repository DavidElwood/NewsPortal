<?php
class controllerAdmin {

    // Show login form
    public static function formLoginSite() {
        include_once 'viewAdmin/formLogin.php';
    }

    // Authenticate user
    public static function loginAction() {
        $logIn = modelAdmin::userAuthentication();

        if (isset($logIn) && $logIn === true) {
            include_once 'viewAdmin/startAdmin.php';
        } else {
            $_SESSION['errorString'] = 'Invalid username or password.';
            include_once 'viewAdmin/formLogin.php';
        }
    }

    // Logout user
    public static function logoutAction() {
        modelAdmin::userLogout();
        include_once 'viewAdmin/formLogin.php';
    }

    // Show 404 error page
    public static function error404() {
        include_once 'viewAdmin/error404.php';
    }
}
?>
