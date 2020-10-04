<?php
include_once 'app/controllers/login.controller.php';


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

    case 'admin_panel':
        $controller = new login_controller();
        $controller->show_admin();
    break;
    
    case 'user_page':
        $controller = new login_controller();
        $controller->show_user();
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
