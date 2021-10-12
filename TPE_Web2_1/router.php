<?php

require_once 'controller.php';
require_once 'authcontroller.php';
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
$authController = new AuthController();
$controlador = new controller(); //creo un objeto o instacia de la clase Controller

switch ($params[0]) {
    case 'home':
        $controlador->showHome(); //mostramos 6.    Ok.
        break;
    case 'modelos':
        $controlador->showModels();  //mostrar todo.   Ok.
        break;
    case 'detalle':
        $controlador->showDetails($params[1]);  //muestra descripcion.    Ok.
        break;
    case 'filtrar':
        $controlador->showFilter($params[1]);  //filtrar por categoria
        break;
    case 'login':
        $authController = new AuthController();  //Ok.- Probar funcionalidad
        $authController->showLogin();
        break;
    case 'verify':
        $authController = new AuthController();
        $authController->login();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->showLogout();
        break;
    case 'registrar':
        $controlador->showRegister();  //ok
        break;
    case 'categorias':
        $controlador->showCategorias();  //En modelos
        break;
    case 'administrar':
        $controlador->showAdmin();  //Administracion (Agregar, eliminar, editar, etc.) //Solo view
        break;
    case 'agregar':
        $controlador->addPrinter();  //En admin
        break;
    case 'eliminar':
        $controlador->deletePrinter();  //En admin
        break;
    case 'editar':
        $controlador->editPrinter();  //En admin
        break;
    default:
        $controlador->showHome();  //Por defecto va al Home.
        break;
}
