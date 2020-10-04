<?php
include_once 'app/controller/login.controller.php';
include_once 'libs/php/functions.php';


// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch ($params[0]) {

    case 'login':
        $controller = new login_controller();
        $controller->login_form();
    break;
    
    case 'user_page':
        $controller = new login_controller();
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            if (is_user_admin($_POST['username'], $_POST['password'])) {
                $controller->show_admin();
            } else {
                $controller->show_user();
            }
        } else {
            $controller->show_login_error();  
        }
    break;
    
    case 'login_error':
        $controller = new login_controller();
        $controller->show_login_error();
    break;

    default:
        $controller = new login_controller();
        $controller->show_404();
    break;
}
