<?php

require_once 'controller.php';
require_once 'authcontroller.php';
require_once 'model.php';
require_once 'view.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('ADMINISTRAR', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/administrar');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
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
        $controlador->showFilter();  //filtrar por categoria (Anda el llamado, no imprime)
        break;
    case 'filtrado':
        $controlador->showFiltrado($params[1]);
        break;
    case 'login':
        $authController = new AuthController();  //Ok.- 
        $authController->showLogin();
        break;
    case 'verify':
        $authController = new AuthController();  //Ok.-
        $authController->login();
        break;
    case 'logout':
        $authController = new AuthController();  //Ok.-
        $authController->showLogout();
        break;
    case 'registrar':
        $controlador->showRegister();  //Ok.-
        break;
    case 'administrar':
        $authController = new AuthController();
        $controlador->showAdmin();  //Administracion (Agregar, eliminar, editar, etc.) //Solo view  //Anda la sesion
        break;
    case 'agregar_metodo':
        $controlador->agregarMetodo();  //En admin
        break;
    case 'eliminar_metodo':
        $controlador->deleteMetodo($params[1]);  //En admin
        break;
    case 'editar_metodo':
        $controlador->editMetodo();  //En admin
        break;
        /*--------- Administrar Impresoras -------------*/
    case 'agregar_impresora':
        $controlador->agregarImpresora();  //En admin
        break;
    case 'editar_impresora':
        $controlador->editarImpresora();
        break;
        case 'eliminar_impresora':
        $controlador->eliminarImpresora($params[1]);
        break;
    default:
        $controlador->showHome();  //Por defecto va al Home.
        break;
}
