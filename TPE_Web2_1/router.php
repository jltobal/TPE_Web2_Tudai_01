<?php

require_once 'controller.php';
require_once 'model.php';
require_once 'view.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$controlador = new Controller(); //creo un objeto o instacia de la clase Controller
$all = '1';


switch ($params[0]) {
    case 'home':
        $controlador->showHome(); //mostramos 6.
        break;
    case 'modelos':
        $controlador->showModels();  //mostrar todo.
        break;
    case 'detalle':
        $controlador->showDetails($params[1]);  //muestra descripcion.
        break;
    case 'filtrar':
        $controlador->showFilter($params[1]);  //filtrar por categoria
        break;
    case 'administrar':
        $controlador->showAdmin();  //Administracion (Agregar, eliminar, editar, etc.)
        break;
    case 'login':
        $authController = new authcontroller();
        $authcontroller->showLogin();
        break;
    case 'logout':
        $authController = new authcontroller();
        $authController->showLogout();
        break;
    case 'registro':
        $controlador->showRegister();
        break;
    case 'categorias':
        $controlador->showCategorias();
        break;
    default:
        $controlador->showHome();  //Por defecto va al Home.
        break;
}
